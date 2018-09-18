function nopdf() {
  alert("We are working on this feature.");
  }

  function lblindstry(val){
  if (val==1){
    document.getElementById('dl-industry').innerHTML = 'Engineering';
  }
  else if (val==2){
    document.getElementById('dl-industry').innerHTML = 'Automotive';
  }
  else if (val==3){
    document.getElementById('dl-industry').innerHTML = 'O & G';
  }
  else if (val==4){
    document.getElementById('dl-industry').innerHTML = 'M & P';
  }
  else if (val==5){
    document.getElementById('dl-industry').innerHTML = 'Government';
  }
  else{
    document.getElementById('dl-industry').innerHTML = 'Others';
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
