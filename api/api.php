<?php

// Parametri di connessione all'API
$api_url = "https://katalon.com/resources-center/blog/api-examples"; // Sostituire con l'URL effettivo dell'API
$api_key = "YOUR_API_KEY"; // Sostituire con la propria chiave API

// Invio della query API per recuperare i dati
$query = "https://cdn.ampproject.org/c/example.com/?amp-content=amp"; // Sostituire con la query API effettiva
$data = file_get_contents($api_url . "?" . $query . "&api_key=" . $api_key);

// Decodifica dei dati JSON in un array PHP
$dati = json_decode($data, true);

// Generazione del codice HTML per la tabella
$html = "<table border=1>";
$html .= "<tr>";

// Estrazione dei nomi delle colonne dai dati JSON
foreach ($dati[0] as $key => $value) {
    $html .= "<th>" . $key . "</th>";
}

$html .= "</tr>";

// Riempimento della tabella con i dati
foreach ($dati as $row) {
    $html .= "<tr>";
    foreach ($row as $value) {
        $html .= "<td>" . $value . "</td>";
    }
    $html .= "</tr>";
}

$html .= "</table>";

// Incorporamento del codice HTML nella pagina
echo $html;

?>
