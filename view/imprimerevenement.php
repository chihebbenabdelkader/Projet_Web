<?PHP
    include "../eventC/eventC.php";
	//include "../../controller/categorieC.php";
    require_once "../config.php";
	$ReclamationC = new EvenementC();
	$listeEvenements=$ReclamationC->afficherevenements();
	//$categorieC = new categorieC();
	//$listecategorie=$categorieC->affichercategorie();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--<a class="logo" href="showProduit.php">-->

        <link rel="stylesheet" href="styleaffichage.css">
        
        </a>
		<title> LISTE DES evenements </title>
    </head>
    <body onload="window.print()">

		<hr>
		
        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100" border=1 align = 'center'>
                                            <thead>
                                            <tr>
                                                <th>idEvent</th>
                                                <th>nomEvent</th>
                                                <th>typeEvent</th>
                                                <th>dateD</th>
                                                <th>dateF</th>
                                                
                                               
                                            </tr>
                                            </thead>
        
                                            <?php
				                              foreach($listeEvenements as $evenement){
			                                ?>
                                            <tbody>
                                             
                                            <tr>
				                      
                                           
                                       
                                       
                                           <!-- <td>?php echo $evenement['idEvent']; ?></td>-->
                                           <td><h4 class="idEvent"> <img src="<?php echo $evenement['idEvent'].".png"; ?>"alt="" style= width='80px' height='80px'> </timezone_identifiers_list> </td>    
				                         <td><?php echo $evenement['nomEvent']; ?></td>
				                       <td><?php echo $evenement['typeEvent']; ?></td>
				                            <td><?php echo $evenement['dateD']; ?></td>
				                    <td><?php echo $evenement['dateF']; ?></td>
                                    
                                  <!--  <td><button class="supp_bt"><a style=" color: black"  href="supprimerevent.php?idEvent=<?php echo $evenement['idEvent']; ?></a>">supprimer</button></td>
                                    <td><button class="modif_bt"><a style=" color: black"  href="modifierevent.php?idEvent=<?php echo $evenement['idEvent'] ; ?>">modifier</button></a></td>
                                              -->        
                                    <?php
				                        }
                                    ?>
                                              </tbody>
                                        </table>
        
	</body>
</html>