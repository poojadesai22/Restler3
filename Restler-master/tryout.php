<?php

spl_autoload_register(function($class) {
	include  '/public/examples/_001_helloworld/' . $class .'.php';
	include  '/public/examples/_002_minimal/' . $class .'.php';
});

$mathObj = new Math();

echo 'Result of Addition is '. $mathObj->add();