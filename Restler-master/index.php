<?php
/*
 Title: Hello World Example
 Tagline: Let's say hello!
 Tags: basic
 Requires: PHP >= 5.3
 Description: Basic hello world example to get started with Restler 3.
 Example 1: GET say/hello returns "Hello world!"
 Example 2: GET say/hello?to=R.Arul%20Kumaran returns "Hello R.Arul Kumaran!"
 Example 3: GET say/hi?to=restler3.0 returns "Hi restler3.0!"
 Content: > **Note:-** If you have used Restler 2 before, you will wonder why
 the generated routes are lesser with Restler 3.
 Look at [Routes](../_006_routing/readme.html) example to understand.
 */

// spl_autoload_register(function($class) {
// 	include  '../../../public/examples/_001_helloworld/' . $class .'.php';
// });


spl_autoload_register(function($class) {
	include  '/public/examples/_001_helloworld/' . $class .'.php';
	include  '/public/examples/_002_minimal/' . $class .'.php';
	include  '/public/examples/_003_multiformat/' . $class .'.php';
	include  '/public/examples/_004_error_response/' . $class .'.php';
	include  '/public/examples/_005_protected_api/' . $class .'.php';
	include  '/public/examples/_006_routing/' . $class .'.php';
	
});

require_once 'vendor/restler.php';
use Luracast\Restler\Restler;

$r = new Restler();
//$r->addAPIClass('../../../public/examples/_001_helloworld/Say');
//$r->addAPIClass('MySpace\Space\Say');
//$r->setSupportedFormats('JsonFormat', 'XmlFormat');

$r->setSupportedFormats('JsonFormat', 'XmlFormat');
$r->addAuthenticationClass('SimpleAuth');
$r->addAPIClass('Say','Say/Greeting');
$r->addAPIClass('Math');
$r->addAPIClass('BMI');
$r->addAPIClass('Currency');
$r->addAPIClass('Simple', ''); //map it to root
$r->addAPIClass('Secured');
$r->addAPIClass('Api');


$r->handle();

