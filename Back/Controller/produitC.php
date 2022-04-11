<?php
include '../config.php';
include_once '../Model/Produit.php';


class produitC {


function afficherProduit(){
    $sql="SELECT * FROM produit";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMeesage());
    }
}
function supprimerProduit($id){
    $sql="DELETE FROM produit WHERE id=:id";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':id', $id);
    try{
        $req->execute();
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMeesage());
    }
}
function ajouterProduit($produit){
    $sql="INSERT INTO produit ( nom,description,image,prix,cat,quantite) VALUES (:nom,:description,:image,:prix,:cat,:quantite)";

    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nom' => $produit->getNom(),
            'description' => $produit->getDescription(), 
            'image' => $produit->getImage(),
            'prix' => $produit->getPrix(),
            'cat' => $produit->getcat(),
            'quantite' => $produit->getQuantite(),
            
        ]);		
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }			
}


function modifierProduit($produit, $id){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE produit SET 
                nom= :nom,
                description= :description,
                image= :image,
                prix= :prix,
                cat=:cat,
                quantite = :quantite
               
            WHERE id= :id'
        );
        $query->execute([
             'nom' => $produit->getNom(),
            'description' => $produit->getDescription(), 
            'image' => $produit->getImage(),
            'prix' => $produit->getPrix(),
            'cat' => $produit->getcat(),
            'quantite' => $produit->getQuantite(),
            
            'id' => $id
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}


function recupererProduit($id){
    $sql="SELECT * from produit where id=$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $produit=$query->fetch();
        return $produit;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}


}




?>