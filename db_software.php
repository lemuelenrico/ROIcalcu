<?php

$applicationName  = $_POST ['appname'];     $vendorName       = $_POST ['vendname'];
$agreementType    = $_POST ['agreetype'];   $licenseType      = $_POST ['lictype'];
$location = $_REQUEST ['location'];         $renewalDate      = $_POST ['rendate'];
$noOfLicenses     = $_POST ['numlicenses']; $costPerLicense   = $_POST ['costlicenses'];

$imloc = implode (", ",$location);

$applicationName_2  = $_POST ['appname2'];     $vendorName_2       = $_POST ['vendname2'];
$agreementType_2    = $_POST ['agreetype2'];   $licenseType_2      = $_POST ['lictype2'];
$location_2 = $_REQUEST ['location2'];         $renewalDate_2      = $_POST ['rendate2'];
$noOfLicenses_2     = $_POST ['numlicenses2']; $costPerLicense_2   = $_POST ['costlicenses2'];

$imloc_2 = implode (", ",$location_2);

$applicationName_3  = $_POST ['appname3'];     $vendorName_3       = $_POST ['vendname3'];
$agreementType_3    = $_POST ['agreetype3'];   $licenseType_3      = $_POST ['lictype3'];
$location_3 = $_REQUEST ['location3'];         $renewalDate_3      = $_POST ['rendate3'];
$noOfLicenses_3     = $_POST ['numlicenses3']; $costPerLicense_3   = $_POST ['costlicenses3'];

$imloc_3 = implode (", ",$location_3);

if ($applicationName_2 == '') {
  $agreementType_2 = '';
  $licenseType_2 = '';
}

if ($applicationName_3 == '') {
  $agreementType_3 = '';
  $licenseType_3 = '';
}




/*the following variables are transitional variables*/

$companyName  = $_POST ['transi'];
$industryTr   = $_POST ['transi2'];
$comWebsiteTr = $_POST ['transi3'];
$comEmailTr   = $_POST ['transi4'];
$noOfUsersTr  = $_POST ['transi5'];



$pricePerUser_1 = 0; $pricePerUser_2 = 0; $pricePerUser_3 = 0;
$applicationA_costs = 0; $applicationB_costs = 0; $applicationC_costs = 0;
$applicationTotalCosts = 0;

$purchaseCost_1 = 0;
$purchaseCost_2 = 0;
$purchaseCost_3 = 0;

$applicationTotalCostsReduced_1_1 = 0; $applicationTotalCostsReduced_2_1 = 0; $applicationTotalCostsReduced_3_1 = 0;
$applicationTotalCostsReduced_1_2 = 0; $applicationTotalCostsReduced_2_2 = 0; $applicationTotalCostsReduced_3_2 = 0;
$applicationTotalCostsReduced_1_3 = 0; $applicationTotalCostsReduced_2_3 = 0; $applicationTotalCostsReduced_3_3 = 0;

$applicationReductionSavings_1_1 = 0; $applicationReductionSavings_2_1 = 0; $applicationReductionSavings_3_1 = 0;
$applicationReductionSavings_1_2 = 0; $applicationReductionSavings_2_2 = 0; $applicationReductionSavings_3_2 = 0;
$applicationReductionSavings_1_3 = 0; $applicationReductionSavings_2_3 = 0; $applicationReductionSavings_3_3 = 0;

//total cost for yr 1 is the same for all level
$applicationTotalCosts_1_2 = 0; $applicationTotalCosts_1_3 = 0;
$applicationTotalCosts_2_2 = 0; $applicationTotalCosts_2_3 = 0;
$applicationTotalCosts_3_2 = 0; $applicationTotalCosts_3_3 = 0;

//maintenance are for 2nd and 3rd yr only with same value
$mSCost_1 = 0;
$mSCost_2 = 0;
$mSCost_3 = 0;

$ROI_1_1 = 0; $ROI_1_2 = 0; $ROI_1_3 = 0;
$ROI_2_1 = 0; $ROI_2_2 = 0; $ROI_2_3 = 0;
$ROI_3_1 = 0; $ROI_3_2 = 0; $ROI_3_3 = 0;

$savings_1_1 = 0;  $savings_1_2 = 0;  $savings_1_3 = 0;
$savings_2_1 = 0;  $savings_2_2 = 0;  $savings_2_3 = 0;
$savings_3_1 = 0;  $savings_3_2 = 0;  $savings_3_3 = 0;

//user pricing conditional
if($noOfUsersTr >= 0 && $noOfUsersTr <= 34) {
  $pricePerUser_1 = 499;
  $pricePerUser_2 = 799;
  $pricePerUser_3 = 1090;
}
elseif($noOfUsersTr >= 35 && $noOfUsersTr <= 99) {
  $pricePerUser_1 = 317;
  $pricePerUser_2 = 695;
  $pricePerUser_3 = 948;
}
elseif($noOfUsersTr >= 100 && $noOfUsersTr <= 349) {
  $pricePerUser_1 = 246;
  $pricePerUser_2 = 605;
  $pricePerUser_3 = 825;
}
elseif($noOfUsersTr >= 350 && $noOfUsersTr <= 999) {
  $pricePerUser_1 = 203;
  $pricePerUser_2 = 526;
  $pricePerUser_3 = 718;
}
elseif($noOfUsersTr >= 1000 && $noOfUsersTr <= 3499) {
  $pricePerUser_1 = 173;
  $pricePerUser_2 = 458;
  $pricePerUser_3 = 624;
}
elseif($noOfUsersTr >= 3500 && $noOfUsersTr <= 9999) {
  $pricePerUser_1 = 150;
  $pricePerUser_2 = 398;
  $pricePerUser_3 = 543;
}
elseif($noOfUsersTr >= 10000 && $noOfUsersTr <= 34999) {
  $pricePerUser_1 = 130;
  $pricePerUser_2 = 346;
  $pricePerUser_3 = 473;
}
elseif($noOfUsersTr >= 35000 && $noOfUsersTr <= 99999) {
  $pricePerUser_1 = 113;
  $pricePerUser_2 = 301;
  $pricePerUser_3 = 411;
}
elseif($noOfUsersTr >= 100000) {
  $pricePerUser_1 = 98;
  $pricePerUser_2 = 262;
  $pricePerUser_3 = 358;
}

