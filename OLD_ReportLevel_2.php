<?php

$repCom     = $_POST['repcom'];
$repAppName = $_POST['repappname'];
$repAgree   = $_POST['repagree'];
$repLicType = $_POST['replictype'];
$repNoOfLic = $_POST['repnooflic'];
$repCost    = $_POST['repcost'];
$repLoc     = $_POST['reploc'];
$repROI     = $_POST['reproi'];

$repAppName2 = $_POST['repappname2'];
$repAgree2   = $_POST['repagree2'];
$repLicType2 = $_POST['replictype2'];
$repNoOfLic2 = $_POST['repnooflic2'];
$repCost2    = $_POST['repcost2'];
$repLoc2     = $_POST['reploc2'];

$repAppName3 = $_POST['repappname3'];
$repAgree3   = $_POST['repagree3'];
$repLicType3 = $_POST['replictype3'];
$repNoOfLic3 = $_POST['repnooflic3'];
$repCost3    = $_POST['repcost3'];
$repLoc3     = $_POST['reploc3'];

$repROI     = $_POST['reproi'];
$repSav     = $_POST['repsav'];
$repROI2     = $_POST['reproi2'];
$repSav2     = $_POST['repsav2'];
$repROI3     = $_POST['reproi3'];
$repSav3     = $_POST['repsav3'];

$currentDate = date('m/d/Y');
$currentYear = date('Y');

/*
$repCom     = "NameTest";
$repAppName = "AppNameTest";
$repAgree   = "AgreeTest";
$repLicType = "LicTest";
$repNoOfLic = "NoTest";
$repCost    = "CostTest";
$repLoc     = "LocTest";
$repROI     = "180.456";
$repSav     = "181.416";
$repROI2     = "80.466";
$repSav2     = "70.4476";
$repROI3     = "40.3456";
$repSav3     = "580.456";
$currentDate = date('m/d/Y');*/

$numRepROI  = number_format($repROI,2);
$numRepROI2  = number_format($repROI2,2);
$numRepROI3  = number_format($repROI3,2);

$numRepSav  = number_format($repSav,2);
$numRepSav2  = number_format($repSav2,2);
$numRepSav3  = number_format($repSav3,2);

require ("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage('PORTRAIT', 'letter');

$pdf->Image("images/pdfexporting/ROIexpheader.png",0,0,216,0);
$pdf->Cell(0,16,"",0,1);
$pdf->SetFont("Arial","I",12);
$pdf->setTextColor(105,105,105);
$pdf->Cell(0,7,"This report is generated on: {$currentDate}",0,1,'R');


$pdf->SetFont("Helvetica","B",23);
$pdf->setTextColor(71,195,220);
$pdf->Cell(0,10,"ROI of {$repCom} ",0,1,'L');


$pdf->Image("images/pdfexporting/ROIexpfirststate.png",13,45,0,32);
$pdf->Image("images/pdfexporting/ROIcontactsection.png",155,45,0,40,'PNG','https://www.snowsoftware.com/int/contact');
$pdf->Image("images/pdfexporting/ROIexpsecstate.png",13,83,0,4.3);

$pdf->Cell(0,45,"",0,1);

$pdf->Image("images/pdfexporting/level_2.png",30,89,59,0);

$pdf->Cell(96,1,"",0,0,"C");
$pdf->Cell(6,1,"",0,0);
$pdf->Cell(94,1,"",0,1);

$pdf->Cell(1,8,"",0,0,"C");
$pdf->setTextColor(236,140,45);
$pdf->SetFont("Arial","B",13);
$pdf->Cell(47,8,"",0,0);
$pdf->setTextColor(65,115,121);
$pdf->Cell(47,8,"",0,0);
$pdf->Cell(1,8,"",0,0);
$pdf->Cell(6,8,"",0,0);
$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,0, "C", true);
$pdf->setTextColor(236,140,45);
$pdf->SetFont("Arial","B",23);
$pdf->Cell(92,8,"Calculated ROI:",0,0,"C");
$pdf->Cell(1,8,"",0,1, "C", true);

