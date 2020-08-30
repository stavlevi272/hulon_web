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

                $TasksTableResult= $con->query("SELECT * FROM TasksTable ");
                ?>

                <u><b>לו"ח זמנים - רשימת מטלות ותאריכים בפרוייקט הגמר </b></u>
                <br>
                <u><b>באמצעות דף זה תוכל לערוך, למחוק ולהוסיף מטלות הקשרות ללו"ח זמנים</b></u>
            <table dir="rtl" border="1" width="100%">
                <tr bgcolor="#549d9d">
                    <td align="center"><b>מספר</b></td>
                    <td align="center"><b>שלבי הפרויקט</b></td>
                    <td align="center"><b>דו"ח</b></td>
                    <td align="center"><b>מצגת</b></td>
                    <td align="center"><b>תאריך</b></td>
                    <td align="center"><b>ציון(%)</b></td>
                    <td align="center"><b>הערות</b></td>
                    <td align="center"><b></b></td>
                    <td align="center"><b></b></td>
                </tr>
                <?php

                while ($TasksTableRow = $con->fetch_array($TasksTableResult))
                {
                    // Saves the Task' details in parameters
                    $CurrentTaskId 		   = $TasksTableRow['TaskId'];
                    $CurrentTaskName 	   = $TasksTableRow['TaskName'];
                    $CurrentReportId 	   = $TasksTableRow['ReportId'];
                    $CurrentPresentationId = $TasksTableRow['PresentationId'];
                    $CurrentDate 		   = $TasksTableRow['Date'];
                    $CurrentGrade          = $TasksTableRow['Grade'];
                    $CurrentComment        = $TasksTableRow['Comment'];

                    echo "<tr>";
                    echo "<td align=\"center\">".$CurrentTaskId."</td>";
                    echo "<td align=\"center\">".$CurrentTaskName."</td>";
                    echo "<td align=\"center\">".$CurrentReportId."</td>";
                    echo "<td align=\"center\">".$CurrentPresentationId."</td>";
                    echo "<td align=\"center\">".$CurrentDate."</td>";
                    echo "<td align=\"center\">".$CurrentGrade."</td>";
                    echo "<td align=\"center\">".$CurrentComment."</td>";
                    echo "<td><a href=\"/EditTask.php?id=".$CurrentTaskId."&name=".$CurrentTaskName."&RId=".$CurrentReportId."&PId=".$CurrentPresentationId."&date=".$CurrentDate."&grade=".$CurrentGrade."&comment=".$CurrentComment."\" ><img src=\"/images/edit.png\"/></a></td>";
                    echo "<td> <a href=\"/DeleteTaskLink.php?id=".$CurrentTaskId."\" ><img src=\"/images/delete.png\"/></a></td>";
                    echo "</tr>";
                }

                ?>

                <tr bgcolor="#cbcbcb">
                    <form method="post" action="AddTaskLink.php?getaccess=המטלה התווספה בהצלחה, הנך מועבר כעת בחזרה לרשימת מטלות...&noaccess=אין אפשרות להכניס רשומה זו !&filename=index.php" >
                        <td></td>
                        <td><input type="text" size="14" name="txtTaskName" 	  style="margin-left:0px;"/></td>
                        <td><input type="text" size="3"  name="txtReportId" 	  style="margin-left:0px;"/></td>
                        <td><input type="text" size="3"  name="txtPresentationId" style="margin-left:0px;"/></td>
                        <td><input type="text" size="7"  name="txtDate"			  style="margin-left:0px;"/></td>
                        <td><input type="text" size="8" name="txtGrade"          style="margin-left:0px;"/></td>
                        <td><input type="text" size="14" name="txtComment"        style="margin-left:0px;"/></td>
                        <td><input type="submit" name="submit" value="הוסף"		  style="margin-left:0px;"/></td>
                        <td bgcolor="#cbcbcb" style="margin-left:0px;"></td>
                    </form>
                </tr>
            </table>

            <?php
            // close connection;
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
	