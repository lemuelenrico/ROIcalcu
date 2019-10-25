<!DOCTYPE html>
<html lang="en">
  <head>
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
      <h2 class="headngsprpg nospace centertext openfont whitefont">Company Details</h2>
    </div>

    <div class="container">
      <div class="jumbotron jumbotronaddcomp">
        <img class="pointermarg" src="images/pointer1.png">
        <div class="row">
          <div class="col-md-6 col-sm-6 aligncntr">
            <h2 class="openfont openitred leftalgn"><b><u>Industry Selection<u></b></h2>
              <form action="software.php" autocomplete="off" method="POST">
                  <div class="takeawaydiv">
                    <label class="firstop"><input type="radio" id="ind1" name="industry" checked="checked" onclick="lblindstry(1)" value="Engineering"><span title="Engineering" class="eng"></span></label>
                    <label class="secondtop"><input type="radio" id="ind2" name="industry" onclick="lblindstry(3)" value="Oil and Gas"><span title="Oil and Gas" class="og"></span></label>
                    <label class="thirdtop"><input type="radio" id="ind3" name="industry" onclick="lblindstry(2)" value="Automotive"><span title="Automotive" class="auto"></span></label><br>
                    <label class="fourthtop"><input type="radio" id="ind4" name="industry" onclick="lblindstry(4)" value="Mechanical & Precision"><span title="Mechanical and Precision" class="mp"></span></label>
                    <!--<label class="fifthtop"><input type="radio" id="ind5" name="industry" onclick="lblindstry(5)" value="Government"><span title="Government" class="gov"></span></label>-->
                    <label class="sixthtop"><input type="radio" id="ind6" name="industry" onclick="lblindstry(6)" value="Others"><span title="Others" class="oth"></span></label>
                    <label class="seventhtop"><input type="radio" id="ind7" name="industry" onclick="lblindstry(7)" value="Aerospace"><span title="Aerospace" class="aero"></span></label>
                    <img class="snowlogoind" src="images/industry/snowlogoind.png">
                    <label id="industrytxt"><input id="industryinput" type="text" class="form-control openfont industrybox" placeholder="Industry"
                            name="otherindustry" autocomplete="off"></label>
                    <!--    <img class="industrybd1" src="images/industry/industrybd.png">
                            <img class="industrybd2" src="images/industry/industrybd.png">
                            <img class="industrybd3" src="images/industry/industrybd.png">
                            <img class="industrybd4" src="images/industry/industrybd.png">
                            <img class="industrybd5" src="images/industry/industrybd.png">
                            <img class="industrybd6" src="images/industry/industrybd.png">  -->
                  </div>
                  <div class="row nospace">
                    <div class="custcenterright col-md-8 col-sm-8 centertext industrychanging openfont nospace whitefont">
                    See customer stories for <label id="dl-industry" style="font-weight:bold">Engineering </label>:
                      <!--<a href="files/SampleCalculation.pdf" download></a>-->
                    </div>
                    <div class="col-md-4 col-md-4 nospace custbotspc">
                      <!--<button href="#" type="button" class="btn dlbutdes">Click here!</button>-->
                    <a class="btn dlbutdes" id="customerstory" target="_blank" href="https://openit.com/resources/customer-stories">Click here!</a>
                    </div>
                  </div>
                  <!--  <div class="centertext industrychanging openfont">See sample calculation for <label id="dl-industry" style="font-weight:bold">Engineering</label>:
                          <a href="files/SampleCalculation.pdf" download><button type="button" class="btn dlbutdes"> Download PDF</button>
                          </a>
                        </div> -->
        </div>
            <div class="col-md-6 col-sm-6">
              <div class="leftdiv">

                <br><br>
              <br><!--bunch of linebreaks-->


                <div class="form-group">
                  <input type="text" class="form-control input-lg openfont bigtxtbx" placeholder="Company Name"
                          name="comname" id="comname" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control input-lg openfont bigtxtbx" placeholder="Website"
                          name="website" id="website" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control input-lg openfont bigtxtbx" placeholder="Contact Email"
                          name="comemail" id="validemail" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <input type="number" min="0" class="form-control input-lg openfont bigtxtbx" placeholder="Number of Engineers"
                          name="numusers" id="numusers" autocomplete="off" required>
                </div>
                <div class="notssub openfont"><strong>Note:</strong> All fields are required.</div>
                <div class="rightalgn">
                  <br><br>
                <input type="submit" onclick="valthisform();" name="submit" class="btn vpdfbutdes openfont" value="Next &raquo">
                </div>
          </form>
              <br>
            </div>
          </div>
        </div><!--row-->
      </div><!--jumbotron-->
    </div>
      <!--the following contain the modals for form validation -->

      <div id="companyval" class="modal">
        <div class="modal-content animate">
          <img src="images/warning.png" width="100px">
            <span onclick="document.getElementById('companyval').style.display='none'"
            class="close" title="Close PopUp">&times;</span>
            <p class="centertext">Please complete the details.</p>
        </div>
      </div>

<!-- the followng is the link for the custom js files-->

    <script src="js/company.js"></script>

    <!-- jQuery pt></script>cessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>


    </script>
    <div class="footer">
      <p class="dfooter openfont">Copyright © <?php echo date('Y'); ?> Open iT. All rights reserved.</p>
    </div>
  </body>
</html>
