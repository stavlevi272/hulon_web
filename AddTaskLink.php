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
                $SqlAddTask="INSERT INTO TasksTable (TaskId,TaskName,ReportId,PresentationId,Date,Grade,Comment)
			 VALUES
 			 ('$_POST[txtTaskId]','$_POST[txtTaskName]','$_POST[txtReportId]','$_POST[txtPresentationId]','$_POST[txtDate]','$_POST[txtGrade]','$_POST[txtComment]')";

                if (!$con->query($SqlAddTask ,$con))
                {
                    die('Error: ' . mysqli_error());
                }
                // echo $_GET['getaccess'];
                echo "לחץ <a href=\"http://hulon.site90.com/EditProjectSchedule.php\">כאן </a> כדי להוסיף רשומה חדשה";

                $con->close();


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
	

