<?php

session_start();
// destroy the session
session_destroy();

session_start();

header("Location: ../Homepage/homepage.php");
?>
