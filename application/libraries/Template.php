<?php

use Philo\Blade\Blade;

class Template
{

    protected $blade;

    public function __construct()
    {
        $this->blade = new Blade(VIEWPATH, APPPATH.'cache');
    }

    public function view($view, $data = [], $return = false)
    {
        $blview = $this->blade->view()->make($view, $data)->render();
        if (! $return) {
            return print($blview);
        }
        return $blview;
    }
}
