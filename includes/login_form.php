<table width="720" bgcolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td width="38" height="48" valign="top">
                        <img src="/img/box_point_tl.gif" border="0"/>
                    </td>
                    <td><br />
                        <?php 
                            if (isset($login_error)) { 
                        ?>
                        <center><span class="error"><?= $login_error ?></span></center>
                        <?php 
                            } 
                        ?>
                        <form method="post" action="index.php?login=success">
                            <table bgcolor="#C6DFF1" align="center" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td><img src="/img/box_login_tl.gif" width="5" height="5"></td>
                                    <td><img src="/img/pixel.gif" width="1" height="5"></td>
                                    <td><img src="/img/box_login_tr.gif" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="/img/pixel.gif" width="5" height="1"></td>
                                    <td>
                                    <?php if ($user_li_status == true) { ?>
                                    <table cellpadding="2" cellspacing="0" border="0">
                                        <tr>
                                            <td>
                                                <center><span class="title">Hi, <?= $user_scr_name ?></span></center>
                                            </td>
                                        </tr>
                                    </table>
                                    <?php } else { ?>
                                    <table cellpadding="2" cellspacing="0" border="0">
                                        <tr>
                                            <td><span class="label">Screen Name:</span></td>
                                            <td><input type="text" size="20" name="field_login_username" value=""></td>
                                            <td>&nbsp;</td>
                                            <td><span class="label">Password:</span></td>
                                            <td><input type="password" size="20" name="field_login_password"></td>
                                            <td><button type="submit" name="field_login_submit">Log In</button></td>
                                        </tr>
                                    </table>
                                    <?php } ?>
                                    </td>
                                    <td><img src="/img/pixel.gif" width="5" height="1"></td>
                                </tr>
                                <tr>
                                    <td><img src="/img/box_login_bl.gif" width="5" height="5"></td>
                                    <td><img src="/img/pixel.gif" width="1" height="5"></td>
                                    <td><img src="/img/box_login_br.gif" width="5" height="5"></td>
                                </tr>
                            </table>
                        </form><br />
                    </td>
                    <td width="38" width="48" valign="top">
                        <img src="/img/box_point_tr.gif" border="0"/>
                    </td>
                </tr>
            </tbody>
        </table>
