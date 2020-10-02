<div id="contactmodal" class="contactmodal">
  <div class="modal-content animate">
      <span onclick="closemodals();" class="close" title="Close PopUp">&times;</span>
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <img src="images/contactus.jpg" width="100%" class="contactimg">
        </div>
        <div class="col-md-6 col-sm-6">
      <p class="leftalgn">Contact Page</p>
      <form class="navpad" onsubmit="return chk()">

        <div class="form-group">
          <input type="text" class="form-control midtxtbx" placeholder="Name"
                  id="comp_contname" autocomplete="off" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control midtxtbx" placeholder="Company"
                  id="comp_contcompany" autocomplete="off" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control midtxtbx" placeholder="Email"
                  id="comp_validcontactemail" autocomplete="off" required>
        </div>

        <div class="form-group">
          <textarea class="form-control midtxtbx" placeholder="Message" rows="4"
                  id="comp_contmessage"></textarea>
        </div>
        <div class="leftalgn">
        <input type="submit" value="submit" class="btn contactusbutdes">

        </div>

      </form>
    </div>
      </div>
      <p class="center" id="sent_success">website and sales email</p>
      <div = class="row">
        <div class="col-md-3 col-sm-3">
        </div>
        <div class="col-md-3 col-sm-3">
        </div>
        <div class="col-md-3 col-sm-3">
        </div>
        <div class="col-md-3 col-sm-3">
        </div>
      </div>

  </div>
</div>
<script>
var formcomp_validcontactemail = document.getElementById("comp_validcontactemail");
formcomp_validcontactemail.addEventListener("input", function (event) {
  if (formcomp_validcontactemail.validity.typeMismatch) {
    formcomp_validcontactemail.setCustomValidity("Please enter a valid email.");
  }
  else {
    formcomp_validcontactemail.setCustomValidity("");
  }
});

function chk () {
  var comp_contname=document.getElementById('comp_contname').value;
  var comp_contcompany=document.getElementById('comp_contcompany').value;
  var comp_validcontactemail=document.getElementById('comp_validcontactemail').value;
  var comp_contmessage=document.getElementById('comp_contmessage').value;

  var dataString='comp_contname=' + comp_contname + '&comp_contcompany=' + comp_contcompany + '&comp_validcontactemail=' + comp_validcontactemail + '&comp_contmessage=' + comp_contmessage;
  document.getElementById('sent_success').innerHTML = 'Please Wait...';

  $.ajax({
    type:"post",
    url:"contactsubmit.php",
    data:dataString,
    cache:false,
    success: function(html){
      $('#sent_success').html(html);
    }
  });
return false;
}

 </script>
