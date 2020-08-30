<?php
/**
 * The letter l (lowercase L) and the number 1
 * have been removed, as they can be mistaken
 * for each other.  */
$chars = "abcdefghijkmnopqrstuvwxyz023456789";
$i = 0;
$pass = '' ;
// הסיסמא תכיל 8 תווים
while ($i <= 7)
{

 // הפעולה rand() מגרילה מספר
 // על המספר שהוגרל נעצה פעולת חילוק בשם -מוד- אשר יחזיר לנו את שארית החלוקה של
 // המספר שהוגרל ב - 34 , כך השארית שתתקבל תמיד תיהיה קטנה מ - 34 כולל 0 ,כך שאין בעיה
 // משום ש במחרוזת $char
 // יש 34 תווים והיא מתחילה ע"פ הגדרה ממקום 0"
 $num = rand() % 34;
 // substr(אורך תת המחרוזת, מציין המיקום ההתחלתי של התת מחרוזת, המחרוזת הראשית)
 $tmp = substr($chars, $num, 1);
 $pass = $pass . $tmp;
 $i++;
}

//echo "Your random password is: $password";
echo $pass;
?>