//retrieve samples from database
$sql_getsamples = "SELECT * FROM referencedata";

$res = mysqli_query($conn, $sql_getsamples);
$x_arr = array(); //number of license (data)
$y_arr = array(); 	//recomended number of license (data)
$arr_len = mysqli_num_rows($res);

if ($arr_len > 0) {
    while($row = mysqli_fetch_assoc($res)) {
        $x_arr[] = $row["maxavailable"];
		$y_arr[] = $row["maxinuse"];
    }
} else {
    //no data sample
}

//regression algorithm from reference data
$x_sum = 0;
$y_sum = 0;
for ($i = 0; $i < $arr_len; $i++) {
    $x_sum = $x_sum + $x_arr[$i];
	$y_sum = $y_sum + $y_arr[$i];
}

if($arr_len == 0){$arr_len  = 1;}//error handling for zero division
$x_ave = $x_sum / $arr_len;
$y_ave = $y_sum / $arr_len;

$x_deviation = array();
$x_deviation_squared = array();
$x_deviation_squared_sum = 0;
$y_deviation = array();
$deviation_prod = array();
$deviation_prod_sum = 0;
for ($i = 0; $i < $arr_len; $i++) {
    $x_deviation[] =  $x_arr[$i] - $x_ave;
	$x_deviation_squared[] = $x_deviation[$i] * $x_deviation[$i];
	$x_deviation_squared_sum = $x_deviation_squared_sum + $x_deviation_squared[$i];
	$y_deviation[] = $y_arr[$i] - $y_ave;
	$deviation_prod[] = $x_deviation[$i] * $y_deviation[$i];
	$deviation_prod_sum = $deviation_prod_sum + $deviation_prod[$i];
}

if($x_deviation_squared_sum == 0){$x_deviation_squared_sum  = 1;}//error handling for zero division

$slope = $deviation_prod_sum / $x_deviation_squared_sum;
$y_intercept = $y_ave - ( $slope * $x_ave);

//pre init calculations
$applicationA_costs = $noOfLicenses * $costPerLicense;
$applicationB_costs = $noOfLicenses_2 * $costPerLicense_2;
$applicationC_costs = $noOfLicenses_3 * $costPerLicense_3;

$applicationTotalCosts = $applicationA_costs + $applicationB_costs + $applicationC_costs;
//predicted max in use
$noOfLicenses_predictionA = floor($y_intercept + ( $slope * $noOfLicenses ));
$noOfLicenses_predictionB = floor($y_intercept + ( $slope * $noOfLicenses_2 ));
$noOfLicenses_predictionC = floor($y_intercept + ( $slope * $noOfLicenses_3 ));

//truncate at negative reduction
if($noOfLicenses_predictionA >= $noOfLicenses){$noOfLicenses_predictionA = $noOfLicenses - 1;}
if($noOfLicenses_predictionB >= $noOfLicenses_2){$noOfLicenses_predictionB = $noOfLicenses_2 - 1;}
if($noOfLicenses_predictionC >= $noOfLicenses_3){$noOfLicenses_predictionC = $noOfLicenses_3 - 1;}
if($noOfLicenses_predictionA == 0){$noOfLicenses_predictionA = 1;}
if($noOfLicenses_predictionB == 0){$noOfLicenses_predictionB = 1;}
if($noOfLicenses_predictionC == 0){$noOfLicenses_predictionC = 1;}

$y_predictionA = $noOfLicenses_predictionA * $costPerLicense;
$y_predictionB = $noOfLicenses_predictionB * $costPerLicense_2;
$y_predictionC = $noOfLicenses_predictionC * $costPerLicense_3;
$applicationPredictedCosts = $y_predictionA + $y_predictionB + $y_predictionC;

//initialization of all the variables
$lvl_1_licAPredicted = $noOfLicenses_predictionA * $costPerLicense ;
$lvl_1_licBPredicted = $noOfLicenses_predictionB * $costPerLicense_2 ;
$lvl_1_licCPredicted = $noOfLicenses_predictionC * $costPerLicense_3 ;
//Take a small percentage from the remaining for Year2 and Year3
$lvl_1_licAPredictedYear2 = floor(($noOfLicenses - $noOfLicenses_predictionA) * .1)  * $costPerLicense;
$lvl_1_licBPredictedYear2 = floor(($noOfLicenses_2 - $noOfLicenses_predictionB) * .1)  * $costPerLicense_2;
$lvl_1_licCPredictedYear2 = floor(($noOfLicenses_3 - $noOfLicenses_predictionC) * .1)  * $costPerLicense_3;
$lvl_1_licAPredictedYear3 = floor(($noOfLicenses - $noOfLicenses_predictionA - $lvl_1_licAPredictedYear2) * .05)  * $costPerLicense;
$lvl_1_licBPredictedYear3 = floor(($noOfLicenses_2 - $noOfLicenses_predictionB - $lvl_1_licBPredictedYear2) * .05)  * $costPerLicense_2;
$lvl_1_licCPredictedYear3 = floor(($noOfLicenses_3 - $noOfLicenses_predictionC - $lvl_1_licCPredictedYear2) * .05)  * $costPerLicense_3;

