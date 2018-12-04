<?php
  $toServ       ='roiexpel@gmail.com'; //you can add multiple emails, just separate them with comma
  $subjectServ  ='ROI Calculator Entry';
  /*$messageServ  ="Company Name: ".$companyName."\n"."Industry: ".$industry."\n"."Company Website: ".
                  "www.website.com"."\n"."Company Email: "."example@mail.com"."\n"."Number of Users: ".$noOfUsersTr.
                  "\n"."Application Name: ".$applicationName.", Vendor Name: "."Vendor 1".
                  "\n"."Agreement Type: ".$agreementType.", License Type: ".$licenseType.
                  "\n"."Install Location: ".$imloc.
                  "\n"."Renewal Date: "."date".
                  "\n"."Number of Licenses: ".$noOfLicenses.",    Cost per License: ".$costPerLicense.
                  "\n".
                  "\n"."Application Name: ".$applicationName_2.", Vendor Name: "."Vendor 2".
                  "\n"."Agreement Type: ".$agreementType_2.", License Type: ".$licenseType_2.
                  "\n"."Install Location: ".$imloc_2.
                  "\n"."Renewal Date: "."date".
                  "\n"."Number of Licenses: ".$noOfLicenses_2.",    Cost per License: ".$costPerLicense_2.
                  "\n".
                  "\n"."Application Name: ".$applicationName_3.", Vendor Name: "."Vendor 3".
                  "\n"."Agreement Type: ".$agreementType_3.", License Type: ".$licenseType_3.
                  "\n"."Install Location: ".$imloc_3.
                  "\n"."Renewal Date: "."date".
                  "\n"."Number of Licenses: ".$noOfLicenses_3.",    Cost per License: ".$costPerLicense_3.
                  "\n".
                  "\n"."-------------------Level 1-------------------".
                  "\n"."Year 1 ROI: ".$truValROI1."%  |  $".$truValSavings1.
                  "\n"."Year 2 ROI: ".$truValROI2."%  |  $".$truValSavings2.
                  "\n"."Year 3 ROI: ".$truValROI3."%  |  $".$truValSavings3.
                  "\n"."-------------------Level 2-------------------".
                  "\n"."Year 1 ROI: ".$truVal_2_ROI1."%  |  $".$truVal_2_Savings1.
                  "\n"."Year 2 ROI: ".$truVal_2_ROI2."%  |  $".$truVal_2_Savings2.
                  "\n"."Year 3 ROI: ".$truVal_2_ROI3."%  |  $".$truVal_2_Savings3.
                  "\n"."-------------------Level 3-------------------".
                  "\n"."Year 1 ROI: ".$truVal_3_ROI1."%  |  $".$truVal_3_Savings1.
                  "\n"."Year 2 ROI: ".$truVal_3_ROI2."%  |  $".$truVal_3_Savings2.
                  "\n"."Year 3 ROI: ".$truVal_3_ROI3."%  |  $".$truVal_3_Savings3; */

    $messageServ  ="Company Name: ".$companyName."\n"."Industry: ".$industryTr."\n"."Company Website: ".
                    $comWebsiteTr."\n"."Company Email: ".$comEmailTr."\n"."Number of Users: ".$noOfUsersTr.
                    "\n"."Application Name: ".$applicationName.", Vendor Name: ".$vendorName.
                    "\n"."Agreement Type: ".$agreementType.", License Type: ".$licenseType.
                    "\n"."Install Location: ".$imloc.
                    "\n"."Renewal Date: ".$renewalDate.
                    "\n"."Number of Licenses: ".$noOfLicenses.",    Cost per License: ".$costPerLicense.
                    "\n".
                    "\n"."Application Name: ".$applicationName_2.", Vendor Name: ".$vendorName_2.
                    "\n"."Agreement Type: ".$agreementType_2.", License Type: ".$licenseType_2.
                    "\n"."Install Location: ".$imloc_2.
                    "\n"."Renewal Date: ".$renewalDate_2.
                    "\n"."Number of Licenses: ".$noOfLicenses_2.",    Cost per License: ".$costPerLicense_2.
                    "\n".
                    "\n"."Application Name: ".$applicationName_3.", Vendor Name: ".$vendorName_3.
                    "\n"."Agreement Type: ".$agreementType_3.", License Type: ".$licenseType_3.
                    "\n"."Install Location: ".$imloc_3.
                    "\n"."Renewal Date: ".$renewalDate_2.
                    "\n"."Number of Licenses: ".$noOfLicenses_3.",    Cost per License: ".$costPerLicense_3.
                    "\n".
                    "\n"."-------------------Level 1-------------------".
                    "\n"."Year 1 ROI: ".$ROI_1_1."%  |  $".$savings_1_1.
                    "\n"."Year 2 ROI: ".$ROI_1_2."%  |  $".$savings_1_2.
                    "\n"."Year 3 ROI: ".$ROI_1_3."%  |  $".$savings_1_3.
                    "\n"."-------------------Level 2-------------------".
                    "\n"."Year 1 ROI: ".$ROI_2_1."%  |  $".$savings_2_1.
                    "\n"."Year 2 ROI: ".$ROI_2_2."%  |  $".$savings_2_2.
                    "\n"."Year 3 ROI: ".$ROI_2_3."%  |  $".$savings_2_3.
                    "\n"."-------------------Level 3-------------------".
                    "\n"."Year 1 ROI: ".$ROI_3_1."%  |  $".$savings_3_1.
                    "\n"."Year 2 ROI: ".$ROI_3_2."%  |  $".$savings_3_2.
                    "\n"."Year 3 ROI: ".$ROI_3_3."%  |  $".$savings_3_3;

  $headersServ  ="From: lem@lem.com";

  mail($toServ,$subjectServ,$messageServ,$headersServ);
?>
