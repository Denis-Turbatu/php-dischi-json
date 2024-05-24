<?php
include_once __DIR__ . "/server.php";

//controllo sse il filtro del preferito è stato applicato
$option_filter = isset($_GET["parking-filter"]) ? $_GET["parking-filter"] : null;


// trasformo un valore string in boolean
if (isset($option_filter)) {
    if ($option_filter === 'true') {
        $option_filter = true;
    } elseif ($option_filter === 'null') {
        $option_filter = null;
    } else {
        $option_filter = false;
    }
}

$filtered_array = [];

// stampa dei dischi in base al filtro selezionato
foreach ($list as $cur_disk) {
    if ($option_filter === null) {
        $filtered_array[] = $cur_disk;
    } elseif ($cur_disk["pref"] === $option_filter) {
        $filtered_array[] = $cur_disk;
    }
}