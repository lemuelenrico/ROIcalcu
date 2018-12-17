
document.getElementById('softwares').addEventListener('submit', function(verification){

if(document.getElementById('server').checked == false &&
    document.getElementById('desktop').checked == false &&
    document.getElementById('cloud').checked == false){
    verification.preventDefault();
    //alert("Please choose atleast one Install Location.");
    document.getElementById('modal-wrapper').style.display='block';
    return false;
  }

/*else if(document.getElementById('server2').checked == false &&
    document.getElementById('desktop2').checked == false &&
    document.getElementById('cloud2').checked == false){
    verification.preventDefault();
    //alert("Please choose atleast one Install Location.");
    document.getElementById('modal-wrapper').style.display='block';
    return false;
  }

else if(document.getElementById('server3').checked == false &&
    document.getElementById('desktop3').checked == false &&
    document.getElementById('cloud3').checked == false){
    verification.preventDefault();
    //alert("Please choose atleast one Install Location.");
    document.getElementById('modal-wrapper').style.display='block';
    return false;
  }*/

else if(document.getElementById('finalsubmit').checked == false){
    verification.preventDefault();
    //alert("Please agree to our terms and conditions to proceed.");
    document.getElementById('modal-wrapper2').style.display='block';
    return false;
    }
  });
/*
  function valthisform() {
    if (document.getElementById("appName").value == '') {
              alert("do this");
              //document.getElementById('modal-wrapper3').style.display='block';
              return false;
  }*/
// the modal will close when clicked outside
    var modal = document.getElementById('modal-wrapper');
    var modal2 = document.getElementById('modal-wrapper2');
    var modal3 = document.getElementById('modal-wrapper3');
    var modal4 = document.getElementById('modal-wrapper4');
    var modal5 = document.getElementById('modal-wrapper5');


    window.onclick = function(event) {
        if (event.target == modal ||
            event.target == modal2 ||
            event.target == modal3 ||
            event.target == modal4 ||
            event.target == modal5)
              {
                modal.style.display = "none";
                modal2.style.display = "none";
                modal3.style.display = "none";
                modal4.style.display = "none";
                modal5.style.display = "none";
              }
    }

    //tooltips for install location
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
       modal.style.display  = "none";
       modal2.style.display = "none";
       modal3.style.display = "none";
       modal4.style.display = "none";
       modal5.style.display = "none";
  }
  });

  function valthisform(){
    if (document.getElementById("appName").value == '' ||
        document.getElementById("numLicenses").value == '' ||
        document.getElementById("costLicense").value == '') {
                document.getElementById('modal-wrapper3').style.display='block';
                return false;
              }
  /*  else if (document.getElementById("appName2").value == '' ||
        document.getElementById("numLicenses2").value == '' ||
        document.getElementById("costLicense2").value == '') {
                document.getElementById('modal-wrapper4').style.display='block';
                return false;
              }
    else if (document.getElementById("appName3").value == '' ||
        document.getElementById("numLicenses3").value == '' ||
        document.getElementById("costLicense3").value == '') {
                document.getElementById('modal-wrapper5').style.display='block';
                return false;
              } */
      if (document.getElementById("appName2").value != '') {
        if (document.getElementById("numLicenses2").value == '' ||
              document.getElementById("costLicense2").value == '' ||
              (document.getElementById('server2').checked == false &&
                  document.getElementById('desktop2').checked == false &&
                  document.getElementById('cloud2').checked == false)) {
                      document.getElementById('modal-wrapper4').style.display='block';
                      return false;
                    }
                  }
      if (document.getElementById("appName2").value != '') {
        if (document.getElementById("numLicenses2").value == '' ||
              document.getElementById("costLicense2").value == '' ||
              (document.getElementById('server2').checked == false &&
                  document.getElementById('desktop2').checked == false &&
                  document.getElementById('cloud2').checked == false)) {
                      document.getElementById('modal-wrapper4').style.display='block';
                      return false;
                    }
                  }
  }

  function closemodals(){
    modal.style.display  = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";
    modal5.style.display = "none";
  }
