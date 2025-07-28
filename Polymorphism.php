<?php

require_once "data/Programmer.php";

// Instantiate Company and assign different types of Programmer
$company = new Company();

$company->programmer = new Programmer("Noir");
var_dump($company);

$company->programmer = new BackendProgrammer("Noir");
var_dump($company);

$company->programmer = new FrontendProgrammer("Noir");
var_dump($company);

// Demonstrate polymorphic behavior in function
sayHelloProgrammer(new Programmer("Noir"));
sayHelloProgrammer(new BackendProgrammer("Noir"));
sayHelloProgrammer(new FrontendProgrammer("Noir"));
