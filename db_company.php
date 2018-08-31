<?php
$comName    = $_POST ['comname'];
$comWebsite = $_POST ['website'];
$comEmail   = $_POST ['comemail'];
$noOfUsers  = $_POST ['numusers'];

if (!$_POST['submit']){
    echo "All fields are needed to be filled out";
}
else  {
    $sql = "INSERT into company ( Timestamp, CompanyName, Website, ContactEmail, NoOfUsers)
            values              (NOW(), '$comName', '$comWebsite', '$comEmail','$noOfUsers' )";
}

      if (mysqli_query($conn, $sql)) {
  /*        echo "Data creation successful";*/
      }
    //the code below can be removed
    /*  else {
          echo "Data creation not sucessful";
      }*/
?>
