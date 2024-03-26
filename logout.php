<?php
require_once("includes/classes/dbq.php");
require_once("includes/classes/uuid_gen.php");
require_once("includes/login_validation.php");
$login_token = genuuid(64);
SQL::Query("update userdata set login_token = :login_token where screen_name = :scr_name", [":login_token" => $login_token, ":scr_name" => $user_scr_name], false);
header("Location: index.php");
?>