<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include ('connection.php');
        error_reporting(0);
        include ('db_company.php');

    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--for tooltip toggle-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <a class="navbar-brand">
              <img src="images/Snowlogo.png"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

              <li><a><h class="whitfnt geofont">Snow for Engineering: ROI Calculator</p></a></li>
              <li><a href="help.html"><h class="whitfnt2 geofont">Help</h></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

      <div class="jumbotron removeextrapadding">
        <div class="container-fluid rightalgn"><img src="images/pointer2.png"></div>
          <h2 class="headngsprpg">Software Details</h2>
          <div class="row">
            <form action="roi.php" id="softwares" method="POST">
              <div class="col-md-6 col-sm-6">
                  <p for="transi" id= "applicationnametxt">Application A
                      <!--<?php echo $comName ?>--></p>
                <div class="col-sm-3">
                  <!-- the following hidden input function as transitional variables from database to database visualization only-->
                  <input type="hidden" name="transi" value="<?php echo $comName ?>">
                  <!-- the following hidden input function as transitional variables from database and email to database visualization only-->
                  <input type="hidden" name="transi2" value="<?php echo $industry ?>">
                  <input type="hidden" name="transi3" value="<?php echo $comWebsite ?>">
                  <input type="hidden" name="transi4" value="<?php echo $comEmail ?>">
                  <input type="hidden" name="transi5" value="<?php echo $noOfUsers ?>">
                </div>
                  <br>
              </div>
              <div class="col-md-6 col-sm-6 rightalgn">
                  <h3 class= "notssub openfont"><span class="requiredclr">*</span>Required fields.</h3>
              </div>
          </div>

          <form action="roi.php" id="softwares" method="POST" autocomplete="off">

          <div class="colorsemiwhite allspace">
            <div class="form-group row openfont">
              <label for="appName" class="col-sm-2 col-form-label softlabel rightalgn"><span class="requiredclr">*</span>Application Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control midtxtbx" id="appName" placeholder="(i.e. AutoCAD, Petrel)"
                        name="appname" autocomplete="off" required>
              </div>
              <label for="vendName" class="col-sm-2 col-form-label softlabel rightalgn"><span class="requiredclr"></span>Vendor Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control midtxtbx" id="vendName" placeholder="(i.e. ANSYS, Halliburton)"
                        name="vendname" autocomplete="off">
              </div>
            </div>

            <div class="form-group row openfont">
              <label for="agreeType" class="col-sm-2 col-form-label softlabel rightalgn"><span class="requiredclr">*</span>Agreement Type</label>
              <div class="col-sm-4">
                <select class="custom-select form-control midtxtbx" id="agreeType"
                        name="agreetype">
                  <option value ="Perpetual" Selected>Perpetual</option>
                  <option value="Lease">Lease</option>
                  <option value="Rent">Rent</option>
                  <option value="Subscription">Subscription</option>
                  <option value="PPU">PPU</option>
                  <option value="Other">Other</option>
                  <option value="Don't Know">Don't Know</option>
                </select>
              </div>
              <label for="licType" class="col-sm-2 col-form-label softlabel rightalgn" required><span class="requiredclr">*</span>License Type</label>
              <div class="col-sm-4">
                <select class="custom-select form-control midtxtbx" id="licType"
                        name="lictype">
                  <option selected>Concurrent - Local</option>
                  <option value="Concurrent - Global">Concurrent - Global</option>
                  <option value="Named User">Named User</option>
                  <option value="Host Bound">Host Bound</option>
                  <option value="Elapsed Time">Elapsed Time</option>
                </select>
              </div>
            </div>

            <div class="form-group row openfont">
              <label for="instLoc" class="col-sm-2 col-form-label softlabel rightalgn" required><span class="requiredclr">*</span>Install Location</label>
                <div class="col-sm-1">
                  <label><input title="Server" type="checkbox" name="location[]" class="glyphpointer" id="server" value="Server">
                    <img src="images/iconserv.png" id="servericon" class="glyphpointer" data-toggle="tooltip" title="Server">
                </label></div>

                <div class="col-sm-1 nospace leftpad">
                  <label><input title="Hard drive" type="checkbox" name="location[]" class="glyphpointer" id="desktop" value="Desktop">
                    <img src="images/icondesk.png" id="desktopicon" class="glyphpointer" data-toggle="tooltip" title="Desktop">
                  </label></div>

                <div class="col-sm-2">
                  <label><input title="Cloud" type="checkbox" name="location[]" class="glyphpointer" id="cloud" value="Cloud">
                    <img src="images/iconcloud.png" id="cloudicon" class="glyphpointer" data-toggle="tooltip" title="Cloud">
                  </label></div>

              <label for="renDate" class="col-sm-2 col-form-label softlabel rightalgn"><span class="requiredclr"></span>Renewal Date</label>
              <div class="col-sm-4">
                <input type="date" class="form-control midtxtbx" id="renDate" placeholder="mm/dd/yyyy"
                        name="rendate">
              </div>
            </div>
            <div class="form-group row openfont">
              <label for="numLicenses" class="col-sm-2 col-form-label softlabel rightalgn" required><span class="requiredclr">*</span>Number of Licenses</label>
              <div class="col-sm-4">
                <input type="number" class="form-control midtxtbx" id="numLicenses" placeholder="0"
                        name="numlicenses" autocomplete="off" required>
              </div>
              <label for="costLicense" class="col-sm-2 col-form-label softlabel rightalgn" required><span class="requiredclr">*</span>Cost per License ($)</label>
              <div class="col-sm-4">
                    <input type="text" class="form-control midtxtbx" data-placement="bottom" data-toggle="tooltip" title="Currency value is either whole number or with two decimal places." pattern="^\d*(\.\d{0,2})?$" id="costLicense" placeholder="0.00"
                                name="costlicenses" autocomplete="off" required>
              </div>
            </div>
          </div><!--colorsemiwhite-->
            <br>

            <div class="row">
              <div class="col-md-1 col-sm-1"></div>
              <div class="col-md-8 centertext nospace">
                  <label for="finalsubmit" class="openfont"><input type="checkbox" class="glyphpointer bigchkbx" id="finalsubmit" value=""><span class="aggrchk glyphpointer">
                    I hereby grant permission for Snow to use the information I provided to calculate ROI.
                  By proceeding, I also agree with the <a href="terms.html" target="_blank">Terms and Conditions</a> of the site. </span></label>
              </div>
              <div class="col-md-2 centertext allspace">
                  <p><input type="submit" name="submittoroi" class="btn showroibutdes alignright geofont"
                    value="Show ROI Calculation" onClick="valthisform();"></p>
              </div>
            </div>
          </form>

      </div><!-- jumbotron -->

<!-- the followng is the link for the custom js files-->

    <script src="js/software.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <p class="dfooter geofont">Copyright © ROI Calculator. All rights reserved.</p>
  </body>
</html>
