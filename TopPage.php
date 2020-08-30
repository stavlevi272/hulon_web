<?php
// Start a new session
session_start();

// Connect to the db and save the connection in parameter $con
require 'ConnectDB.php';

// Set the user access to null
$UserAccess = null;

// Check if the user is already connected to the site
if((!isset($_SESSION['Email'])) || (!isset($_SESSION['Password'])))
{
    $UserAccess=null;
}
else
{
    $result = $con->query("SELECT * FROM UsersTable WHERE Email='".$_SESSION['Email']."'  AND Password='".$_SESSION['Password']."'");

    $UserId;
    $Password;
    $Email;

    // Check if the user exist
    if(mysqli_num_rows($result)!=0)
    {
        $row=$con->fetch_array($result);

        // Get the user details from the row
        $UserId=$row['UserId'];
        $Password=$row['Password'];
        $Email=$row['Email'];
        $UserAccess=$row['Access'];

        // A variable to save the table name
        $TableName;

        // check the access of the user
        if($UserAccess=="STUDENT")
        {
            $TableName="StudentsTable";
        }
        elseif($UserAccess=="TEACHER")
        {
            $TableName="TeachersTable";
        }
        elseif($UserAccess=="ADMIN")
        {
            $TableName="AdminsTable";
        }

        // Get the FirstName and the LastName of the user
        $resultUserDetails = $con->query("SELECT * FROM ".$TableName." WHERE Email='".$Email."'");

        $rowUserDetails= $con->fetch_array($resultUserDetails);
        $UserFirstName = $rowUserDetails['FirstName'];
        $UserLastName = $rowUserDetails['LastName'];
    }
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="he">
<head>
    <title>המכון הטכנולוגי חולון-פרויקטי גמר</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" charset="UTF-8">

    <!-- JavaScript -->
    <script type="text/javascript" src="javascript/FlashScript.js"></script>
    <script type="text/javascript" src="javascript/dom-drag.js"></script>
    <script type="text/javascript" src="javascript/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="javascript/superfish.js"></script>
    <script type="text/javascript" src="javascript/swfobject.js"></script>
    <script type="text/javascript" src="javascript/jquery.Private.js"></script>
    <script type="text/javascript" src="javascript/ValidateScript.js"></script>


    <!-- Css stylesheets -->
    <link href="/css/style.css?modified=20120909" rel="stylesheet" type="text/css">

</head>


<body dir="rtl" align="center" width="80%" width="990px">
<!-- up table blue line background -->
<!--<table class="tblBlueLine" id="up" align="center" width="80%" dir="rtl" border="5" style="background-color:#008284"></table>-->

<table class="tblbody" dir="rtl" align="center" width="80%">
    <tr align="center" dir="rtl">
        <td align="center" dir="rtl">
            <div class="divuppermenu" align="right">

                <div dir="rtl" align="left" class="div_upper_menu">
                    <ul class="uluppermenu">
                        <li><a href="http://www.hit.ac.il/about/contact-us"target="_blank"> צור קשר | </a>  </li>
                        <li ><a href="http://www.hit.ac.il/"target="_blank">לאתר הטכנולוגי חולון </a></li>
                    </ul>
                    <ul align="right">
                        <?php
                        echo date("d/m/Y");
                        ?>
                    </ul>
                </div>


                <!-- Table to display the logo image -->
                <table align="right" width="80%" border="0">
                    <tr align="right">
                        <td class="td_logo_image" align="right">
                            <div class="div_logo_image" align="right">
                                <!-- Image above main menu; Css design -->
                                <img src="/images/logo2.jpg"></img>
                            </div>
                        </td>
                        <?php
                        // Check if the user is not login
                        if($UserAccess==null)
                        {
                        ?>
                        <td class="td_login" align="left">
                            <form method="post" action="Login.php?getaccess=הנך מועבר כעת לדף הראשי...&noaccess=משתמש לא קיים!&filename=index.php" >
                                <table border="0" align="left" class="tbl_login_panel" bgcolor="red">
                                    <tr>

                                        <td class="td_login_panel">אימייל: </td><td><input type="text" name="txtUsername" align="left" /></td>
                                        <td class="td_login_panel">סיסמא: </td><td><input type="password" name="txtPassword" align="left" /></td>
                                        <td></td><td class="td_login_panel"><input type="submit" value="התחבר" align="left"/></td>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                        <td class="td_logout" align="left">
                                            <form method="post" action="Logout.php" >
                                                <table border="0" align="left" class="tbl_login_panel" bgcolor="red">
                                                    <tr align="left">
                                                        <td class="td_login_panel" align="left">שלום,</td>
                                                        <td><?php echo $UserFirstName;?></td><td class="td_login_panel"><?php echo $UserLastName;?></td>
                                                        <td class="td_login_panel" align="left"><input type="submit" value=" התנתק " align="left"/></td>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tr>
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                </table>






                                <!-- Table to display the main image -->
                                <div class="div_main_image" align="center">
                                    <!-- Image above main menu; Css design -->
                                    <img src="/images/main.jpg"></img>
                                </div>


                                <div class="div_main_menu" align="center">
                                    <span class="skipToHere"><a title="" id="skipToMainLinks" name="skipToMainLinks"></a></span>
                                    <h5 class="hidden">תפריט ראשי</h5>
                                    <ul class="sf-menu">
                                        <li class="navTabLI" name="SiteArea_Main">

                                            <a href="/index.php" class="navTabLink" >ראשי</a>

                                        </li>


                                        <li class="navTabLI" name="SiteArea_General">

                                            <a href="#" style="cursor: default;" class="navTabLink" >כללי</a>

                                            <ul>

                                                <li><a href="/ProjectSchedule.php">לו"ח זמנים</a></li>
                                                <li><a href="/ExplainProjectTasks.php" >שלבי ביצוע פרויקט הגמר</a></li>

                                            </ul>

                                        </li>


                                        <li class="navTabLI" name="SiteArea_Teachers">

                                            <a href="#" style="cursor: default;" class="navTabLink" >מנחים</a>
                                            <?php
                                            // Check  the user Access
                                            if($UserAccess=="TEACHER")
                                            {
                                                ?>
                                                <ul>

                                                    <li><a href="/TeacherProjects.php">רשימת פרוייקטים</a></li>
                                                    <li><a href="/TeacherStudents.php" >רשימת סטודנטים</a></li>
                                                    <li><a href="/TeacherDetails.php" >פרטים אישיים</a></li>

                                                </ul>
                                                <?php
                                            }
                                            ?>
                                        </li>

                                        <li class="navTabLI" name="SiteArea_Students">

                                            <a href="#" style="cursor: default;" class="navTabLink" >סטודנטים</a>
                                            <?php
                                            if($UserAccess=="STUDENT")
                                            {
                                                ?>
                                                <ul>

                                                    <li><a href="/Grades.php" >הציונים שלי</a></li>
                                                    <li><a href="/StudentDetails.php" >פרטים אישיים</a></li>
                                                    <li><a href="" >3</a></li>
                                                    <li><a href="" >4</a></li>
                                                    <li><a href="" >5</a></li>

                                                </ul>
                                                <?php
                                            }
                                            ?>

                                        </li>
                                        <li class="navTabLI" name="SiteArea_Students">

                                            <a href="#" style="cursor: default;" class="navTabLink" >מנהל</a>
                                            <?php
                                            if($UserAccess=="ADMIN")
                                            {
                                                ?>
                                                <ul>

                                                    <li><a href="/AllStudents.php" >סטודנטים</a></li>
                                                    <li><a href="/AllTeachers.php" >מנחים</a></li>
                                                    <li><a href="/EditProjectSchedule.php" > לוח זמנים</a></li>
                                                    <li><a href="/OpenNewYear.php" > פתיחת שנה חדשה</a></li>
                                                    <li><a href="/AdminsDetails.php" > לוח בקרה אישית </a></li>


                                                </ul>
                                                <?php
                                            }
                                            ?>

                                        </li>
                                        <li class="navTabLI_search" name="SiteArea_Students">

                                            <!--	<a href="" class="navTabLink" > </a>  -->

                                        </li>
                                    </ul>
                                </div>

            </div>
        </td>
    </tr>
</table>

<!--	<form action="upload_file.php" method="post" enctype="multipart/form-data">
   <input type="file" name="myfile" /><br />
   <input type="submit" value="שלח קובץ" />
   </form>  -->

<!-- explain about the project-->
