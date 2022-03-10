<?php 

function convert_value_to_cents($value)
{
    return number_format($value, 2, "", "");
}

function convert_cents_to_double($value)
{
    return number_format(($value)/100, 2, ".", "");
}

function convert_double_to_BRL($value)
{
    return number_format($value, 2, ",", "");
}

function convert_BRL_to_double($value)
{
    return number_format($value, 2, ".", "");
}