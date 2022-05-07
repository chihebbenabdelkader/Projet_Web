<?php
include "../../controller/panierc.php";


    if ( isset($_POST['id_utilisateur']) && isset($_POST['nom_produit']) && isset($_POST['prix_produit'])) 
    {

        $panier= new panier($_POST['id_utilisateur'],$_POST['prix_produit'],1,$_POST['nom_produit']);
        $PanierC = new PanierC();
        $PanierC->ajouterPanier($panier);
        header('Location:shop.php');
        
     
    }
    else {
        echo "errour";
        header('Location:shop.php');

    }

    
?>