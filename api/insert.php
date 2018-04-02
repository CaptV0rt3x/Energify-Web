<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//Creating Array for JSON response
$response = array();
 
// Check if we got the field from the user
if (isset($_POST['id']) && isset($_POST['dt']) && isset($_POST['tym']) && 
    isset($_POST['units']) && isset($_POST['rs'])) {
 
    $id = $_POST['id'];
    $date = $_POST['dt'];
	$time = $_POST['tym'];
	$units = $_POST['units'];
	$rupees = $_POST['rs'];
	
    // Include data base connect class
    $filepath = realpath (dirname(__FILE__));
	require_once($filepath."/db_connect.php");
 
    // Fire SQL query to insert data in Energy database
    $result = mysqli_query($conn,"INSERT INTO energy(id,date,time,units,rupees) VALUES('$id','$date','$time','$units','$rupees')");
 
    // Check for succesfull execution of query
    if ($result) {
        // successfully inserted 
        $response["success"] = 1;
        $response["message"] = "Data successfully inserted.";
 
        // Show JSON response
        echo json_encode($response);
    } else {
        // Failed to insert data in database
        $response["success"] = 0;
        $response["message"] = "Something has been wrong";
 
        // Show JSON response
        echo json_encode($response);
    }
} else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
    // Show JSON response
    echo json_encode($response);
}
?>