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

                // get value of id that sent from address bar
                $id=$_GET['id'];
                $email=$_GET['email'];

                $result=$con->query("DELETE FROM TeachersTable WHERE TeacherId='" . $id. "'");
                $result2=$con->query("DELETE FROM UsersTable WHERE Email='" . $email. "'");

                // Get the Teacher code row and update the teacherId to zero
                $SqlGetTeacherCode="SELECT TeacherCode FROM TeachersCodesTable WHERE TeacherId='".$id."'";
                $CodeResult=$con->query($SqlGetTeacherCode,$con);
                $CodeRow=$con->fetch_array($CodeResult);$con->
                $resultAddTeacherCode=$con->query("UPDATE TeachersCodesTable SET TeacherId='0' WHERE TeacherCode='".$CodeRow."'");
                // if successfully deleted
                if($result){
                    echo "המנחה נמחק";
                    echo "<BR>";
                    echo "<a href='/AllTeachers.php'>חזור לדף הקודם</a>";
                }

                else {
                    echo "ישנה טעות";
                }
                ?>

                <?php
                // close connection
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
	
