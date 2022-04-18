<?php
include_once 'config.php';
include 'Model/Produit.php';


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
    $sql="INSERT INTO produit ( id,nom,description,image,cat,prix,quantite) VALUES (:id,:nom,:description,:image,:cat,:prix,:quantite)";

    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'id' => $produit->getId(),
            'nom' => $produit->getNom(),
            'description' => $produit->getDescription(), 
            'image' => $produit->getImage(),
            'cat' => $produit->getCategorie(),
            'prix' => $produit->getPrix(),
            'quantite' => $produit->getQuantite()
            
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
                cat=:cat,
                prix= :prix,
                quantite = :quantite
               
            WHERE id= :id'
        );
        $query->execute([
            'nom' => $produit->getNom(),
            'description' => $produit->getDescription(), 
            'image' => $produit->getImage(),
            'cat' => $produit->getCategorie(),
            'prix' => $produit->getPrix(),
            
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



function RecupCategories()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

}




?>