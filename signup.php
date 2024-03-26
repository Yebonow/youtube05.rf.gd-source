<!DOCTYPE HTML>
<html>
    <?php 
        require("includes/headtag.php");
        $page_code = "sup";
        if ($user_li_status == true) {
            header("location: index.php");
        }
        if (isset($_POST["field_signup_submit"])) {
            if((count(array_filter($_POST)) + 1) == count($_POST)){
                $scr_name = strtolower(htmlspecialchars($_POST["field_signup_username"]));
                $password_1 = htmlspecialchars($_POST["field_signup_password_1"]);
                $password_2 = htmlspecialchars($_POST["field_signup_password_2"]);
                if (strlen($scr_name) == strlen(utf8_decode($scr_name))) {
                    if (!preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $_POST["field_signup_username"]) && (strlen(quotemeta($_POST["field_signup_username"])) == strlen($_POST["field_signup_username"])) && !str_contains($scr_name, ' ')) {
                        if (strlen($scr_name) <= 20 && strlen($scr_name) >= 2) {
                            if ($password_1 == $password_2) {
                                if (strlen($password_1) <= 20 && strlen($password_1) >= 2) {
                                    if (!SQL::Query("select screen_name from userdata where screen_name = :scr_name", [":scr_name" => $scr_name], true)) {
                                        SQL::Query("insert into userdata values (:scr_name, :password, :date_joined, :login_token)", [":scr_name" => $scr_name, ":password" => password_hash($password_1, PASSWORD_BCRYPT), ":date_joined" => date("Y-m-d"), ":login_token" => genuuid(64)], false);
                                        header("Location: index.php?login");
                                    } else {
                                        $error = "Screen Name already in-use.";
                                    }
                                } else {
                                    $error = "Screen Name/Password must be between 2 and 20 characters in length.";
                                }
                            } else {
                                $error = "Passwords do not match.";
                            }
                        } else {
                            $error = "Screen Name/Password must be between 2 and 20 characters in length.";
                        }
                    } else {
                        $error = "Screen Name contains special characters.";
                    }
                } else {
                    $error = "Screen Name contains special characters.";
                }
            } else {
                $error = "All fields must be filled.";
            }
        }
    ?>
    <body>
        <?php 
            require("includes/header.php");
        ?>
        <?php 
            require("includes/login_area.php");
        ?>
        <table width="720" bgcolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td width="15"><img src="/img/pixel.gif" width="15" height="1"></td>
                    <td>
                        <!-- content goes here -->
                        <span class="title">Sign Up</span>
                        <hr size="1" noshade="" class="title_hr">
                        <?php 
                            if (isset($error)) { 
                        ?>
                        <span class="error"><?= $error ?></span> 
                        <?php 
                            } 
                        ?>
                        <table width="690" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr valign="top">
                                    <td width="170">
                                        <table cellpadding="5" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>
                                                            Please enter your account information. All fields are required.
                                                        </p><br />
                                                        <p>
                                                            <strong>Note:</strong> Your contact information is private and will not be shared or sold to anyone, period! Please review our <a href="/privacy.php">privacy policy</a>.
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="15"><img src="/img/pixel.gif" width="15" height="200"></td>
                                    <td width="505">
                                        <form method="post" action="signup.php">
                                            <table width="505" cellpadding="5" cellspacing="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="120" align="right">
                                                            <span class="label">Screen Name:</span>
                                                        </td>
                                                        <td>
                                                            <input type="text" size="20" maxlength="20" name="field_signup_username" value="" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="120" align="right">
                                                            <span class="label">Password:</span>
                                                        </td>
                                                        <td>
                                                            <input type="password" size="20" maxlength="20" name="field_signup_password_1" value="" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="120" align="right">
                                                            <span class="label">Retype Password:</span>
                                                        </td>
                                                        <td>
                                                            <input type="password" size="20" maxlength="20" name="field_signup_password_2" value="" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            <br />
                                                            <span>- I certify I am at least 13 years old. </span>
                                                            <br />
                                                            <span>- I agree to the <a href="/terms.php">terms of use</a>. </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            <button type="submit" name="field_signup_submit">Sign Up</button>
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            <br />
                                                            <span>
                                                                Or, <a href="/index.php">return to the homepage</a>.
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="15"><img src="/img/pixel.gif" width="15" height="1"></td>
                </tr>
            </tbody>
        </table>
        <?php 
            require("includes/footer.html");
        ?>
    </body>
</html>

<!-- 
<table cellpadding="0" cellspacing="0" border="0">
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
-->