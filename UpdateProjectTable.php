<?php
if(isset($_POST['update']))
{

$con = mysqli_connect("mysql4.000webhost.com","a6287861_hulonID","dbPASS17");
if(! $con )
{
    die('Could not connect: ' . mysqli_error());
}
// Select the database from the server
mysqli_select_db("a6287861_hulonDB", $con);
?>
<html>
<head>
    <title>המכון הטכנולוגי חולון-פרוייקטי גמר</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
</head>

<body>
<table align="right" dir="rtl">
    <tr><td><u class="title">עריכת פרוייקטים</u></td></tr>
    <tr><td>
            <form name="UpdateProjectTable" action="UpdateProjectTableLink.php" method="POST">
<span>ציון נוכחי: <?php if($Id!="") {echo "<b>" . $Id . "</b>";} else { echo "<b>לא קיימת סיסמא במערכת.</b>"; } ?>
</span>
        </td></tr>
    <tr>
        <td>
            <span>הכנס ציון חדש: </span> <input type="Grade" name="NewGrade">
        </td>
    </tr>
    <tr align="left" dir="rtl"><td align="left" dir="rtl"><input type="submit" name="submit" value="שמור שינויים"></td></tr>
    </form>
</table>
</body>
</html>