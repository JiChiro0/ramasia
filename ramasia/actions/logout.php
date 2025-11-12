<?php
session_start();
session_destroy();
session_unset();
header("Location: ../ramasia-landing-page.php");
exit();
?>