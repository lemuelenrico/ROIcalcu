<!DOCTYPE html>
<html lang="en">
      <?php
          //session_start();
          include ('connection.php');
          error_reporting(0);
          include ('db_verifier.php');
      ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ROI Calculator</title>
    <!--charts.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <!--excel reporting-->
    <script src="https://cdn.jsdelivr.net/alasql/0.3/alasql.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.7.12/xlsx.core.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="icon/snowflake.png" rel="shortcut icon">
  </head>
  <body>
    <nav class="navbar navbar-default nobord navsmallmrgbot">
      <div class="container-fluid blueb navpad2">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <!--<a class="navbar-brand" href="#">-->
          <a class="navbar-brand" href="https://www.snowsoftware.com/int">
            <img src="images/Snowlogo.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">

            <li><a href="http://mnl365win:8080/roicalcu/"><h class="whitfnt geofont">Snow for Engineering: ROI Calculator</p></a></li>
            <li><a href="contact"><h class="whitfnt2 geofont">Contact Us</h></a></li>
            <!--<li><a href="help.html"><h class="whitfnt2 geofont">Help</p></a></li>-->
            <li><a href="https://www.snowsoftware.com/int/contact"><h class="whitfnt2 geofont">Help</h></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="jumbotron jumboadd">
      <h2 class="headngsprpg nospace centertext">ROI for
        <?php
        echo $companyName;
         ?>
      </h2>
    </div>
    <div class="container-fluid">
      <div class="jumbotron jumbotronaddcomp">
        <div class="container-fluid"><img class="pointermarg" src="images/pointer3.png"></div>
        <br>
        <div class="row">
          <div class="col-md-4 col-sm-4"> <!--for app details -->
            <fieldset>
              <legend class="geofont">Select Optimization Level</legend>

                <div class="row nospace">
                  <div class="col-md-4 col-sm-4 nospace centertext levelpad">
                    <div class="middlelvl">
                      <img src="images/snowlevels/level_1.png" width="50px" >
                    </div>
                      <button class="levelbutdeselect">Level 1
                      </button>
                  </div>

                  <div class="col-md-4 col-sm-4 nospace centertext levelpad">
                    <div class="middlelvl">
                      <img class="lvlnotselect" src="images/snowlevels/level_2.png" width="70px">
                    </div>
                    <form action="roi_2.php" method="POST">
                      <!-- the following hidden input function as transitional variables for reporting-->
                      <input type="hidden" name="vercom" value="<?php echo $companyName ?>">
                      <!--<input type="hidden" name="repind" value="<?php echo $industry?>">-->
                      <input type="hidden" name="verappname" value="<?php echo $applicationName ?>">
                      <input type="hidden" name="veragree" value="<?php echo $agreementType ?>">
                      <input type="hidden" name="verlictype" value="<?php echo $licenseType ?>">
                      <input type="hidden" name="vernooflic" value="<?php echo $noOfLicenses ?>">
                      <input type="hidden" name="vercost" value="<?php echo $costPerLicense ?>">
                      <input type="hidden" name="verloc" value="<?php echo $imloc ?>">

                      <input type="hidden" name="verappname2" value="<?php echo $applicationName_2 ?>">
                      <input type="hidden" name="veragree2" value="<?php echo $agreementType_2 ?>">
                      <input type="hidden" name="verlictype2" value="<?php echo $licenseType_2 ?>">
                      <input type="hidden" name="vernooflic2" value="<?php echo $noOfLicenses_2 ?>">
                      <input type="hidden" name="vercost2" value="<?php echo $costPerLicense_2 ?>">
                      <input type="hidden" name="verloc2" value="<?php echo $imloc_2 ?>">

                      <input type="hidden" name="verappname3" value="<?php echo $applicationName_3 ?>">
                      <input type="hidden" name="veragree3" value="<?php echo $agreementType_3 ?>">
                      <input type="hidden" name="verlictype3" value="<?php echo $licenseType_3 ?>">
                      <input type="hidden" name="vernooflic3" value="<?php echo $noOfLicenses_3 ?>">
                      <input type="hidden" name="vercost3" value="<?php echo $costPerLicense_3 ?>">
                      <input type="hidden" name="verloc3" value="<?php echo $imloc_3 ?>">
                      <!--the folowing are subject to changes -->
                      <input type="hidden" name="verroi" value="<?php echo $truValROI1 ?>">
                      <input type="hidden" name="versav" value="<?php echo $truValSavings1 ?>">
                      <input type="hidden" name="verroi2" value="<?php echo $truValROI2 ?>">
                      <input type="hidden" name="versav2" value="<?php echo $truValSavings2 ?>">
                      <input type="hidden" name="verroi3" value="<?php echo $truValROI3 ?>">
                      <input type="hidden" name="versav3" value="<?php echo $truValSavings3 ?>">

                      <input type="hidden" name="verroi_2_1" value="<?php echo $truVal_2_ROI1; ?>">
                      <input type="hidden" name="versav_2_1" value="<?php echo $truVal_2_Savings1; ?>">
                      <input type="hidden" name="verroi_2_2" value="<?php echo $truVal_2_ROI2; ?>">
                      <input type="hidden" name="versav_2_2" value="<?php echo $truVal_2_Savings2; ?>">
                      <input type="hidden" name="verroi_2_3" value="<?php echo $truVal_2_ROI3; ?>">
                      <input type="hidden" name="versav_2_3" value="<?php echo $truVal_2_Savings3; ?>">

                      <input type="hidden" name="verroi_3_1" value="<?php echo $truVal_3_ROI1; ?>">
                      <input type="hidden" name="versav_3_1" value="<?php echo $truVal_3_Savings1; ?>">
                      <input type="hidden" name="verroi_3_2" value="<?php echo $truVal_3_ROI2; ?>">
                      <input type="hidden" name="versav_3_2" value="<?php echo $truVal_3_Savings2; ?>">
                      <input type="hidden" name="verroi_3_3" value="<?php echo $truVal_3_ROI3; ?>">
                      <input type="hidden" name="versav_3_3" value="<?php echo $truVal_3_Savings3; ?>">

                      <input type="hidden" name="appCost_1" value="<?php echo $applicationA_costs; ?>">
                      <input type="hidden" name="appCost_2" value="<?php echo $applicationB_costs; ?>">
                      <input type="hidden" name="appCost_3" value="<?php echo $applicationC_costs; ?>">

                    <button type="submit" class="levelbutdes">Level 2
                    </button>
                  </form>
                  </div>

                  <div class="col-md-4 col-sm-4 nospace centertext levelpad">
                    <div class="middlelvl">
                      <img class="lvlnotselect" src="images/snowlevels/level_3.png" width="85px">
                    </div>
                    <form action="roi_3.php" method="POST">
                      <!-- the following hidden input function as transitional variables for reporting-->
                      <input type="hidden" name="vercom" value="<?php echo $companyName ?>">
                      <!--<input type="hidden" name="repind" value="<?php echo $industry?>">-->
                      <input type="hidden" name="verappname" value="<?php echo $applicationName ?>">
                      <input type="hidden" name="veragree" value="<?php echo $agreementType ?>">
                      <input type="hidden" name="verlictype" value="<?php echo $licenseType ?>">
                      <input type="hidden" name="vernooflic" value="<?php echo $noOfLicenses ?>">
                      <input type="hidden" name="vercost" value="<?php echo $costPerLicense ?>">
                      <input type="hidden" name="verloc" value="<?php echo $imloc ?>">

                      <input type="hidden" name="verappname2" value="<?php echo $applicationName_2 ?>">
                      <input type="hidden" name="veragree2" value="<?php echo $agreementType_2 ?>">
                      <input type="hidden" name="verlictype2" value="<?php echo $licenseType_2 ?>">
                      <input type="hidden" name="vernooflic2" value="<?php echo $noOfLicenses_2 ?>">
                      <input type="hidden" name="vercost2" value="<?php echo $costPerLicense_2 ?>">
                      <input type="hidden" name="verloc2" value="<?php echo $imloc_2 ?>">

                      <input type="hidden" name="verappname3" value="<?php echo $applicationName_3 ?>">
                      <input type="hidden" name="veragree3" value="<?php echo $agreementType_3 ?>">
                      <input type="hidden" name="verlictype3" value="<?php echo $licenseType_3 ?>">
                      <input type="hidden" name="vernooflic3" value="<?php echo $noOfLicenses_3 ?>">
                      <input type="hidden" name="vercost3" value="<?php echo $costPerLicense_3 ?>">
                      <input type="hidden" name="verloc3" value="<?php echo $imloc_3 ?>">
                      <!--the folowing are subject to changes -->
                      <input type="hidden" name="verroi" value="<?php echo $truValROI1 ?>">
                      <input type="hidden" name="versav" value="<?php echo $truValSavings1 ?>">
                      <input type="hidden" name="verroi2" value="<?php echo $truValROI2 ?>">
                      <input type="hidden" name="versav2" value="<?php echo $truValSavings2 ?>">
                      <input type="hidden" name="verroi3" value="<?php echo $truValROI3 ?>">
                      <input type="hidden" name="versav3" value="<?php echo $truValSavings3 ?>">

                      <input type="hidden" name="verroi_2_1" value="<?php echo $truVal_2_ROI1; ?>">
                      <input type="hidden" name="versav_2_1" value="<?php echo $truVal_2_Savings1; ?>">
                      <input type="hidden" name="verroi_2_2" value="<?php echo $truVal_2_ROI2; ?>">
                      <input type="hidden" name="versav_2_2" value="<?php echo $truVal_2_Savings2; ?>">
                      <input type="hidden" name="verroi_2_3" value="<?php echo $truVal_2_ROI3; ?>">
                      <input type="hidden" name="versav_2_3" value="<?php echo $truVal_2_Savings3; ?>">

                      <input type="hidden" name="verroi_3_1" value="<?php echo $truVal_3_ROI1; ?>">
                      <input type="hidden" name="versav_3_1" value="<?php echo $truVal_3_Savings1; ?>">
                      <input type="hidden" name="verroi_3_2" value="<?php echo $truVal_3_ROI2; ?>">
                      <input type="hidden" name="versav_3_2" value="<?php echo $truVal_3_Savings2; ?>">
                      <input type="hidden" name="verroi_3_3" value="<?php echo $truVal_3_ROI3; ?>">
                      <input type="hidden" name="versav_3_3" value="<?php echo $truVal_3_Savings3; ?>">

                      <input type="hidden" name="appCost_1" value="<?php echo $applicationA_costs; ?>">
                      <input type="hidden" name="appCost_2" value="<?php echo $applicationB_costs; ?>">
                      <input type="hidden" name="appCost_3" value="<?php echo $applicationC_costs; ?>">

                    <button type="submit" class="levelbutdes">Level 3
                    </button>
                  </form>
                  </div>
                </div>

            </fieldset>
            <br>
            <fieldset class="appfield">
              <legend class="geofont centertext">Software Details</legend>
              <table align="center" class="tablemarg">
                  <tr>
                    <td class="centertext smallpadtbl headperapp1" colspan="4">Application A</td>
                  </tr>
                  <tr>
                    <td width="45%" class="leftalgn roilbl colorwhite smallpadtbl">Name:</td>
                    <td class="leftalgn roiplch colorwhite smallpadtbl"><?php echo $applicationName; ?></td>
                  </tr>
                  <tr>
                    <td width="45%" class="leftalgn roilbl pricebgcol smallpadtbl">Agreement Type:</td>
                    <td class="leftalgn roiplch pricebgcol smallpadtbl"><?php echo $agreementType; ?></td>
                  </tr>
                  <tr>
                    <td width="45%" class="leftalgn roilbl colorwhite smallpadtbl">License Type:</td>
                    <td class="leftalgn roiplch colorwhite smallpadtbl"><?php echo $licenseType; ?></td>
                  </tr>
                  <tr>
                    <td width="45%" class="leftalgn roilbl pricebgcol smallpadtbl">Number of Licenses:</td>
                    <td class="leftalgn roiplch pricebgcol smallpadtbl"><?php echo number_format($noOfLicenses); ?></td>
                  </tr>
                  <tr>
                    <td width="45%" class="leftalgn roilbl colorwhite smallpadtbl">Cost per License:</td>
                    <td class="leftalgn roiplch colorwhite smallpadtbl"><?php echo number_format($costPerLicense,2); ?></td>
                  </tr>
                  <tr>
                    <td width="45%" class="leftalgn roilbl pricebgcol smallpadtbl">Location:</td>
                    <td class="leftalgn roiplch pricebgcol smallpadtbl"><?php echo $imloc; ?></td>
                  </tr>
                </table>

                <table align="center" class="tablemarg">
                    <tr>
                      <td class="centertext smallpadtbl headperapp2" colspan="4">Application B</td>
                    </tr>
                    <tr>
                      <td width="45%" class="leftalgn roilbl colorwhite smallpadtbl">Name:</td>
                      <td class="leftalgn roiplch colorwhite smallpadtbl"><?php echo $applicationName_2; ?></td>
                    </tr>
                    <tr>
                      <td width="45%" class="leftalgn roilbl pricebgcol smallpadtbl">Agreement Type:</td>
                      <td class="leftalgn roiplch pricebgcol smallpadtbl"><?php echo $agreementType_2; ?></td>
                    </tr>
                    <tr>
                      <td width="45%" class="leftalgn roilbl colorwhite smallpadtbl">License Type:</td>
                      <td class="leftalgn roiplch colorwhite smallpadtbl"><?php echo $licenseType_2; ?></td>
                    </tr>
                    <tr>
                      <td width="45%" class="leftalgn roilbl pricebgcol smallpadtbl">Number of Licenses:</td>
                      <td class="leftalgn roiplch pricebgcol smallpadtbl"><?php echo number_format($noOfLicenses_2); ?></td>
                    </tr>
                    <tr>
                      <td width="45%" class="leftalgn roilbl colorwhite smallpadtbl">Cost per License:</td>
                      <td class="leftalgn roiplch colorwhite smallpadtbl"><?php echo number_format($costPerLicense_2,2); ?></td>
                    </tr>
                    <tr>
                      <td width="45%" class="leftalgn roilbl pricebgcol smallpadtbl">Location:</td>
                      <td class="leftalgn roiplch pricebgcol smallpadtbl"><?php echo $imloc_2; ?></td>
                    </tr>
                  </table>

                  <table align="center" class="tablemarg">
                      <tr>
                        <td class="centertext smallpadtbl headperapp3" colspan="4">Application C</td>
                      </tr>
                      <tr>
                        <td width="45%" class="leftalgn roilbl colorwhite smallpadtbl">Name:</td>
                        <td class="leftalgn roiplch colorwhite smallpadtbl"><?php echo $applicationName_3; ?></td>
                      </tr>
                      <tr>
                        <td width="45%" class="leftalgn roilbl pricebgcol smallpadtbl">Agreement Type:</td>
                        <td class="leftalgn roiplch pricebgcol smallpadtbl"><?php echo $agreementType_3; ?></td>
                      </tr>
                      <tr>
                        <td width="45%" class="leftalgn roilbl colorwhite smallpadtbl">License Type:</td>
                        <td class="leftalgn roiplch colorwhite smallpadtbl"><?php echo $licenseType_3; ?></td>
                      </tr>
                      <tr>
                        <td width="45%" class="leftalgn roilbl pricebgcol smallpadtbl">Number of Licenses:</td>
                        <td class="leftalgn roiplch pricebgcol smallpadtbl"><?php echo number_format($noOfLicenses_3); ?></td>
                      </tr>
                      <tr>
                        <td width="45%" class="leftalgn roilbl colorwhite smallpadtbl">Cost per License:</td>
                        <td class="leftalgn roiplch colorwhite smallpadtbl"><?php echo number_format($costPerLicense_3,2); ?></td>
                      </tr>
                      <tr>
                        <td width="45%" class="leftalgn roilbl pricebgcol smallpadtbl">Location:</td>
                        <td class="leftalgn roiplch pricebgcol smallpadtbl"><?php echo $imloc_3; ?></td>
                      </tr>
                    </table>
            </fieldset>
          </div>
          <div class="col-md-8 col-sm-8"> <!-- visuals -->
            <fieldset>
              <legend class="geofont centertext"><img class="centerlvlimg" src="images/snowlevels/level_1.png" width="40px">&nbsp;Results Details&nbsp;<!--<img class="centerlvlimg" src="images/snowlevels/level_1.png" width="40px">--></legend>
              <div class="row charttopmarg">
                <div class="col-md-6 col-sm6">
                  <div class="roidiv colorwhite">
                    <span class="lresult" id="roidesign"><span id=roifnllbl>Calculated ROI: </span><br>
                      <?php
                      //echo $calculatedROI;
                      echo number_format($truValROI1);
                      ?>%
                    </span>
                  </br>
                    <span class="lresult" id="cutlicdesign"><span id=cutlicfnllbl>Savings for Year One: </span><br>$
                      <?php
                        echo number_format($truValSavings1,2);
                      ?>
                    </span>
                  </div>
                </div>
                <div class="col-md-6 col-sm6">
                  <div class="roidiv nospace colorwhite"><br>
                    <div class="row">
                      <div class="container-fluid smallspace">
                        <a href="company.php" class="btn contactbutdes geofont">Contact Snow</a>
                        <a href="company.php" class="btn recalcbutdes geofont">Calculate again</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-6 smallspace">
                        <form action="ReportLevel_1.php" method="POST" target="_blank">
                          <!-- the following hidden input function as transitional variables for reporting-->
                          <input type="hidden" name="repcom" value="<?php echo $companyName ?>">
                          <!--<input type="hidden" name="repind" value="<?php echo $industry?>">-->
                          <input type="hidden" name="repappname" value="<?php echo $applicationName ?>">
                          <input type="hidden" name="repagree" value="<?php echo $agreementType ?>">
                          <input type="hidden" name="replictype" value="<?php echo $licenseType ?>">
                          <input type="hidden" name="repnooflic" value="<?php echo $noOfLicenses ?>">
                          <input type="hidden" name="repcost" value="<?php echo $costPerLicense ?>">
                          <input type="hidden" name="reploc" value="<?php echo $imloc ?>">

                          <input type="hidden" name="repappname2" value="<?php echo $applicationName_2 ?>">
                          <input type="hidden" name="repagree2" value="<?php echo $agreementType_2 ?>">
                          <input type="hidden" name="replictype2" value="<?php echo $licenseType_2 ?>">
                          <input type="hidden" name="repnooflic2" value="<?php echo $noOfLicenses_2 ?>">
                          <input type="hidden" name="repcost2" value="<?php echo $costPerLicense_2 ?>">
                          <input type="hidden" name="reploc2" value="<?php echo $imloc_2 ?>">

                          <input type="hidden" name="repappname3" value="<?php echo $applicationName_3 ?>">
                          <input type="hidden" name="repagree3" value="<?php echo $agreementType_3 ?>">
                          <input type="hidden" name="replictype3" value="<?php echo $licenseType_3 ?>">
                          <input type="hidden" name="repnooflic3" value="<?php echo $noOfLicenses_3 ?>">
                          <input type="hidden" name="repcost3" value="<?php echo $costPerLicense_3 ?>">
                          <input type="hidden" name="reploc3" value="<?php echo $imloc_3 ?>">
                          <!--the folowing are subject to changes -->
                          <input type="hidden" name="reproi" value="<?php echo $truValROI1 ?>">
                          <input type="hidden" name="repsav" value="<?php echo $truValSavings1 ?>">
                          <input type="hidden" name="reproi2" value="<?php echo $truValROI2 ?>">
                          <input type="hidden" name="repsav2" value="<?php echo $truValSavings2 ?>">
                          <input type="hidden" name="reproi3" value="<?php echo $truValROI3 ?>">
                          <input type="hidden" name="repsav3" value="<?php echo $truValSavings3 ?>">

                          <button type="submit" id="downloadpdf" class="btn">Export to<br>
                            <img src="images/newpdficon.png" width="40px" height="40px" onmouseover="this.src='images/newpdficonhover.png'"
                              onmouseout="this.src='images/newpdficon.png'" title="Export to PDF">
                          </button>
                        </form>
                      </div>
                      <div class="col-md-6 col-sm-6 smallspace">
                        <button id="downloadxl" class="btn" onclick="saveFile()">Export to<br>
                            <img src="images/newexcelicon.png" width="40px" height="40px" onmouseover="this.src='images/newexceliconhover.png'"
                          onmouseout="this.src='images/newexcelicon.png'" title="Export to Excel">
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row charttopmarg">
                <div class="col-md-6 col-sm-6">
                  <div class="graphcontainter roidiv">
                    <canvas id="roiChartBar"></canvas>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="graphcontainter roidiv">
                    <canvas id="roiChartPie"></canvas>
                  </div>
                </div>
              </div>

              <div class="row charttopmarg">
                <div class="col-md-6 col-sm-6">
                  <div class="graphcontainter roidiv">
                    <canvas id="roiChartLine"></canvas>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <table align="center" class="const">
                      <tr>
                          <th colspan="4" class="aligncntr">ROI Calculation</th>
                      </tr>
                      <tr>
                          <td width="30%" class="pricebgcol"></td>
                          <td width="20%" class="yearlydatalbl pricebgcol">%</td>
                          <td class="pricebgcol yearlydata">$</td>
                      </tr>
                      <tr>
                          <td width="30%" id="firstyrgradient">1st Year</td>
                          <td width="20%" class="yearlydatalbl colorwhite"><?php echo number_format($truValROI1,2); ?>%</td>
                          <td class="colorwhite yearlydata">$<?php echo number_format($truValSavings1,2); ?></td>
                      </tr>

                      <tr>
                          <td width="30%" id="secondyrgradient">2nd Year</td>
                          <td width="20%" class="yearlydatalbl colorwhite"><?php echo number_format($truValROI2,2); ?>%</td>
                          <td class="colorwhite yearlydata">$<?php echo number_format($truValSavings2,2); ?></td>
                      </tr>
                      <tr>
                          <td width="30%" id="thrdyrgradient">3rd Year</td>
                          <td width="20%" class="yearlydatalbl colorwhite"><?php echo number_format($truValROI3,2); ?>%</td>
                          <td class="colorwhite yearlydata">$<?php echo number_format($truValSavings3,2); ?></td>
                      </tr>
                    </table>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
    </div>  <!--jumbotron-->
  </div> <!-- container fluid -->

  <script>

    let roiChartBar = document.getElementById('roiChartBar').getContext('2d');

    let theBarChart = new Chart(roiChartBar, {
      type:'bar',
      data:{
        labels:['<?php echo $applicationName; ?>','<?php echo $applicationName_2; ?>','<?php echo $applicationName_3; ?>'],
        datasets:[{
          label: 'Cost',
          data:[
            <?php echo round($applicationA_costs); ?>,
            <?php echo round($applicationB_costs); ?>,
            <?php echo round($applicationC_costs); ?>
          ],
          backgroundColor:['#ffae19','#ffa500','#ec8c2d'],
          hoverBorderWidth: 3,
          hoverBorderColor: "#F0F0F0"
        }]
      },
      options:{
        maintainAspectRatio: false,
        title: {
          display: true,
          text: 'Software Expenses',
          fontSize: 20,
          fontColor: "white"
        },
        legend:{
          display:false
        },
        scales: {
          xAxes: [{
            scaleLabel: {
              display: true,
              labelString: 'Applications',
              fontSize: 19,
              fontColor: "white",
              fontFamily: "Geogtq"
            },
            ticks: {
               fontColor: 'white'
            }
          }],
          yAxes: [{
            scaleLabel: {
              display: true,
              labelString: 'Cost in USD',
              fontSize: 15,
              fontColor: "white",
              fontFamily: "OpenSans"
            },
            ticks: {
              beginAtZero: true,
               fontColor: 'white'
            }
          }]
        }

      }
    });

    let roiChartPie = document.getElementById('roiChartPie').getContext('2d');

    let thePieChart = new Chart(roiChartPie, {
      type:'doughnut',
      data:{
        labels:['First Year','Second Year','Third Year'],
        datasets:[{
          label: 'ROI',
          data:[
            <?php echo round($truValSavings1); ?>,
            <?php echo round($truValSavings2); ?>,
            <?php echo round($truValSavings3); ?>
          ],
          backgroundColor:['#47c3dc','#417379','#ec8c2d'],
          borderWidth: 0,
          hoverBorderWidth: 3,
          hoverBorderColor: '#F0F0F0'
        }]
      },
      options:{
        maintainAspectRatio: false,
        title: {
          display: true,
          text: 'Savings for Three Years ($)',
          fontSize: 20,
          fontColor: "white"
        },
        scales: {
          xAxes: [{
            display: false,
            scaleLabel: {
              display: true,
              labelString: 'Time (Yr)',
              fontSize: 19,
              fontColor: "white",
              fontFamily: "Geogtq"
            }
          }],
          yAxes: [{
            display: false,
          }]
        }
      }
    });

    let roiChartLine = document.getElementById('roiChartLine').getContext('2d');

    let theLineChart = new Chart(roiChartLine, {
      type:'line',
      data:{
        labels:['','First Year','Second Year','Third Year'],
        datasets:[{
          label: 'ROI',
          data:[
            0,
            <?php echo round($truValROI1); ?>,
            <?php echo round($truValROI2); ?>,
            <?php echo round($truValROI3); ?>
          ],
          borderColor:'#47c3dc',
          hoverBorderWidth: 3,
          pointBackgroundColor: 'white',
          pointRadius: 4,
          pointHoverRadius: 6
        }]
      },
      options:{
        maintainAspectRatio: false,
        title: {
          display: true,
          text: 'ROI for Three years',
          fontSize: 20,
          fontColor: "white"
        },
        legend:{
          display: true
        },
        scales: {
          xAxes: [{
            scaleLabel: {
              display: true,
              labelString: 'Time (Yr)',
              fontSize: 19,
              fontColor: "white",
              fontFamily: "Geogtq"
            },
            ticks: {
               fontColor: 'white'
            }
          }],
          yAxes: [{
            scaleLabel: {
              display: true,
              labelString: 'Value (%)',
              fontSize: 15,
              fontColor: "white",
              fontFamily: "OpenSans"
            },
            ticks: {
              beginAtZero: true,
              fontColor: 'white'
            }
          }]
        }
      }
    });
    </script>

    <script>
    /*window.saveFile = function saveFile() {
        var data1 = [ {"":"Name",             "Application A":"<?php echo $applicationName; ?>", "Application B":"<?php echo $applicationName_2; ?>", "Application C":"<?php echo $applicationName_3; ?>"},
                      {"":"AgreementType",    "Application A":"<?php echo $agreementType; ?>",   "Application B":"<?php echo $agreementType_2; ?>",   "Application C":"<?php echo $agreementType_3; ?>"},
                      {"":"LicenseType",      "Application A":"<?php echo $licenseType; ?>",     "Application B":"<?php echo $licenseType_2; ?>",     "Application C":"<?php echo $licenseType_3; ?>"},
                      {"":"NumberOfLicenses", "Application A":<?php echo $noOfLicenses; ?>,    "Application B":<?php echo $noOfLicenses_2; ?>,    "Application C":<?php echo $noOfLicenses_3; ?>},
                      {"":"CostPerLicense",   "Application A":<?php echo $costPerLicense; ?>,  "Application B":<?php echo $costPerLicense_2; ?>,  "Application C":<?php echo $costPerLicense_3; ?>},
                      {"":"Location",         "Application A":"<?php echo $imloc; ?>",           "Application B":"<?php echo $imloc_2; ?>",           "Application C":"<?php echo $imloc_3; ?>"} ]; */

        window.saveFile = function saveFile () {
          var applications = [ {"":"Application A", "Name":"<?php echo $applicationName; ?>", "Agreement Type":"<?php echo $agreementType; ?>", "License Type":"<?php echo $licenseType; ?>", "Number of Licenses":<?php echo $noOfLicenses; ?>, "Cost per License":<?php echo $costPerLicense; ?>, "Location":"<?php echo $imloc; ?>"},
                                          {"":"Application B", "Name":"<?php echo $applicationName_2; ?>", "Agreement Type":"<?php echo $agreementType_2; ?>", "License Type":"<?php echo $licenseType_2; ?>", "Number of Licenses":<?php echo $noOfLicenses_2; ?>, "Cost per License":<?php echo $costPerLicense_2; ?>, "Location":"<?php echo $imloc_2; ?>"},
                                          {"":"Application C", "Name":"<?php echo $applicationName_3; ?>", "Agreement Type":"<?php echo $agreementType_3; ?>", "License Type":"<?php echo $licenseType_3; ?>", "Number of Licenses":<?php echo $noOfLicenses_3; ?>, "Cost per License":<?php echo $costPerLicense_3; ?>, "Location":"<?php echo $imloc_3; ?>"} ];

          var roi = [   {"ROI Calculation Level_1":"1st Year","%":<?php echo round($truValROI1); ?>, "$":<?php echo round($truValSavings1); ?>},
                        {"ROI Calculation Level_1":"2nd Year","%":<?php echo round($truValROI2); ?>, "$":<?php echo round($truValSavings2); ?>},
                        {"ROI Calculation Level_1":"2nd Year","%":<?php echo round($truValROI3); ?>, "$":<?php echo round($truValSavings3); ?>} ];

          var opts = [{sheetid:'Application',header:true},{sheetid:'ROI',header:false}];
          var res = alasql('SELECT INTO XLSX("SnowLevel1_ROIreport<?php echo $companyName; ?>.xlsx",?) FROM ?',
                           [opts,[applications,roi]]);
          }
    </script>

    <!--<script src="js/roi.js"></script>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <p class="dfooter geofont">Copyright © ROI Calculator. All rights reserved.</p>
  </body>
</html>
