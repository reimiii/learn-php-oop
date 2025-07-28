<?php

require_once "data/Manager.php";

// Create a Manager instance and greet
$manager = new Manager();
$manager->name = "Michael";
$manager->sayHello("David");

// Create a VicePresident instance and greet
$vp = new VicePresident();
$vp->name = "Noir";
$vp->sayHello("David");
