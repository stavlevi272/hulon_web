<?php

// to see hebrew
header('Content-Type: text/html; charset=windows-1255');

$con = mysqli_connect("mysql4.000webhost.com","a6287861_hulonID","dbPASS17");
if(!$con)
{
    die ('Could Not Connect To Database:' . mysqli_error());
}
// Select the database from the server
mysqli_select_db("a6287861_hulonDB", $con);

$result=$con->query("UPDATE ProjectTasksTable SET Grade='$_POST[NewGrade]'");
if(!$result)
{
    echo "<div align=\"right\" dir=\"rtl\">";
    echo "ארעה שגיאה בהכנסת הנתונים, ";
    echo "</div>";
    echo die();
}

echo "<div align=\"right\" dir=\"rtl\">";
echo "הפרטים נשלחו בהצלחה, ";
echo "</div>";
?>