<?php
session_start();
session_unset();
session_destroy();

// to access the login page, we have to leave this page to access the inc page and then get the login file.
header("Location: ../registration/login.php?You have been logged out");