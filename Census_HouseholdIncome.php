<?php
// begin the session
session_start();

// Household Income
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

$householdincome=count($_SESSION['householdincome']);

for($x = 0; $x < $householdincome; $x++) {

		if (($_SESSION['householdincome'][x]) == "Hamilton") 
		{
			$var_Hamilton+=$_SESSION['householdincome'][x+1];			 

		} elseif  (($_SESSION['householdincome'][x]) == "Butler") {

			$var_Butler+=$_SESSION['householdincome'][x+1];			 

		} elseif (($_SESSION['householdincome'][x]) == "Clermont") {

			$var_Clermont+=$_SESSION['householdincome'][x+1];	 

		} elseif (($_SESSION['householdincome'][x]) == "Warren") {

			$var_Warren+=$_SESSION['householdincome'][x+1];	 

		} elseif (($_SESSION['householdincome'][x]) == "Boone") {

			$var_Boone+=$_SESSION['householdincome'][x+1];

		} elseif (($_SESSION['householdincome'][x]) == "Campbell") {

			$var_Campbell+=$_SESSION['householdincome'][x+1];

		} elseif (($_SESSION['householdincome'][x]) == "Kenton") {

			$var_Kenton+=$_SESSION['householdincome'][x+1];
		}
}

$var_Ohio=($var_Butler + $var_Clermont + $var_Warren + $var_Hamilton) / 4 ;

$var_Kentucky=($var_Boone + $var_Campbell + $var_Kenton ) / 3 ;
  
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