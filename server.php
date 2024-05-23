<?php
// array in json = stringa
$disks_list = file_get_contents("dischi.json");
// array in php
$list = json_decode($disks_list, true);

// impostare che arriverà una risposta in json
header("Content-Type: application/json");
// stampo la risposta
echo $disks_list;
?>