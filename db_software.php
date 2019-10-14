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

//initialization of all the variables

$lvl_1_licReduction = 0.8; $lvl_1_licReductionYear2 = 0.05; $lvl_1_licReductionYear3 = 0.05;
$lvl_2_licReduction = 0.7; $lvl_2_licReductionYear2 = 0.05; $lvl_2_licReductionYear3 = 0.05;
$lvl_3_licReduction = 0.6; $lvl_3_licReductionYear2 = 0.05; $lvl_3_licReductionYear3 = 0.05;
$mS = 0.2;

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

$applicationA_costs = $noOfLicenses * $costPerLicense;
$applicationB_costs = $noOfLicenses_2 * $costPerLicense_2;
$applicationC_costs = $noOfLicenses_3 * $costPerLicense_3;

$applicationTotalCosts = $applicationA_costs + $applicationB_costs + $applicationC_costs;

//level 1-------------
$purchaseCost_1 = $pricePerUser_1 * $noOfUsersTr;

$applicationTotalCostsReduced_1_1 = $applicationTotalCosts * $lvl_1_licReduction;

$applicationReductionSavings_1_1 = $applicationTotalCosts - $applicationTotalCostsReduced_1_1;

//$savings_1_1 = $applicationReductionSavings_1_1 - $purchaseCost_1;
$savings_1_1 = $applicationReductionSavings_1_1;
$ROI_1_1 = ($savings_1_1/$applicationTotalCosts) * 100;

//yr 2 calculation
$applicationTotalCosts_1_2 = $applicationTotalCostsReduced_1_1;
$applicationTotalCostsReduced_1_2 = $applicationTotalCosts_1_2 * (1-$lvl_1_licReductionYear2);
$applicationReductionSavings_1_2 = $applicationTotalCosts_1_2 - $applicationTotalCostsReduced_1_2;
$mSCost_1 = $purchaseCost_1 * $mS;
//$savings_1_2 = $applicationReductionSavings_1_2 - $mSCost_1;
$savings_1_2 = $applicationReductionSavings_1_2;
$ROI_1_2 = ($savings_1_2/$applicationTotalCosts_1_2) * 100;

//yr 3 calculation
$applicationTotalCosts_1_3 = $applicationTotalCostsReduced_1_2;
$applicationTotalCostsReduced_1_3 = $applicationTotalCosts_1_3 * (1-$lvl_1_licReductionYear3);
$applicationReductionSavings_1_3 = $applicationTotalCosts_1_3 - $applicationTotalCostsReduced_1_3;
$savings_1_3 = $applicationReductionSavings_1_3;
//$savings_1_3 = $applicationReductionSavings_1_3 - $mSCost_1;
$ROI_1_3 = ($savings_1_3/$applicationTotalCosts_1_3) * 100;


//level 2-------------
$purchaseCost_2 = $pricePerUser_2 * $noOfUsersTr;

$applicationTotalCostsReduced_2_1 = $applicationTotalCosts * $lvl_2_licReduction;

$applicationReductionSavings_2_1 = $applicationTotalCosts - $applicationTotalCostsReduced_2_1;

$savings_2_1 = $applicationReductionSavings_2_1;
//$savings_2_1 = $applicationReductionSavings_2_1 - $purchaseCost_2;
$ROI_2_1 = ($savings_2_1/$applicationTotalCosts) * 100;

//yr 2 calculation
$applicationTotalCosts_2_2 = $applicationTotalCostsReduced_2_1;
$applicationTotalCostsReduced_2_2 = $applicationTotalCosts_2_2 * (1-$lvl_2_licReductionYear2);
$applicationReductionSavings_2_2 = $applicationTotalCosts_2_2 - $applicationTotalCostsReduced_2_2;
$mSCost_2 = $purchaseCost_2 * $mS;
//$savings_2_2 = $applicationReductionSavings_2_2 - $mSCost_2;
$savings_2_2 = $applicationReductionSavings_2_2;
$ROI_2_2 = ($savings_2_2/$applicationTotalCosts_2_2) * 100;

