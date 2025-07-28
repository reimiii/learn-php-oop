<?php

require_once "data/Animal.php";

use Data\{Cat, Dog};

// Instantiate a Cat and invoke behavior
$cat = new Cat();
$cat->name = "Luna";
$cat->run();

// Instantiate a Dog and invoke behavior
$dog = new Dog();
$dog->name = "Rex";
$dog->run();
