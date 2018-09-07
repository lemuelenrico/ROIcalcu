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

      <div class="jumbotron">
        <div class="container-fluid rightalgn"><img src="images/pointer.png"></div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <h2 class="headngsprpg">Company Details</h2>
            <br>

            <span class="entbutdes2"><b>Select your Industry</b></span>
            <br>

              <!-- delete under if done -->
              <!--<div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn custombgopt">
                  <input type="radio" name="options" id="option1" autocomplete="off">Engineering
                </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" id="option2" autocomplete="off">Oil and Gas
                </label><br><br>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" id="option3" autocomplete="off">Automotive
                </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" id="option4" autocomplete="off">Mechanical & Precision
                </label><br><br>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" id="option5" autocomplete="off">Government
                  <input type="radio">

                </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" id="option6" autocomplete="off">Others
                </label>

              </div> -->

              <!--<input type="radio" id="male" name="gender">
              <label for="male">Male</label><br>
              <input type ="radio" id="female" name="gender">
              <label for="female">Female</label>-->

            <!--  <label class="radiocontainer"><input type="radio" name="radio"><span class="circle"></span>
              </label><br><br>
              <label class="radiocontainer"><input type="radio" name="radio"><span class="circle"></span>
              </label><br><br>-->
              <form action="software.php" method="POST">
                <div class="aligncntr nospace">

                  <label class="radiocontainer1 nospace"><input type="radio" name="industry"
                    value="Engineering" checked="checked" onclick="lblindstry(1)"><span class="circle"></span>
                  </label><br>
                  <label class="radiocontainer2 nospace"><input type="radio" name="industry"
                    value="Automotive" onclick="lblindstry(2)"><span class="circle"></span>
                  </label><br>
                  <label class="radiocontainer3 nospace"><input type="radio" name="industry"
                    value="Oil and Gas" onclick="lblindstry(3)"><span class="circle"></span>
                  </label><br>
                  <label class="radiocontainer4 nospace"><input type="radio" name="industry"
                    value="Mechanical & Precision" onclick="lblindstry(4)"><span class="circle"></span>
                  </label><br>
                  <label class="radiocontainer5 nospace"><input type="radio" name="industry"
                    value="Government" onclick="lblindstry(5)"><span class="circle"></span>
                  </label><br>
                  <label class="radiocontainer6 nospace"><input type="radio" name="industry"
                    value="Others" onclick="lblindstry(6)"><span class="circle"></span>
                  </label><br>

                </div>
        <!--    <span class="error"> <?php echo $inderror;?></span> -->
        <div class="rightalgn industrychanging">See sample calculation for <label id="dl-industry" style="font-weight:bold">Engineering</label>:
              <a href="#"><button onclick="nopdf()" class="btn btn-warning"></a><!--<span class="glyphicon glyphicon-download-alt">--> Download PDF</button>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="leftdiv">
              <br>
              <br><br>
              <br>


                <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Company Name"
                          name="comname" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Website"
                          name="website" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control input-lg" placeholder="Contact Email"
                          name="comemail" required>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control input-lg" placeholder="Number of Users"
                          name="numusers" required>
                </div>
                <div class="notssub"><strong>Note:</strong> All fields are required.</div>
                <div class="rightalgn">
                <input type="submit" name="submit" class="nextbutdes" value="Next &raquo">
                </div>
          </form>
              <br>

            </div>
          </div>
        </div><!--row-->

      </div>
      <!--will delete this later -->
    <script>
      function nopdf() {
        alert("We are working on this feature.");
        }

        function lblindstry(val){
        if (val==1){
          document.getElementById('dl-industry').innerHTML = 'Engineering';
        }
        else if (val==2){
          document.getElementById('dl-industry').innerHTML = 'Automotive';
        }
        else if (val==3){
          document.getElementById('dl-industry').innerHTML = 'O & G';
        }
        else if (val==4){
          document.getElementById('dl-industry').innerHTML = 'M & P';
        }
        else if (val==5){
          document.getElementById('dl-industry').innerHTML = 'Government';
        }
        else{
          document.getElementById('dl-industry').innerHTML = 'Others';
        }
      }
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <p class="dfooter">Copyright © ROI Calculator. All rights reserved.</p>
  </body>
</html>