$pdf->Cell(1,8,"",0,0, "C");
$pdf->Cell(47,8,"",0,0);
$pdf->setTextColor(65,115,121);
$pdf->Cell(47,8,"",0,0);
$pdf->Cell(1,8,"",0,0, "C");
$pdf->Cell(6,8,"",0,0);
$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,0, "C", true);
$pdf->setTextColor(65,115,121);
$pdf->SetFont("Helvetica","B",23);
$pdf->Cell(92,8,"{$numRepROI}%",0,0,"C");
$pdf->Cell(1,8,"",0,1, "C", true);

$pdf->Cell(1,8,"",0,0,"C");
$pdf->Cell(47,8,"",0,0);
$pdf->Cell(47,8,"",0,0);
$pdf->Cell(1,8,"",0,0, "C");
$pdf->Cell(6,8,"",0,0);
$pdf->Cell(1,8,"",0,0, "C", true);
$pdf->Cell(92,8,"",0,0);
$pdf->Cell(1,8,"",0,1, "C", true);

$pdf->Cell(1,8,"",0,0, "C");
$pdf->Cell(47,8,"",0,0,"L");
$pdf->Cell(47,8,"",0,0,"L");
$pdf->Cell(1,8,"",0,0, "C");
$pdf->Cell(6,8,"",0,0);
$pdf->Cell(1,8,"",0,0, "C", true);
$pdf->setTextColor(236,140,45);
$pdf->SetFont("Arial","B",19);
$pdf->Cell(92,8,"Savings for Year 1:",0,0,"C");
$pdf->Cell(1,8,"",0,1, "C", true);

$pdf->Cell(1,8,"",0,0, "C");
$pdf->Cell(47,8,"",0,0);
$pdf->Cell(47,8,"",0,0);
$pdf->Cell(1,8,"",0,0,"C");
$pdf->Cell(6,8,"",0,0);
$pdf->Cell(1,8,"",0,0,"C", true);
$pdf->setTextColor(65,115,121);
$pdf->SetFont("Helvetica","B",20);
$pdf->Cell(92,8,"$ {$numRepSav}",0,0,"C");
$pdf->Cell(1,8,"",0,1,"C", true);

//-----------------------table part-----------------------//
$pdf->SetFillColor(255,255,255);
$pdf->Cell(196,4,"",0,1,"C",true);

$pdf->SetFillColor(238,238,238);
$pdf->Cell(196,1,"",0,1,"C",true);
$pdf->Cell(1,8,"",0,0, "C", true);
$pdf->setTextColor(236,140,45);
$pdf->SetFont("Arial","B",13);
$pdf->Cell(47,8,"",1,0);
$pdf->setTextColor(64,64,64);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(49,8,"Application A",1,0,"L",true);
$pdf->Cell(49,8,"Application B",1,0,"L",true);
$pdf->Cell(49,8,"Application C",1,0,"L",true);
$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,1,"C",true);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(196,1,"",0,1,true);

$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,0, "C", true);
$pdf->setTextColor(236,140,45);
$pdf->SetFont("Arial","B",13);
$pdf->Cell(47,8,"Application Name:",1,0);
$pdf->setTextColor(65,115,121);
$pdf->Cell(49,8,"{$repAppName}",1,0);
$pdf->Cell(49,8,"{$repAppName2}",1,0);
$pdf->Cell(49,8,"{$repAppName3}",1,0);
$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,1, "C", true);
//$pdf->setTextColor(236,140,45);
//$pdf->SetFont("Arial","B",23);
//$pdf->Cell(92,8,"",1,0,"C");
//$pdf->Cell(1,8,"",1,1, "C", true);

