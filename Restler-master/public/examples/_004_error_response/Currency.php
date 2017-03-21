<?php
use Luracast\Restler\RestException;
use php_user_filter;

class Currency
{
    function format($number = NULL)
    {
        /**
        There is a better way to validate in Restler 3
        Here we manually validate to show the use of exceptions
         */
        if (is_null($number))
            throw new RestException(400);
        if (!is_numeric($number))
            throw new RestException(400, 'not a valid number');

        // let's print the international format for the en_US locale
        setlocale(LC_MONETARY, 'en_US');
        //return money_format('%i', $number);
        return $this->asDollars($number);
    }
    
    //[GUM-50]
    //money_format may not be available on Windows based systems
    //http://www.php.net/manual/en/function.money-format.php
    //Note:
	//The function money_format() is only defined if the system has strfmon capabilities. For example, Windows does not, so money_format() is undefined in Windows.
	//Hence putting a work around
    function asDollars($value) {
    	return '$' . number_format($value, 2);
    }
}

