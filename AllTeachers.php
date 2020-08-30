<?php
require 'TopPage.php';
?>


<!-- explain about the project
<table class="tblbodytable" align="right" dir="rtl" bgcolor="#cbcbcb" width="990px">
	<tr>
		<td class="tdbodycell" align="right" dir="rtl">-->
<p class="pallbody">

    <!--/////////////////////////////////////////////////////////
    HERE START THE BODY CONTECT
    /////////////////////////////////////////////////////////////-->

    <?php

    $TeachersTableResult= $con->query("SELECT * FROM TeachersTable ");
    ?>

    <u><b>לוח בקרת מנחים- באמצעות טופס זה תוכל לערוך, למחוק ולהוסיף מנחים. </b></u>
<table class="tblbodytable" align="right" dir="rtl" bgcolor="#cbcbcb" width="990px" dir="rtl" border="1">
    <tr bgcolor="#549d9d">
        <td align="center"><b>קוד מנחה</b></td>
        <td align="center"><b>ת.ז</b></td>
        <td align="center"><b>שם משפחה</b></td>
        <td align="center"><b>שם פרטי</b></td>
        <td align="center"><b>טלפון</b></td>
        <td align="center"><b>נייד</b></td>
        <td align="center"><b>דוא"ל</b></td>
        <td align="center"><b>עיר</b></td>
        <td align="center"><b>כתובת</b></td>
        <td align="center"><b>פרויקטים</b></td>
        <td align="center"><b></b></td>
        <td align="center"><b></b></td>
    </tr>
    <?php

    while ($TeachersTableRow = $con->fetch_array($TeachersTableResult))
    {
        // Saves the Teacher' details in parameters
        $CurrentTeacherCode = $TeachersTableRow['TeacherCode'];
        $CurrentTeacherId 	= $TeachersTableRow['TeacherId'];
        $CurrentLastName 	= $TeachersTableRow['LastName'];
        $CurrentFirstName 	= $TeachersTableRow['FirstName'];
        $CurrentPhone       = $TeachersTableRow['Phone'];
        $CurrentCellPhone 	= $TeachersTableRow['CellPhone'];
        $CurrentEmail       = $TeachersTableRow['Email'];
        $CurrentCity        = $TeachersTableRow['City'];
        $CurrentAddress     = $TeachersTableRow['Address'];

        echo "<tr>";
        echo "<td align=\"center\">".$CurrentTeacherCode."</td>";
        echo "<td align=\"center\">".$CurrentTeacherId."</td>";
        echo "<td align=\"center\">".$CurrentLastName."</td>";
        echo "<td align=\"center\">".$CurrentFirstName."</td>";
        echo "<td align=\"center\">".$CurrentPhone."</td>";
        echo "<td align=\"center\">".$CurrentCellPhone."</td>";
        echo "<td align=\"center\">".$CurrentEmail."</td>";
        echo "<td align=\"center\">".$CurrentCity."</td>";
        echo "<td align=\"center\">".$CurrentAddress."</td>";
        echo "<td align=\"center\"> <a href=\"/TeacherProjects.php?Id=".$CurrentTeacherId."\" target=\"_blank\">רשימת פרויקטים</a></td>";
        echo "<td><a href=\"/EditTeacher.php?id=".$CurrentTeacherId."&lastname=".$CurrentLastName."&firstname=".$CurrentFirstName."&phone=".$CurrentPhone."&cellphone=".$CurrentCellPhone."&email=".$CurrentEmail."&city=".$CurrentCity."&address=".$CurrentAddress."\" ><img src=\"/images/edit.png\"/></a></td>";
        echo "<td> <a href=\"/DeleteTeacherLink.php?id=".$CurrentTeacherId."&email=".$CurrentEmail."\" ><img src=\"/images/delete.png\"/></a></td>";
        echo "</tr>";
    }

    ?>

    <tr bgcolor="#cbcbcb">
        <form method="post" action="AddTeacherLink.php?getaccess=המטלה התווספה בהצלחה, הנך מועבר כעת בחזרה לרשימת מטלות...&noaccess=אין אפשרות להכניס רשומה זו !&filename=AllStudents.php" >
            <td></td>
            <td><input type="text" size="7" name="txtTeacherId" 	  style="margin-left:0px;"/></td>
            <td><input type="text" size="5"  name="txtLastName"		  style="margin-left:0px;"/></td>
            <td><input type="text" size="5"  name="txtFirstName" 	  style="margin-left:0px;"/></td>
            <td><input type="text" size="8" name="txtPhone"           style="margin-left:0px;"/></td>
            <td><input type="text" size="9"  name="txtCellPhone" 	  style="margin-left:0px;"/></td>
            <td><input type="text" size="13" name="txtEmail"           style="margin-left:0px;"/></td>
            <td><input type="text" size="8" name="txtCity"           style="margin-left:0px;"/></td>
            <td><input type="text" size="8" name="txtAddress"           style="margin-left:0px;"/></td>
            <td></td>
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


</p><!--
		</td>
	</tr>
</table>-->

<?php
require 'BottomPage.php';
?>
	