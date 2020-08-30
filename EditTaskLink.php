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

                $TaskIdGet=$_GET['taskid'];
                $resultUpdateTasksTable = $con->query("UPDATE TasksTable SET TaskName='".$_POST['txtTaskNameN']."' WHERE TaskId='".$TaskIdGet."'");
                if(!$resultUpdateTasksTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/EditProjectSchedule.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTasksTable = $con->query("UPDATE TasksTable SET ReportId='".$_POST['txtReportIdN']."' WHERE TaskId='".$TaskIdGet."'");
                if(!$resultUpdateTasksTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/EditProjectSchedule.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTasksTable = $con->query("UPDATE TasksTable SET PresentationId='".$_POST['txtPresentationIdN']."' WHERE TaskId='".$TaskIdGet."'");
                if(!$resultUpdateTasksTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/EditProjectSchedule.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTasksTable = $con->query("UPDATE TasksTable SET Date='".$_POST['txtDateN']."' WHERE TaskId='".$TaskIdGet."'");
                if(!$resultUpdateTasksTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/EditProjectSchedule.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTasksTable = $con->query("UPDATE TasksTable SET Grade='".$_POST['txtGradeN']."' WHERE TaskId='".$TaskIdGet."'");
                if(!$resultUpdateTasksTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/EditProjectSchedule.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTasksTable = $con->query("UPDATE TasksTable SET Comment='".$_POST['txtCommentN']."' WHERE TaskId='".$TaskIdGet."'");
                if(!$resultUpdateTasksTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/EditProjectSchedule.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }



                echo "<div align=\"right\" dir=\"rtl\">";
                echo "הפרטים נשלחו בהצלחה, ";
                echo "<a href=\"/EditProjectSchedule.php\"><u>לחץ כאן </u></a>על מנת לחזור לטבלת לוח זמנים. ";
                echo "</div>";
                ?>


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
