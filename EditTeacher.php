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
                $TeacherIdN=$_GET['id'];
                $LastNameN=$_GET['lastname'];
                $FirstNameN=$_GET['firstname'];
                $PhoneN=$_GET['phone'];
                $CellPhoneN=$_GET['cellphone'];
                $EmailN=$_GET['email'];
                $CityN=$_GET['city'];
                $AddressN=$_GET['address'];
                $ProjectIdN=$_GET['projectid'];
                ?>

            <form method="post" action="EditTeacherLink.php?teacherid=<?php echo $TeacherIdN; ?>">
                מספר סטודנט<input type="text" name="txtTeacherIdN" disabled="disabled" value="<?php echo $TeacherIdN ;?>" />
                <br>
                שם משפחה<input type="text" name="txtLastNameN"  value="<?php echo $LastNameN ;?>" />
                <br>
                שם פרטי<input type="text" name="txtFirstNameN"  value="<?php echo $FirstNameN ;?>" />
                <br>
                טלפון<input type="text" name="txtPhoneN"  value="<?php echo $PhoneN ;?>" />
                <br>
                נייד<input type="text" name="txtCellPhoneN"  value="<?php echo $CellPhoneN ;?>" />
                <br>
                דוא"ל<input type="text" name="txtEmailN"  value="<?php echo $EmailN ;?>" />
                <br>
                עיר<input type="text" name="txtCityN"  value="<?php echo $CityN ;?>" />
                <br>
                כתובת<input type="text" name="txtAddressN"  value="<?php echo $AddressN ;?>" />
                <br>

                <input type="submit" name="submit" value="שמור" />
            </form>



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
	

