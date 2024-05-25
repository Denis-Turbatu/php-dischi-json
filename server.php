<?php
// array in json = stringa
$disks_list = file_get_contents("dischi.json");
// array in php
$list = json_decode($disks_list, true);

// verifico se i dati esistono
if (isset($_POST["update_like"]) && isset($_POST["update_index"])) {
    // passo i dati in arrivo nelle variabili php
    $update_like = $_POST["update_like"];
    $update_index = $_POST["update_index"];

    if ($update_like === "true" || $update_like === false) {
        $list[$update_index]["like"] = true;
    } elseif ($update_like === "false" || $update_like === true) {
        $list[$update_index]["like"] = false;
    }

    // Aggiorno i dati con  quelli nuovi
    // $list[$update_index]["like"] = $update_like;

    // Trasformo i dati di nuovo in json e li preparo per la risposta
    $disks_list = json_encode($list);
    file_put_contents("dischi.json", $disks_list);
}

// impostare che arriverà una risposta in json
header("Content-Type: application/json");
// stampo la risposta
echo $disks_list;
