<?php 
$video_id = $_GET["video_id"];
$video_format = $_GET["video_format"];
echo(file_get_contents("video_files/".$_GET["video_id"].".".$_GET["video_format"]));
?>