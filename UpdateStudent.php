<?php
require 'TopPage.php';
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
</head>
<body>
<?php

$result=$con->query("UPDATE StudentsTable SET FirstName='$_POST[fname]' WHERE StudentId='$_POST[StudentId]'");

if(!$result)
{
    echo "<div align=\"right\" dir=\"rtl\">";
    echo "ארעה שגיאה בהכנסת הנתונים, ";
    echo "<a href=\"/StudentsDetails.php\"><u>אנא נסה שנית</u>.</a>";
    echo "</div>";
    echo die();
}

$result=$con->query("UPDATE TblStudents SET LastName='$_POST[lname]' WHERE StudentId='$_POST[StudentId]'");
if(!$result)
{
    echo "<div align=\"right\" dir=\"rtl\">";
    echo "ארעה שגיאה בהכנסת הנתונים, ";
    echo "<a href=\"/StudentsDetails.php\"><u>אנא נסה שנית</u>.</a>";
    echo "</div>";
    echo die();
}

$result=$con->query("UPDATE TblStudents SET Email='$_POST[email]' WHERE StudentId='$_POST[StudentId]'");
if(!$result)
{
    echo "<div align=\"right\" dir=\"rtl\">";
    echo "ארעה שגיאה בהכנסת הנתונים, ";
    echo "<a href=\"/StudentsDetails.php\"><u>אנא נסה שנית</u>.</a>";
    echo "</div>";
    echo die();
}

$result=$con->query("UPDATE TblStudents SET SchoolName='$_POST[school]' WHERE StudentId='$_POST[StudentId]'");
if(!$result)
{
    echo "<div align=\"right\" dir=\"rtl\">";
    echo "ארעה שגיאה בהכנסת הנתונים, ";
    echo "<a href=\"/StudentsDetails.php\"><u>אנא נסה שנית</u>.</a>";
    echo "</div>";
    echo die();
}

$result=$con->query("UPDATE TblStudents SET Class='$_POST[classes]' WHERE StudentId='$_POST[StudentId]'");
if(!$result)
{
    echo "<div align=\"right\" dir=\"rtl\">";
    echo "ארעה שגיאה בהכנסת הנתונים, ";
    echo "<a href=\"/StudentsDetails.php\"><u>אנא נסה שנית</u>.</a>";
    echo "</div>";
    echo die();
}

$result=$con->query("UPDATE TblStudents SET Address='$_POST[address]' WHERE StudentId='$_POST[StudentId]'");
if(!$result)
{
    echo "<div align=\"right\" dir=\"rtl\">";
    echo "ארעה שגיאה בהכנסת הנתונים, ";
    echo "<a href=\"/StudentsDetails.php\"><u>אנא נסה שנית</u>.</a>";
    echo "</div>";
    echo die();
}
//$result=$con->query("UPDATE TblStudents SET GuideId='-1' WHERE StudentId='$_POST[studentid]'");
echo "<div align=\"right\" dir=\"rtl\">";
echo "הפרטים עודכנו בהצלחה.";
echo "<a href=/StudentsDetails.php><u>לחץ כאן כדי לחזור לדף הקודם</u></a>.";
echo "</div>";
$con->close();

?>
</body>
</html>