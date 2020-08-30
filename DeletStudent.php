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

                $result = $con->query("SELECT * FROM StudentsTable ");

                ?>

            <table width="400" border="1" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr>
                    <td align="right" bgcolor="#549d9d"><strong>מספר סטודנט</strong></td>
                    <td align="right" bgcolor="#549d9d"><strong>שם </strong></td>
                    <td align="right" bgcolor="#549d9d"><strong>שם משפחה</strong></td>
                    <td align="right" bgcolor="#549d9d"><strong>אימייל</strong></td>
                    <td align="right" bgcolor="#549d9d">&nbsp;</td>
                </tr>

                <?php
                while($row=$con->fetch_array($result)){
                    ?>

                    <tr>
                        <td bgcolor="#cbcbcb"><? echo $row['StudentId']; ?></td>
                        <td bgcolor="#cbcbcb"><? echo $row['FirstName']; ?></td>
                        <td bgcolor="#cbcbcb"><? echo $row['LastName']; ?></td>
                        <td bgcolor="#cbcbcb"><? echo $row['Email']; ?></td>
                        <td bgcolor="#cbcbcb"><a href="DeletStudentLink.php?id=<?php echo $row['StudentId']; ?>&email=<?php echo $row['Email']; ?>">מחק</a></td>
                    </tr>

                    <?php
                    // close while loop
                }
                ?>

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
	
