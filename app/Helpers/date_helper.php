<?php

namespace App\Helpers;

function formatDate($date, $format = 'd-m-Y')
{
    return date($format, strtotime($date));
}
$autoload['helper'] = ['date'];

