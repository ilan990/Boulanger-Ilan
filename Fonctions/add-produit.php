<?php
session_start();
// Récupère les données envoyées en AJAX
$itemId     = $_POST['articleId'];
$itemNom    = $_POST['nom'];
$itemDesc   = $_POST['desc'];
$itemPrix   = $_POST['prix'];
$itemImg    = $_POST['img'];



// Initialise le panier s'il n'existe pas encore
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
empty($_SESSION['cart']['quantite']) ? $_SESSION['cart']['quantite'] = 0 : "";

if (!isset($_SESSION['cart'][$itemId])){
    $_SESSION['cart'][$itemId]['quantite'] = 0;
    $_SESSION['cart'][$itemId]['nom'] = $itemNom;
    $_SESSION['cart'][$itemId]['desc'] = $itemDesc;
    $_SESSION['cart'][$itemId]['prix'] = $itemPrix;
    $_SESSION['cart'][$itemId]['img'] = $itemImg;
}
// Ajoute l'article au panier
$_SESSION['cart'][$itemId]['quantite']+= 1 ;
$_SESSION['cart']['quantite'] += 1 ;


$data = array(
    "quantiteProduit" => $_SESSION['cart'][$itemId]['quantite'],
    "quantiteMax"     => $_SESSION['cart']['quantite'],
);

$jsonData = json_encode($data);

// Impression des données au format JSON
echo $jsonData;

//error_log(print_r($_SESSION,true));

?>