$lvl_1_TotalPredicted = $lvl_1_licAPredicted + $lvl_1_licBPredicted + $lvl_1_licCPredicted;
$lvl_1_TotalPredictedYear2 = $lvl_1_licAPredictedYear2 + $lvl_1_licBPredictedYear2 + $lvl_1_licCPredictedYear2;
$lvl_1_TotalPredictedYear3 = $lvl_1_licAPredictedYear3 + $lvl_1_licBPredictedYear3 + $lvl_1_licCPredictedYear3;
$lvl_1_licA_Predicted = $lvl_1_licAPredicted + $lvl_1_licAPredictedYear2 + $lvl_1_licAPredictedYear3;
$lvl_1_licB_Predicted = $lvl_1_licBPredicted + $lvl_1_licBPredictedYear2 + $lvl_1_licBPredictedYear3;
$lvl_1_licC_Predicted = $lvl_1_licCPredicted + $lvl_1_licCPredictedYear2 + $lvl_1_licCPredictedYear3;

$lvl_2_rampupfactor = 1.2;
//reduce usage prediction count by 20% more reduction
$noOfLicenses_predictionArampedL2 = floor($noOfLicenses_predictionA / $lvl_2_rampupfactor);
$noOfLicenses_predictionBrampedL2 = floor($noOfLicenses_predictionB / $lvl_2_rampupfactor);
$noOfLicenses_predictionCrampedL2 = floor($noOfLicenses_predictionC / $lvl_2_rampupfactor);
//truncate at negative reduction
if($noOfLicenses_predictionArampedL2 >= $noOfLicenses){$noOfLicenses_predictionArampedL2 = $noOfLicenses - 1;}
if($noOfLicenses_predictionBrampedL2 >= $noOfLicenses_2){$noOfLicenses_predictionBrampedL2 = $noOfLicenses_2 - 1;}
if($noOfLicenses_predictionCrampedL2 >= $noOfLicenses_3){$noOfLicenses_predictionCrampedL2 = $noOfLicenses_3 - 1;}

$lvl_2_licAPredicted = $noOfLicenses_predictionArampedL2 * $costPerLicense ;
$lvl_2_licBPredicted = $noOfLicenses_predictionBrampedL2 * $costPerLicense_2 ;
$lvl_2_licCPredicted = $noOfLicenses_predictionCrampedL2 * $costPerLicense_3 ;
//Take a small percentage from the remaining for Year2 and Year3
$lvl_2_licAPredictedYear2 = floor(($noOfLicenses - $noOfLicenses_predictionArampedL2) * .1)  * $costPerLicense;
$lvl_2_licBPredictedYear2 = floor(($noOfLicenses_2 - $noOfLicenses_predictionBrampedL2) * .1)  * $costPerLicense_2;
$lvl_2_licCPredictedYear2 = floor(($noOfLicenses_3 - $noOfLicenses_predictionCrampedL2) * .1)  * $costPerLicense_3;
$lvl_2_licAPredictedYear3 = floor(($noOfLicenses - $noOfLicenses_predictionArampedL2 - $lvl_2_licAPredictedYear2) * .06)  * $costPerLicense;
$lvl_2_licBPredictedYear3 = floor(($noOfLicenses_2 - $noOfLicenses_predictionBrampedL2 - $lvl_2_licBPredictedYear2) * .06)  * $costPerLicense_2;
$lvl_2_licCPredictedYear3 = floor(($noOfLicenses_3 - $noOfLicenses_predictionCrampedL2 - $lvl_2_licCPredictedYear2) * .06)  * $costPerLicense_3;

$lvl_2_TotalPredicted = $lvl_2_licAPredicted + $lvl_2_licBPredicted + $lvl_2_licCPredicted;
$lvl_2_TotalPredictedYear2 = $lvl_2_licAPredictedYear2 + $lvl_2_licBPredictedYear2 + $lvl_2_licCPredictedYear2;
$lvl_2_TotalPredictedYear3 = $lvl_2_licAPredictedYear3 + $lvl_2_licBPredictedYear3 + $lvl_2_licCPredictedYear3;
$lvl_2_licA_Predicted = $lvl_2_licAPredicted + $lvl_2_licAPredictedYear2 + $lvl_2_licAPredictedYear3;
$lvl_2_licB_Predicted = $lvl_2_licBPredicted + $lvl_2_licBPredictedYear2 + $lvl_2_licBPredictedYear3;
$lvl_2_licC_Predicted = $lvl_2_licCPredicted + $lvl_2_licCPredictedYear2 + $lvl_2_licCPredictedYear3;

$lvl_3_rampupfactor = 1.4;
//reduce usage prediction count by 20% and 20%  more reduction
$noOfLicenses_predictionArampedL3 = floor($noOfLicenses_predictionA / $lvl_3_rampupfactor);
$noOfLicenses_predictionBrampedL3 = floor($noOfLicenses_predictionB / $lvl_3_rampupfactor);
$noOfLicenses_predictionCrampedL3 = floor($noOfLicenses_predictionC / $lvl_3_rampupfactor);
//truncate at negative reduction
if($noOfLicenses_predictionArampedL3 >= $noOfLicenses){$noOfLicenses_predictionArampedL3 = $noOfLicenses - 1;}
if($noOfLicenses_predictionBrampedL3 >= $noOfLicenses_2){$noOfLicenses_predictionBrampedL3 = $noOfLicenses_2 - 1;}
if($noOfLicenses_predictionCrampedL3 >= $noOfLicenses_3){$noOfLicenses_predictionCrampedL3 = $noOfLicenses_3 - 1;}

