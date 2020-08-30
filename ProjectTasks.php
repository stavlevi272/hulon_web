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


                // Get the project id parameter passed in the url
                $ProjectId=$_GET['Id'];

                // Select all the prject from Project Tasks table
                $ProjectTasksResult = $con->query("SELECT * FROM ProjectTasksTable WHERE ProjectId='" . $ProjectId. "'");

                // Print the title before the table
                echo "<u><b>פרוייקט מספר </b><b>". $ProjectId ."</b><b> - רשימת מטלות:</b></u>"
                ?>


            <table width="100%" dir="rtl" border="1">
                <tr bgcolor="#549d9d">
                    <td align="center"><b>שם המטלה</b></td>
                    <td align="center"><b>דו"ח מס' </b></td>
                    <td align="center"><b>מצגת מס'</b></td>
                    <td align="center"><b>תאריך </b></td>
                    <td align="center"><b>ציון</b></td>
                    <td align="center"><b>ערוך פרטים</b></td>
                    <td align="center" dir="rtl"><b></b></td>
                    <td align="center" dir="rtl"><b></b></td>
                </tr>

                <?php

                $StringSelect = "SELECT * FROM TasksTable ";
                $TasksResult = $con->query($StringSelect);

                // get the Task name from the table result
                $TaskRow= $con->fetch_array($TasksResult);

                while ($TaskRow= $con->fetch_array($TasksResult))
                {
                    $row=$con->fetch_array($ProjectTasksResult);
                    $TaskName = $TaskRow['TaskName'];

                    $TaskName = $TaskRow['TaskName'];

                    echo "<tr>";

                    $TaskId = $row['TaskId'];
                    $ReportID = $row['ReportId'];
                    $PresentationId = $row['PresentationId'];
                    $Date = $row['Date'];
                    $Grade = $row['Grade'];
                    echo "<td>".$TaskId."</td>";
                    echo "<td>".$TaskName ."</td>";

                    if($TaskId=$TaskRow['TaskId'])
                    {
                        echo "<td>".$ReportID."</td>";
                        echo "<td>".$PresentationId."</td>";
                        echo "<td>".$Date."</td>";
                        echo "<td>".$Grade."</td>";
                    }
                    echo "<td><a href=\"/EditProjectTasks.php?id=".$row['ProjectId']."&R=".$row['ReportId']."\" ><img src=\"/images/edit.png\"/></a></td>";

                    echo "</tr>";
                    ?>

                    <?php
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
	
