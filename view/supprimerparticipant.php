<?php
  
    include '../eventC/participantC.php';

    $participC = new ParticipantC();
    $participC->supprimerparticipant($_GET['idParticipant']);
    header('Location:tables-datatable.php');
?>