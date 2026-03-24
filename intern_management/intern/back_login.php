
<?php

session_start();
session_unset();
session_destroy();

header("Location:interns_login.php");
exit();

?>