$lvl_3_licAPredicted = $noOfLicenses_predictionArampedL3 * $costPerLicense ;
$lvl_3_licBPredicted = $noOfLicenses_predictionBrampedL3 * $costPerLicense_2 ;
$lvl_3_licCPredicted = $noOfLicenses_predictionCrampedL3 * $costPerLicense_3 ;
//Take a small percentage from the remaining for Year2 and Year3
$lvl_3_licAPredictedYear2 = floor($noOfLicenses_predictionArampedL3 * .1) * $costPerLicense;
$lvl_3_licBPredictedYear2 = floor($noOfLicenses_predictionBrampedL3 * .1) * $costPerLicense_2;
$lvl_3_licCPredictedYear2 = floor($noOfLicenses_predictionCrampedL3 * .1) * $costPerLicense_3;
$lvl_3_licAPredictedYear3 = floor($noOfLicenses_predictionArampedL3 * .07) * $costPerLicense;
$lvl_3_licBPredictedYear3 = floor($noOfLicenses_predictionBrampedL3 * .07) * $costPerLicense_2;
$lvl_3_licCPredictedYear3 = floor($noOfLicenses_predictionCrampedL3 * .07) * $costPerLicense_3;


$lvl_3_licAPredictedYear2 = floor(($noOfLicenses - $noOfLicenses_predictionArampedL3) * .1)  * $costPerLicense;
$lvl_3_licBPredictedYear2 = floor(($noOfLicenses_2 - $noOfLicenses_predictionBrampedL3) * .1)  * $costPerLicense_2;
$lvl_3_licCPredictedYear2 = floor(($noOfLicenses_3 - $noOfLicenses_predictionCrampedL3) * .1)  * $costPerLicense_3;
$lvl_3_licAPredictedYear3 = floor(($noOfLicenses - $noOfLicenses_predictionArampedL3 - $lvl_3_licAPredictedYear2) * .06)  * $costPerLicense;
$lvl_3_licBPredictedYear3 = floor(($noOfLicenses_2 - $noOfLicenses_predictionBrampedL3 - $lvl_3_licBPredictedYear2) * .06)  * $costPerLicense_2;
$lvl_3_licCPredictedYear3 = floor(($noOfLicenses_3 - $noOfLicenses_predictionCrampedL3 - $lvl_3_licCPredictedYear2) * .06)  * $costPerLicense_3;


$lvl_3_TotalPredicted = $lvl_3_licAPredicted + $lvl_3_licBPredicted + $lvl_3_licCPredicted;
$lvl_3_TotalPredictedYear2 = $lvl_3_licAPredictedYear2 + $lvl_3_licBPredictedYear2 + $lvl_3_licCPredictedYear2;
$lvl_3_TotalPredictedYear3 = $lvl_3_licAPredictedYear3 + $lvl_3_licBPredictedYear3 + $lvl_3_licCPredictedYear3;
$lvl_3_licA_Predicted = $lvl_3_licAPredicted + $lvl_3_licAPredictedYear2 + $lvl_3_licAPredictedYear3;
$lvl_3_licB_Predicted = $lvl_3_licBPredicted + $lvl_3_licBPredictedYear2 + $lvl_3_licBPredictedYear3;
$lvl_3_licC_Predicted = $lvl_3_licCPredicted + $lvl_3_licCPredictedYear2 + $lvl_3_licCPredictedYear3;


$mS = 0.2;


//level 1-------------
//purchase calculation
$purchaseCost_1 = $pricePerUser_1 * $noOfUsersTr;
$mSCost_1 = $purchaseCost_1 * $mS;
//yr 1 calculation
$savings_1_1 = $applicationTotalCosts - $lvl_1_TotalPredicted;
$ROI_1_1 = ($savings_1_1 / $applicationTotalCosts) * 100;
//yr 2 calculation
$savings_1_2 = $lvl_1_TotalPredictedYear2;
$ROI_1_2 = ($savings_1_2 / $applicationTotalCosts) * 100;
//yr 3 calculation
$savings_1_3 =  $lvl_1_TotalPredictedYear3;
$ROI_1_3 = ($savings_1_3 / $applicationTotalCosts) * 100;

//level 2-------------
//purchase calculation
$purchaseCost_2 = $pricePerUser_2 * $noOfUsersTr;
$mSCost_2 = $purchaseCost_2 * $mS;
//yr 1 calculation
$savings_2_1 = $applicationTotalCosts - $lvl_2_TotalPredicted;
$ROI_2_1 = ($savings_2_1 / $applicationTotalCosts) * 100;
//yr 2 calculation
$savings_2_2 = $lvl_2_TotalPredictedYear2;
$ROI_2_2 = ($savings_2_2 / $applicationTotalCosts) * 100;
//yr 3 calculation
$savings_2_3 = $lvl_2_TotalPredictedYear3;
$ROI_2_3 = ($savings_2_3 / $applicationTotalCosts) * 100;

//level 3-------------
//purchase calculation
$purchaseCost_3 = $pricePerUser_3 * $noOfUsersTr;
$mSCost_3 = $purchaseCost_3 * $mS;
//yr 1 calculation
$savings_3_1 = $applicationTotalCosts - $lvl_3_TotalPredicted;
$ROI_3_1 = ($savings_3_1 / $applicationTotalCosts) * 100;
//yr 2 calculation
$savings_3_2 = $lvl_3_TotalPredictedYear2;
$ROI_3_2 = ($savings_3_2 / $applicationTotalCosts) * 100;
//yr 3 calculation
$savings_3_3 = $lvl_3_TotalPredictedYear3;
$ROI_3_3 = ($savings_3_3 / $applicationTotalCosts) * 100;


/*the following variables are for roi calc analysis*/
$maxapp = "";
$maxappCostReductionLvl_1 = 0;
$maxappCostReductionLvl_2 = 0;
$maxappCostReductionLvl_3 = 0;

