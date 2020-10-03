<?php

function getRandomPercent(){
    $random_percent =  "Инфа " . rand(1, 100) . " %";
    return $random_percent;
}

$result = getRandomPercent();

$isRandomPercentRequire = isset($_GET['randomPercentRequire']);

require "main_page.php";

