<!DOCTYPE HTML>
<html>
    <?php 
        require("includes/headtag.php");
        if (!empty($_GET["username"])) {
            $scr_name = $_GET["username"];
        } else {
            header("Location: index.php?404_profile");
        }
        if ($user_li_status == true) {
            if ($scr_name == $user_scr_name) {
                $page_code = "pro";
            } else {
                $page_code = "prp";
            }
        } else {
            $page_code = "prp";
        }
        $user_data = SQL::Query("select date_joined from userdata where screen_name = :scr_name", [":scr_name" => $scr_name], true);
        $videos_data = array_reverse(SQL::Query("select * from videodata where uploader = :scr_name order by date_added", [":scr_name" => $scr_name], true));
        if (empty($user_data)) {
            header("Location: index.php?404_profile");
        }
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
                        <span class="title"><?= $scr_name ?>'s Profile</span>
                        <hr size="1" noshade="" class="title_hr">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="475" valign="top">
                                        <table width="475" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <?php 
                                                foreach ($videos_data as $video_data) {
                                                ?>
                                                <tr>
                                                    <td class="entry">
                                                        <p class="label"><a href="watch.php?video_id=<?= $video_data['video_id'] ?>"><?= $video_data["title"] ?></a></p>
                                                        <p class="label">Added on <?= $video_data["date_added"] ?> by <?= $scr_name ?></p>
                                                        <p><?= $video_data["description"] ?></p>
                                                        <hr size="1" noshade="" class="div_hr">
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="15"><img src="/img/pixel.gif" width="15" height="200"></td>
                                    <td width="200" valign="top">
                                        <p>
                                            <span class="label">Screen Name:</span>
                                            <?= $scr_name ?>
                                        </p>
                                        <p>
                                            <span class="label">Date Joined:</span>
                                            <?= $user_data[0]["date_joined"] ?>
                                        </p>
                                        <p>
                                            <span class="label">Videos Added:</span>
                                            <?= count($videos_data) ?>
                                        </p>
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