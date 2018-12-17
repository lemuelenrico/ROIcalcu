<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ROI Calculator</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../icon/snowflake.png" rel="shortcut icon">
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
          <a class="navbar-brand" href="https://www.snowsoftware.com/int">
          <!--  <a class="navbar-brand" href="#"> -->
            <img src="../images/Snowlogo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="http://mnl365win:8080/roicalcu/"><h class="whitfnt geofont">Snow for Engineering: ROI Calculator</h></a></li>
          <li><a href="../contact"><h class="whitfnt2 geofont">Contact Us</h></a></li>
          <!--<li><a href="help.html"><h class="whitfnt2 geofont">Help</h></a></li>-->
          <li><a href="https://www.snowsoftware.com/int/contact"><h class="whitfnt2 geofont">Help</h></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>
    <div class="container centertext">
      <div class="jumbotron contactpagejumbadd jumbotronaddcomp">
          <!--<h2 class="headngsprpg">Send us a message</h2>-->
          <form action="sent/index.php" method="POST">
              <div id="contacthead" class="leftalgn">
                <h>Send us a direct message:</h>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label class="introc" for="name">Name:</label>
                    <input type="text" class="form-control midtxtbx" name="name" required autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label class="introc" for="company">Company:</label>
                    <input type="text" class="form-control midtxtbx" name="company" required autocomplete="off">
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="introc" for="email">Email:</label>
                  <input type="email" class="form-control midtxtbx" id="sendvalidemail" name="email" required autocomplete="off">
                </div>
                <div class="form-group">
                  <label class="introc" for="subject">Subject:</label>
                  <input type="text" class="form-control midtxtbx" name="subject" required autocomplete="off">
                </div>
                <div class="form-group">
                  <label class="introc" for="message">Message:</label>
                  <textarea class="form-control whitfnt" rows="5" name="message" required></textarea>
                </div>
              <div class="centertext">
                <button type="submit" name="submit" class="btn dlbutdes">Send</button>
              </div>

            </form>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script>
      var sendvalidemail = document.getElementById("sendvalidemail");

      sendvalidemail.addEventListener("input", function (event) {
        if (sendvalidemail.validity.typeMismatch) {
          sendvalidemail.setCustomValidity("Please enter a valid email.");
        }
        else {
          sendvalidemail.setCustomValidity("");
        }
      });
    </script>
    <div class= "footer">
      <p class="dfooter geofont">Copyright © <?php echo date('Y'); ?> Snow Software. All rights reserved.</p>
    </div>
  </body>
</html>
