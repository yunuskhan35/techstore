<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_POST['submit']))
{
  $user_name = $_POST['user_name'];
  $mobile_number = $_POST['mobile'];
  $email_id = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO allusers(user_name,mobile_number , email_id, password) VALUES('$user_name', '$mobile_number', '$email_id', '$password')";
   $result = mysqli_query($conn, $query);




}

if ($result == true) {
  # code...

  echo "successfull";
}



?>










<html>
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style type="text/css" media="screen">
  

.container{
    

    margin-top: 5%;
   border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
    width: 40%;
    overflow: hidden;
    background-image: url('login-background.jfif');
}

    .login_image{
      margin-top: 20px;
      height: 50%;
      border-radius: 50%;
      display: block;
  margin-left: auto;
  margin-right: auto;
  width: 180px;
  

  
      
    }

    label{
      font-size: 18px;
      color: white;
    }

#emailHelp{
  color: white;
}

.register:hover{

  color: white;
  font-size: 20px;
}

.register{

  color: blue;
}
.logo{

  height: 30px;
}

.form_login{


}

</style>

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.html"><img src="logo.jpeg" alt="" style="height: 30px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accessories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="laptop.html">Laptops</a>
          <a class="dropdown-item" href="desktops.html">Desktops</a>
          
          <a class="dropdown-item" href="mobile.html">Mobile Phones</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.html">Contact</a>
      </li>
    </ul>
    <div class="navbar-nav">
         <li> <a class="nav-item nav-link mx-3" href="register.html">Register</a></li>
        <li> <a class="nav-item nav-link mx-3" href="login.html">Login</a></li>
        </div>
  </div>
</nav>


<div class="container ">
  <div class="login_image">
    <img class="login_image" src="https://www.w3schools.com/howto/img_avatar.png" alt="">
  </div> 

  <form class="form_login" action="register.php" method="POST" accept-charset="utf-8" style="margin-top:-130px;">
    
    <div class="row">
      <div class="col-md-12">
        <label for="exampleInputEmail1">Name</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="user_name">
      </div>
    </div>

     <div class="row">
      <div class="col-md-12">
        <label for="exampleInputEmail1">Mobile Number</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile Number" name="mobile">
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  
      </div>
    
    </div>

    <div class="row">

        <div class="form-group col-md-12">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
      
    </div>

    

   <!--  <div class="row">
      <div class="col-md-4">
        <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
      </div>
      
    </div> -->




<div class="row">
  <div class="col-md-4">
      <button type="submit" class="btn btn-success " name="submit">Register</button>
    </div>

    <div class="col-md-8">
      <h6 style="color: white;">Existing User?</h6>
     
      <a class="register" href="login.html">Login</a>
    </div>
</div>

    


  </form>
    
</div>



  










<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>




</html>