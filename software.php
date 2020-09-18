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
  <!--  <script>

    function background(value){
      var value = "Automotive";
      if (value=="Automotive") {
        document.body.style.background = url('../images/roiback2.jpg');
      }
    }

  </script> -->

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--for tooltip toggle, backdraw is burger menu for mobile view has some decreased functionality-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Savings Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="icon/it.ico" rel="shortcut icon">
    <style>

    body {
    //background-image: url("images/bg/engg_rec.png");
    background-image: url("<?php echo $backgroundURL; ?>");
    }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-default nobord navsmallmrgbot">
      <div class="container-fluid blueb navpad">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand nospace leftpad" href="https://openit.com/">
          <!--  <a class="navbar-brand" href="#"> -->
            <img src="images/openit.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><h class="whitfnt openfont">Open iT Savings Calculator</h></a></li>
          <li><a href="contact/index.php"><h class="whitfnt2 openfont">Contact Us</h></a></li>
          <!--<li><a href="help.html"><h class="whitfnt2 geofont">Help</h></a></li>-->
          <li><a href="https://openit.com/contact-us-2/get-a-representative-to-contact-you/"><h class="whitfnt2 openfont">Help</h></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>

  <div class="jumbotron jumboadd">
    <h2 class="headngsprpg nospace centertext whitefont">Software Details</h2>
  </div>
    <div class="container">
      <div class="jumbotron jumbotronaddcomp">
        <img class="pointermarg" src="images/pointer2.png">
          <div class="row">
            <form action="verifier.php" id="softwares" method="POST">
              <div class="col-md-6 col-sm-6">
                <!--the following is commented for the mean time -->
               <!--<p for="transi" id= "applicationnametxt">Application A-->
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
              <h3 class="instructiontext openitred"><b>Enter top three most expensive applications</b>.</h3>
              </div>
              <div class="col-md-6 col-sm-6 rightalgn">
                  <h3 class="notssub openfont"><span class="requiredclr">*</span>Required Fields</h3>
              </div>
          </div>

          <div class="leftalgn nospace">
              <label class="selectorspace"><input type="radio" name="Applicationlbl" value="" checked="checked"><span class="applbl centertext openfont">Application</span></label>
              <label class="selectorspace"><input type="radio" name="AppSelector" value="" onclick="selector(1)" checked="checked"><span class="app1 centertext openfont">A</span></label>
              <label class="selectorspace"><input type="radio" name="AppSelector" value="" onclick="selector(2)"><span class="app2 centertext openfont">B</span></label>
              <label class="selectorspace"><input type="radio" name="AppSelector" value="" onclick="selector(3)"><span class="app3 centertext openfont">C</span></label>
          </div>

          <form action="roi.php" id="softwares" method="POST" autocomplete="off">

          <div id="AppSelector1">
            <div class="form-group row openfont">
              <label for="appName" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Application Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control midtxtbx" id="appName" placeholder="(i.e. AutoCAD, Petrel)"
                        name="appname" autocomplete="off" required>
              </div>
              <label for="vendName" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr"></span>Vendor Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control midtxtbx" id="vendName" placeholder="(i.e. ANSYS, Halliburton)"
                        name="vendname" autocomplete="off">
              </div>
            </div>
            <div class="form-group row openfont">
              <label for="agreeType" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Agreement Type</label>
              <div class="col-sm-4">
                <select class="custom-select form-control midtxtbx" id="agreeType"
                        name="agreetype">
                  <option value ="Perpetual" Selected>Perpetual</option>
                  <option value="Lease">Lease</option>
                  <option value="Rent">Rent</option>
                  <option value="Subscription">Subscription</option>
                  <option value="Pay-per-use">Pay-per-use</option>
                  <option value="Other">Other</option>
                  <option value="Don't Know">Don't Know</option>
                </select>
              </div>
              <label for="licType" class="col-sm-2 col-form-label softlabel rightalgn openfont" required><span class="requiredclr">*</span>License Type</label>
              <div class="col-sm-4">
                <select class="custom-select form-control midtxtbx" id="licType"
                        name="lictype">
                  <option selected>Concurrent - Local</option>
                  <option value="Concurrent - Global">Concurrent - Global</option>
                  <option value="Named User">Named User</option>
                  <option value="Token">Token</option>
                  <option value="Host Bound">Host Bound</option>
                  <option value="Elapsed Time">Elapsed Time</option>
                </select>
              </div>
            </div>

            <div class="form-group row openfont">
              <label for="instLoc" class="col-sm-2 col-form-label softlabel rightalgn openfont" required><span class="requiredclr">*</span>Install Location</label>
                <div class="col-sm-1">
                  <label><input title="Server" type="checkbox" name="location[]" class="glyphpointer" id="server" value="Server">
                    <img src="images/iconserv.png" id="servericon" class="glyphpointer" data-toggle="tooltip" title="Server">
                </label></div>

                <div class="col-sm-1 nospace leftpad">
                  <label><input title="Desktop" type="checkbox" name="location[]" class="glyphpointer" id="desktop" value="Desktop">
                    <img src="images/icondesk.png" id="desktopicon" class="glyphpointer" data-toggle="tooltip" title="Desktop">
                  </label></div>

                <div class="col-sm-2">
                  <label><input title="Cloud" type="checkbox" name="location[]" class="glyphpointer" id="cloud" value="Cloud">
                    <img src="images/iconcloud.png" id="cloudicon" class="glyphpointer" data-toggle="tooltip" title="Cloud">
                  </label></div>

              <label for="renDate" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr"></span>Renewal Date</label>
              <div class="col-sm-4">
                <input type="date" class="form-control midtxtbx" id="renDate" placeholder="mm/dd/yyyy"
                        name="rendate">
              </div>
            </div>
            <div class="form-group row openfont">
              <label for="numLicenses" class="col-sm-2 col-form-label softlabel rightalgn openfont" required><span class="requiredclr">*</span>Number of Licenses</label>
              <div class="col-sm-4">
                <input type="number" min="0" class="form-control midtxtbx" id="numLicenses" placeholder="0"
                        name="numlicenses" autocomplete="off" required>
              </div>
              <label for="costLicense" class="col-sm-2 col-form-label softlabel rightalgn openfont" required><span class="requiredclr">*</span>Cost per License ($)</label>
              <div class="col-sm-4">
                    <input type="text" class="form-control midtxtbx" data-placement="bottom" data-toggle="tooltip" title="Currency value is either whole number or with two decimal places." pattern="^\d*(\.\d{0,2})?$" id="costLicense" placeholder="0.00"
                                name="costlicenses" autocomplete="off" required>
              </div>
            </div>
          </div><!--colorsemiwhite-->

        <div id="AppSelector2">
            <div class="form-group row openfont">
              <label for="appName2" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Application Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control midtxtbx" id="appName2" placeholder="(i.e. AutoCAD, Petrel)"
                        name="appname2" autocomplete="off">
              </div>
              <label for="vendName2" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr"></span>Vendor Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control midtxtbx" id="vendName2" placeholder="(i.e. ANSYS, Halliburton)"
                        name="vendname2" autocomplete="off">
              </div>
            </div>
            <div class="form-group row openfont">
              <label for="agreeType2" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Agreement Type</label>
              <div class="col-sm-4">
                <select class="custom-select form-control midtxtbx" id="agreeType2"
                        name="agreetype2">
                  <option value ="Perpetual" Selected>Perpetual</option>
                  <option value="Lease">Lease</option>
                  <option value="Rent">Rent</option>
                  <option value="Subscription">Subscription</option>
                  <option value="PPU">PPU</option>
                  <option value="Other">Other</option>
                  <option value="Don't Know">Don't Know</option>
                </select>
              </div>
              <label for="licType2" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>License Type</label>
              <div class="col-sm-4">
                <select class="custom-select form-control midtxtbx" id="licType2"
                        name="lictype2">
                  <option selected>Concurrent - Local</option>
                  <option value="Concurrent - Global">Concurrent - Global</option>
                  <option value="Named User">Named User</option>
                  <option value="Host Bound">Host Bound</option>
                  <option value="Elapsed Time">Elapsed Time</option>
                </select>
              </div>
            </div>

            <div class="form-group row openfont">
              <label for="instLoc" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Install Location</label>
                <div class="col-sm-1">
                  <label><input title="Server" type="checkbox" name="location2[]" class="glyphpointer" id="server2" value="Server">
                    <img src="images/iconserv.png" id="servericon" class="glyphpointer" data-toggle="tooltip" title="Server">
                </label></div>

                <div class="col-sm-1 nospace leftpad">
                  <label><input title="Desktop" type="checkbox" name="location2[]" class="glyphpointer" id="desktop2" value="Desktop">
                    <img src="images/icondesk.png" id="desktopicon" class="glyphpointer" data-toggle="tooltip" title="Desktop">
                  </label></div>

                <div class="col-sm-2">
                  <label><input title="Cloud" type="checkbox" name="location2[]" class="glyphpointer" id="cloud2" value="Cloud">
                    <img src="images/iconcloud.png" id="cloudicon" class="glyphpointer" data-toggle="tooltip" title="Cloud">
                  </label></div>

              <label for="renDate2" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr"></span>Renewal Date</label>
              <div class="col-sm-4">
                <input type="date" class="form-control midtxtbx" id="renDate2" placeholder="mm/dd/yyyy"
                        name="rendate2">
              </div>
            </div>
            <div class="form-group row openfont">
              <label for="numLicenses2" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Number of Licenses</label>
              <div class="col-sm-4">
                <input type="number" min="0" class="form-control midtxtbx" id="numLicenses2" placeholder="0"
                        name="numlicenses2" autocomplete="off">
              </div>
              <label for="costLicense2" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Cost per License ($)</label>
              <div class="col-sm-4">
                    <input type="text" class="form-control midtxtbx" data-placement="bottom" data-toggle="tooltip" title="Currency value is either whole number or with two decimal places." pattern="^\d*(\.\d{0,2})?$" id="costLicense2" placeholder="0.00"
                                name="costlicenses2" autocomplete="off">
              </div>
            </div>
          </div>

          <div id="AppSelector3">
            <div class="form-group row openfont">
              <label for="appName3" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Application Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control midtxtbx" id="appName3" placeholder="(i.e. AutoCAD, Petrel)"
                        name="appname3" autocomplete="off">
              </div>
              <label for="vendName3" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr"></span>Vendor Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control midtxtbx" id="vendName3" placeholder="(i.e. ANSYS, Halliburton)"
                        name="vendname3" autocomplete="off">
              </div>
            </div>
            <div class="form-group row openfont">
              <label for="agreeType3" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Agreement Type</label>
              <div class="col-sm-4">
                <select class="custom-select form-control midtxtbx" id="agreeType3"
                        name="agreetype3">
                  <option value ="Perpetual" Selected>Perpetual</option>
                  <option value="Lease">Lease</option>
                  <option value="Rent">Rent</option>
                  <option value="Subscription">Subscription</option>
                  <option value="PPU">PPU</option>
                  <option value="Other">Other</option>
                  <option value="Don't Know">Don't Know</option>
                </select>
              </div>
              <label for="licType3" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>License Type</label>
              <div class="col-sm-4">
                <select class="custom-select form-control midtxtbx" id="licType3"
                        name="lictype3">
                  <option selected>Concurrent - Local</option>
                  <option value="Concurrent - Global">Concurrent - Global</option>
                  <option value="Named User">Named User</option>
                  <option value="Host Bound">Host Bound</option>
                  <option value="Elapsed Time">Elapsed Time</option>
                </select>
              </div>
            </div>

            <div class="form-group row openfont">
              <label for="instLoc" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Install Location</label>
                <div class="col-sm-1">
                  <label><input title="Server" type="checkbox" name="location3[]" class="glyphpointer" id="server3" value="Server">
                    <img src="images/iconserv.png" id="servericon" class="glyphpointer" data-toggle="tooltip" title="Server">
                </label></div>

                <div class="col-sm-1 nospace leftpad">
                  <label><input title="Desktop" type="checkbox" name="location3[]" class="glyphpointer" id="desktop3" value="Desktop">
                    <img src="images/icondesk.png" id="desktopicon" class="glyphpointer" data-toggle="tooltip" title="Desktop">
                  </label></div>

                <div class="col-sm-2">
                  <label><input title="Cloud" type="checkbox" name="location3[]" class="glyphpointer" id="cloud3" value="Cloud">
                    <img src="images/iconcloud.png" id="cloudicon" class="glyphpointer" data-toggle="tooltip" title="Cloud">
                  </label></div>

              <label for="renDate3" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr"></span>Renewal Date</label>
              <div class="col-sm-4">
                <input type="date" class="form-control midtxtbx" id="renDate3" placeholder="mm/dd/yyyy"
                        name="rendate3">
              </div>
            </div>
            <div class="form-group row openfont">
              <label for="numLicenses3" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Number of Licenses</label>
              <div class="col-sm-4">
                <input type="number" min="0" class="form-control midtxtbx" id="numLicenses3" placeholder="0"
                        name="numlicenses3" autocomplete="off">
              </div>
              <label for="costLicense3" class="col-sm-2 col-form-label softlabel rightalgn openfont"><span class="requiredclr">*</span>Cost per License ($)</label>
              <div class="col-sm-4">
                    <input type="text" class="form-control midtxtbx" data-placement="bottom" data-toggle="tooltip" title="Currency value is either whole number or with two decimal places." pattern="^\d*(\.\d{0,2})?$" id="costLicense3" placeholder="0.00"
                                name="costlicenses3" autocomplete="off">
              </div>
            </div>
          </div>

            <br>
            <div class="row">
              <div class="col-md-1 col-sm-1"></div>
              <div class="col-md-8 centertext nospace">
                  <label for="finalsubmit" class="openfont whitefont"><input type="checkbox" class="glyphpointer bigchkbx" id="finalsubmit" value=""><span class="aggrchk glyphpointer">
                    I allow the collection of my data to be used for the purpose of calculating ROI.
                  By proceeding, I also agree with the <!--<a href="terms.html" target="_blank"><u>Terms and Conditions</u></a> of the site.-->
                  <a href="https://openit.com/open-it-privacy-statement/" target="_blank" class="whitefont"><u>Terms and Conditions</u></a> of this site.</span>
                </label>
              </div>
              <div class="col-md-2 centertext allspace">
                  <p><input type="submit" name="submittoroi" class="btn showroibutdes alignright geofont"
                    value="Show Savings Calculation" onClick="valthisform();"></p>
              </div>
            </div>
          </form>
        </div>

        <!--modals-->
              <div id="modal-wrapper" class="modal">
                <div class="modal-content animate">
                  <img src="images/warning.png" width="100px">
                    <span onclick="closemodals();"
                    class="close" title="Close PopUp">&times;</span>
                    <p class="centertext">Please choose atleast one Install Location per application. </p>
                </div>
              </div>

              <div id="modal-wrapper2" class="modal">
                <div class="modal-content animate">
                  <img src="images/warning.png" width="100px">
                    <span onclick="closemodals();"
                    class="close" title="Close PopUp">&times;</span>
                    <p class="center">  Please agree to our terms and conditions to proceed.</p>
                  </div>
              </div>

              <div id="modal-wrapper3" class="modal">
                <div class="modal-content animate">
                  <img src="images/warning.png" width="100px">
                    <span onclick="closemodals();"
                    class="close" title="Close PopUp">&times;</span>
                    <p class="center"> Details are missing in Application A.</p>
                  </div>
              </div>

              <div id="modal-wrapper4" class="modal">
                <div class="modal-content animate">
                  <img src="images/warning.png" width="100px">
                    <span onclick="closemodals();"
                    class="close" title="Close PopUp">&times;</span>
                    <p class="center"> Details are missing in Application B.</p>
                  </div>
              </div>

              <div id="modal-wrapper5" class="modal">
                <div class="modal-content animate">
                  <img src="images/warning.png" width="100px">
                    <span onclick="closemodals();"
                    class="close" title="Close PopUp">&times;</span>
                    <p class="center"> Details are missing in Application C.</p>
                  </div>
              </div>

<!-- the followng is the link for the custom js files-->
    <script src="js/software.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <div class="footer">
      <p class="dfooter openfont">Copyright © <?php echo date('Y'); ?> Open iT. All rights reserved.</p>
    </div>
  </body>
</html>
