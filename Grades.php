<?php
require 'TopPage.php';
?>
<?php

$StudentId = $con->query("SELECT * FROM ".$TableName." WHERE Email='".$Email."'");
$rowStudentId = $con->fetch_array($StudentId);

$result = $con->query("SELECT * FROM StudentsTable WHERE StudentId='".$rowStudentId['StudentId']."'");

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
        <th> שם המטלה </th>
        <th>שם המנחה</th>
        <th> ציון </th>
        <th> קובץ </th>
    </tr>
    <?php
    while ($row = $con->fetch_array($result))
    {
        $StringSelect = $con->query("SELECT * FROM ProjectTasksTable ");
        $Select = $con->query("SELECT * FROM TasksTable ");
        $SelectTeacher = $con->query("SELECT * FROM TeachersTable ");
        while ($rowStringSelect = $con->fetch_array($StringSelect))
        {
            $ProjectId=$rowStringSelect['ProjectId'];
            if($row['ProjectId']==$ProjectId)
            {
                while ($rowSelectTeacher = $con->fetch_array($SelectTeacher))
                {
                    $TeacherId=$rowStringSelect['TeacherId'];
                    if($rowStringSelect['TeacherId']==$TeacherId)
                    {
                        while ($rowSelect = $con->fetch_array($Select))
                        {
                            $TaskId=$rowSelect['TaskId'];
                            if($rowStringSelect['TaskId']==$TaskId)
                            {
                                echo "<tr>";
                                echo "<td>".$rowSelect['TaskName']."</td>";
                                echo "<td>".$rowSelectTeacher['FirstName'] ."</td>";
                                echo "<td>".$rowStringSelect['Grade']."</td>";
                                echo "<td><a href=\"".$rowStringSelect['FileURL']."\">הורד קובץ</a></td>";
                                echo "</tr>";
                            }
                        }
                    }
                }
            }
        }
    }

    ?>


</table>
</body>
</html>
