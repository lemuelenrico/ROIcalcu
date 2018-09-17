document.getElementById('softwares').addEventListener('submit', function(verification){
if(document.getElementById('finalsubmit').checked == false){
    verification.preventDefault();
    alert("By clicking Show ROI Calculation, you must accept our terms and conditions!");
    return false;
  }
  });
