<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        //session_start();
        include ('connection.php');
        error_reporting(0);
        include ('db_software.php');
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ROI Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="icon/snowflake.png" rel="shortcut icon">
  </head>
  <body>
      <nav class="navbar navbar-default nobord navsmallmrgbot">
        <div class="container-fluid navpad2 blueb">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <!--  <a class="navbar-brand" href="#">-->
            <a class="navbar-brand" href="https://www.snowsoftware.com/int">
              <img src="images/Snowlogo.png"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <!--
                  <li><a href="#"><h class="whitfnt">Snow for Engineering: ROI Calculator</p></a></li> -->

              <li><a href="http://mnl365win:8080/roicalcu/"><h class="whitfnt geofont">Snow for Engineering: ROI Calculator</p></a></li>
              <li><a href="contact"><h class="whitfnt2 geofont">Contact Us</h></a></li>
              <li><a href="https://www.snowsoftware.com/int/contact"><h class="whitfnt2 geofont">Help</p></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container centertext">
      <div class="jumbotron jumbotronaddcomp verifyjumbotron">
          <h3 class="openfont whitefont">For security reasons, we sent a verifier to <u><i><?php echo $comEmailTr; ?></i></u>, please input the six-character code you received <br> or you can click
                <a><u onclick="resend()">here</u></a> to send another verifier.<h3>
            <form onsubmit="return verify()" action="roi_1.php" method="post">
            <!--the following are just transitional variabl-->
              <input type="hidden" name="vercom" value="<?php echo $companyName; ?>">
              <input type="hidden" name="verind" value="<?php echo $industry; ?>">
              <input type="hidden" name="verappname" value="<?php echo $applicationName; ?>">
              <input type="hidden" name="veragree" value="<?php echo $agreementType; ?>">
              <input type="hidden" name="verlictype" value="<?php echo $licenseType; ?>">
              <input type="hidden" name="vernooflic" value="<?php echo $noOfLicenses; ?>">
              <input type="hidden" name="vercost" value="<?php echo $costPerLicense; ?>">
              <input type="hidden" name="verloc" value="<?php echo $imloc; ?>">
            <!--Additional applications-->
              <input type="hidden" name="verappname2" value="<?php echo $applicationName_2; ?>">
              <input type="hidden" name="veragree2" value="<?php echo $agreementType_2; ?>">
              <input type="hidden" name="verlictype2" value="<?php echo $licenseType_2; ?>">
              <input type="hidden" name="vernooflic2" value="<?php echo $noOfLicenses_2; ?>">
              <input type="hidden" name="vercost2" value="<?php echo $costPerLicense_2; ?>">
              <input type="hidden" name="verloc2" value="<?php echo $imloc_2; ?>">

              <input type="hidden" name="verappname3" value="<?php echo $applicationName_3; ?>">
              <input type="hidden" name="veragree3" value="<?php echo $agreementType_3; ?>">
              <input type="hidden" name="verlictype3" value="<?php echo $licenseType_3; ?>">
              <input type="hidden" name="vernooflic3" value="<?php echo $noOfLicenses_3; ?>">
              <input type="hidden" name="vercost3" value="<?php echo $costPerLicense_3; ?>">
              <input type="hidden" name="verloc3" value="<?php echo $imloc_3; ?>">
            <!--subject to change-->
              <input type="hidden" name="verroi" value="<?php echo $truValROI1; ?>">
              <input type="hidden" name="versav" value="<?php echo $truValSavings1; ?>">
              <input type="hidden" name="verroi2" value="<?php echo $truValROI2; ?>">
              <input type="hidden" name="versav2" value="<?php echo $truValSavings2; ?>">
              <input type="hidden" name="verroi3" value="<?php echo $truValROI3; ?>">
              <input type="hidden" name="versav3" value="<?php echo $truValSavings3; ?>">
            <!--the following are for higher level values -->
              <input type="hidden" name="verroi_2_1" value="<?php echo $truVal_2_ROI1; ?>">
              <input type="hidden" name="versav_2_1" value="<?php echo $truVal_2_Savings1; ?>">
              <input type="hidden" name="verroi_2_2" value="<?php echo $truVal_2_ROI2; ?>">
              <input type="hidden" name="versav_2_2" value="<?php echo $truVal_2_Savings2; ?>">
              <input type="hidden" name="verroi_2_3" value="<?php echo $truVal_2_ROI3; ?>">
              <input type="hidden" name="versav_2_3" value="<?php echo $truVal_2_Savings3; ?>">

              <input type="hidden" name="verroi_3_1" value="<?php echo $truVal_3_ROI1; ?>">
              <input type="hidden" name="versav_3_1" value="<?php echo $truVal_3_Savings1; ?>">
              <input type="hidden" name="verroi_3_2" value="<?php echo $truVal_3_ROI2; ?>">
              <input type="hidden" name="versav_3_2" value="<?php echo $truVal_3_Savings2; ?>">
              <input type="hidden" name="verroi_3_3" value="<?php echo $truVal_3_ROI3; ?>">
              <input type="hidden" name="versav_3_3" value="<?php echo $truVal_3_Savings3; ?>">

              <input class="verifytxtbox" type="text" id="f9_vmlvf" name="passcode" autocomplete="off" required><br><br>
              <!--<span class="text-danger"><?php echo $verificationError; ?></span>-->
              <input type="submit" class="entbutdes" name="enter" value="Proceed">
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
    <div class="footer">
      <p class="dfooter geofont">Copyright © ROI Calculator. All rights reserved.</p>
    </div>
    <script>
    function resend() {
      location.reload();
    }
    function zverify(){var _0x414dx1=document["getElementById"]("passcode")["value"];if(_0x414dx1!= "ajdfkejl"){alert("Passcode is wrong.");return false}}
    function verify(){var _0x414dx1=document["getElementById"]("f9_vmlvf")["value"];if(_0x414dx1!= "<?php echo$passcode;?>"){document.getElementById('alertwrong').style.display='block';return false}}
    $(document).keydown(function(e) {
     if (e.key === "Escape") {
         document.getElementById('alertwrong').style.display  = "none";
    }
    });
    window.onclick = function(event) {
        if (event.target == document.getElementById('alertwrong'))
              {
                document.getElementById('alertwrong').style.display = "none";
              }
    }
    </script>
  </body>
</html>
