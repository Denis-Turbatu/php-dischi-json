<?php
$disks_list = file_get_contents("dischi.json");
$list = json_decode($disks_list, true);
var_dump($list);
?>