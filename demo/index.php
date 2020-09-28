<?php
require_once("../vendor/autoload.php");

use Tallandsassy\UnitConversions\Weight;
$kg = 100;

print Weight::fromKilograms($kg)->toLbs(); #shows 220.4623

