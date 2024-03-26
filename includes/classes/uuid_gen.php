<?php
function genuuid($length) {
    $uuid = bin2hex(random_bytes($length/2));
    return $uuid;
}

function genvideoid() {
    $length = 11;
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-";
    $str = "";    

    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[mt_rand(0, strlen($chars) - 1)];
    }

    return $str;
}
?>