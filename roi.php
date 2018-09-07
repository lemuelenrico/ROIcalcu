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
              echo $companyName;
              ?>
            </h2>
          </div>
          <div class="col-md-2 col-sm-2 middleset aligncntr">
          <br>
            <!--<button onclick="nopdf()" class="btn btn-warning">Download PDF</button>-->
            <!--<a href=""><button onclick="nopdf()" class="btn btn-warning">Download PDF</button></a>-->
            <a href="files/SampleCalculation.pdf" download><button type="button" class="btn btn-warning"> Download PDF</button>
          </div>
          <div class="col-md-4 col-sm-4"></div>
        </div>

        <br>

          <div class="row">
            <div class="col-md-6 col-sm-6 roilbl">
              Application Name: <span class="roiplch"><?php echo $applicationName;  ?></span></br>
              Agreement Type: <span class="roiplch"><?php echo $agreementType;  ?></span></br>
              License Type: <span class="roiplch"><?php echo $licenseType;  ?></span></br>
              Number of Licenses: <span class="roiplch"><?php echo $noOfLicenses;  ?></span></br>
              Cost Per License: <span class="roiplch"><?php echo $costPerLicense;  ?></span></br>
              License Type: <span class="roiplch"><?php echo $licenseType;  ?></span></br>
            </div>

            <div class="col-md-6 col-sm-6 leftdiv">
              <span class="lresult" id="roidesign"><span id=roifnllbl> Calculated ROI: </span><br>$

                <?php
                  echo $calculatedROI;
                ?>
              </span>
            </br>
              <span class="lresult" id="cutlicdesign"><span id=cutlicfnllbl> Purchased licenses can be cut to: </span><br>
                <?php
                  echo $cutLicenses;
                ?>
              </span>
              </span><br><br>
            </div>

          </div>


        <br><br>
      <a href="company.php" class="entbutdesagain">Click here to calculate again</a>
    </div><!--jumbotron-->
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