$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,0,"C",true);
$pdf->SetFillColor(220,220,220);
$pdf->setTextColor(236,140,45);
$pdf->SetFont("Arial","B",13);
//$pdf->Cell(47,8,"Agreement Type:",1,0,"L", true);
$pdf->Cell(47,8,"Agreement Type:",1,0,"L");
$pdf->SetFillColor(220,220,220);
$pdf->setTextColor(65,115,121);
$pdf->SetFillColor(220,220,220);
//$pdf->Cell(49,8,"{$repAgree}",1,0,"L",true);
//$pdf->Cell(49,8,"{$repAgree2}",1,0,"L",true);
//$pdf->Cell(49,8,"{$repAgree3}",1,0,"L",true);
$pdf->Cell(49,8,"{$repAgree}",1,0,"L");
$pdf->Cell(49,8,"{$repAgree2}",1,0,"L");
$pdf->Cell(49,8,"{$repAgree3}",1,0,"L");
$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,1, "C", true);
//$pdf->setTextColor(65,115,121);
//$pdf->SetFont("Helvetica","B",23);
//$pdf->Cell(92,8,"",1,0,"C");
//$pdf->Cell(1,8,"",1,1, "C", true);

$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,0, "C", true);
$pdf->setTextColor(236,140,45);
$pdf->SetFont("Arial","B",13);
$pdf->Cell(47,8,"License Type:",1,0);
$pdf->setTextColor(65,115,121);
$pdf->Cell(49,8,"{$repLicType}",1,0);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(49,8,"{$repLicType2}",1,0);
$pdf->Cell(49,8,"{$repLicType3}",1,0);
$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,1, "C", true);
//$pdf->Cell(92,8,"",1,0);
//$pdf->Cell(1,8,"",1,1, "C", true);

$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,0, "C", true);
$pdf->SetFillColor(220,220,220);
$pdf->setTextColor(236,140,45);
$pdf->SetFont("Arial","B",13);
//$pdf->Cell(47,8,"Number of Licenses:",1,0,"L", true);
$pdf->Cell(47,8,"Number of Licenses:",1,0,"L");
$pdf->setTextColor(65,115,121);
//$pdf->Cell(49,8,"{$repNoOfLic}",1,0,"L",true);
//$pdf->SetFillColor(220,220,220);
//$pdf->Cell(49,8,"{$repNoOfLic2}",1,0,"L",true);
//$pdf->Cell(49,8,"{$repNoOfLic3}",1,0,"L",true);
$pdf->Cell(49,8,"{$repNoOfLic}",1,0,"L");
$pdf->SetFillColor(220,220,220);
$pdf->Cell(49,8,"{$repNoOfLic2}",1,0,"L");
$pdf->Cell(49,8,"{$repNoOfLic3}",1,0,"L");
$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,1, "C", true);
//$pdf->setTextColor(236,140,45);
//$pdf->SetFont("Arial","B",19);
//$pdf->Cell(92,8,"",1,0,"C");
//$pdf->Cell(1,8,"",1,1, "C", true);

$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,0, "C", true);
$pdf->setTextColor(236,140,45);
$pdf->SetFont("Arial","B",13);
$pdf->Cell(47,8,"Cost per License:",1,0);
$pdf->setTextColor(65,115,121);
$pdf->Cell(49,8,"{$repCost}",0,0);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(49,8,"{$repCost2}",1,0);
$pdf->Cell(49,8,"{$repCost3}",1,0);
$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,1, "C", true);
//$pdf->setTextColor(65,115,121);
//$pdf->SetFont("Helvetica","B",20);
//$pdf->Cell(92,8,"",1,0,"C");
//$pdf->Cell(1,8,"",1,1, "C", true);

$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,0, "C", true);
$pdf->SetFillColor(220,220,220);
$pdf->setTextColor(236,140,45);
$pdf->SetFont("Arial","B",13);
//$pdf->Cell(47,8,"Location:",1,0,"L", true);
$pdf->Cell(47,8,"Location:",1,0,"L");
$pdf->setTextColor(65,115,121);
//$pdf->SetFont("Arial","B",11.5);
//$pdf->Cell(49,8,"{$repLoc}",1,0,"L", true);
//$pdf->Cell(49,8,"{$repLoc}",1,0,"L", true);
//$pdf->Cell(49,8,"{$repLoc}",1,0,"L", true);
$pdf->Cell(49,8,"{$repLoc}",1,0,"L");
$pdf->Cell(49,8,"{$repLoc2}",1,0,"L");
$pdf->Cell(49,8,"{$repLoc3}",1,0,"L");
$pdf->SetFillColor(238,238,238);
$pdf->Cell(1,8,"",0,1, "C", true);
$pdf->Cell(196,1,"",0,1, true);
//$pdf->Cell(92,8,"",1,0);
//$pdf->Cell(1,8,"",1,1, "C", true);
//$pdf->SetFillColor(238,238,238);
//$pdf->Cell(96,1,"",1,0,"C", true);
//$pdf->Cell(6,1,"",1,0);
//$pdf->Cell(94,1,"",1,1);

