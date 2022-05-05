<?php
	include '../Controller/categorieC.php';
	$catC=new categorieC();
	$catC->supprimerCategorie($_GET["id"]);
	header('Location:ecommerce-categories.php');
?>