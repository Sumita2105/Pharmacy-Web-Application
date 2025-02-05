<?php
require('./fpdf184/fpdf.php');
session_start();


include('connection.php');
$time= date("Y-m-d H:i:s");
$_SESSION['firstname']=$_POST['firstname'];
$_SESSION['address']=$_POST['address'];
$_SESSION['email']=$_POST['email'];




$pdf = new FPDF();
$pdf->AddPage();
$title = 'Invoice';
$pdf->SetTitle($title);

$pdf->Rect(5, 5, 200, 287, 'S');


$pdf->SetFont('Times','U',25);
$pdf->cell(80);
$pdf->Cell(20,10,'Invoice');
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Times','U',14);
$pdf->cell(130);
$pdf->Cell(20,10,'Date: '.$time);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','',14);
$pdf->SetTextColor(0,128,128);
$pdf->Cell(40,7,'MediPlus Team');
$pdf-> Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,'Mumbai, India');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(40,7,'FROM');
$pdf-> Ln();
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'MediPlus Team');
$pdf-> Ln();
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Bhandup-west, Mumbai');
$pdf-> Ln();
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'India');
$pdf-> Ln();
$pdf->Ln();
$pdf->Ln();


$pdf->Cell(130);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(40,7,'SHIP TO');
$pdf-> Ln();
$pdf->Cell(130);
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Name: '.$_SESSION['firstname']);
$pdf-> Ln();
$pdf->Cell(130);
$pdf->SetFont('Arial','',11);

$pdf->Cell(40,5,'Address: '.$_SESSION['address']);
$pdf-> Ln();
$pdf->Cell(130);
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Email: '.$_SESSION['email']);
$pdf-> Ln();
$pdf-> Ln();

$pdf->Cell(70);
$pdf->SetFont('Arial','',18);
$pdf->Cell(40,5,'Order Details');


$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(30 ,6,'Product Id',1,0,'C');
$pdf->Cell(100 ,6,'Name',1,0,'C');
$pdf->Cell(30 ,6,'Price(per unit)',1,0,'C');
$pdf->Cell(35 ,6,'Category',1,0,'C');


$pdf->SetFont('Arial','',10);
$pdf->Ln();
$total=0;

foreach($_SESSION['cart'] as $key => $value)
{
	 

	$prod_id=$value['pid'];

	$pname="";
	$sql= "Select * from healthcare where pid='$prod_id'";
	$result= mysqli_query($con,$sql);
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$pname=$row['pname'];
			$pdf->cell(30,6,$row['pid'],1,0,'C');
			$pdf->Cell(100,6,$row['pname'],1,0,'C');
			$pdf->cell(30,6,$row['pprice'],1,0,'C');
			$pdf->cell(35,6,$row['category'],1,0,'C');
            $pdf->Ln();
			$total=$total+(int)$row['pprice'];

		}
		
	}
	
	
    $sql1= "Select * from medicine where pid='$prod_id'";
	$result1= mysqli_query($con,$sql1);
	if($result1)
	{
		while($row1=mysqli_fetch_assoc($result1))
		{
			$pname=$row1['pname'];

			$pdf->cell(30,6,$row1['pid'],1,0,'C');
			$pdf->Cell(100,6,$row1['pname'],1,0,'C');
			$pdf->cell(30,6,$row1['pprice'],1,0,'C');
			$pdf->cell(30,6,'medicines',1,0,'C');
			   $pdf->Ln();
			   $total=$total+(int)$row1['pprice'];
		}
		
	}
	
	
	
}
$pdf->Cell(90 ,6,'',0,0);
$pdf->Cell(25 ,6,'Total',0,0);
$pdf->Cell(45 ,6,$total,1,1,'R');


$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();




$pdf->SetTextColor(70,130,180);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(40,7,'Terms & Conditions');
$pdf-> Ln();
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'This invoice is valid for two weeks.');
$pdf-> Ln();
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Items above will be delivered upon payment via cash, check or deposit.');
$pdf-> Ln();
$pdf-> Ln();
$pdf-> Ln();
$pdf-> Ln();
$pdf-> Ln();
$pdf-> Ln();

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(50);
$pdf->Cell(40,6,'We Believe in Simplifying Healthcare, Impacting Lives!');

$pdf->Output();
?>