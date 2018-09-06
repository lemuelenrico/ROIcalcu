<?php
$applicationName  = $_POST ['appname'];     $vendorName       = $_POST ['vendname'];
$agreementType    = $_POST ['agreetype'];   $licenseType      = $_POST ['lictype'];
/*  $iLocHard         = $_POST ['Lochard'];*/
/*  $iLocServ         = $_POST ['Locserve'];*/  $renewalDate      = $_POST ['rendate'];
/*  $iLocCloud        = $_POST ['Loccloud'];*/
$noOfLicenses     = $_POST ['numlicenses']; $costPerLicense   = $_POST ['costlicenses'];

$location = $_REQUEST ['location'];
$imloc = implode (", ",$location);

$companyName= $_POST ['transi'];


        /*the main formula is as follows*/

                  $calculatedROI = ($costPerLicense*$noOfLicenses)/100;

        /*the cut licenses formula is as follows*/

                  $cutLicenses = $noOfLicenses - 3;


if (!$_POST['submittoroi']){
    /*echo "All fields are needed to be filled out";*/
}
else  {
    $sql = "INSERT into software  (EntryDate, ApplicationName, AgreementType, Location,
                                  NoOfLicenses, VendorName, LicenseType, RenewalDate, CostPerLicense, CalculatedROI, CutLicenses)
            values                (NOW(), '$applicationName', '$agreementType', '$imloc',
                                  '$noOfLicenses','$vendorName','$licenseType','$renewalDate','$costPerLicense', $calculatedROI, $cutLicenses)";
}

      if (mysqli_query($conn, $sql)) {
        /*  echo "Data creation successful";*/
      }
    //the code below can be removed
      /*else {
          echo "Data creation not sucessful";
      }*/
?>
