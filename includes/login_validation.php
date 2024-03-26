<?php
$user_li_status = false;
if (isset($_COOKIE["SESSID"])) {
    $login_token = $_COOKIE["SESSID"];
    $user_data = SQL::Query("select screen_name from userdata where login_token = :login_token", [":login_token" => $login_token], true);
    if (!empty($user_data)) {
        $user_li_status = true;
        $user_scr_name = $user_data[0]['screen_name'];
    } else {
        setcookie("SESSID", "", 0, "/");
    }
}
?>