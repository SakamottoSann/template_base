<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Redirect
{
    protected $uri;
    protected $method = 'auto';
    protected $code = null;
    protected $ci;

    protected $data;


    function __construct()
    {
        $this->ci =& get_instance();
        $this->data = array();
    }

    public function url($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    public function with($data)
    {
        $this->data['data'] = $data;
        return $this;
    }

    public function withSuccess($msg)
    {
        $this->data['success'] = $msg;
        return $this;
    }

    public function withError($msg)
    {
        $this->data['error'] = $msg;
        return $this;
    }

    public function send()
    {
        if (!! count($this->data)) {
            $this->ci->session->set_flashdata('redirect', $this->data);
        }

        $this->redirect($this->uri);
    }

    private function redirect($uri = '', $method = 'auto', $code = NULL)
    {
        if ( ! preg_match('#^(\w+:)?//#i', $uri))
        {
            $uri = site_url($uri);
        }

        // IIS environment likely? Use 'refresh' for better compatibility
        if ($method === 'auto' && isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'], 'Microsoft-IIS') !== FALSE)
        {
            $method = 'refresh';
        }
        elseif ($method !== 'refresh' && (empty($code) OR ! is_numeric($code)))
        {
            if (isset($_SERVER['SERVER_PROTOCOL'], $_SERVER['REQUEST_METHOD']) && $_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1')
            {
                $code = ($_SERVER['REQUEST_METHOD'] !== 'GET')
                    ? 303   // reference: http://en.wikipedia.org/wiki/Post/Redirect/Get
                    : 307;
            }
            else
            {
                $code = 302;
            }
        }

        switch ($method)
        {
            case 'refresh':
                header('Refresh:0;url='.$uri);
                break;
            default:
                header('Location: '.$uri, TRUE, $code);
                break;
        }
        exit;
    }
}



function get_value_redirect($name)
{

    if (! array_key_exists('redirect', $_SESSION)) {
        return "";
    }

    if (! array_key_exists('data', $_SESSION['redirect'])) {
        return "";
    }

    if (! array_key_exists($name, $_SESSION['redirect']['data'])) {
        return "";
    }
    return $_SESSION['redirect']['data'][$name];
}

function get_error_redirect()
{
    if (! isset($_SESSION['redirect']['error'])) {
        return  false;
    }
    return $_SESSION['redirect']['error'];
}

function get_success_redirect()
{
    if (! isset($_SESSION['redirect']['success'])) {
        return  false;
    }
    return $_SESSION['redirect']['success'];
}