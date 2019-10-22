<?php
$comName    = $_POST ['comname'];
$comWebsite = $_POST ['website'];
$comEmail   = $_POST ['comemail'];
$noOfUsers  = $_POST ['numusers'];
$industry   = $_POST ['industry'];
$otherIndustry = $_POST ['otherindustry'];

if (!$_POST['submit']){
    //echo "All fields are needed to be filled out";
}
else  {
    $sql = "INSERT into company ( Timestamp, Industry, OtherIndustry, CompanyName, Website, ContactEmail, NoOfUsers)
            values              (NOW(), '$industry','$otherIndustry', '$comName', '$comWebsite', '$comEmail','$noOfUsers' )";
}

      if (mysqli_query($conn, $sql)) {
  /*        echo "Data creation successful";*/
      }
    //the code below can be removed
    /*  else {
          echo "Data creation not sucessful";
      }*/
/*
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["industry"])) {
    $inderror = "Must select an Industry";
}*/

$backgroundURL = "";

if ($industry=='Engineering') {
  $backgroundURL = "images/bg/engg_bg.png";
}

elseif ($industry=='Automotive') {
  $backgroundURL = "images/bg/auto_bg.png";
}

elseif ($industry=='Oil and Gas') {
  $backgroundURL = "images/bg/o&g_bg.png";
}

elseif ($industry=='Mechanical & Precision') {
  $backgroundURL = "images/bg/m&p_bg.png";
}

elseif ($industry=='Government') {
  $backgroundURL = "images/bg/Gov_bg.jpg";
}

elseif ($industry=='Others') {
  $backgroundURL = "images/bg/others_bg.png";
}

elseif ($industry=='Aerospace') {
  $backgroundURL = "images/bg/aero_bg.png";
}

else {
  $backgroundURL = "images/bg/engg_bg.png";
}
?>
