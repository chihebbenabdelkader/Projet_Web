<?php
include_once '../config.php';
//include_once '../model/evenement.php';

class EvenementC
{
    function afficherevenements()
    {
  
        $requete = "select * from event";
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
    
     


   
    function supprimerevenement($idEvent)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            DELETE FROM event WHERE idEvent =:idEvent
            ');
            $querry->execute([
                'idEvent'=>$idEvent
            ]);
            
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }
   
  
    function geteventbyID($idEvent)
    {
        $requete = "select * from event where idEvent=:idEvent";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'idEvent'=>$idEvent
                ]
            );
            $result = $querry->fetch();
            return $result ;
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }



    function modifier($evenement)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE event SET
                nomEvent=:nomEvent,typeEvent=:typeEvent,dateD=:dateD,dateF=:dateF

                where idEvent=:idEvent
                ');
                $querry->execute([
                    
                    'idEvent'=>$evenement->getId(),
                    'nomEvent'=>$evenement->getNom(),
                    'typeEvent'=>$evenement->getType(),
                    'dateD'=>$evenement->getDated(),
                    'dateF'=>$evenement->getDatef(),
                    
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }

   
        }
        function ajouterevent($evenement)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO event
                (idEvent,nomEvent,typeEvent,dateD,dateF)
                VALUES
                (:idEvent,:nomEvent,:typeEvent,:dateD,:dateF)
                ');
                $querry->execute([
                    
                    'idEvent'=>$evenement->getId(),
                    'nomEvent'=>$evenement->getNom(),
                    'typeEvent'=>$evenement->getType(),
                    'dateD'=>$evenement->getDated(),
                    'dateF'=>$evenement->getDateF(),
                   
                  
                ]);
      
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
  
      

}

?>