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

                    <u><b>הסטודנטים שבניהולי :</b></u>
                <table width="100%" dir="rtl" border="1">
                    <tr bgcolor="#549d9d">
                        <td align="center"><b> מספר סטודנט</b></td>
                        <td align="center"><b>שם משפחה</b></td>
                        <td align="center"><b> שם פרטי</b></td>
                        <td align="center"><b>טלפון</b></td>
                        <td align="center"><b>נייד</b></td>
                        <td align="center"><b>דוא"ל</b></td>
                        <td align="center"><b>עיר</b></td>
                        <td align="center"><b>כתובת</b></td>
                        <td align="center"><b>מספר פרויקט</b></td>
                    </tr>
                    <?php
                    $ResultTeacherId = $con->query("SELECT * FROM ".$TableName." WHERE Email='".$Email."'");
                    $rowTeacherId = $con->fetch_array($ResultTeacherId);
                    while ($row = $con->fetch_array($result))
                    {

                        $StringSelect = $con->query("SELECT * FROM ProjectTable WHERE TeacherId='".$rowTeacherId['TeacherId']."'");
                        while($rowStringSelect = $con->fetch_array($StringSelect))
                        {
                            $TeacherId=$rowStringSelect['TeacherId'];
                            $Projectid=$rowStringSelect['ProjectId'];
                            if($TeacherId==$rowTeacherId['TeacherId'] && $Projectid==$row['ProjectId'])
                            {
                                echo "<tr>";
                                echo "<td>".$row['StudentId']."</td>";
                                echo "<td>".$row['LastName'] ."</td>";
                                echo "<td>".$row['FirstName']."</td>";
                                echo "<td>".$row['Phone']."</td>";
                                echo "<td>".$row['CellPhone']."</td>";
                                echo "<td>".$row['Email']."</td>";
                                echo "<td>".$row['City']."</td>";
                                echo "<td>".$row['Address']."</td>";
                                echo "<td>".$row['ProjectId']."</td>";

                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </table>




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