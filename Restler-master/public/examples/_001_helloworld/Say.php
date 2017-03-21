<?php

class Say {
	
	
	/**
	 * @url GET pooja/hello/{var1}
	 */
	function getHello($to='world') {
		return "Hello $to!";
	}
	function hi($to) {
		return  "Hi $to!";
	}
}