<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        //session_start();
        include ('connection.php');
        error_reporting(0);
        include ('db_software.php');
        //include ('admin_mail.php')
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Savings Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="icon/it.ico" rel="shortcut icon">
  </head>
  <body>
    <?php include ("header.php"); ?>
    <div class="container centertext">
      <div class="jumbotron jumbotronaddcomp verifyjumbotron">
          <h3 class="openfont whitefont">Please provide the verification code sent to <u><i><?php echo $comEmailTr; ?></i></u>.<br> Didn't receive a code? Click
                <a class="whitefont"><u onclick="resend()">here</u></a> to send a new one.<h3>
            <form onsubmit="return verify()" action="roi_1.php" method="post">
            <!--the following are just transitional variabl-->
              <input type="hidden" name="vercom" value="<?php echo $companyName; ?>">
              <input type="hidden" name="verind" value="<?php echo $industry; ?>">
              <input type="hidden" name="verappname" value="<?php echo $applicationName; ?>">
              <input type="hidden" name="veragree" value="<?php echo $agreementType; ?>">
              <input type="hidden" name="verlictype" value="<?php echo $licenseType; ?>">
              <input type="hidden" name="vernooflic" value="<?php echo $noOfLicenses; ?>">
              <input type="hidden" name="vercost" value="<?php echo $applicationA_costs; ?>">  <!--here is where we change the app cost to total contract(change back to cost per license if necessary includeing the labels in HTML)-->
              <input type="hidden" name="verloc" value="<?php echo $imloc; ?>">
            <!--Additional applications-->
              <input type="hidden" name="verappname2" value="<?php echo $applicationName_2; ?>">
              <input type="hidden" name="veragree2" value="<?php echo $agreementType_2; ?>">
              <input type="hidden" name="verlictype2" value="<?php echo $licenseType_2; ?>">
              <input type="hidden" name="vernooflic2" value="<?php echo $noOfLicenses_2; ?>">
              <input type="hidden" name="vercost2" value="<?php echo $applicationB_costs; ?>">  <!--here is where we change the app cost to total contract(change back to cost per license if necessary includeing the labels in HTML)-->
              <input type="hidden" name="verloc2" value="<?php echo $imloc_2; ?>">

              <input type="hidden" name="verappname3" value="<?php echo $applicationName_3; ?>">
              <input type="hidden" name="veragree3" value="<?php echo $agreementType_3; ?>">
              <input type="hidden" name="verlictype3" value="<?php echo $licenseType_3; ?>">
              <input type="hidden" name="vernooflic3" value="<?php echo $noOfLicenses_3; ?>">
              <input type="hidden" name="vercost3" value="<?php echo $applicationC_costs; ?>">  <!--here is where we change the app cost to total contract(change back to cost per license if necessary includeing the labels in HTML)-->
              <input type="hidden" name="verloc3" value="<?php echo $imloc_3; ?>">
            <!--subject to change-->
              <input type="hidden" name="verroi" value="<?php echo $ROI_1_1; ?>">
              <input type="hidden" name="versav" value="<?php echo $savings_1_1; ?>">
              <input type="hidden" name="verroi2" value="<?php echo $ROI_1_2; ?>">
              <input type="hidden" name="versav2" value="<?php echo $savings_1_2; ?>">
              <input type="hidden" name="verroi3" value="<?php echo $ROI_1_3; ?>">
              <input type="hidden" name="versav3" value="<?php echo $savings_1_3; ?>">
            <!--the following are for higher level values -->
              <input type="hidden" name="verroi_2_1" value="<?php echo $ROI_2_1; ?>">
              <input type="hidden" name="versav_2_1" value="<?php echo $savings_2_1; ?>">
              <input type="hidden" name="verroi_2_2" value="<?php echo $ROI_2_2; ?>">
              <input type="hidden" name="versav_2_2" value="<?php echo $savings_2_2; ?>">
              <input type="hidden" name="verroi_2_3" value="<?php echo $ROI_2_3; ?>">
              <input type="hidden" name="versav_2_3" value="<?php echo $savings_2_3; ?>">

              <input type="hidden" name="verroi_3_1" value="<?php echo $ROI_3_1; ?>">
              <input type="hidden" name="versav_3_1" value="<?php echo $savings_3_1; ?>">
              <input type="hidden" name="verroi_3_2" value="<?php echo $ROI_3_2; ?>">
              <input type="hidden" name="versav_3_2" value="<?php echo $savings_3_2; ?>">
              <input type="hidden" name="verroi_3_3" value="<?php echo $ROI_3_3; ?>">
              <input type="hidden" name="versav_3_3" value="<?php echo $savings_3_3; ?>">

              <input type="hidden" name="appCost_1" value="<?php echo $applicationA_costs; ?>">
              <input type="hidden" name="appCost_2" value="<?php echo $applicationB_costs; ?>">
              <input type="hidden" name="appCost_3" value="<?php echo $applicationC_costs; ?>">


              <input type="hidden" name="maxapp" value="<?php echo $maxapp; ?>">
              <input type="hidden" name="maxappcost" value="<?php echo $maxappcost; ?>">

              <input type="hidden" name="maxappreduction1" value="<?php echo $maxappCostReductionLvl_1; ?>">
              <input type="hidden" name="maxappreduction2" value="<?php echo $maxappCostReductionLvl_2; ?>">
              <input type="hidden" name="maxappreduction3" value="<?php echo $maxappCostReductionLvl_3; ?>">

              <input type="hidden" name="overallsav1" value="<?php echo $level_1_overallSav; ?>">
              <input type="hidden" name="overallsav2" value="<?php echo $level_2_overallSav; ?>">
              <input type="hidden" name="overallsav3" value="<?php echo $level_3_overallSav; ?>">

              <input class="verifytxtbox" type="text" id="f9_vmlvf" name="passcode" autocomplete="off" required><br><br>
              <!--<span class="text-danger"><?php echo $verificationError; ?></span>-->
              <input type="submit" class="entbutdes" name="enter" value="Proceed">

              <!-- INCLUDE ALL OTHER VARIABLES FOR NEW INCLUDED CHART, APPLIATIONACOST, APPLICATIONBCOSTS, APPLICATION C CO -->


            <!--  <button class="entbutdes" onclick="resend()">Resend</button> -->
            </form>
          </div>

          <div id="alertwrong" class="modal">
            <div class="modal-content animate">
              <img src="images/warning.png" width="100px">
                <span onclick="document.getElementById('alertwrong').style.display='none'"
                class="close" title="Close PopUp">&times;</span>
                <p class="center">Passcode is wrong.</p>
              </div>
          </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <?php include ('contactform.php'); ?>
    <script>
    function resend() {
      location.reload();
    }
    function zverify(){var _0x414dx1=document["getElementById"]("passcode")["value"];if(_0x414dx1!= "ajdfjl"){alert("Passcode is wrong.");return false}}
    function verify(){var _0x414dx1=document["getElementById"]("f9_vmlvf")["value"];if(_0x414dx1.trim() != "<?php echo$passcode;?>"){document.getElementById('alertwrong').style.display='block';return false}}
/*
    $(document).keydown(function(e) {
     if (e.key === "Escape") {
         document.getElementById('alertwrong').style.display  = "none";
    }
  });*/
    var alertwrong = document.getElementById('alertwrong');
    var modalcontact = document.getElementById('contactmodal');
    window.onclick = function(event) {
      if (event.target == modalcontact || event.target == alertwrong)
        {
        modalcontact.style.display = "none";
        alertwrong.style.display = "none";
        }
    }

    function closemodals(){
      modalcontact.style.display = "none";
    }


//disable white spaces verification inputs
    $('#f9_vmlvf').keypress(function( e ) {
    if(e.which === 32)
        return false;
    });

    </script>

    <div class="footer">
      <p class="dfooter openfont">Copyright © <?php echo date('Y'); ?> Open iT. All rights reserved.</p>
    </div>
  </body>
</html>
