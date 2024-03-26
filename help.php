<!DOCTYPE HTML>
<html>
    <?php 
        require("includes/headtag.php");
        $page_code = "hel";
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
                                                        <a href="/help.php">
                                                            <strong>Help</strong>
                                                        </a>
                                                    </td>
                                                    <td bgcolor="#DDDDDD" class="sidebar_link">
                                                        <a href="/help_faq.php">
                                                            Frequently Asked Questions
                                                        </a>
                                                    </td>
                                                    <td bgcolor="#DDDDDD" class="sidebar_link">
                                                        <a href="/about_contact.php">
                                                            Contact YouTube
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
                                        <span class="title">Help</span>
                                        <hr size="1" noshade="" class="title_hr">
                                        <p>If you run into a site or video issue or simply have some questions, please refer to the sections below.</p><br /><br />
                                        <span class="highlight">Frequently Asked Questions</span class="highlight">
                                        <br />
                                        <br />
                                        <p>Have some questions about our service? Please check out our <a href="/help_faq.php">FAQ</a> for answers to some common questions.</p>
                                        <br />
                                        <br />
                                        <span class="highlight">Contact YouTube</span class="highlight">
                                        <br />
                                        <br />
                                        <p>If you have any account or video issues, please <a href="/about_contact.php">contact us</a> here. Also, if you have any ideas or suggestions to make our service better, please don't hesitate to drop us a line. </p>
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