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

                $StudentIdGet=$_GET['studentid'];
                $resultUpdateStudentsTable = $con->query("UPDATE StudentsTable SET LastName='".$_POST['txtLastNameN']."' WHERE StudentId='".$StudentIdGet."'");
                if(!$resultUpdateStudentsTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllStudents.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateStudentsTable = $con->query("UPDATE StudentsTable SET FirstName='".$_POST['txtFirstNameN']."' WHERE StudentId='".$StudentIdGet."'");
                if(!$resultUpdateStudentsTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllStudents.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateStudentsTable = $con->query("UPDATE StudentsTable SET Phone='".$_POST['txtPhoneN']."' WHERE StudentId='".$StudentIdGet."'");
                if(!$resultUpdateStudentsTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllStudents.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateStudentsTable = $con->query("UPDATE StudentsTable SET CellPhone='".$_POST['txtCellPhoneN']."' WHERE StudentId='".$StudentIdGet."'");
                if(!$resultUpdateStudentsTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllStudents.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateStudentsTable = $con->query("UPDATE StudentsTable SET Email='".$_POST['txtEmailN']."' WHERE StudentId='".$StudentIdGet."'");
                if(!$resultUpdateStudentsTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllStudents.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateStudentsTable = $con->query("UPDATE StudentsTable SET City='".$_POST['txtCityN']."' WHERE StudentId='".$StudentIdGet."'");
                if(!$resultUpdateStudentsTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllStudents.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateStudentsTable = $con->query("UPDATE StudentsTable SET Address='".$_POST['txtAddressN']."' WHERE StudentId='".$StudentIdGet."'");
                if(!$resultUpdateStudentsTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllStudents.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }


                echo "<div align=\"right\" dir=\"rtl\">";
                echo "הפרטים נשלחו בהצלחה, ";
                echo "<a href=\"/StudentDetails.php\"><u>לחץ כאן </u></a>על מנת לצפות שוב בפרטייך האישיים..";
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
