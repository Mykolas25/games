<?php
session_start();
require_once __DIR__ . "/../core/Message.php";
require_once __DIR__ . "/../helpers.php";

if(!($_SESSION['is_authenticated'] ?? '') && $_SERVER['REQUEST_URI'] !== '/login'){
    redirect('/login');
}
require_once  __DIR__ . "/../routes/web.php";
?>


