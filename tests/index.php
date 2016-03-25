<?php
require("../vendor/autoload.php");
use Course\Behavior\AuthBehavior; 

$calc = new AuthBehavior();
echo $calc->addNumbers(10,21);
