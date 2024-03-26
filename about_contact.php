<!DOCTYPE HTML>
<html>
    <?php 
        require("includes/headtag.php");
        $page_code = "con";
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
                                                            About Us
                                                        </a>
                                                    </td>
                                                    <td bgcolor="#DDDDDD" class="sidebar_link">
                                                        <a href="/about_contact.php">
                                                            <strong>Contact Us</strong>
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
                                        <span class="title">Contact Us</span>
                                        <hr size="1" noshade="" class="title_hr">
                                        <span>Note: We didn't build the contact form yet.</span>
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