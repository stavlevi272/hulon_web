
<?php
require 'TopPage.php';
require 'ChangePassword.php';
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
                if($CurrentPass==$_POST['PrePass'])
                {
                    $result=$con->query("UPDATE UsersTable SET Password='".$_POST['NewPass']."' WHERE Email='".$Email."'");
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "הפרטים נשלחו בהצלחה, ";
                    echo "<a href=\"/ChangeTeachersPassED.php\"><u>לחץ כאן </u></a>על מנת לחזור לדף הקודם.";
                    echo "</div>";
                }
                else
                {
                    echo "<div align=\"right\" dir=\"rtl\">";
                    echo "ארעה שגיאה בהכנסת הנתונים, ";
                    echo "<a href=\"/ChangeTeachersPassED.php\"><u>אנא נסה שנית</u>.</a>";
                    echo "</div>";
                    echo die();
                }


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
	
