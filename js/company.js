function nopdf() {
  alert("We are working on this feature.");
  }

  function lblindstry(val){
  if (val==1){
    document.getElementById('dl-industry').innerHTML = 'Engineering';
    $('#customerstory').attr("href","https://openit.com/customer-stories/chiyoda-philippines-corporation/");
  }
  else if (val==2){
    document.getElementById('dl-industry').innerHTML = 'Automotive';
    $('#customerstory').attr("href","https://openit.com/customer-stories/nissan-motor-corp-ltd/");
  }
  else if (val==3){
    document.getElementById('dl-industry').innerHTML = 'O & G';
    $('#customerstory').attr("href","https://openit.com/customer-stories/maersk-oil/");
  }
  else if (val==4){
    document.getElementById('dl-industry').innerHTML = 'M & P';
    $('#customerstory').attr("href","https://openit.com/resources/customer-stories");
  }
  else if (val==5){
    document.getElementById('dl-industry').innerHTML = 'Government';
    $('#customerstory').attr("href","https://openit.com/resources/customer-stories");
  }
  else{
    document.getElementById('dl-industry').innerHTML = 'Others';
    $('#customerstory').attr("href","https://openit.com/customer-stories/avio-aerospace/");
  }
}

var validemail = document.getElementById("validemail");

validemail.addEventListener("input", function (event) {
  if (validemail.validity.typeMismatch) {
    validemail.setCustomValidity("Please enter a valid email.");
  }
  else {
    validemail.setCustomValidity("");
  }
});
