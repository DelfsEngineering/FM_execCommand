<?php
/*********************************************************
VERSION: API_Proxy.php ver 0.1

PURPOSE:
	This file allows Filemaker Apps (yeah applications) to run Server Side processes
	WARNING: This can be really dangerous and a security issue if internet facing!!!
	Please report back improvements you have made so we can continue to help others.

TODO:
	Try / catch for errors

REQUEST PARAMETERS: 
			( * Needed )
	&key 			= "1234567890" the default key, CHANGE, that will allow access to exec commands
	&command 	= The full command argument to be passed to the shell command line for executing


OPTIONAL PARAMETERS:
	

RETURNS:
  Result Text from the command

AUTHOR:
Charles Delfs - www.delfsengineering.ca 
				cdelfs@delfsengineering.ca
				
MORE NOTES:
	
	
REVISIONS:
	

**********************************************************/
error_reporting( E_ALL );
$passKey = '';

// ============   convert all the REQUEST params into local $Vars ============
// This keeps things flexible in terms of future params.
foreach($_REQUEST as $key=>$value) {
	$$key = $value;
}

// print_r($_REQUEST); // enable to debug the passed vars

if($passKey !== '1234567890') {
	Die('Access Error');
}

$output = shell_exec($command." 2>&1");

print_r($output);

?>



