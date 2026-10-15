<?php
require_once 'auth.php';

// Pass an array of all roles allowed to view this page
authorise(['admin', 'staff', 'student', 'guest']);

session_unset();
session_destroy();
header("Location: login.php");
exit;
