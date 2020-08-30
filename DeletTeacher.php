<?php
require 'TopPage.php';
?>
<?php

$result = $con->query("SELECT * FROM TeachersTable ");

?>

    <table width="400" border="1" cellpadding="3" cellspacing="1" bgcolor="#549d9d">
        <tr>
            <td align="right" bgcolor="#549d9d"><strong>מספר מנחה</strong></td>
            <td align="right" bgcolor="#549d9d"><strong>שם </strong></td>
            <td align="right" bgcolor="#549d9d"><strong>שם משפחה</strong></td>
            <td align="right" bgcolor="#549d9d"><strong>אימייל</strong></td>
            <td align="right" bgcolor="#549d9d">&nbsp;</td>
        </tr>

        <?php
        while($row=$con->fetch_array($result)){
            ?>
            <?php
            echo "<tr>";
            echo "<td>".$row['TeacherId']."</td>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td> <a href=\"/DeletTeacherLink.php?id=".$row['TeacherId']."&email=".$row['Email']."\" >מחק</a></td>";
            echo "</tr>";

            ?>


            <?php
            // close while loop
        }
        ?>

    </table>

<?php
// close connection; 
$con->close();
?>