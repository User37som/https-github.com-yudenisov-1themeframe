<?php
include(dirname(__FILE__) . '/functions.php');
$user_function = $_POST['action'];
call_user_func_array($user_function, $_POST);
?>