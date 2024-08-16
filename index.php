<?php
// Get the visitor's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Use a geolocation API to get country information based on IP address
$response = file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip);
$details = json_decode($response);

// Check if the visitor's country code is 'US' (United States)
if($details->geoplugin_countryCode !== "US") {
// Redirect to an "Access Denied" page or display a message
    header("Location: https://soilwrap.com/access-denied.php");
    exit();
}

// If the user is from the USA, allow them to proceed
echo "Welcome to our website!";
?> 
