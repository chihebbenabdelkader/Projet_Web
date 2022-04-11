<?php
include '../config.php';
include_once '../Model/Categorie.php';


class categorieC {


function afficherCategorie(){
    $sql="SELECT * FROM categorie";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMeesage());
    }
}
function supprimerCategorie($id){
    $sql="DELETE FROM categorie WHERE id=:id";
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
function ajouterCategorie($categorie){
    $sql="INSERT INTO categorie ( nom) VALUES (:nom)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nom' => $categorie->getNom(),
            
        ]);		
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }			
}


function modifierCategorie($categorie, $id){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE categorie SET 
                nom= :nom
               
            WHERE id= :id'
        );
        $query->execute([
            'nom' => $categorie->getNom(),
     
            'id' => $id
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}


function recupererCategorie($id){
    $sql="SELECT * from categorie where id=$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $categorie=$query->fetch();
        return $categorie;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}


}




?>