$maxappcost = max($costPerLicense, $costPerLicense_2, $costPerLicense_3);

if ($maxappcost == $costPerLicense) {
  $maxapp = $applicationName;  
  $maxappCostReductionLvl_1 = $lvl_1_licA_Predicted;
  $maxappCostReductionLvl_2 = $lvl_2_licA_Predicted;
  $maxappCostReductionLvl_3 = $lvl_3_licA_Predicted;
}
elseif ($maxappcost == $costPerLicense_2) {
  $maxapp = $applicationName_2;
  $maxappCostReductionLvl_1 = $lvl_1_licB_Predicted;
  $maxappCostReductionLvl_2 = $lvl_2_licB_Predicted;
  $maxappCostReductionLvl_3 = $lvl_3_licB_Predicted;
}
elseif ($maxappcost == $costPerLicense_3) {
  $maxapp = $applicationName_3;
  $maxappCostReductionLvl_1 = $lvl_1_licC_Predicted;
  $maxappCostReductionLvl_2 = $lvl_2_licC_Predicted;
  $maxappCostReductionLvl_3 = $lvl_3_licC_Predicted;
}

$level_1_overallSav = $savings_1_1 + $savings_1_2 + $savings_1_3;
$level_2_overallSav = $savings_2_1 + $savings_2_2 + $savings_2_3;
$level_3_overallSav = $savings_3_1 + $savings_3_2 + $savings_3_3;

//$maxappCostReductionLvl_1 = $maxappcostmulti1 * ( 1 - $lvl_1_licReduction );
//$maxappCostReductionLvl_2 = $maxappcostmulti2 * ( 1 - $lvl_2_licReduction );
//$maxappCostReductionLvl_3 = $maxappcostmulti3 * ( 1 - $lvl_3_licReduction );



        /*the main formula is as follows*/

                 $calculatedROI = round((($costPerLicense*$noOfLicenses)/100),2);

        /*the cut licenses formula is as follows*/

                 $cutLicenses = $noOfLicenses - 3;

        /*the following are the variables for yearly breakdown of ROI, this is open to change*/

        /*
        $engROI = array(917, 500, 600);
        $ogROI = array(1458, 750, 800);
        $mpROI = array(105, 90, 50);
        var_dump($engROI);*/
/*--------------
        $engROIyr1 = 217;   $ogROIyr1   = 148;   $mpROIyr1     = 105;
        $engROIyr2 = 50;   $ogROIyr2   = 43;    $mpROIyr2     = 40;
        $engROIyr3 = 63;   $ogROIyr3   = 75;    $mpROIyr3     = 10;

        $govROIyr1 = 105;   $autoROIyr1 =  189;   $othersROIyr1 = 74;
        $govROIyr2 = 107;   $autoROIyr2 =  40;   $othersROIyr2  = 96;
        $govROIyr3 = 50;    $autoROIyr3 =  75;   $othersROIyr3  = 73;
----------------*/
        /*the following are the formula for each industry*/

/*--------------
        $engSavings1 = ($engROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $engSavings2 = ($engROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $engSavings3 = ($engROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        $ogSavings1  = ($ogROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $ogSavings2  = ($ogROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $ogSavings3  = ($ogROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        $mpSavings1  = ($mpROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $mpSavings2  = ($mpROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $mpSavings3  = ($mpROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);
----------------*/
        /*
        $engSavings = [];
        $ogSavings = [];
        $mpSavings = [];
        for($i = 0; $i < 3; $i++){
            $engSavings = ($engROI[$i] * 0.01) * ($costPerLicense*$noOfLicenses);
            $ogSavings = ($ogROI[$i] * 0.01) * ($costPerLicense*$noOfLicenses);
            $mpSavings = ($mpROI[$i] * 0.01) * ($costPerLicense*$noOfLicenses);
        }
        var_dump($engSavings);*/
/*--------------
        $govSavings1  = ($govROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $govSavings2  = ($govROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $govSavings3  = ($govROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        $autoSavings1 = ($autoROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $autoSavings2 = ($autoROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $autoSavings3 = ($autoROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);

        $othersSavings1 = ($othersROIyr1 * 0.01) * ($costPerLicense*$noOfLicenses);
        $othersSavings2 = ($othersROIyr2 * 0.01) * ($costPerLicense*$noOfLicenses);
        $othersSavings3 = ($othersROIyr3 * 0.01) * ($costPerLicense*$noOfLicenses);
----------------*/
        /*the following are the conditionals per industry*/
/*--------------
        if ($industryTr=='Engineering') {
          $valROI1 = $engROIyr1;    $valSavings1 = $engSavings1;
          $valROI2 = $engROIyr2;    $valSavings2 = $engSavings2;
          $valROI3 = $engROIyr3;    $valSavings3 = $engSavings3;
        }

        elseif ($industryTr=='Automotive') {
          $valROI1 = $autoROIyr1;    $valSavings1 = $autoSavings1;
          $valROI2 = $autoROIyr2;    $valSavings2 = $autoSavings2;
          $valROI3 = $autoROIyr3;    $valSavings3 = $autoSavings3;
        }

        elseif ($industryTr=='Oil and Gas') {
          $valROI1 = $ogROIyr1;    $valSavings1 = $ogSavings1;
          $valROI2 = $ogROIyr2;    $valSavings2 = $ogSavings2;
          $valROI3 = $ogROIyr3;    $valSavings3 = $ogSavings3;
        }

        elseif ($industryTr=='Mechanical & Precision') {
          $valROI1 = $mpROIyr1;    $valSavings1 = $mpSavings1;
          $valROI2 = $mpROIyr2;    $valSavings2 = $mpSavings2;
          $valROI3 = $mpROIyr3;    $valSavings3 = $mpSavings3;
        }

        elseif ($industryTr=='Government') {
          $valROI1 = $govROIyr1;    $valSavings1 = $govSavings1;
          $valROI2 = $govROIyr2;    $valSavings2 = $govSavings2;
          $valROI3 = $govROIyr3;    $valSavings3 = $govSavings3;
        }

        elseif ($industryTr=='Others') {
          $valROI1 = $othersROIyr1;    $valSavings1 = $othersSavings1;
          $valROI2 = $othersROIyr2;    $valSavings2 = $othersSavings2;
          $valROI3 = $othersROIyr3;    $valSavings3 = $othersSavings3;
        }

        else {
          $valROI1 = $othersROIyr1;    $valSavings1 = $othersSavings1;
          $valROI2 = $othersROIyr2;    $valSavings2 = $othersSavings2;
          $valROI3 = $othersROIyr3;    $valSavings3 = $othersSavings3;
        }
----------------*/

        /*the following are the variables for yearly breakdown per license type, this is open to change*/
