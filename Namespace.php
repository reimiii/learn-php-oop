<?php

namespace {
    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    // Instantiate classes from different namespaces
    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();

    // Access constant and function from Helper namespace
    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();
}
