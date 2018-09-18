<?php
$applicationName  = $_POST ['appname'];     $vendorName       = $_POST ['vendname'];
$agreementType    = $_POST ['agreetype'];   $licenseType      = $_POST ['lictype'];
$location = $_REQUEST ['location'];         $renewalDate      = $_POST ['rendate'];
$noOfLicenses     = $_POST ['numlicenses']; $costPerLicense   = $_POST ['costlicenses'];

$imloc = implode (", ",$location);

$companyName= $_POST ['transi'];


        /*the main formula is as follows*/

                  $calculatedROI = round((($costPerLicense*$noOfLicenses)/100),2);

        /*the cut licenses formula is as follows*/

                  $cutLicenses = $noOfLicenses - 3;


if (!$_POST['submittoroi']){
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
