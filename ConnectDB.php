<?php
//
//// Connect to the server, and save the connection in the $con parameter
//$con = mysqli_connect("localhost", "id14714722_1342555_hulon_user", "dbPASS17$#%@#^&%AA");
//
//// Check if the connection has create
//if (!$con)
//{
//	die('Could not connect to the server, please try later');
//}
//
//// Select the database from the server
//mysqli_select_db("id14714722_1342555_hulon", $con);
//
//
//?>

<?php
$servername = "localhost";
$username = "id14714722_1342555_hulon_user";
$password = "dbPASS17$#%@#^&%AA";

// Connect to the server, and save the connection in the $con parameter
$con = new mysqli($servername, $username, $password);

// Check if the connection has create
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>

