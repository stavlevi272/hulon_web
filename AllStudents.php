<?php
require 'TopPage.php';
?>


<!-- explain about the project -->
<!-- <table class="tblbodytable" align="right" dir="rtl" bgcolor="#cbcbcb" width="990px">
	<tr>
		<td class="tdbodycell" align="right" dir="rtl">-->
<p class="pallbody" >

    <!--/////////////////////////////////////////////////////////
    HERE START THE BODY CONTECT
    /////////////////////////////////////////////////////////////-->

    <?php

    $StudentsTableResult= $con->query("SELECT * FROM StudentsTable ");
    ?>

    <u><b>לוח בקרת סטודנטים- באמצעות טופס זה תוכל לערוך, למחוק ולהוסיף סטודנטים. </b></u>
<table class="tblbodytable" align="right" dir="rtl" bgcolor="#cbcbcb" width="990px" dir="rtl" border="1">

    <tr bgcolor="#549d9d">
        <td  align="center" dir="rtl"><b>ת.ז</b></td>
        <td align="center" dir="rtl"><b>שם משפחה</b></td>
        <td  align="center" dir="rtl"><b>שם פרטי</b></td>
        <td  align="center" dir="rtl"><b>טלפון</b></td>
        <td  align="center" dir="rtl"><b>נייד</b></td>
        <td  align="center" dir="rtl"><b>דוא"ל</b></td>
        <td  align="center" dir="rtl"><b>עיר</b></td>
        <td  align="center" dir="rtl"><b>כתובת</b></td>
        <td  align="center" dir="rtl"><b></b></td>
        <td align="center" dir="rtl"><b></b></td>
        <td  align="center" dir="rtl"><b></b></td>
    </tr>
    <?php

    while ($StudentsTableRow = $con->fetch_array($StudentsTableResult))
    {
        // Saves the Student' details in parameters
        $CurrentStudentId 	= $StudentsTableRow['StudentId'];
        $CurrentLastName 	= $StudentsTableRow['LastName'];
        $CurrentFirstName 	= $StudentsTableRow['FirstName'];
        $CurrentPhone       = $StudentsTableRow['Phone'];
        $CurrentCellPhone   = $StudentsTableRow['CellPhone'];
        $CurrentEmail       = $StudentsTableRow['Email'];
        $CurrentCity        = $StudentsTableRow['City'];
        $CurrentAddress     = $StudentsTableRow['Address'];


        echo "<tr>";
        echo "<td align=\"center\">".$CurrentStudentId."</td>";
        echo "<td align=\"center\">".$CurrentLastName."</td>";
        echo "<td align=\"center\">".$CurrentFirstName."</td>";
        echo "<td align=\"center\">".$CurrentPhone."</td>";
        echo "<td align=\"center\">".$CurrentCellPhone."</td>";
        echo "<td align=\"center\">".$CurrentEmail."</td>";
        echo "<td align=\"center\">".$CurrentCity."</td>";
        echo "<td align=\"center\">".$CurrentAddress."</td>";
        echo "<td align=\"center\"> <a href=\"/ProjectDetails.php?Id=".$CurrentStudentId."\" target=\"_blank\">פרטי פרויקט</a></td>";
        echo "<td><a href=\"/EditStudent.php?id=".$CurrentStudentId."&lastname=".$CurrentLastName."&firstname=".$CurrentFirstName."&phone=".$CurrentPhone."&cellphone=".$CurrentCellPhone."&email=".$CurrentEmail."&city=".$CurrentCity."&address=".$CurrentAddress."\" ><img src=\"/images/edit.png\"/></a></td>";
        echo "<td> <a href=\"/DeleteStudentLink.php?id=".$CurrentStudentId."&email=".$CurrentEmail."\" ><img src=\"/images/delete.png\"/></a></td>";
        echo "</tr>";
    }

    ?>

    <tr bgcolor="#cbcbcb">
        <form name="frmAddStudent" method="post" action="AddStudentLink.php?getaccess=המטלה התווספה בהצלחה, הנך מועבר כעת בחזרה לרשימת מטלות...&noaccess=אין אפשרות להכניס רשומה זו !&filename=AllStudents.php" onsubmit="return validateForm()">
            <td><input type="text" size="7" name="txtStudentId" 	  style="margin-left:0px;" maxlength="9" id="txtStudentId" /></td>
            <td><input type="text" size="5"  name="txtLastName"		  style="margin-left:0px;" id="txtLastName" /></td>
            <td><input type="text" size="5"  name="txtFirstName" 	  style="margin-left:0px;" id="txtFirstName" /></td>
            <td><input type="text" size="8" name="txtPhone"           style="margin-left:0px;" maxlength="10" id="txtPhone" /></td>
            <td><input type="text" size="9"  name="txtCellPhone" 	  style="margin-left:0px;" maxlength="10" id="txtCellPhone" /></td>
            <td><input type="text" size="13" name="txtEmail"           style="margin-left:0px;" id="txtEmail" /></td>
            <td><input type="text" size="8" name="txtCity"           style="margin-left:0px;" id="txtCity" /></td>
            <td><input type="text" size="8" name="txtAddress"           style="margin-left:0px;" id="txtAddress" /></td>
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


</p>
<table class="pallbody"></table>
<!--
</td>
</tr>
</table>-->

<?php
require 'BottomPage.php';
?>
	