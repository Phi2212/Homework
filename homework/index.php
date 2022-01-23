<?php

require __DIR__ . '/vendor/autoload.php';

use ManageStaff\Staff;

$new_employee = new Staff('Pham The Phi', 'Phi1', '0707936909', 'BE Dev', 'Team1', '3', 30);

var_dump($new_employee->getInfo());

$new_employee->attendCheck();

$new_employee = new Staff('Tony', 'Phi2', '0707936909', 'FE Dev', 'Team2', '8', 30);

var_dump($new_employee->getInfo());

$new_employee->attendCheck();
