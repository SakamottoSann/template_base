<?php 
function getStateAndOutput($command)
{   
    $states = ['Disable' => 0, 'Enable' => 1];
    $output = substr($command, -1);
    $state = substr($command, 0, -1);

    $resp = [$states[$state], $output];
    return $resp;
}