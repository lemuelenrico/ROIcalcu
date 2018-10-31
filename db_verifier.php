<?php

$companyName     = $_POST['vercom'];
$industry        = $_POST['verind'];
$applicationName = $_POST['verappname'];
$agreementType   = $_POST['veragree'];
$licenseType     = $_POST['verlictype'];
$noOfLicenses    = $_POST['vernooflic'];
$costPerLicense  = $_POST['vercost'];
$imloc           = $_POST['verloc'];
$truValROI1      = $_POST['verroi'];
$truValSavings1  = $_POST['versav'];
$truValROI2      = $_POST['verroi2'];
$truValSavings2  = $_POST['versav2'];
$truValROI3      = $_POST['verroi3'];
$truValSavings3  = $_POST['versav3'];
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
