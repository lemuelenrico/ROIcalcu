<?php

$applicationName  = $_POST ['appname'];     $vendorName       = $_POST ['vendname'];
$agreementType    = $_POST ['agreetype'];   $licenseType      = $_POST ['lictype'];
$location = $_REQUEST ['location'];         $renewalDate      = $_POST ['rendate'];
$noOfLicenses     = $_POST ['numlicenses']; $costPerLicense   = $_POST ['costlicenses'];

$imloc = implode (", ",$location);

/*the following variables are transitional variables*/

$companyName  = $_POST ['transi'];
$industryTr   = $_POST ['transi2'];
$comWebsiteTr = $_POST ['transi3'];
$comEmailTr   = $_POST ['transi4'];
$noOfUsersTr  = $_POST ['transi5'];

        /*the main formula is as follows*/

                  $calculatedROI = round((($costPerLicense*$noOfLicenses)/100),2);

        /*the cut licenses formula is as follows*/

                  $cutLicenses = $noOfLicenses - 3;

        /*the following are the variables for yearly breakdown of ROI, this is open to change*/

        /*
        $engROI = array(917, 500, 600);
        $ogROI = array(1458, 750, 800);
        $mpROI = array(105, 90, 50);
        var_dump($engROI);*/

        $engROIyr1  = 217;   $ogROIyr1   = 148;   $mpROIyr1     = 105;
        $engROIyr2  = 50;   $ogROIyr2   = 43;    $mpROIyr2     = 40;
        $engROIyr3  = 63;   $ogROIyr3   = 75;    $mpROIyr3     = 10;

        $govROIyr1  = 105;   $autoROIyr1 =  189;   $othersROIyr1 = 74;
        $govROIyr2  = 107;   $autoROIyr2 =  40;   $othersROIyr2  = 96;
        $govROIyr3  = 50;    $autoROIyr3 =  75;   $othersROIyr3  = 73;

        /*the following are the formula for each industry*/


        $engSavings1  = ($engROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $engSavings2  = ($engROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $engSavings3  = ($engROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        $ogSavings1   = ($ogROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $ogSavings2   = ($ogROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $ogSavings3   = ($ogROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        $mpSavings1   = ($mpROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $mpSavings2   = ($mpROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $mpSavings3   = ($mpROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        /*
        $engSavings = [];
        $ogSavings = [];
        $mpSavings = [];
        for($i = 0; $i < 3; $i++){
            $engSavings = ($engROI[$i] * 0.01) * ($costPerLicense*$noOfLicenses);
            $ogSavings = ($ogROI[$i] * 0.01) * ($costPerLicense*$noOfLicenses);
            $mpSavings = ($mpROI[$i] * 0.01) * ($costPerLicense*$noOfLicenses);
        }
        var_dump($engSavings);*/

        $govSavings1  = ($govROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $govSavings2  = ($govROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $govSavings3  = ($govROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        $autoSavings1 = ($autoROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $autoSavings2 = ($autoROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $autoSavings3 = ($autoROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        $othersSavings1 = ($othersROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $othersSavings2 = ($othersROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $othersSavings3 = ($othersROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        /*the following are the conditionals per industry*/

        if ($industryTr=='Engineering') {
          $valROI1 = $engROIyr1;    $valSavings1 = $engSavings1;
          $valROI2 = $engROIyr2;    $valSavings2 = $engSavings2;
          $valROI3 = $engROIyr3;    $valSavings3 = $engSavings3;
        }

        elseif ($industryTr=='Automotive') {
          $valROI1 = $autoROIyr1;    $valSavings1 = $autoSavings1;
          $valROI2 = $autoROIyr2;    $valSavings2 = $autoSavings2;
          $valROI3 = $autoROIyr3;    $valSavings3 = $autoSavings3;
        }

        elseif ($industryTr=='Oil and Gas') {
          $valROI1 = $ogROIyr1;    $valSavings1 = $ogSavings1;
          $valROI2 = $ogROIyr2;    $valSavings2 = $ogSavings2;
          $valROI3 = $ogROIyr3;    $valSavings3 = $ogSavings3;
        }

        elseif ($industryTr=='Mechanical & Precision') {
          $valROI1 = $mpROIyr1;    $valSavings1 = $mpSavings1;
          $valROI2 = $mpROIyr2;    $valSavings2 = $mpSavings2;
          $valROI3 = $mpROIyr3;    $valSavings3 = $mpSavings3;
        }

        elseif ($industryTr=='Government') {
          $valROI1 = $govROIyr1;    $valSavings1 = $govSavings1;
          $valROI2 = $govROIyr2;    $valSavings2 = $govSavings2;
          $valROI3 = $govROIyr3;    $valSavings3 = $govSavings3;
        }

        elseif ($industryTr=='Others') {
          $valROI1 = $othersROIyr1;    $valSavings1 = $othersSavings1;
          $valROI2 = $othersROIyr2;    $valSavings2 = $othersSavings2;
          $valROI3 = $othersROIyr3;    $valSavings3 = $othersSavings3;
        }

        else {
          $valROI1 = $othersROIyr1;    $valSavings1 = $othersSavings1;
          $valROI2 = $othersROIyr2;    $valSavings2 = $othersSavings2;
          $valROI3 = $othersROIyr3;    $valSavings3 = $othersSavings3;
        }


        /*the following are the variables for yearly breakdown per license type, this is open to change*/

        $ppuMultYr1 = 2;    $perpMultYr1 = 1; $lsMultYr1 = 1; $subsMultYr1 = 1; $rntMultYr1 = 1;
        $ppuMultYr2 = 1;    $perpMultYr2 = 1; $lsMultYr2 = 1; $subsMultYr2 = 1; $rntMultYr2 = 1;
        $ppuMultYr3 = 1.5;   $perpMultYr3 = 1; $lsMultYr3 = 1; $subsMultYr3 = 1; $rntMultYr3 = 1;

        /*the following are the conditionals per agreement type*/

        if ($agreementType=='Lease') {
          $truValROI1 = $valROI1 * $lsMultYr1;    $truValSavings1 = $valSavings1 * $lsMultYr1;
          $truValROI2 = $valROI2 * $lsMultYr2;    $truValSavings2 = $valSavings2 * $lsMultYr2;
          $truValROI3 = $valROI3 * $lsMultYr3;    $truValSavings3 = $valSavings3 * $lsMultYr3;
        }

        elseif ($agreementType=='Rent') {
          $truValROI1 = $valROI1 * $rntMultYr1;    $truValSavings1 = $valSavings1 * $rntMultYr1;
          $truValROI2 = $valROI2 * $rntMultYr2;    $truValSavings2 = $valSavings2 * $rntMultYr2;
          $truValROI3 = $valROI3 * $rntMultYr3;    $truValSavings3 = $valSavings3 * $rntMultYr3;
        }

        elseif ($agreementType=='Subscription') {
          $truValROI1 = $valROI1 * $subsMultYr1;    $truValSavings1 = $valSavings1 * $subsMultYr1;
          $truValROI2 = $valROI2 * $subsMultYr2;    $truValSavings2 = $valSavings2 * $subsMultYr2;
          $truValROI3 = $valROI3 * $subsMultYr3;    $truValSavings3 = $valSavings3 * $subsMultYr3;
        }

        elseif ($agreementType=='PPU') {
          $truValROI1 = $valROI1 * $ppuMultYr1;    $truValSavings1 = $valSavings1 * $ppuMultYr1;
          $truValROI2 = $valROI2 * $ppuMultYr2;    $truValSavings2 = $valSavings2 * $ppuMultYr2;
          $truValROI3 = $valROI3 * $ppuMultYr3;    $truValSavings3 = $valSavings3 * $ppuMultYr3;
        }

        elseif ($agreementType=='Perpetual') {
          $truValROI1 = $valROI1 * $perpMultYr1;    $truValSavings1 = $valSavings1 * $perpMultYr1;
          $truValROI2 = $valROI2 * $perpMultYr2;    $truValSavings2 = $valSavings2 * $perpMultYr2;
          $truValROI3 = $valROI3 * $perpMultYr3;    $truValSavings3 = $valSavings3 * $perpMultYr3;
        }

        else {
          $truValROI1 = $valROI1; $truValSavings1 = $valSavings1;
          $truValROI2 = $valROI2; $truValSavings2 = $valSavings2;
          $truValROI3 = $valROI3; $truValSavings2 = $valSavings3;
        }

        //these are the variables for roi in diff levelbutdes

        $tru_2_1 = 1; $tru_2_2 = 1; $tru_2_3 = 1;
        $tru_3_1 = 1; $tru_3_2 = 1; $tru_3_3 = 1;

        $truVal_2_ROI1 = 0; $truVal_2_ROI2 = 0; $truVal_2_ROI3 = 0;
        $truVal_3_ROI1 = 0; $truVal_3_ROI2 = 0; $truVal_3_ROI3 = 0;


  if (!$_POST['submittoroi']){
  }
  else  {
    $sql = "INSERT into software  (EntryDate, CompanyName, ApplicationName, AgreementType, Location,
                                  NoOfLicenses, VendorName, LicenseType, RenewalDate, CostPerLicense, CalculatedROI, CutLicenses)
            values                (NOW(), '$companyName', '$applicationName', '$agreementType', '$imloc',
                                  '$noOfLicenses','$vendorName','$licenseType','$renewalDate','$costPerLicense', $calculatedROI, $cutLicenses)";

    $sql2 = "INSERT into yearlyroi (EntryDate, ROIyear1, ROIyear2, ROIyear3, SavingsYear1, SavingsYear2, SavingsYear3, Industry, CompanyName)
            values                (NOW(), '$truValROI1', '$truValROI2', '$truValROI3','$truValSavings1','$truValSavings2','$truValSavings3','$industryTr','$companyName')";
}

      if (mysqli_query($conn, $sql)) {
        /*  echo "Data creation successful";*/
      }
    //the code below can be removed
      /*else {
          echo "Data creation not sucessful";
      }*/
      if (mysqli_query($conn, $sql2)) {
        /*  echo "Data creation successful";*/
      }
    //the code below can be removed
      /*else {
          echo "Data creation not sucessful";
      }*/



  //here are the codes for sending emails both the server and client

  /*  $toServ       ='roiexpel@gmail.com'; //you can add multiple emails, just separate them with comma
    $subjectServ  ='ROI Calculator Entry';
    $messageServ  ="Company Name: ".$companyName."\n"."Industry: ".$industryTr."\n"."Company Website: ".
                    $comWebsiteTr."\n"."Company Email: ".$comEmailTr."\n"."Number of Users: ".$noOfUsersTr.
                    "\n"."Application Name: ".$applicationName.", Vendor Name: ".$vendorName.
                    "\n"."Agreement Type: ".$agreementType.", License Type: ".$licenseType.
                    "\n"."Install Location: ".$imloc.
                    "\n"."Renewal Date: ".$renewalDate.
                    "\n"."Number of Licenses: ".$noOfLicenses.",    Cost per License: ".$costPerLicense.
                    "\n"."Year 1 ROI: ".$truValROI1."%  |  $".$truValSavings1.
                    "\n"."Year 2 ROI: ".$truValROI2."%  |  $".$truValSavings2.
                    "\n"."Year 3 ROI: ".$truValROI3."%  |  $".$truValSavings3;

    $headersServ  ="From: lem@lem.com";

    mail($toServ,$subjectServ,$messageServ,$headersServ); */


    /*$toClient='roiexpel@gmail.com';
    $subjectClient="Snow: ROI Calculator";
    $messageClient='
                    <html>
                      <head>
                      </head>
                      <body>
                        <div style="background:#47c3dc; text-align:center; padding: 2rem; color:white;">
                          <img src="http://bestfoodsgroupng.com/gallery/7f8fd36f6355a49b4ef25c70e1493ffe.png" width="100px" height="100px">
                          <h2>Thank you for calculating using Snow for Engineering!
                          If you have more questions, you may inquire <a href="https://openit.com/contact-us-2/">here</a>.</h2>
                        </div>
                      </body>
                    </html>
                    ';
    $headersClient  ="From: lem@lem.com";
    $headersClient .= "MIME-Version: 1.0"."\r\n";
    $headersClient .= "Content-type:text/html;charset=iso-8859-1"."\r\n";*/

  /*  $toClient=$comEmailTr;
    $subjectClient  ="Calculate ROI with Snow";
    $messageClient  ='
                    <html>
                      <body style="background:#47c3dc;">
                        <div style="background:#47c3dc; text-align:center; padding: 1rem 8vw 2rem 8vw; color:#585858; font-family: Helvetica;">
                          <div style="width;100%; margin: 0px;">
                            <img src="https://lh3.googleusercontent.com/-yZaqfNuqddw/W6nbzBUXsfI/AAAAAAAAAAc/_w-fna_L7e8bdXG8rQuzNvDSQKVibIDcACL0BGAs/w530-d-h129-n-rw/Snowlogo.png" width="136px" height: "33px" >
                          </div>
                          <div style="width:100%; background:white; border-radius: 8px; margin: 0px; padding: 1px;" >
                            <br><h2>Thank you for calculating using Snow for Engineering!<br><br>
                            If you have more questions, you may proceed <a href="https://www.snowsoftware.com/int/contact">here</a>.</h2><br><strong>';
    $messageClient .= $companyName;
    $messageClient .='
                      </strong>
                        </div>
                      </div>
                      </body>
                    </html>
                    ';
    $headersClient  ="From: lem@lem.com";
    $headersClient .= "MIME-Version: 1.0"."\r\n";
    $headersClient .= "Content-type:text/html;charset=iso-8859-1"."\r\n";


    mail($toClient,$subjectClient,$messageClient,$headersClient); */
      $passcode = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789';
      $passcode = substr(str_shuffle($passcode), 0, 6);

      //$_SESSION['passcode'] = $passcode;

      $toVerify=$comEmailTr;
      $subjectVerify  ="ROI calc Passcode";
      $messageVerify  ='
                      <html>
                        <body>
                        <div style="color:#585858; font-family: Helvetica;" padding:0; margin:0;>
                        <div style="width:500px; margin: 0 auto;">
                        <div style="width:100%; background:#47c3dc; margin: 0; padding-top: 20px; padding-bottom: 16px; text-align:center;">
                        <img src="https://lh3.googleusercontent.com/-yZaqfNuqddw/W6nbzBUXsfI/AAAAAAAAAAc/_w-fna_L7e8bdXG8rQuzNvDSQKVibIDcACL0BGAs/w530-d-h129-n-rw/Snowlogo.png" width="136px" height: "33px" >
                        </div>
                        <div style="width:100%; text-align:center; background:#E8E8E8; margin:0; padding:0;">
                        <br><h2>Hello ';
      $messageVerify .= $companyName;
      $messageVerify .= '! Here is your verification code for <br>calculated results: <br><br>
                        <div style="width:200px; background:white; font-size: 30px; font-family: Arial; margin:0 auto; padding: 10px; border-bottom: 6px solid #ec8c2d;">';
      $messageVerify .= $passcode;
      $messageVerify .='
                        </div><br>
                        <div style="background:#dcdcdc; text-align:center; width:100%; margin: 0; padding-top: 40px; padding-bottom: 50px; color:#f5f5f5; font-size:12px;">
                        <a href="https://www.snowsoftware.com/int/contact" style="background-color:#ec8c2d; color:white; padding: 15px 20px; text-decoration:none; font-size:16px;">CONTACT SNOW</a>
                        </div>
                        <br>
                        <div style="background:#47c3dc; width:100%; margin: 0; padding-top: 10px; padding-bottom: 12px; color:#f5f5f5; font-size:12px;">';
      $messageVerify .= 'All rights reserved ©';
      $messageVerify .= date('Y');
      $messageVerify .='. Snow ROI Calculator.
                        </div>
                        </div>
                        </div>
                        </div>
                        </body>
                      </html>
                      ';
      $headersVerify  ="From: lem@lem.com";
      $headersVerify .= "MIME-Version: 1.0"."\r\n";
      $headersVerify .= "Content-type:text/html;charset=iso-8859-1"."\r\n";

      mail($toVerify,$subjectVerify,$messageVerify,$headersVerify);

?>
