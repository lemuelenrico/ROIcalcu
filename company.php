<!DOCTYPE html>
<html lang="en">
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
            <!--  <a class="navbar-brand" href="#">-->
            <a class="navbar-brand" href="https://www.snowsoftware.com/int">
              <img src="images/Snowlogo.png"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

              <li><a href="http://mnl365win:8080/roicalcu/"><h class="whitfnt geofont">Snow for Engineering: ROI Calculator</p></a></li>
              <li><a href="help.html"><h class="whitfnt2 geofont">Help</p></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

      <div class="jumbotron colorsemiwhite">

        <div class="container-fluid rightalgn"><img class="pointermarg" src="images/pointer.png"></div>
        <div class="row">
          <div class="col-md-6 col-sm-6 aligncntr">
            <h2 class="headngsprpg nospace">Company Details</h2>


              <form action="software.php" autocomplete="off" method="POST">

                  <div class="takeawaydiv">
                    <label class="firstop"><input type="radio" id="ind1" name="industry" checked="checked" onclick="lblindstry(1)" value="Engineering"><span title="Engineering" class="eng"></span></label>
                    <label class="secondtop"><input type="radio" id="ind2" name="industry" onclick="lblindstry(3)" value="Oil and Gas"><span title="Oil and Gas" class="og"></span></label>
                    <label class="thirdtop"><input type="radio" id="ind3" name="industry" onclick="lblindstry(2)" value="Automotive"><span title="Automotive" class="auto"></span></label><br>

                    <label class="fourthtop"><input type="radio" id="ind4" name="industry" onclick="lblindstry(4)" value="Mechanical and Precision"><span title="Mechanical and Precision" class="mp"></span></label>
                    <label class="fifthtop"><input type="radio" id="ind5" name="industry" onclick="lblindstry(5)" value="Government"><span title="Government" class="gov"></span></label>
                    <label class="sixthtop"><input type="radio" id="ind6" name="industry" onclick="lblindstry(6)" value="Others"><span title="Others" class="oth"></span></label>
                    <img class="selectind" src="images/industry/selectindustry.png">
                  </div>

                  <div class="row">
                    <div class="custcenterright col-md-8 col-sm-8 centertext industrychanging openfont nospace">
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

                <br>
              <br><br><!--bunch of linebreaks-->
                <br>

                <div class="form-group">
                  <input type="text" class="form-control input-lg openfont bigtxtbx" placeholder="Company Name"
                          name="comname" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control input-lg openfont bigtxtbx" placeholder="Website"
                          name="website" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control input-lg openfont bigtxtbx" placeholder="Contact Email"
                          name="comemail" id="validemail" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <input type="number" min="0" class="form-control input-lg openfont bigtxtbx" placeholder="Number of Users"
                          name="numusers" autocomplete="off" required>
                </div>
                <div class="notssub openfont"><strong>Note:</strong> All fields are required.</div>
                <div class="rightalgn">
                <input type="submit" name="submit" class="nextbutdes openfont" value="Next &raquo">
                </div>
          </form>
              <br>
            </div>
          </div>
        </div><!--row-->

      </div><!--jumbotron-->

<!-- the followng is the link for the custom js files-->

    <script src="js/company.js"></script>

    <!-- jQuery pt></script>cessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <p class="dfooter geofont">Copyright © ROI Calculator. All rights reserved.</p>
  </body>
</html>
