<?php 
include_once "../Controller/produitC.php";
//session_start();
 

$produitC=new produitC();
$listeProduits=$produitC->afficherProduit();

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
//$pdf->Image('logo.png',10,10,30);

$pdf->SetFont('Arial','B',30);


$pdf->cell(200,20,'Product Recaptulation',0,0,'C');
$pdf->Ln() ;

$pdf->SetFont('Arial','B',9);
$pdf->cell(300,10,"Go Games",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"Lac 2 ",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"+216 58745785 / +216 71458485",0,0,'C');
 $pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(80,20,'Products out of stock:',0,0,'C');

$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(40,10,'Id Produit',1,0,'C');
$pdf->cell(40,10,'Nom',1,0,'C');
$pdf->cell(40,10,'Categorie',1,0,'C');

$pdf->Ln(); 

foreach ($listeProduits as $p) 
{
	$q=$p['quantite'];
	if($q==0)
	{

    $pdf->cell(40,10,$p['id'],1,0,'C'); 
	$pdf->cell(40,10,$p['nom'],1,0,'C');
	$pdf->cell(40,10,$p['cat'],1,0,'C');
	$pdf->Ln();
	}
	
}



$pdf->SetFont('Arial','B',20);
$pdf->cell(97,20,'Products soon out of stock:',0,0,'C');

$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(40,10,'Id Produit',1,0,'C');
$pdf->cell(40,10,'Nom',1,0,'C');
$pdf->cell(40,10,'Categories',1,0,'C');
$pdf->cell(40,10,'Quantity',1,0,'C');


$pdf->Ln(); 


$produit=new produitC();
$liste=$produit->afficherProduit();

foreach ($liste as $pp) 
{
	$q=$pp['quantite'];
	if(($q<5) &&($q!=0))
	{

    $pdf->cell(40,10,$pp['id'],1,0,'C'); 
	$pdf->cell(40,10,$pp['nom'],1,0,'C');
	$pdf->cell(40,10,$pp['cat'],1,0,'C');
	$pdf->cell(40,10,$q,1,0,'C');

	$pdf->Ln();
	}
	
}


$pdf->Output();
?>