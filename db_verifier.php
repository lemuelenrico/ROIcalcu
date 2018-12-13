<?php

$companyName     = $_POST['vercom'];
$industry        = $_POST['verind'];
$applicationName = $_POST['verappname'];
$agreementType   = $_POST['veragree'];
$licenseType     = $_POST['verlictype'];
$noOfLicenses    = $_POST['vernooflic'];
$costPerLicense  = $_POST['vercost'];
$imloc           = $_POST['verloc'];

$applicationName_2 = $_POST['verappname2'];
$agreementType_2   = $_POST['veragree2'];
$licenseType_2     = $_POST['verlictype2'];
$noOfLicenses_2    = $_POST['vernooflic2'];
$costPerLicense_2  = $_POST['vercost2'];
$imloc_2           = $_POST['verloc2'];

$applicationName_3 = $_POST['verappname3'];
$agreementType_3   = $_POST['veragree3'];
$licenseType_3     = $_POST['verlictype3'];
$noOfLicenses_3    = $_POST['vernooflic3'];
$costPerLicense_3  = $_POST['vercost3'];
$imloc_3           = $_POST['verloc3'];

$truValROI1      = $_POST['verroi'];
$truValSavings1  = $_POST['versav'];
$truValROI2      = $_POST['verroi2'];
$truValSavings2  = $_POST['versav2'];
$truValROI3      = $_POST['verroi3'];
$truValSavings3  = $_POST['versav3'];

$truVal_2_ROI1     = $_POST['verroi_2_1'];
$truVal_2_Savings1 = $_POST['versav_2_1'];
$truVal_2_ROI2     = $_POST['verroi_2_2'];
$truVal_2_Savings2 = $_POST['versav_2_2'];
$truVal_2_ROI3     = $_POST['verroi_2_3'];
$truVal_2_Savings3 = $_POST['versav_2_3'];

$truVal_3_ROI1     = $_POST['verroi_3_1'];
$truVal_3_Savings1 = $_POST['versav_3_1'];
$truVal_3_ROI2     = $_POST['verroi_3_2'];
$truVal_3_Savings2 = $_POST['versav_3_2'];
$truVal_3_ROI3     = $_POST['verroi_3_3'];
$truVal_3_Savings3 = $_POST['versav_3_3'];

$applicationA_costs = $_POST['appCost_1'];
$applicationB_costs = $_POST['appCost_2'];
$applicationC_costs = $_POST['appCost_3'];

$maxapp     = $_POST['maxapp'];
$maxappcost = $_POST['maxappcost'];

$maxappCostReductionLvl_1 = $_POST['maxappreduction1'];
$maxappCostReductionLvl_2 = $_POST['maxappreduction2'];
$maxappCostReductionLvl_3 = $_POST['maxappreduction3'];

$level_1_overallSav = $_POST['overallsav1'];
$level_2_overallSav = $_POST['overallsav2'];
$level_3_overallSav = $_POST['overallsav3'];

//$passcodeInput   = $_POST['passcode'];

$lasRepSav   = number_format($verSav,2);
$lasRepSav2  = number_format($verSav2,2);
$lasRepSav3  = number_format($verSav3,2);

/*$verificationError = '';
if(isset($_POST["enter"]))
{
    if($_POST["passcode"] != $_SESSION['passcode'])
    {
         $verificationError = "<p>Invalid input.</p>";
    }
    if($name_error == "" && $email_error == "" && $gender_error == "")
    {
         $output = '<p><label>Ouput-</label></p>
         <p>Your Name is '.$_POST["name"].'</p>
         <p>Your Email is '.$_POST["email"].'</p>
         <p>Your Gender is '.$_POST["gender"].'</p>
         ';
    }
}*/


 ?>
