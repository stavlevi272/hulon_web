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
                $Emailtxt=$_POST['txtEmail'];
                $SqlAddStudent="INSERT INTO StudentsTable (StudentId,LastName,FirstName, Email, City,Address,Phone,CellPhone)
			 VALUES
 			 ('$_POST[txtStudentId]','$_POST[txtLastName]','$_POST[txtFirstName]','$Emailtxt','$_POST[txtCity]',
			  '$_POST[txtAddress]','$_POST[txtPhone]','$_POST[txtCellPhone]')";

                $SqlAddUser="INSERT INTO UsersTable (Email,Access)
				VALUES
				('$Emailtxt','STUDENT')";


                if ((!$con->query($SqlAddStudent ,$con)) || (!$con->query($SqlAddUser ,$con)))
                {
                    die('Error: ' . mysqli_error());
                }
                else
                {
                    echo " הסטודנט התווסף בהצלחה";
                    ?>
                    <br>
                    <?php
                    echo " לחץ <a href=\"/AllStudents.php\">כאן </a> כדי להוסיף רשומה חדשה";
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
	
