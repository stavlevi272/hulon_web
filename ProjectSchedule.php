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

                <u><b>לוח זמנים - רשימת מטלות ותאריכים בפרוייקט הגמר: </b></u>
            <table width="100%" dir="rtl" border="1">
                <tr bgcolor="#549d9d">
                    <td align="center"><b>מספר</b></td>
                    <td align="center"><b>שלבי הפרויקט</b></td>
                    <td align="center"><b>דו"ח מס'</b></td>
                    <td align="center"><b>מצגת מס'</b></td>
                    <td align="center"><b>תאריך</b></td>
                    <td align="center"><b>משקל הציון השנתי (%)</b></td>
                    <td align="center"><b>הערות</b></td>
                </tr>
                <?php

                while ($TasksTableRow = $con->fetch_array($TasksTableResult))
                {

                    echo "<tr>";
                    echo "<td align=\"center\">".$TasksTableRow['TaskId']."</td>";
                    echo "<td align=\"center\">".$TasksTableRow['TaskName']."</td>";
                    echo "<td align=\"center\">".$TasksTableRow['ReportId']."</td>";
                    echo "<td align=\"center\">".$TasksTableRow['PresentationId']."</td>";
                    echo "<td align=\"center\">".$TasksTableRow['Date']."</td>";
                    echo "<td align=\"center\">".$TasksTableRow['Grade']."</td>";
                    echo "<td align=\"center\">".$TasksTableRow['Comment']."</td>";
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
	