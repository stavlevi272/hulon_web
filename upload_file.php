<?php   
$dir = '/UploadFiles/';   
$url = 'http://www.hulon.site90.com/UploadFiles';

if($_FILES['myfile']['error'] != 0)
{
    echo "שגיאה בשליחת הקובץ לשרת, קוד שגיאה: {".$_FILES['myfile']['error']."}";
}
elseif(move_uploaded_file($_FILES['myfile']['tmp_name'], $dir . $_FILES['myfile']['name']))
{
    echo "הקובץ הועלה בהצלחה!! " ?>
    <html>
    </br>

    <a href="'{$url}{$_FILES['myfile']['name']}'">"{"$url}{$_FILES['myfile']['name']}"</a>;    </html> \
    <?php
}
else
{
    echo "שגיאה בהעברת הקובץ מתקיית הקבצים הזמניים בשרת למיקום הסופי.";
}


?> 
