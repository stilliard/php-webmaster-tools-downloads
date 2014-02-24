<?php
	include '../src/gwtdata.php';
	try {
		$email = "username@gmail.com";
		$passwd = "******"; 

		# If hardcoded, don't forget trailing slash!
		$website = "http://www.domain.com/";

		$gdata = new GWTdata();
		if($gdata->LogIn($email, $passwd) === true)
		{
			$results = $gdata->LookupCSV($website);
			var_dump($results);
		}
	} catch (Exception $e) {
		die($e->getMessage());
	}
?>
