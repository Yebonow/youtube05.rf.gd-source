<?php 
    $hom = $fav = $mes = $upl = $pro = "ff";
    switch($page_code) {
        case "hom": 
            $hom = "n";
            break;
        case "fav": 
            $fav = "n";
            break;
        case "mes": 
            $mes = "n";
            break;
        case "upl": 
            $upl = "n";
            break;
        case "pro": 
            $pro = "n";
            break;
        default: break;
    }
?>
<table width="720" bgcolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr height="10">
                <td bgcolor="#999999"><img src="/img/box_tl.gif" width="10" border="0"/></td>
                <td><img src="/img/box_top.gif" border="0"/></td>
                <td bgcolor="#999999"><img src="/img/box_tr.gif" width="10" border="0"/></td>
            </tr>
            <tr>
                <td><img src="/img/box_lside.gif" width="10" border="0"/></td>
                <td>
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td width="154">
                                    <a href="/index.php" class="img_link">
                                        <img src="/img/logo.gif" width="154" height="60" border="0" border="0"/>
                                    </a>
                                </td>
                                <td height="60">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr height="34">
                                                                <td><img src="/img/tab_tspace.gif" width="394" height="34" border="0"/></td>
                                                                <td>
                                                                    <?php if ($user_li_status == true) { ?>
                                                                    <a href="/logout.php" class="img_link">
                                                                        <img src="/img/link_logout.gif" width="94" height="34" border="0"/>
                                                                    </a>
                                                                    <?php } else { ?>
                                                                    <a href="/signup.php" class="img_link">
                                                                        <img src="/img/link_signup.gif" width="94" height="34" border="0"/>
                                                                    </a>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <a href="/help.php" class="img_link">
                                                                        <img src="/img/link_help.gif" width="58" height="34" border="0"/>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr bgcolor="#6699CC">
                                                                <td bgcolor="#FFFFFF" width="97" height="26">
                                                                    <a href="/index.php" class="img_link">
                                                                        <img src="/img/tab_home_o<?= $hom ?>.gif" alt="Home" border="0"/>
                                                                    </a>
                                                                </td>
                                                                <td bgcolor="#FFFFFF" width="97" height="26">
                                                                    <a href="/my_favorites.php" class="img_link">
                                                                        <img src="/img/tab_fav_o<?= $fav ?>.gif" alt="Favorites" border="0"/>
                                                                    </a>
                                                                </td>
                                                                <td bgcolor="#FFFFFF" width="97" height="26">
                                                                    <a href="/my_messages.php" class="img_link">
                                                                        <img src="/img/tab_mes_o<?= $mes ?>.gif" alt="Messages" border="0"/>
                                                                    </a>
                                                                </td>
                                                                <td bgcolor="#FFFFFF" width="97" height="26">
                                                                    <a href="/my_videos_upload.php" class="img_link">
                                                                        <img src="/img/tab_upl_o<?= $upl ?>.gif" alt="Upload" border="0"/>
                                                                    </a>
                                                                </td>
                                                                <td bgcolor="#FFFFFF" width="97" height="26">
                                                                    <a href="/my_profile.php" class="img_link">
                                                                        <img src="/img/tab_pro_o<?= $pro ?>.gif" alt="Profile" border="0"/>
                                                                    </a>
                                                                </td>
                                                                <td width="61" height="26">
                                                                    <img src="/img/pixel.gif" width="61" height="26">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td><img src="/img/box_rside.gif" width="10" border="0"/></td>
            </tr>
        </table>
