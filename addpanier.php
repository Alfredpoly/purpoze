<?php
require '_header.php';
if(isset($_GET['id'])){
    $product = $DB->query('SELECT id FROM products WHERE id=:id', array('id' => $_GET['id']));
    if(empty($product)){
        die("Ce produit n'existe pas !");
    }
    $panier->add($product[0]->id);
    die('le produit a bien été ajouter a votre panier :) <a href="javascript:history.back()">continuer mes achats</a>');
}else {
    die("vous n'avez pas séléctioner de produit à ajouter au panier");
}
