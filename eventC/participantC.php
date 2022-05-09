<?php
include_once '../config.php';
  //include_once '../model/participant.php';


  class ParticipantC
{
   function afficherparticipants()
    {
  
        $requete = "select * from participant";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
             $th->getMessage();
        }
  
      
    }
    
    
    function getparticipantbyID($idParticipant)
    {
        $requete = "select * from participant where idParticipant=:idParticipant";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'idParticipant'=>$idParticipant
                ]
            );
            $result = $querry->fetch();
            return $result ;
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }

    

    function supprimerparticipant($idParticipant)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            DELETE FROM participant WHERE idParticipant =:idParticipant
            ');
            $querry->execute([
                'idParticipant'=>$idParticipant
            ]);
            
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }

   
   
    function ajouter($participant)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            INSERT INTO participant
            (idParticipant,nomParticipant,prenomParticipant,ageParticipant,emailParticipant,dateInscri)
            VALUES
            (:idParticipant,:nomParticipant,:prenomParticipant,:ageParticipant,:emailParticipant,:dateInscri)
            ');
            $querry->execute([
                'idParticipant'=>$participant->getIdp(),
                'nomParticipant'=>$participant->getNomp(),
                'prenomParticipant'=>$participant->getPrenomp(),
                'ageParticipant'=>$participant->getAgep(),
                'emailParticipant'=>$participant->getEmailp(),
                'dateInscri'=>$participant->getDatep(),

               
              
            ]);
  
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }


    function affichertri()
    {
        $requete = "select * from participant ORDER BY ageParticipant";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }




    function getEmailp($idParticipant)
        {
            $requete = "select * from participant where idParticipant=:idParticipant";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idParticipant'=>$idParticipant
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }




        

    function modifierparticiper($participant)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            UPDATE participant SET
            nomParticipant=:nomParticipant,prenomParticipant=:prenomParticipant,ageParticipant=:ageParticipant,emailParticipant=:emailParticipant,dateInscri=:dateInscri

            where idParticipant=:idParticipant
            ');
            $querry->execute([
                
                'idParticipant'=>$participant->getIdp(),
                'nomParticipant'=>$participant->getNomp(),
                'prenomParticipant'=>$participant->getPrenomp(),
                'ageParticipant'=>$participant->getAgep(),
                'emailParticipant'=>$participant->getEmailp(),
                'dateInscri'=>$participant->getDatep(),
                
            ]);
        } catch (PDOException $th) {
             $th->getMessage();
        }


    }

}




?>