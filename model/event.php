<?php
	class Evenement{
		private $idEvent=null;
		
		private $nomEvent=null;
		private $typeEvent=null;
		private $dateD=null;
		private $dateF=null;
		//private $image=null;
		
		
		
		function __construct($idEvent, $nomEvent, $typeEvent, $dateD, $dateF){
			//$this->image=$image;
			$this->idEvent=$idEvent;
			$this->nomEvent=$nomEvent;
			$this->typeEvent=$typeEvent;
			$this->dateD=$dateD;
			$this->dateF=$dateF;
			
			
		}


		function getImage(){
			return $this->image;
		}
		function getId(){
			return $this->idEvent;
		}
		function getNom(){
			return $this->nomEvent;
		}
		function getType(){
			return $this->typeEvent;
		}
		function getDated(){
			return $this->dateD;
		}
		function getDatef(){
			return $this->dateF;
		}
		
		function setNom(string $nom){
			$this->nomEvent=$nom;
		}
		function setType(string $type){
			$this->typeEvent=$type;
		}
		function setAdresse(string $date){
			$this->dateD=$date;
		}
		function setEmail(string $date){
			$this->dateF=$date;
		}
		
		
	}


?>