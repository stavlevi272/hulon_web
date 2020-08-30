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

                $StudentID=$_GET['Id'];
                $ProjectTableResult= $con->query("SELECT * FROM ProjectTable WHERE StudentIdA='".$StudentID."' OR StudentIdB='".$StudentID."'");
                // get the teacher id from the table result
                $ProjectTableRow= $con->fetch_array($ProjectTableResult);
                $TeacherID=$ProjectTableRow['TeacherId'];
                //Get the details about the teacher form the teacher id
                $ResultTeachersTable =$con->query("SELECT * FROM TeachersTable WHERE TeacherId='".$TeacherID."'");
                $RowTeachersTable= $con->fetch_array($ResultTeachersTable);

                $StudentIdA=$ProjectTableRow['StudentIdA'];
                $StudentIdB=$ProjectTableRow['StudentIdB'];
                //Get the student A details
                $ResultStudentsTableA =$con->query("SELECT * FROM StudentsTable WHERE StudentId='".$StudentIdA."'");
                $RowStudentsTableA= $con->fetch_array($ResultStudentsTableA);
                //Get the student B details
                $ResultStudentsTableB =$con->query("SELECT * FROM StudentsTable WHERE StudentId='".$StudentIdB."'");
                $RowStudentsTableB= $con->fetch_array($ResultStudentsTableB);
                //StudentA
                $StudentAFName=$RowStudentsTableA['FirstName'];
                $StudentALName=$RowStudentsTableA['LastName'];
                //StudentB
                $StudentBFName=$RowStudentsTableB['FirstName'];
                $StudentBLName=$RowStudentsTableB['LastName'];
                //Teacher
                $TeacherFirstName=$RowTeachersTable['FirstName'];
                $TeacherLastName=$RowTeachersTable['LastName'];
                ?>

                שם מנחה: <?php echo $TeacherFirstName ." ".$TeacherLastName;?>
                <br>
                <?php

                if($StudentID == $StudentIdA)
                {
                    $Xx="A";
                }
                else
                {
                    $Xx="B";
                }
                $ProjectName=$ProjectTableRow['ProjectName'];


                if(($StudentIdA !="null") && ($StudentIdA !="") && ($StudentIdA!=0) && ($StudentIdB != "null") && ($StudentIdB != "") && ($StudentIdB !=0))
                {
                    ?>
                    שם פרויקט:<u> <?php echo $ProjectName;?></u>
                    <br>
                    <?php
                    if($Xx=="A")
                    {
                        ?>
                        מי בצוות ? : <?php echo $StudentAFName ." ".$StudentALName .","." ". $StudentBFName ." ". $StudentBLName;?>
                        <br>
                        <?php
                    }
                    else
                    {?>
                        מי בצוות ? : <?php echo $StudentBFName ." ".$StudentBLName .","." ". $StudentAFName ." ". $StudentALName;?>
                        <br>
                        <?php
                    }
                }
                else
                {
                    echo "<font color='red'>*סטודנט זה לא צוות עדיין לפרויקט על ידי המנחה.</font>";

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
	