//$pdf->Cell(196,60,"",1,1); this is adjusted to finish the table first before the visualizations
$pdf->Cell(196,5,"",0,1);
$pdf->SetFillColor(64,64,64);
$pdf->setTextColor(255,255,255);
$pdf->SetFont("Arial","B",14);
$pdf->Cell(196,10,"ROI Calculation",1,1,"C", true);
$pdf->setTextColor(0,0,0);
$pdf->SetFillColor(220,220,220);
$pdf->Cell(70,9,"",1,0,"C",true);
$pdf->setTextColor(64,64,64);
$pdf->Cell(63,9,"%",1,0,"C", true);
$pdf->setTextColor(64,64,64);
$pdf->Cell(63,9,"$",1,1,"C", true);
$pdf->SetFillColor(71,195,220);
$pdf->setTextColor(255,255,255);
$pdf->SetFont("Arial","B",14);
$pdf->Cell(70,11,"1st Year",1,0,"C", true);
$pdf->setTextColor(64,64,64);
$pdf->SetFont("Arial","B",15);
$pdf->Cell(63,11,"{$numRepROI}%",1,0, "C");
$pdf->setTextColor(64,64,64);
$pdf->Cell(63,11,"{$numRepSav}",1,1, "C");
$pdf->SetFillColor(255,255,255);
//$pdf->Cell(196,0.7,"",0,1,"C", true);
$pdf->SetFillColor(65,115,121);
$pdf->setTextColor(255,255,255);
$pdf->SetFont("Arial","B",14);
$pdf->Cell(70,11,"2nd Year",1,0,"C", true);
$pdf->setTextColor(64,64,64);
$pdf->SetFont("Arial","B",15);
$pdf->Cell(63,11,"{$numRepROI2}%",1,0, "C");
$pdf->setTextColor(64,64,64);
$pdf->Cell(63,11,"{$numRepSav2}",1,1, "C");
$pdf->SetFillColor(255,255,255);
//$pdf->Cell(196,0.7,"",0,1,"C", true);
$pdf->SetFillColor(236,140,45);
$pdf->setTextColor(255,255,255);
$pdf->SetFont("Arial","B",14);
$pdf->Cell(70,11,"3rd Year",1,0,"C", true);
$pdf->setTextColor(64,64,64);
$pdf->SetFont("Arial","B",15);
$pdf->Cell(63,11,"{$numRepROI3}%",1,0, "C");
$pdf->setTextColor(64,64,64);
$pdf->Cell(63,11,"{$numRepSav3}",1,1, "C");

$pdf->Image("images/pdfexporting/ROIexpthirdstate.png",23,253,0,10);

/*$pdf->Cell(0,10,"Date Today: {$currentDate}",1,1,'C');
$pdf->Cell(0,10,"Company Name: {$repCom}",1,1,'C');
$pdf->Cell(0,10,"Application Name: {$repAppName}",1,1,'C');
$pdf->Cell(0,10,"AGreement Type: {$repAgree}",1,1,'C');
$pdf->Cell(0,10,"License Type: {$repLicType}",1,1,'C');
$pdf->Cell(0,10,"Number of Licenses: {$repNoOfLic}",1,1,'C');
$pdf->Cell(0,10,"Cost of License: {$repCost}",1,1,'C');
$pdf->Cell(0,10,"Install Location: {$repLoc}",1,1,'C');
$pdf->Cell(0,10,"ROI: {$repROI}%",1,1,'C');
$pdf->Cell(0,10,"Savings: USD {$numRepSav}",1,0,'C');*/

$pdf->Image("images/pdfexporting/ROIexpfooter.png",0,266,216,0);
$pdf->output();
 ?>
