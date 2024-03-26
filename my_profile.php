<?php 
require_once("includes/classes/dbq.php");
require_once("includes/login_validation.php");
if ($user_li_status == true) {
    header("Location: profile.php?username=".$user_scr_name);
} else {
    header("Location: index.php?login");
}
?>