<!DOCTYPE HTML>
<html>
    <?php 
        require("includes/headtag.php");
        $page_code = "upl";
        if ($user_li_status == false) {
            header("location: index.php?login");
        }
        if (isset($_POST['field_upload_submit'])) {
            $video_title = htmlspecialchars($_POST['field_upload_title']);
            $video_description = nl2br(htmlspecialchars($_POST['field_upload_description']));
            try {
                $video_id = genvideoid();
                $file_name = explode(".", $_FILES["field_upload_file"]["name"]);
                $file_extn = end($file_name);
                $allowed_extns = array("mp4", "webm");
                $path = "/video_files/";
                $endpoint = dirname(__FILE__) . $path . $video_id . "." . $file_extn;
                
                if (!in_array(strtolower($file_extn), $allowed_extns)) {
                    throw new \Exception("File is not of the '.mp4' or '.webm' format.");
                }

                if ($_FILES["field_upload_file"]["size"] > 10000000) {
                    throw new \Exception("Maximum Video Upload Size is 10 MB.");
                }
                
                if (move_uploaded_file($_FILES["field_upload_file"]["tmp_name"], $endpoint)) {
                    SQL::Query("insert into videodata values (:video_id, :title, :description, :date_added, :uploader, :file_extension)", [
                        ":video_id" => $video_id, 
                        ":title" => $video_title,
                        ":description" => $video_description,
                        ":date_added" => date("Y-m-d"),
                        ":uploader" => $user_scr_name,
                        ":file_extension" => $file_extn,
                    ], true);
                    $error = "Video Upload Successful.";
                } else {
                    $error = "Video Upload Failed.";
                }
            } catch (Exception $e) {
                $error = $e->getMessage();
            }
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
                        <?php 
                            if (isset($error)) { 
                        ?>
                        <span class="error"><?= $error ?></span><br /><br />
                        <?php 
                            } 
                        ?>
                        <span class="title">Upload Video (Step 1 of 2)</span>
                        <hr size="1" noshade="" class="title_hr">
                        <form action="my_videos_upload.php" method="post" enctype="multipart/form-data">
                            <table cellpadding="5" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td width="120" align="right">
                                            <span class="label">Video Title:</span>
                                        </td>
                                        <td>
                                            <input type="text" size="44" maxlength="60" name="field_upload_title" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="120" align="right">
                                            <span class="label">Video Description:</span>
                                        </td>
                                        <td>
                                            <textarea name="field_upload_description" style="width:291px;min-height:75px;resize:vertical"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table><br />
                            <span class="title">Upload Video (Step 2 of 2)</span>
                            <hr size="1" noshade="" class="title_hr">
                            <table cellpadding="5" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td width="120" align="right">
                                            <span class="label">Video File:</span>
                                        </td>
                                        <td>
                                            <input type="file" name="field_upload_file" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            <strong>Note from xamp2939 (owner of YouTube05):</strong>
                                            <p>
                                                InfinityFree has a maximum upload quota of 10MB, and we cannot change this. Please make sure your video is under the size of 10MB. You can cut your video into parts and upload separately.
                                            </p><br />
                                            <p>As for file formats, we currently support '.mp4' and '.webm'.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            <button type="submit" name="field_upload_submit">Upload Video</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
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