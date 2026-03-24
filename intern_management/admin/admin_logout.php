
<!-- Admin logout Section -->
<?php

session_start();
session_unset();
session_destroy();
header("Location:../intern_admin.php");

?>