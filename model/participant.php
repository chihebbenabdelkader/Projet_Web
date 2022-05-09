<?php
	class Participant{
		private $idParticipant=null;
		private $nomParticipant=null;
		private $prenomParticipant=null;
		private $ageParticipant=null;
		private $emailParticipant=null;
        private $dateInscri=null;
		
		
		
		function __construct($idParticipant, $nomParticipant,$prenomParticipant ,$ageParticipant, $emailParticipant, $dateInscri){
			$this->idParticipant=$idParticipant;
			$this->nomParticipant=$nomParticipant;
			$this->prenomParticipant=$prenomParticipant;
			$this->ageParticipant=$ageParticipant;
			$this->$emailParticipant=$emailParticipant;
            $this->$dateInscri=$dateInscri;
			
		}
		function getIdp(){
			return $this->idParticipant;
		}
		function getNomp(){
			return $this->nomParticipant;
		}
		function getPrenomp(){
			return $this->prenomParticipant;
		}
		function getAgep(){
			return $this->ageParticipant;
		}
		function getEmailp(){
			return $this->emailParticipant;
		}
        function getDatep(){
			return $this->dateInscri;
		}
		



        function setIdp(string $nom){
			$this->idParticipant=$nom;
		}

		function setNomp(string $nom){
			$this->nomParticipant=$nom;
		}
		
        function setPrenomp(string $type){
			$this->prenomParticipant=$type;
		}


		function setAgep(string $nom){
			$this->ageParticipant=$nom;
		}
		
        
        function setEmailp(string $nom){
			$this->emailParticipant=$nom;
		}
        
        
        function setDatep(string $nom){
			$this->dateInscri=$nom;
		}
		
		
		
	}


?>