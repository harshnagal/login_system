<?php
session_start();
session_destroy();
header('Location: login.html');
//also we can give a page html like to destroy the given timeline
?>
