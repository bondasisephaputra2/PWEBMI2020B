<html>
<body>

<?php
$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["name"])) {
        $nameErr = "Only letters and white space allowed";
    }
    else if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
   
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }else {
        $email = test_input($_POST["email"]);
    }

//   $name = test_input($_POST["name"]);

//   $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

Welcome <?php echo $name; ?><br>
<span style="color: red;"><?php if($nameErr){ echo $nameErr."<br/>"; } ?></span>
Your email address is: <?php echo $email; ?><br/>
<span style="color: red;"><?php if($emailErr){ echo $emailErr."<br/>"; } ?></span>
Your comment is: <?php echo $comment; ?><br/>
Your gender is: <?php echo $gender; ?><br/>
<input type="button" value="back" onclick="window.location.href='index.php'">
</body>
</html>