/*--------------
        $ppuMultYr1 = 2;    $perpMultYr1 = 1; $lsMultYr1 = 1; $subsMultYr1 = 1; $rntMultYr1 = 1;
        $ppuMultYr2 = 1;    $perpMultYr2 = 1; $lsMultYr2 = 1; $subsMultYr2 = 1; $rntMultYr2 = 1;
        $ppuMultYr3 = 1.5;   $perpMultYr3 = 1; $lsMultYr3 = 1; $subsMultYr3 = 1; $rntMultYr3 = 1;
----------------*/
        /*the following are the conditionals per agreement type*/
/*--------------
        if ($agreementType=='Lease') {
          $truValROI1 = $valROI1 * $lsMultYr1;    $truValSavings1 = $valSavings1 * $lsMultYr1;
          $truValROI2 = $valROI2 * $lsMultYr2;    $truValSavings2 = $valSavings2 * $lsMultYr2;
          $truValROI3 = $valROI3 * $lsMultYr3;    $truValSavings3 = $valSavings3 * $lsMultYr3;
        }

        elseif ($agreementType=='Rent') {
          $truValROI1 = $valROI1 * $rntMultYr1;    $truValSavings1 = $valSavings1 * $rntMultYr1;
          $truValROI2 = $valROI2 * $rntMultYr2;    $truValSavings2 = $valSavings2 * $rntMultYr2;
          $truValROI3 = $valROI3 * $rntMultYr3;    $truValSavings3 = $valSavings3 * $rntMultYr3;
        }

        elseif ($agreementType=='Subscription') {
          $truValROI1 = $valROI1 * $subsMultYr1;    $truValSavings1 = $valSavings1 * $subsMultYr1;
          $truValROI2 = $valROI2 * $subsMultYr2;    $truValSavings2 = $valSavings2 * $subsMultYr2;
          $truValROI3 = $valROI3 * $subsMultYr3;    $truValSavings3 = $valSavings3 * $subsMultYr3;
        }

        elseif ($agreementType=='PPU') {
          $truValROI1 = $valROI1 * $ppuMultYr1;    $truValSavings1 = $valSavings1 * $ppuMultYr1;
          $truValROI2 = $valROI2 * $ppuMultYr2;    $truValSavings2 = $valSavings2 * $ppuMultYr2;
          $truValROI3 = $valROI3 * $ppuMultYr3;    $truValSavings3 = $valSavings3 * $ppuMultYr3;
        }

        elseif ($agreementType=='Perpetual') {
          $truValROI1 = $valROI1 * $perpMultYr1;    $truValSavings1 = $valSavings1 * $perpMultYr1;
          $truValROI2 = $valROI2 * $perpMultYr2;    $truValSavings2 = $valSavings2 * $perpMultYr2;
          $truValROI3 = $valROI3 * $perpMultYr3;    $truValSavings3 = $valSavings3 * $perpMultYr3;
        }

        else {
          $truValROI1 = $valROI1; $truValSavings1 = $valSavings1;
          $truValROI2 = $valROI2; $truValSavings2 = $valSavings2;
          $truValROI3 = $valROI3; $truValSavings2 = $valSavings3;
        }
----------------*/
        //these are the variables for roi in higher levels
