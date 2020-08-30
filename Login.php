<?php
session_start();

require 'ConnectDB.php';

// Select all the users from Users table
$result = $con->query("SELECT * FROM UsersTable WHERE Email='" . $_POST["txtUsername"] . "' AND Password='" . $_POST["txtPassword"] . "'");
?>
<html>
<head>
    <title> </title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
    <meta http-equiv="refresh" content="0; url=<?php echo $_GET['filename']; ?>" />
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php
if(mysqli_num_rows($result)==0)
{
    echo $_GET['noaccess'];
}
else
{
    // Create a user details variables
    $UserId;
    $Password;
    $Email;
    $Access;

    // Pass through all the rows in the result array
    while($row = $con->fetch_array($result))
    {
        $UserId=$row['UserId'];
        $Password=$row['Password'];
        $Email=$row['Email'];
        $Access=$row['Access'];
    }

    // Save the user details on the session
    $_SESSION['Email'] = $Email;
    $_SESSION['Password'] = $Password;

    echo $_GET['getaccess'];
}

$con->close();
?>

</body>
</html>