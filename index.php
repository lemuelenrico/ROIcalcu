<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Savings Calculator</title>
<!--test comment 9.18.2020-->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="icon/it.ico" rel="shortcut icon">
  </head>
  <body>
<?php include ("header.php"); ?>
    <div class="container">
      <div class="jumbotron jumbotronadd">
        <h1 id="bigtkwy">Savings Calculator</h1>
        <br>
          <p id="introp" class="geofont">
            The increase in engineering complexity within capital intensive industries makes it extremely difficult to manage information from multiple sources, make that data available to stakeholders around the world and trust that it is always correct.
          </p>
        <br>
        <br>
        <br>
        <br>
        <p id="introc">Calculate the value your organization can gain from Open iT solutions.</p>
        <br>
        <a href="company.php" class="btn entbutdes openfont">CLICK HERE TO START</a>
      </div>
    </div>

      <div class="footer">
        <p class="dfooter openfont">Copyright © <?php echo date('Y'); ?> Open iT, All rights reserved.</p>
      </div>
      <?php include ('contactform.php'); ?>
      <script>
      var modalcontact = document.getElementById('contactmodal');
      window.onclick = function(event) {
        if (event.target == modalcontact)
          {
          modalcontact.style.display = "none";
          }
      }
      function closemodals(){
        modalcontact.style.display = "none";
      }
      </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
