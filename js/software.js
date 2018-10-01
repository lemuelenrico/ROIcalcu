
document.getElementById('softwares').addEventListener('submit', function(verification){

if(document.getElementById('server').checked == false &&
    document.getElementById('desktop').checked == false &&
    document.getElementById('cloud').checked == false){
    verification.preventDefault();
    alert("Please choose atleast one Install Location.");
    return false;
  }

else if(document.getElementById('finalsubmit').checked == false){
    verification.preventDefault();
    alert("Please agree to our terms and conditions to proceed.");
    return false;
    }
  });

  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
  });
