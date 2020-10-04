<?php

function getRandomPercent()
{
    $random_percent =  rand(1, 100);
    return $random_percent;
}

$isRandomPercentRequired = isset($_GET['randomPercentRequire']);

require "main_page.php";
