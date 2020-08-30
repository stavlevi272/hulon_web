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

                $result=$con->query("DELETE FROM StudentsTable WHERE StudentId='" . $id. "'");
                $result2=$con->query("DELETE FROM UsersTable WHERE Email='" . $email. "'");
                // if successfully deleted
                if($result)
                {
                    echo "הסטודנט נמחק";
                    echo "<BR>";
                    echo "<a href='/AllStudents.php'>חזור לדף הקודם</a>";
                }

                else
                {
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
	
