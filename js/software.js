

document.getElementById('softwares').addEventListener('submit', function(verification){

if(document.getElementById('server').checked == false &&
    document.getElementById('desktop').checked == false &&
    document.getElementById('cloud').checked == false){
    verification.preventDefault();
    //alert("Please choose atleast one Install Location.");
    document.getElementById('modal-wrapper').style.display='block';
    return false;
  }

else if(document.getElementById('finalsubmit').checked == false){
    verification.preventDefault();
    //alert("Please agree to our terms and conditions to proceed.");
    document.getElementById('modal-wrapper2').style.display='block'
    return false;
    }
  });

    var modal2 = document.getElementById('modal-wrapper2');
    var modal = document.getElementById('modal-wrapper');

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
  });

  function selector(val){
    if (val==1){
      $("#AppSelector1").show();
      $("#AppSelector2").hide();
      $("#AppSelector3").hide();
    }
    else if (val==2){
      $("#AppSelector1").hide();
      $("#AppSelector2").show();
      $("#AppSelector3").hide();
    }
    else if (val==3){
      $("#AppSelector1").hide();
      $("#AppSelector2").hide();
      $("#AppSelector3").show();
    }
  }

  $(document).keydown(function(e) {
   if (e.key === "Escape") {
       modal.style.display = "none";
       modal2.style.display = "none";
  }
  });
