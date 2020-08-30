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
                $TaskIdN=$_GET['id'];
                $TaskNameN=$_GET['name'];
                $ReportIdN=$_GET['RId'];
                $PresentationIdN=$_GET['PId'];
                $DateN=$_GET['date'];
                $GradeN=$_GET['grade'];
                $CommentN=$_GET['comment'];
                ?>

            <form method="post" action="EditTaskLink.php?taskid=<?php echo $TaskIdN; ?>">
                מספר מטלה<input type="text" name="txtTaskIdN" disabled="disabled" value="<?php echo $TaskIdN ;?>" />
                <br>
                שלבי הפרויקט<input type="text" name="txtTaskNameN"  value="<?php echo $TaskNameN ;?>" />
                <br>
                דו"ח<input type="text" name="txtReportIdN"  value="<?php echo $ReportIdN ;?>" />
                <br>
                מצגת<input type="text" name="txtPresentationIdN"  value="<?php echo $PresentationIdN ;?>" />
                <br>
                תאריך<input type="text" name="txtDateN"  value="<?php echo $DateN ;?>" />
                <br>
                ציון(%)<input type="text" name="txtGradeN"  value="<?php echo $GradeN ;?>" />
                <br>
                הערות<input type="text" name="txtCommentN"  value="<?php echo $CommentN ;?>" />
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
	

