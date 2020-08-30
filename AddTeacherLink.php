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
                $SqlGetTeacherCode="SELECT TeacherCode FROM TeachersCodesTable WHERE TeacherId='0'";
                $CodeResult=$con->query($SqlGetTeacherCode,$con);
                $CodeRow=$con->fetch_array($CodeResult);

                $Emailtxt=$_POST['txtEmail'];
                $TeacherId=$_POST['txtTeacherId'];

                $SqlAddTeacher="INSERT INTO TeachersTable (TeacherCode,TeacherId,LastName,FirstName, Email, City,Address,Phone,CellPhone)
			 VALUES
 			 ('$CodeRow','$TeacherId','$_POST[txtLastName]','$_POST[txtFirstName]','$Emailtxt','$_POST[txtCity]',
			  '$_POST[txtAddress]','$_POST[txtPhone]','$_POST[txtCellPhone]')";

                $SqlAddUser="INSERT INTO UsersTable (Email,Access)
				VALUES
				('$Emailtxt','TEACHER')";

                $resultAddTeacherCode=$con->query("UPDATE TeachersCodesTable SET TeacherId='".$TeacherId."' WHERE TeacherCode='".$CodeRow."'");

                if ((!$con->query($SqlAddTeacher ,$con)) || (!$con->query($SqlAddUser ,$con)))
                {
                    die('Error: ' . mysqli_error());
                }
                else
                {
                    echo "המורה התווסף בהצלחה";
                    ?>
                    <br>
                    <?php
                    echo "לחץ <a href=\"http://hulon.site90.com/AllTeachers.php\">כאן </a> כדי להוסיף רשומה חדשה";
                }

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
	
