<?php
	include_once '../Controller/produitC.php';
	$prodC=new produitC();
	$prodC->supprimerProduit($_GET["id"]);
	header('Location:ecommerce-products.php');
?>