//yr 3 calculation
$applicationTotalCosts_2_3 = $applicationTotalCostsReduced_2_2;
$applicationTotalCostsReduced_2_3 = $applicationTotalCosts_2_3 * (1-$lvl_2_licReductionYear3);
$applicationReductionSavings_2_3 = $applicationTotalCosts_2_3 - $applicationTotalCostsReduced_2_3;
//$savings_2_3 = $applicationReductionSavings_2_3 - $mSCost_2;
$savings_2_3 = $applicationReductionSavings_2_3;
$ROI_2_3 = ($savings_2_3/$applicationTotalCosts_2_3) * 100;


//level 3-------------
$purchaseCost_3 = $pricePerUser_3 * $noOfUsersTr;

$applicationTotalCostsReduced_3_1 = $applicationTotalCosts * $lvl_3_licReduction;

$applicationReductionSavings_3_1 = $applicationTotalCosts - $applicationTotalCostsReduced_3_1;

$savings_3_1 = $applicationReductionSavings_3_1;
//$savings_3_1 = $applicationReductionSavings_3_1 - $purchaseCost_3;
$ROI_3_1 = ($savings_3_1/$applicationTotalCosts) * 100;

//yr 2 calculation
$applicationTotalCosts_3_2 = $applicationTotalCostsReduced_3_1;
$applicationTotalCostsReduced_3_2 = $applicationTotalCosts_3_2 * (1-$lvl_3_licReductionYear2);
$applicationReductionSavings_3_2 = $applicationTotalCosts_3_2 - $applicationTotalCostsReduced_3_2;
$mSCost_3 = $purchaseCost_3 * $mS;
//$savings_3_2 = $applicationReductionSavings_3_2 - $mSCost_3;
$savings_3_2 = $applicationReductionSavings_3_2;
$ROI_3_2 = ($savings_3_2/$applicationTotalCosts_3_2) * 100;

//yr 3 calculation
$applicationTotalCosts_3_3 = $applicationTotalCostsReduced_3_2;
$applicationTotalCostsReduced_3_3 = $applicationTotalCosts_3_3 * (1-$lvl_3_licReductionYear3);
$applicationReductionSavings_3_3 = $applicationTotalCosts_3_3 - $applicationTotalCostsReduced_3_3;
//$savings_3_3 = $applicationReductionSavings_3_3 - $mSCost_3;
$savings_3_3 = $applicationReductionSavings_3_3;
$ROI_3_3 = ($savings_3_3/$applicationTotalCosts_3_3) * 100;


/*the following variables are for roi calc analysis*/
$maxapp = "";
$maxappcost = 0;
$maxappcostmulti = 0;

$maxappCostReductionLvl_1 = 0;
$maxappCostReductionLvl_2 = 0;
$maxappCostReductionLvl_3 = 0;

$level_1_overallSav = 0;
$level_2_overallSav = 0;
$level_3_overallSav = 0;

$maxappcost = max($costPerLicense, $costPerLicense_2, $costPerLicense_3);

if ($maxappcost == $costPerLicense) {
  $maxapp = $applicationName;
  $maxappcostmulti = $applicationA_costs;
}
elseif ($maxappcost == $costPerLicense_2) {
  $maxapp = $applicationName_2;
  $maxappcostmulti = $applicationB_costs;
}
elseif ($maxappcost == $costPerLicense_3) {
  $maxapp = $applicationName_3;
  $maxappcostmulti = $applicationC_costs;
}

$level_1_overallSav = $savings_1_1 + $savings_1_2 + $savings_1_3;
$level_2_overallSav = $savings_2_1 + $savings_2_2 + $savings_2_3;
$level_3_overallSav = $savings_3_1 + $savings_3_2 + $savings_3_3;

//$maxappCostReductionLvl_1 = $maxappcostmulti1 * ( 1 - $lvl_1_licReduction );
//$maxappCostReductionLvl_2 = $maxappcostmulti2 * ( 1 - $lvl_2_licReduction );
//$maxappCostReductionLvl_3 = $maxappcostmulti3 * ( 1 - $lvl_3_licReduction );

