<?php


session_start();
session_destroy();
header('location:librarian/login/librarylogin.php');
?>