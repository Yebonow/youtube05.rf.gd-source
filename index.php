<!DOCTYPE HTML>
<html>
    <?php 
        require("includes/headtag.php");
        $page_code = "hom";
        $video_data = SQL::Query("select * from videodata order by rand() limit 1", [], true)[0];
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
                        <table width="690" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td align="center">     
                                        <object​>
                                            <param name="movie" value="youtube.swf?video_id=<?= $video_data["video_id"] ?>" codebase="http://download.macromedia.com/" width="690" height="475" id="player" />
                                            <param name="quality" value="high" />
                                            <param name="bgcolor" value="#FFFFFF" />
                                            <embe​d​>
                                                <link rel="stylesheet" href="/youtube.swf/player.css">
                                                <!-- this is illusion breaking that there are divs, but I can"t do anything to fix it -->
                                                <div class="playerContainer">
                                                    <div class="player" id="playerBox">
                                                        <div id="bkgGradient">
                                                            <span class="video_title"><?= $video_data["title"] ?></span>
                                                            <span class="video_subtitle">Added on <?= $video_data["date_added"] ?> by <a href="/profile.php?username=<?= $video_data["uploader"] ?>"><?= $video_data["uploader"] ?></a></span>
                                                            <div class="mainContainer">
                                                                <div class="playerScreen">
                                                                    <div class="playbackArea">
                                                                        <div class="videoContainer">
                                                                            <video class="videoObject" width="405" height="303" id="video">
                                                                                <source src="/get_video.php?video_id=<?= $video_data["video_id"] ?>&video_format=<?= $video_data["file_extension"] ?>"> 
                                                                            </video>
                                                                        </div>
                                                                    </div>
                                                                <div class="watermark">
                                                                        <img src="/youtube.swf/img/watermark.png" height="35px">
                                                                    </div>
                                                                </div>
                                                                <div class="controlBackground">
                                                                    <div class="controlContainer">
                                                                        <div class="lBtnContainer">
                                                                            <div class="button" id="playButton">
                                                                                <img src="/youtube.swf/img/play.png" id="playIcon">
                                                                                <img src="/youtube.swf/img/pause.png" class="hidden" id="pauseIcon">
                                                                            </div>
                                                                        </div>
                                                                        <div class="centerContainer">
                                                                            <div class="seekbarElementContainer">
                                                                                <progress class="seekProgress" id="seekProgress" value="0" min="0"></progress>
                                                                            </div>
                                                                            <div class="seekbarElementContainer">
                                                                                <input class="seekHandle" id="seekHandle" value="0" min="0" step="1" type="range">
                                                                            </div>
                                                                        </div>
                                                                        <div class="rBtnContainer">
                                                                            <div class="button" id="muteButton">
                                                                                <img src="/youtube.swf/img/mute.png" id="muteIcon">
                                                                                <img src="/youtube.swf/img/unmute.png" class="hidden" id="unmuteIcon">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="description" style="margin-bottom:15px;">
                                                                <center>
                                                                    <span class="label" style="display:block;margin-bottom:2px;">Share this Video:</span>
                                                                    <input type="text" size="49" value="<?= (empty($_SERVER["HTTPS"]) ? "http" : "https") . "://$_SERVER[HTTP_HOST]/watch.php?video_id=".$video_data["video_id"]; ?>" onClick="this.setSelectionRange(0, this.value.length)" style="text-align:center" readonly>
                                                                </center>
                                                            </div>
                                                            <div class="description">
                                                                <center>
                                                                    <span class="label" style="display:block;margin-bottom:2px;">Description:</span>
                                                                </center>
                                                                <div class="description-data">
                                                                    <?= $video_data["description"] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script src="/youtube.swf/player.js"></script>
                                            </embed>
                                        </object​>
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