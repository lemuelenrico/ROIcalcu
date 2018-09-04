<!DOCTYPE html>
<html lang="en">
  <?php
  include ('connection.php');
  error_reporting(0);
  include ('db_software.php');
  ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ROI Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
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
            <a class="navbar-brand" href="#">
              <img src="images/Snowlogo.png"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><h class="whitfnt">Snow for Engineering: ROI Calculator</p></a></li>
              <li><a href="help.html"><h class="whitfnt2">Help</p></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

      <div class="jumbotron aligncntr">
        <div class="container-fluid rightalgn"><img src="images/pointer3.png"></div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <h2 class="headngsprpg">ROI for
              <?php
              echo $applicationName;
              ?>
            </h2>
          </div>
          <div class="col-md-2 col-sm-2 middleset aligncntr">
          <br>
            <button onclick="nopdf()" class="btn btn-warning">Download PDF</button>
          </div>
          <div class="col-md-4 col-sm-4"></div>
        </div>
<br><br><br><br>

        <div>
          <div class="row">
            <div class="col-md-5 col-sm-5 rightalgn leftalgn roilbl">
              Application Name:
            </div>
            <div class="col-md-7 col-sm-7">
              <?php
                echo $applicationName;
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 col-sm-5 rightalgn leftalgn roilbl">
              Agreement Type:
            </div>
            <div class="col-md-7 col-sm-7 roiplch">
              <?php
                echo $agreementType;
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 col-sm-5 rightalgn leftalgn roilbl">
              License Type:
            </div>
            <div class="col-md-7 col-sm-7 roiplch">
              <?php
                echo $licenseType;
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 col-sm-5 rightalgn leftalgn roilbl">
              Number of Licenses:
            </div>
            <div class="col-md-7 col-sm-7 roiplch">
              <?php
                echo $noOfLicenses;
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 col-sm-5 rightalgn leftalgn roilbl">
              Cost Per License:
            </div>
            <div class="col-md-7 col-sm-7 roiplch">
              <?php
                echo $costPerLicense;
              ?>
            </div>
          </div>
        </div>




      <span class="lresult roiplch">$
        <?php
          echo $calculatedROI;
        ?>
      </span><br><br><br><br><br><br><br><br><br>

      </div>
      <!--will delete this later -->
    <script>
      function nopdf() {
        alert("We are working on this feature.");
        }
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <p class="dfooter">Copyright © ROI Calculator. All rights reserved.</p>
  </body>
</html>
