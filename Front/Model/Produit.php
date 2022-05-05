<?php
class Produit {
	private $id;
	private $nom;
	private $quantite;
	private $prix;
	private $description;
    private $cat;
    private $image;
	



	function __construct($id,$nom,$description,$image,$cat,$prix,$quantite){
		$this->id=$id;
		$this->nom=$nom;
		$this->description=$description;
		$this->image=$image;
		$this->cat=$cat;
		$this->prix=$prix;
		$this->quantite=$quantite;
	    



	}
    function getCategorie(){
        return $this->cat;
    }
     function setcat($cat){
         $this->cat=$cat;
    }
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getImage(){
		return $this->image;
	}
	function getPrix(){
		return $this->prix;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getDescription(){
		return $this->description;
	}

	function setId($id){
		$this->id=$id;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setImage($image){
		$this->image;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function setDescription($description){
		$this->description=$description;
	}
	
}
?>