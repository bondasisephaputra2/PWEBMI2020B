<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables

// remove all session variables
// session_unset();

// destroy the session
session_destroy();

echo $_SESSION["favcolor"];
echo "<br/>";
echo $_SESSION["favanimal"];
?>

</body>
</html>