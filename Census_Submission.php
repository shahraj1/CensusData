<?php
// begin the session
session_start();
 
// create an array
$Census_County=array();
$Census_HouseHoldNumber=array();
$Census_HouseHoldIncome=array();

// put the array in a session variable
$_SESSION['county']=$Census_County;
$_SESSION['householdnumber']=$Census_HouseHoldNumber;
$_SESSION['householdincome']=$Census_HouseHoldIncome;

// push the data from the form into the array
$_SESSION['county'][] = $_POST["optCounty"];
$_SESSION['householdnumber'][] = $_POST["txtHouseholdSize"];
$_SESSION['householdincome'][] = $_POST["optCounty","txtHouseholdIncome"];



// a little message to say we have done it
echo 'Putting array into a session variable';

?>