<?php
// date_default_timezone_set('Asia/Jakarta');

// include 'welcome.php';
// require 'welcome.php';

?>

<!DOCTYPE HTML>
<html>  
<body>
<?= "The time is " . date("h:i:sa") ?>
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<br>
<input type="submit" value="save">
</form>



<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);

echo "test";
?>



</body>
</html>