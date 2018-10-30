<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
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

    <div class="container">
      <nav class="navbar navbar-default nobord const navsmallmrgbot">
        <div class="container-fluid blueb">
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
              <li><a href="#"><h class="whitfnt2 geofont">Help</p></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

      <div class="jumbotron centertext">
          <h2 class="headngsprpg">Verifier</h2>

          <h3 class="forhelpstat openfont"> Please input the code we've sent to your email. <h>

            <form onsubmit="return verify()" action="roi.php" method="post">
            <!--the following are just transitional variabl-->
              <input type="hidden" name="vercom" value="<?php echo $companyName ?>">
              <input type="hidden" name="verind" value="<?php echo $industry?>">
              <input type="hidden" name="verappname" value="<?php echo $applicationName ?>">
              <input type="hidden" name="veragree" value="<?php echo $agreementType ?>">
              <input type="hidden" name="verlictype" value="<?php echo $licenseType ?>">
              <input type="hidden" name="vernooflic" value="<?php echo $noOfLicenses ?>">
              <input type="hidden" name="vercost" value="<?php echo $costPerLicense ?>">
              <input type="hidden" name="verloc" value="<?php echo $imloc ?>">
            <!--subject to change-->
              <input type="hidden" name="verroi" value="<?php echo $truValROI1 ?>">
              <input type="hidden" name="versav" value="<?php echo $truValSavings1 ?>">
              <input type="hidden" name="verroi2" value="<?php echo $truValROI2 ?>">
              <input type="hidden" name="versav2" value="<?php echo $truValSavings2 ?>">
              <input type="hidden" name="verroi3" value="<?php echo $truValROI3 ?>">
              <input type="hidden" name="versav3" value="<?php echo $truValSavings3 ?>">

              <input class="bigtxtbx" type="text" id="passcode" name="passcode" required>
              <input type="submit" value="Enter">
            </form>
          </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <p class="dfooter geofont">Copyright © ROI Calculator. All rights reserved.</p>
    <script>
    function verify(){var/*sfdasdfasdfasfasdfasdfasfadf*/pass=document.getElementById('passcode').value;if(pass!="<?php echo$passcode;?>"){alert("Passcode is wrong.");return false;}}
    </script>
  </body>
</html>
