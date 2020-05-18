<?php
// begin the session
session_start();

// count of appearance
// for Ohio
$var_Ohio=0;
$var_Hamilton=0;
$var_Butler=0;
$var_Clermont=0;
$var_Warren=0;

// for Kentucky
$var_Kentucky=0;
$var_Boone=0;
$var_Campbell=0;
$var_Kenton=0;

$form_county = $_POST["optCounty"]

foreach($_SESSION['county'] as $key=>$value)
	{
		if ($form_county) == "Hamilton") {

			$var_Hamilton+=1;
			$var_Ohio+=1;

		} elseif (($form_county) == "Butler") {

			$var_Butler+=1;
			$var_Ohio+=1;

		} elseif (($form_county) == "Clermont") {

			$var_Clermont+=1;
			$var_Ohio+=1;

		} elseif (($form_county) == "Warren") {

			$var_Warren+=1;
			$var_Ohio+=1;

		} elseif (($form_county) == "Boone") {

			$var_Boone+=1;
			$var_Kentucky+=1;

		} elseif (($form_county) == "Campbell") {

			$var_Campbell+=1;
			$var_Kentucky+=1;

		} elseif (($form_county) == "Kenton") {

			$var_Kenton+=1;
			$var_Kentucky+=1;
		}
	}

//  message to say we have done it
echo  	'Ohio:'.$var_Ohio  </br></br>
		'Hamilton'.$var_Hamilton</br>
		'Butler:'.$var_Butler </br>
		'Clermont:'.$var_Clermont</br>
		'Warren:'.$var_Warren </br>
		'Kentucky:'.$var_Kentucky </br></br></br></br>
		'Boone:'.$var_Boone </br></br>
		'Campbell:'.$var_Campbell </br>
		'Kenton:'.$var_Kenton </br>
?>



