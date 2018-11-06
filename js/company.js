function nopdf() {
  alert("We are working on this feature.");
  }

  function lblindstry(val){
  if (val==1){
    document.getElementById('dl-industry').innerHTML = 'Engineering';
    $('#customerstory').attr("href","https://openit.com/customer-stories/chiyoda-philippines-corporation/");
    $("body").css('backgroundImage', "url('images/bg/Eng_bg.jpg')");
  }
  else if (val==2){
    document.getElementById('dl-industry').innerHTML = 'Automotive';
    $('#customerstory').attr("href","https://openit.com/customer-stories/nissan-motor-corp-ltd/");
    $("body").css('backgroundImage', "url('images/bg/Automotive_bg.jpg')");
  }
  else if (val==3){
    document.getElementById('dl-industry').innerHTML = 'O & G';
    $('#customerstory').attr("href","https://openit.com/customer-stories/maersk-oil/");
    $("body").css('backgroundImage', "url('images/bg/OG_bg.jpg')");
  }
  else if (val==4){
    document.getElementById('dl-industry').innerHTML = 'M & P';
    $('#customerstory').attr("href","https://openit.com/resources/customer-stories");
    $("body").css('backgroundImage', "url('images/bg/Precision_bg.jpg')");
  }
  else if (val==5){
    document.getElementById('dl-industry').innerHTML = 'Government';
    $('#customerstory').attr("href","https://openit.com/resources/customer-stories");
    $("body").css('backgroundImage', "url('images/bg/Gov_bg.jpg')");
  }
  else{
    document.getElementById('dl-industry').innerHTML = 'Others';
    $('#customerstory').attr("href","https://openit.com/customer-stories/avio-aerospace/");
    $("body").css('backgroundImage', "url('images/bg/Other_bg.jpg')");
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
