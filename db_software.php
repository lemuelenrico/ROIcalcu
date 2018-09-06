<?php
$applicationName  = $_POST ['appname'];     $vendorName       = $_POST ['vendname'];
$agreementType    = $_POST ['agreetype'];   $licenseType      = $_POST ['lictype'];
  $iLocHard         = $_POST ['Lochard'];
  $iLocServ         = $_POST ['Locserve'];  $renewalDate      = $_POST ['rendate'];
  $iLocCloud        = $_POST ['Loccloud'];
$noOfLicenses     = $_POST ['numlicenses']; $costPerLicense   = $_POST ['costlicenses'];

$companyName= $_POST ['transi'];

//$companyName= $comName;

        /* for form to form recognition */

        //$comName = $comName;

        /*the main formula is as follows*/

                  $calculatedROI = ($costPerLicense*$noOfLicenses)/100;

if (!$_POST['submittoroi']){
    /*echo "All fields are needed to be filled out";*/
}
else  {
    $sql = "INSERT into software  (EntryDate, ApplicationName, AgreementType, ILocHard, ILocServ, ILocCloud,
                                  NoOfLicenses, VendorName, LicenseType, RenewalDate, CostPerLicense, CalculatedROI)
            values                (NOW(), '$applicationName', '$agreementType', '$iLocHard','$iLocServ','$iLocCloud',
                                  '$noOfLicenses','$vendorName','$licenseType','$renewalDate','$costPerLicense', $calculatedROI)";
}

      if (mysqli_query($conn, $sql)) {
        /*  echo "Data creation successful";*/
      }
    //the code below can be removed
      /*else {
          echo "Data creation not sucessful";
      }*/
?>
