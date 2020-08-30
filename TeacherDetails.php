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
                // The parameter $rowUserDetails from TopPage
                $UserTeacherId = $rowUserDetails['TeacherId'];
                $UserFirstName = $rowUserDetails['FirstName'];
                $UserLastName = $rowUserDetails['LastName'];
                $UserPhone = $rowUserDetails['Phone'];
                $UserCellPhone = $rowUserDetails['CellPhone'];
                $UserCity = $rowUserDetails['City'];
                $UserAddress = $rowUserDetails['Address'];
                ?>

            <form method="post" action="EditTeacherDetails.php?teacherid=<?php echo $UserTeacherId; ?>">
                מספר מנחה<input type="text" name="txtTeacherIdN" disabled="disabled" value=<?php echo $UserTeacherId ;?> />
                <br>
                שם משפחה<input type="text" name="txtLastNameN"  value=<?php echo $UserLastName ;?> />
                <br>
                שם פרטי<input type="text" name="txtFirstNameN"  value=<?php echo $UserFirstName ;?> />
                <br>
                טלפון<input type="text" name="txtPhoneN"  value=<?php echo $UserPhone ;?> />
                <br>
                נייד<input type="text" name="txtCellPhoneN"  value=<?php echo $UserCellPhone ;?> />
                <br>
                דוא"ל<input type="text" name="txtEmailN"  value=<?php echo $Email ;?> />
                <br>
                עיר<input type="text" name="txtCityN"  value=<?php echo $UserCity ;?> />
                <br>
                כתובת<input type="text" name="txtAddressN"  value=<?php echo $UserAddress ;?> />
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
