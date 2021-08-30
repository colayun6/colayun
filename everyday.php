<?php
header("content-type:image/jpg");
echo file_get_contents(json_decode(file_get_contents("http://dwz.2xb.cn/zaob"))->imageUrl);
?>