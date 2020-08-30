<?php
require 'TopPage.php';
?>
<?php

$result = $con->query("SELECT * FROM StudentsTable WHERE StudentId='1'");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="he">
<head>
<title>המכון הטכנולוגי חולון-פרויקטי גמר</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
</head>
<body dir="rtl" align="center" width="80%">
<table align="center" width="80%" border="0">
	<tr align="center">
		<td class="td_logo_image" align="center">
		<div class="div_logo_image" align="center">
		<!-- Image above main menu; Css design -->
		</td>
		</div>
		
	</tr>

</table>
<table dir="rtl" border="1" >
    <tr>
        <th> מספר סטודנט</th>
    </tr>
    <tr>
        <th>שם פרטי</th>
    </tr>
    <tr>
        <th> שם משפחה </th>
    </tr>
    <tr>
        <th> כתובת דוא"ל </th>
    </tr>
    <tr>
        <th>טלפון </th>
    </tr>
    <tr>
        <th>נייד </th>
    </tr>
    <tr>
        <th>כתובת </th>
    </tr>
    <tr>
        <th>עיר </th>
    </tr>

<?php
while ($row = $con->fetch_array($result))
{	

	echo "<tr>";
		echo "<td>".$row['StudentId']."</td>";
	echo "</tr>";	
	echo "<tr>";
		echo "<td>".$row['FirstName']."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>".$row['LastName']."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>".$row['Email']."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>".$row['Phone']."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>".$row['CellPhone']."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>".$row['Address']."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>".$row['City']."</td>";
	echo "</tr>";

}
?>
</table>
</body>
</html>
	