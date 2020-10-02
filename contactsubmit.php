<?php
include ("connection.php");
error_reporting(0);

$comp_contname  = $_POST['comp_contname'];
$comp_contcompany  = $_POST['comp_contcompany'];
$comp_validcontactemail  = $_POST['comp_validcontactemail'];
$comp_contmessage  = $_POST['comp_contmessage'];

$sql="INSERT INTO `contactform` (`name`, `company`, `email`, `message`)
VALUES ('$comp_contname', '$comp_contcompany', '$comp_validcontactemail', '$comp_contmessage')";

if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else
{
    echo "failed";
}

  //here are the codes for sending emails for the contact modal

    $toServ       ='lenrico@openit.com, adecastro@openit.com'; //you can add multiple emails, just separate them with comma
    $subjectServ  ='Savings Calculator Contact Form';
    $messageServ  ="Name: ".$comp_contname."\n"."Company: ".$comp_contcompany."\n"."Contact Email: ".$comp_validcontactemail."\n"."Contact Message: ".$comp_contmessage;
    $headersServ  ="From: openitsavingscalc@gmail.com";

    mail($toServ,$subjectServ,$messageServ,$headersServ);


?>
