<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>login page</title>
</head>
<body>
  
<?php
@include "../connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['full_name'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $sql = "INSERT INTO users (name,dob,email,mobile) VALUES ('$name','$dob','$email','$mobile')";
  if ($conn->query($sql) === TRUE) {
    header("location: ../index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}


?>


<body data-new-gr-c-s-check-loaded="14.1026.0" data-gr-ext-installed="">

  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="./admin_login.php" method="post">
        <h1>Hello Admin </h1>
        <!-- <input type="text" name="a_name" placeholder="Name" /> -->
        <input type="email" name="email2" placeholder="Email" />
        <input type="password" name="password2" placeholder="Password" />
        <button>Login In</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="index.php" method="post">
        <h1>Apply For Member</h1>
        <input type="text" placeholder="Full Name" name="full_name"  required/>
        <input type="date" name="dob" id="dob" required>
        <input type="email" name="email" placeholder="Email" required/>
        <input type="text" name="mobile" placeholder="Mobile Number" required />
        <button>Submit</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button class="ghost" id="signIn">Apply for member</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Admin Only</button>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p>
      Created with <i class="fa fa-heart"></i> by
      <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
      - Read how I created this and how you can join the challenge
      <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
    </p>
  </footer>


  <!-- js -->
  <script>

    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
      container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove("right-panel-active");
    });
  </script>
</body>

</html>