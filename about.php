<!DOCTYPE HTML>
<html>
    <?php 
        require("includes/headtag.php");
        $page_code = "abt";
    ?>
    <body>
        <?php 
            require("includes/header.php");
        ?>
        <?php 
            require("includes/login_form.php");
        ?>
        <table width="720" bgcolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td width="15"><img src="/img/pixel.gif" width="15" height="1"></td>
                    <td>
                        <!-- content goes here -->
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="170" valign="top">
                                        <table width="170" cellpadding="5" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td bgcolor="#DDDDDD" class="sidebar_link">
                                                        <a href="/about.php">
                                                            <strong>About Us</strong>
                                                        </a>
                                                    </td>
                                                    <td bgcolor="#DDDDDD" class="sidebar_link">
                                                        <a href="/about_contact.php">
                                                            Contact Us
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="15" valign="top">
                                        <img src="/img/pixel.gif" width="15" height="1">
                                    </td>
                                    <td width="505" valign="top">
                                        <span class="title">About Us</span>
                                        <hr size="1" noshade="" class="title_hr">
                                        <p>YouTube05 is the first website site that simulates what YouTube could have looked/felt like in Late April of 2005.</p><br />
                                        <p>We currently have everything working except 'My Favorites', 'My Messages', and 'Contact Us'.</p><br />
                                        <p>The first iteration of the website (V1) lasted from 25th October 2023 to 28th October 2023. V2 is the current stage of development. It began with a database reset.</p><br />
                                        <p>To learn more about our service, please see our <a href="/help.php">Help</a> section. </p>
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