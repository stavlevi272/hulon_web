<?php
require 'TopPage.php';
?>


<!-- explain about the project-->
<table class="tblbodytable" align="right" dir="rtl" bgcolor="#cbcbcb" width="990px">
    <tr>
        <td class="tdbodycell" align="right" dir="rtl">
            <p class="pbody">

                <!--/////////////////////////////////////////////////////////
                HERE START THE BODY CONTECT
                /////////////////////////////////////////////////////////////-->

                <?php
                $TeacherResult= $con->query("SELECT * FROM ".$TableName." WHERE Email='".$Email."'");
                $rowTeacher = $con->fetch_array($TeacherResult);

                $ProjectsResult = $con->query("SELECT * FROM ProjectTable WHERE TeacherId='".$rowTeacher['TeacherId']."'");

                ?>
                <u><b>הפרוייקטים שבניהולי:</b></u>
            <table width="100%" dir="rtl" border="1">
                <tr bgcolor="#549d9d">
                    <td align="center"><b>מספר פרוייקט</b></td>
                    <td align="center"><b>נושא הפרוייקט</b></td>
                    <td align="center"><b>סטודנט א'</b></td>
                    <td align="center"><b>סטודנט ב'</b></td>
                    <td align="center"><b>שלבי הפרוייקט</b></td>
                </tr>
                <?php

                while ($ProjectsRow = $con->fetch_array($ProjectsResult))
                {
                    $StudentsResult = $con->query("SELECT * FROM StudentsTable WHERE TeacherId='".$ProjectsRow['TeacherId']."'");

                    echo "<tr>";
                    echo "<td align=\"center\">".$ProjectsRow['ProjectId']."</td>";
                    echo "<td align=\"center\">".$ProjectsRow['ProjectName']."</td>";
                    while ($StudentsRow = $con->fetch_array($StudentsResult))
                    {
                        echo "<td align=\"center\">".$StudentsRow['FirstName'] ." ". $StudentsRow['LastName'] ."</td>";
                    }
                    echo "<td align=\"center\"> <a href=\"/ProjectTasks.php?Id=".$ProjectsRow['ProjectId']."\" target=\"_blank\">התקדמות הפרוייקט</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>


            <!--/////////////////////////////////////////////////////////
            HERE END THE BODY CONTECT
            /////////////////////////////////////////////////////////////-->


            </p>
        </td>
    </tr>
</table>

<?php
require 'BottomPage.php';
?>
	