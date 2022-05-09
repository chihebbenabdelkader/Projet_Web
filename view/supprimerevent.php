<?php
    include '../eventC/eventC.php';

    $eventC = new EvenementC();
    $eventC->supprimerevenement($_GET['idEvent']);
    header('Location:tables-datatable.php');
?>