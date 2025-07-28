<?php

require_once "data/Manager.php";

// Create a Manager instance and call overridden method
$manager = new Manager();
$manager->name = "Michael";
$manager->sayHello("David");

// Create a VicePresident instance and call overridden method
$vp = new VicePresident();
$vp->name = "Noir";
$vp->sayHello("David");
