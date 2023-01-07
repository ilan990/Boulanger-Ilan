<?php
session_start();
// Récupère les données envoyées en AJAX
$itemId = $_POST['articleId'];


// Initialise le panier s'il n'existe pas encore
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    $_SESSION['cart']['quantite'] = 0;
}

if (!isset($_SESSION['cart'][$itemId])){
    $_SESSION['cart'][$itemId]['quantite'] = 0;
}
// Ajoute l'article au panier
if(!empty($_SESSION['cart'][$itemId]['quantite'])){
    $_SESSION['cart'][$itemId]['quantite'] -= 1 ;
    $_SESSION['cart']['quantite'] -= 1 ;
}


$data = array(
    "quantiteProduit" => $_SESSION['cart'][$itemId]['quantite'],
    "quantiteMax"     => $_SESSION['cart']['quantite'],
);

$jsonData = json_encode($data);

// Impression des données au format JSON
echo $jsonData;


?>