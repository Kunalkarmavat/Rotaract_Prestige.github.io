<?php
// admin section 


    $email2 = $_POST['email2'];
    $password2 = $_POST['password2'];
  
    if ($email2 == 'kunalkarmavat@gmail.com' && $password2 == 'admin@123') {
      header('location: ../display/index.php');
    }

    else{
      header('location: ./index.php');
    }

?>