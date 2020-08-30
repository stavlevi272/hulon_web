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

                $TeacherIdPost=$_GET['teacherid'];
                $resultUpdateTeachersTable = $con->query("UPDATE TeachersTable SET LastName='".$_POST['txtLastNameN']."' WHERE TeacherId='".$TeacherIdPost."'");
                if(!$resultUpdateTeachersTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllTeachers.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTeachersTable = $con->query("UPDATE TeachersTable SET FirstName='".$_POST['txtFirstNameN']."' WHERE TeacherId='".$TeacherIdPost."'");
                if(!$resultUpdateTeachersTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllTeachers.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTeachersTable = $con->query("UPDATE TeachersTable SET Phone='".$_POST['txtPhoneN']."' WHERE TeacherId='".$TeacherIdPost."'");
                if(!$resultUpdateTeachersTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllTeachers.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTeachersTable = $con->query("UPDATE TeachersTable SET CellPhone='".$_POST['txtCellPhoneN']."' WHERE TeacherId='".$TeacherIdPost."'");
                if(!$resultUpdateTeachersTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllTeachers.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTeachersTable = $con->query("UPDATE TeachersTable SET Email='".$_POST['txtEmailN']."' WHERE TeacherId='".$TeacherIdPost."'");
                if(!$resultUpdateTeachersTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllTeachers.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTeachersTable = $con->query("UPDATE TeachersTable SET City='".$_POST['txtCityN']."' WHERE TeacherId='".$TeacherIdPost."'");
                if(!$resultUpdateTeachersTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllTeachers.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }
                $resultUpdateTeachersTable = $con->query("UPDATE TeachersTable SET Address='".$_POST['txtAddressN']."' WHERE TeacherId='".$TeacherIdPost."'");
                if(!$resultUpdateTeachersTable)
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/AllTeachers.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }


                echo "<div align=\"right\" dir=\"rtl\">";
                echo "הפרטים נשלחו בהצלחה, ";
                echo "<a href=\"/AllTeachers.php\"><u>לחץ כאן </u></a>על מנת לחזור לטבלת מנחים. ";
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
