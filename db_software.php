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

        $engROIyr1  = 917;   $ogROIyr1   = 1458;   $mpROIyr1     = 105;
        $engROIyr2  = 1000;  $ogROIyr2   = 1500;   $mpROIyr2     = 120;
        $engROIyr3  = 1100;  $ogROIyr3   = 1600;   $mpROIyr3     = 150;

        $govROIyr1  = 105;   $autoROIyr1 =  110;   $othersROIyr1 = 474;
        $govROIyr2  = 120;   $autoROIyr2 =  120;   $othersROIyr2 = 496;
        $govROIyr3  = 150;   $autoROIyr3 =  150;   $othersROIyr3 = 573;

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

        $govSavings1  = ($engROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $govSavings2  = ($engROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $govSavings3  = ($engROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        $autoSavings1 = ($engROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $autoSavings2 = ($engROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $autoSavings3 = ($engROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

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



if (!$_POST['submittoroi']){
}
else  {
    $sql = "INSERT into software  (EntryDate, ApplicationName, AgreementType, Location,
                                  NoOfLicenses, VendorName, LicenseType, RenewalDate, CostPerLicense, CalculatedROI, CutLicenses)
            values                (NOW(), '$applicationName', '$agreementType', '$imloc',
                                  '$noOfLicenses','$vendorName','$licenseType','$renewalDate','$costPerLicense', $calculatedROI, $cutLicenses)";

    $sql2 = "INSERT into yearlyroi (EntryDate, ROIyear1, ROIyear2, ROIyear3, SavingsYear1, SavingsYear2, SavingsYear3, Industry, CompanyName)
            values                (NOW(), '$valROI1', '$valROI2', '$valROI3','$valSavings1','$valSavings2','$valSavings3','$industryTr','$companyName')";
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



  //here are the codes for sending emails both the server and Yar_Client

    $toServ       ='roiexpel@gmail.com'; //you can add multiple emails, just separate them with comma
    $subjectServ  ='ROI Calculator Entry';
    $messageServ  ="Company Name: ".$companyName."\n"."Industry: ".$industryTr."\n"."Company Website: ".
                    $comWebsiteTr."\n"."Company Email: ".$comEmailTr."\n"."Number of Users: ".$noOfUsersTr;
    $headersServ  ="From: lem@lem.com";

    mail($toServ,$subjectServ,$messageServ,$headersServ);

    $toClient=$comEmailTr;
    $subjectClient="S4E: ROI Calculator";
    $messageClient='
                    <html>
                      <head>
                      </head>
                      <body>
                        <div style="background:#47c3dc; text-align:center; padding: 2rem; color:white;">
                          <img src="http://bestfoodsgroupng.com/gallery/7f8fd36f6355a49b4ef25c70e1493ffe.png">
                          <h2>Thank you for calculating using Snow for Engineering!
                          If you have more questions, you may inquire <a href="https://openit.com/contact-us-2/">here</a>.</h2>
                        </div>
                      </body>
                    </html>
                    ';
    $headersClient  ="From: lem@lem.com";
    $headersClient .= "MIME-Version: 1.0"."\r\n";
    $headersClient .= "Content-type:text/html;charset=iso-8859-1"."\r\n";


    mail($toClient,$subjectClient,$messageClient,$headersClient);


?>
