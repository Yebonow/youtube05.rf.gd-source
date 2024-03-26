<?php 
if (isset($_POST["field_login_submit"])) {
    if((count(array_filter($_POST)) + 1) == count($_POST)){
        $scr_name = strtolower(htmlspecialchars($_POST["field_login_username"]));
        $password = htmlspecialchars($_POST["field_login_password"]);
        $user_data = SQL::Query("select password from userdata where screen_name = :scr_name", [":scr_name" => $scr_name], true);
        if (!empty($user_data)) {
            $password_db = $user_data[0]["password"];
            if (password_verify($password, $password_db)) {
                $login_token = genuuid(64);
                SQL::Query("update userdata set login_token = :login_token where screen_name = :scr_name", [":login_token" => $login_token, ":scr_name" => $scr_name], false);
                setcookie("SESSID", $login_token, 0, "/");
                header("Location: index.php?login_success");    
            } else {
                $login_error = "Incorrect Screen Name or Password. <a href=\"/reset.php\">Reset Password</a>";
            }
        } else {
            $login_error = "Account does not exist.";
        }
    } else {
        $login_error = "All fields must be filled.";
    }
}
?>