$maxappCostReductionLvl_1 = $maxappcostmulti * ( 1 - $lvl_1_licReduction);
$maxappCostReductionLvl_2 = $maxappcostmulti * ( 1 - $lvl_2_licReduction);
$maxappCostReductionLvl_3 = $maxappcostmulti * ( 1 - $lvl_3_licReduction);

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

    $sqlroi = "INSERT into yearlyroi (EntryDate, Level, ROIyear1, ROIyear2, ROIyear3, SavingsYear1, SavingsYear2, SavingsYear3, Industry, CompanyName)
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

  /*  $toServ       ='roiexpel@gmail.com'; //you can add multiple emails, just separate them with comma
    $subjectServ  ='ROI Calculator Entry';
    $messageServ  ="Company Name: ".$companyName."\n"."Industry: ".$industryTr."\n"."Company Website: ".
                    $comWebsiteTr."\n"."Company Email: ".$comEmailTr."\n"."Number of Users: ".$noOfUsersTr.
                    "\n"."Application Name: ".$applicationName.", Vendor Name: ".$vendorName.
                    "\n"."Agreement Type: ".$agreementType.", License Type: ".$licenseType.
                    "\n"."Install Location: ".$imloc.
                    "\n"."Renewal Date: ".$renewalDate.
                    "\n"."Number of Licenses: ".$noOfLicenses.",    Cost per License: ".$costPerLicense.
                    "\n"."Year 1 ROI: ".$truValROI1."%  |  $".$truValSavings1.
                    "\n"."Year 2 ROI: ".$truValROI2."%  |  $".$truValSavings2.
                    "\n"."Year 3 ROI: ".$truValROI3."%  |  $".$truValSavings3;

    $headersServ  ="From: lem@lem.com";

    mail($toServ,$subjectServ,$messageServ,$headersServ); */


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
                        <div style="width:100%; background:#47c3dc; margin: 0; padding-top: 20px; padding-bottom: 16px; text-align:center;">
                        <img src="https://lh3.googleusercontent.com/-yZaqfNuqddw/W6nbzBUXsfI/AAAAAAAAAAc/_w-fna_L7e8bdXG8rQuzNvDSQKVibIDcACL0BGAs/w530-d-h129-n-rw/Snowlogo.png" width="136px" height: "33px" >
                        </div>
                        <div style="width:100%; text-align:center; background:#E8E8E8; margin:0; padding:0;">
                        <br><h2>Hello ';
      $messageVerify .= $companyName;
      $messageVerify .= '! Here is your verification code for <br>calculated results: <br><br>
                        <div style="width:200px; background:white; font-size: 30px; font-family: Arial; margin:0 auto; padding: 10px; border-bottom: 6px solid #ec8c2d;">';
      $messageVerify .= $passcode;
      $messageVerify .='
                        </div><br>
                        <div style="background:#dcdcdc; text-align:center; width:100%; margin: 0; padding-top: 40px; padding-bottom: 50px; color:#f5f5f5; font-size:12px;">
                        <a href="https://www.snowsoftware.com/int/contact" style="background-color:#ec8c2d; color:white; padding: 15px 20px; text-decoration:none; font-size:16px;">CONTACT SNOW</a>
                        </div>
                        <br>
                        <div style="background:#47c3dc; width:100%; margin: 0; padding-top: 10px; padding-bottom: 12px; color:#f5f5f5; font-size:12px;">';
      $messageVerify .= 'All rights reserved &copy;';
      $messageVerify .= date('Y');
      $messageVerify .='. Snow ROI Calculator.
                        </div>
                        </div>
                        </div>
                        </div>
                        </body>
                      </html>
                      ';
      $headersVerify  ="From: Snow ROI Calculator <roiexpel@gmail.com>";
      $headersVerify .= "MIME-Version: 1.0"."\r\n";
      $headersVerify .= "Content-type:text/html;charset=iso-8859-1"."\r\n";

      mail($toVerify,$subjectVerify,$messageVerify,$headersVerify);

?>
