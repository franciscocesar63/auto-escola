<?php

include_once '../config/config.php';
session_start();

unset($_SESSION['usuario']);
session_destroy();

header("Location: " . DIRPAGE . "pages/login.php");