/*--------------
        $tru_2_1 = 1.3; $tru_2_2 = 1.4; $tru_2_3 = 1.3;

        $tru_3_1 = 1.5; $tru_3_2 = 1.6; $tru_3_3 = 1.4;

        //level2 roi
        $truVal_2_ROI1 = $truValROI1 * $tru_2_1;
        $truVal_2_ROI2 = $truValROI2 * $tru_2_2;
        $truVal_2_ROI3 = $truValROI3 * $tru_2_3;

        //level3 roi
        $truVal_3_ROI1 = $truValROI1 * $tru_3_1;
        $truVal_3_ROI2 = $truValROI2 * $tru_3_2;
        $truVal_3_ROI3 = $truValROI3 * $tru_3_3;

        //level2 savings
        $truVal_2_Savings1 = $truValSavings1 * $tru_2_1;
        $truVal_2_Savings2 = $truValSavings2 * $tru_2_2;
        $truVal_2_Savings3 = $truValSavings3 * $tru_2_3;

        //level3 savings
        $truVal_3_Savings1 = $truValSavings1 * $tru_3_1;
        $truVal_3_Savings2 = $truValSavings2 * $tru_3_2;
        $truVal_3_Savings3 = $truValSavings3 * $tru_3_3;
----------------*/


  if (!$_POST['submittoroi']){
  }
  else  {
    $sql = "INSERT into software  (EntryDate, CompanyName, ApplicationName, AgreementType, Location,
                                  NoOfLicenses, VendorName, LicenseType, RenewalDate, CostPerLicense, CalculatedROI, CutLicenses)
            values                (NOW(), '$companyName', '$applicationName', '$agreementType', '$imloc',
                                    '$noOfLicenses','$vendorName','$licenseType','$renewalDate','$costPerLicense', $calculatedROI, $cutLicenses),
                                  (NOW(), '$companyName', '$applicationName_2', '$agreementType_2', '$imloc_2',
                                    '$noOfLicenses_2','$vendorName_2','$licenseType_2','$renewalDate_2','$costPerLicense_2', $calculatedROI, $cutLicenses),
                                  (NOW(), '$companyName', '$applicationName_3', '$agreementType_3', '$imloc_3',
                                    '$noOfLicenses_3','$vendorName_3','$licenseType_3','$renewalDate_3','$costPerLicense_3', $calculatedROI, $cutLicenses)";

  /*$sql_2 = "INSERT into software  (EntryDate, CompanyName, ApplicationName, AgreementType, Location,
                                  NoOfLicenses, VendorName, LicenseType, RenewalDate, CostPerLicense, CalculatedROI, CutLicenses)
              values              (NOW(), '$companyName_2', '$applicationName_2', '$agreementType_2', '$imloc_2',
                                  '$noOfLicenses_2','$vendorName_2','$licenseType_2','$renewalDate_2','$costPerLicense_2', $calculatedROI_2, $cutLicenses_2)";

    $sql_3 = "INSERT into software  (EntryDate, CompanyName, ApplicationName, AgreementType, Location,
                                  NoOfLicenses, VendorName, LicenseType, RenewalDate, CostPerLicense, CalculatedROI, CutLicenses)
              values              (NOW(), '$companyName_3', '$applicationName_3', '$agreementType_3', '$imloc_3',
                                  '$noOfLicenses_3','$vendorName_3','$licenseType_3','$renewalDate_3','$costPerLicense_3', $calculatedROI_3, $cutLicenses_3)"; */

    $sqlroi = "INSERT into yearlysavings (EntryDate, Level, ReductionYear1, ReductionYear2, ReductionYear3, SavingsYear1, SavingsYear2, SavingsYear3, Industry, CompanyName)
            values                (NOW(), 'Level_1', '$ROI_1_1', '$ROI_1_2', '$ROI_1_3','$savings_1_1','$savings_1_2','$savings_1_3','$industryTr','$companyName'),
                                  (NOW(), 'Level_2', '$ROI_2_1', '$ROI_2_2', '$ROI_2_3','$savings_2_1','$savings_2_2','$savings_2_3','$industryTr','$companyName'),
                                  (NOW(), 'Level_3', '$ROI_3_1', '$ROI_3_2', '$ROI_3_3','$savings_3_1','$savings_3_2','$savings_3_3','$industryTr','$companyName')";
}

      if (mysqli_query($conn, $sql)) {
        /*  echo "Data creation successful";*/
      }
    //the code below can be removed
      /*else {
          echo "Data creation not sucessful";
      }*/
      if (mysqli_query($conn, $sqlroi)) {
        /*  echo "Data creation successful";*/
      }


  //here are the codes for sending emails both the server and client

    $toServ       ='lenrico@openit.com, jengay@openit.com, mmaano@openit.com'; //you can add multiple emails, just separate them with comma
    $subjectServ  ='Savings Calculator Entry';
    $messageServ  ="Company Name: ".$companyName."\n"."Industry: ".$industryTr."\n"."Company Website: ".
                    $comWebsiteTr."\n"."Company Email: ".$comEmailTr."\n"."Number of Users: ".$noOfUsersTr.
                    "\n"."\n"."-----------------------Application A-------------------------".
                    "\n"."\n"."Application Name: ".$applicationName.", Vendor Name: ".$vendorName.
                    "\n"."Agreement Type: ".$agreementType.", License Type: ".$licenseType.
                    "\n"."Install Location: ".$imloc.
                    "\n"."Renewal Date: ".$renewalDate.
                    "\n"."Number of Licenses: ".$noOfLicenses.",    Cost per License: ".$costPerLicense.
                    "\n"."\n"."-----------------------Application B-------------------------".
                    "\n"."\n"."Application Name: ".$applicationName_2.", Vendor Name: ".$vendorName_2.
                    "\n"."Agreement Type: ".$agreementType_2.", License Type: ".$licenseType_2.
                    "\n"."Install Location: ".$imloc_2.
                    "\n"."Renewal Date: ".$renewalDate_2.
                    "\n"."Number of Licenses: ".$noOfLicenses_2.",    Cost per License: ".$costPerLicense_2.
                    "\n"."\n"."-----------------------Application C-------------------------".
                    "\n"."\n"."Application Name: ".$applicationName_3.", Vendor Name: ".$vendorName_3.
                    "\n"."Agreement Type: ".$agreementType_3.", License Type: ".$licenseType_3.
                    "\n"."Install Location: ".$imlo_3c.
                    "\n"."Renewal Date: ".$renewalDat_3e.
                    "\n"."Number of Licenses: ".$noOfLicenses_3.",    Cost per License: ".$costPerLicense_3.
                    "\n"."\n"."___________________Level 1___________________".
                    "\n"."\n"."Year 1 Savings: ".$ROI_1_1."%  |  $".$savings_1_1.
                    "\n"."Year 2 Savings:  ".$ROI_1_2."%  |  $".$savings_1_2.
                    "\n"."Year 3 Savings: ".$ROI_1_3."%  |  $".$savings_1_3.
                    "\n"."\n"."___________________Level 2___________________".
                    "\n"."\n"."Year 1 Savings: ".$ROI_2_1."%  |  $".$savings_2_1.
                    "\n"."Year 2 Savings:  ".$ROI_2_2."%  |  $".$savings_2_2.
                    "\n"."Year 3 Savings: ".$ROI_2_3."%  |  $".$savings_2_3.
                    "\n"."\n"."___________________Level 3___________________".
                    "\n"."\n"."Year 1 Savings: ".$ROI_3_1."%  |  $".$savings_3_1.
                    "\n"."Year 2 Savings:  ".$ROI_3_2."%  |  $".$savings_3_2.
                    "\n"."Year 3 Savings: ".$ROI_3_3."%  |  $".$savings_3_3;
    $headersServ  ="From: openitsavingscalc@gmail.com";

    mail($toServ,$subjectServ,$messageServ,$headersServ);


    /*$toClient='roiexpel@gmail.com';
    $subjectClient="Snow: ROI Calculator";
    $messageClient='
                    <html>
                      <head>
                      </head>
                      <body>
                        <div style="background:#47c3dc; text-align:center; padding: 2rem; color:white;">
                          <img src="http://bestfoodsgroupng.com/gallery/7f8fd36f6355a49b4ef25c70e1493ffe.png" width="100px" height="100px">
                          <h2>Thank you for calculating using Snow for Engineering!
                          If you have more questions, you may inquire <a href="https://openit.com/contact-us-2/">here</a>.</h2>
                        </div>
                      </body>
                    </html>
                    ';
    $headersClient  ="From: lem@lem.com";
    $headersClient .= "MIME-Version: 1.0"."\r\n";
    $headersClient .= "Content-type:text/html;charset=iso-8859-1"."\r\n";*/

  /*  $toClient=$comEmailTr;
    $subjectClient  ="Calculate ROI with Snow";
    $messageClient  ='
                    <html>
                      <body style="background:#47c3dc;">
                        <div style="background:#47c3dc; text-align:center; padding: 1rem 8vw 2rem 8vw; color:#585858; font-family: Helvetica;">
                          <div style="width;100%; margin: 0px;">
                            <img src="https://lh3.googleusercontent.com/-yZaqfNuqddw/W6nbzBUXsfI/AAAAAAAAAAc/_w-fna_L7e8bdXG8rQuzNvDSQKVibIDcACL0BGAs/w530-d-h129-n-rw/Snowlogo.png" width="136px" height: "33px" >
                          </div>
                          <div style="width:100%; background:white; border-radius: 8px; margin: 0px; padding: 1px;" >
                            <br><h2>Thank you for calculating using Snow for Engineering!<br><br>
                            If you have more questions, you may proceed <a href="https://www.snowsoftware.com/int/contact">here</a>.</h2><br><strong>';
    $messageClient .= $companyName;
    $messageClient .='
                      </strong>
                        </div>
                      </div>
                      </body>
                    </html>
                    ';
    $headersClient  ="From: lem@lem.com";
    $headersClient .= "MIME-Version: 1.0"."\r\n";
    $headersClient .= "Content-type:text/html;charset=iso-8859-1"."\r\n";


    mail($toClient,$subjectClient,$messageClient,$headersClient); */
      $passcode = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789';
      $passcode = substr(str_shuffle($passcode), 0, 6);

      //$_SESSION['passcode'] = $passcode;

      $toVerify=$comEmailTr;
      $subjectVerify  ="Passcode";
      $messageVerify  ='
                      <html>
                        <body>
                        <div style="color:#585858; font-family: Helvetica;" padding:0; margin:0;>
                        <div style="width:500px; margin: 0 auto;">
                        <div style="width:100%; background:#404040; margin: 0; padding-top: 15px; padding-bottom: 14px; text-align:center;">
                        </div>
                        <div style="width:100%; background:white; margin: 0; padding-top: 20px; padding-bottom: 16px; text-align:center;">
                        <img src="https://openit.com/wp-content/themes/caffeine/images/logo.png" width="136px" height: "33px" >
                        </div>
                        <div style="width:100%; text-align:center; background:#E8E8E8; margin:0; padding:0;">
                        <br><h2>Hello ';
      $messageVerify .= $companyName;
      $messageVerify .= '! Here is your verification code for <br>calculated results: <br><br>
                        <div style="width:200px; background:white; font-size: 30px; font-family: Arial; margin:0 auto; padding: 10px; border-bottom: 6px solid #cd172d;">';
      $messageVerify .= $passcode;
      $messageVerify .='
                        </div><br>
                        <div style="background:#dcdcdc; text-align:center; width:100%; margin: 0; padding-top: 40px; padding-bottom: 50px; color:#f5f5f5; font-size:12px;">
                        <a href="https://openit.com/contact-us-2/get-a-representative-to-contact-you/" style="background-color:#cd172d; color:white; padding: 15px 20px; text-decoration:none; font-size:16px;">CONTACT OPENIT</a>
                        </div>
                        <br>
                        <div style="background:#404040; width:100%; margin: 0; padding-top: 10px; padding-bottom: 12px; color:#f5f5f5; font-size:12px;">';
      $messageVerify .= 'All rights reserved &copy;';
      $messageVerify .= date('Y');
      $messageVerify .='. Open iT Savings Calculator.
                        </div>
                        </div>
                        </div>
                        </div>
                        </body>
                      </html>
                      ';
      $headersVerify  ="From: Open iT Savings Calculator <openitsavingscalc@gmail.com>";
      $headersVerify .= "MIME-Version: 1.0"."\r\n";
      $headersVerify .= "Content-type:text/html;charset=iso-8859-1"."\r\n";

      mail($toVerify,$subjectVerify,$messageVerify,$headersVerify);

?>
