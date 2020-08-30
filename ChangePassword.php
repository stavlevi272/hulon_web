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

                $result=$con->query("SELECT * FROM UsersTable WHERE Email='".$Email."'");
                $row=$con->fetch_array($result);
                $CurrentPass=$row['Password'];
                ?>

                <style type="text/css">
                    u.title
                    {
                        font-family:"Arial";
                        font-size:16px;
                        color:black;
                    }
                    span
                    {
                        font-family:"Arial";
                        color: black;
                        font-size:14px;
                    }
                </style>

            <table align="right" dir="rtl">
                <tr><td><u class="title" >שינוי סיסמא:</u></td></tr>
                <tr><td>
                        <form name="ChangePass" action="ChangePasswordLink.php" method="POST">
                            <br><span>הכנס סיסמא ישנה: </span> <input type="password" name="PrePass">
                    </td></tr>
                <tr>
                    <td>
                        <span>הכנס סיסמא חדשה: </span> <input type="password" name="NewPass">
                    </td>
                </tr>
                <tr align="left" dir="rtl"><td align="left" dir="rtl"><input type="submit" name="submit" value="שמור שינויים"></td></tr>
                </form>
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
	


