<?php

function format_datetime_to_show($dateTime)
{
    $date = new DateTime($dateTime);
    return $date->format('d/m/Y H:i:s');
}

function format_date_to_show($dateTime)
{
    $date = new DateTime($dateTime);
    return $date->format('d/m/Y');
}

function format_datetime_to_bd($dateTimeBR)
{
    $date = DateTime::createFromFormat('d/m/Y H:i:s', $dateTimeBR);
    return $date->format('Y-m-d H:i:s');
}

function format_date_to_bd($dateBR)
{
    $date = DateTime::createFromFormat('d/m/Y', $dateBR);
    return $date->format('Y-m-d');
}

function check_format_date($date, $format = "Y-m-d H:i:s")
{
    $dt = DateTime::createFromFormat($format, $date);
    return $dt !== false && !array_sum($dt->getLastErrors());
}