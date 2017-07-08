
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
      <title>RestaurantFinder</title>

    <!-- Bootstrap -->
     <link rel="icon" href="img/icon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

   </head>
    
    <style>
      h1{
        color:purple;   
         }
     .contactForm{
      border:1px solid #7c73f6;
      margin-top: 50px;
      border-radius: 15px;
                 }
   
    #b1{
       margin-left : 10%;
        margin-bottom: 10px;
        margin-top: 20px;
    }
    #b2{
        margin-left: 70%;
        margin-bottom: 10px;
         margin-top: 20px;
    }

    
    </style>
<body>
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-offset-1 col-sm-10 contactForm">
<h1>REGISTRATION: </h1> 

    
<?php
//<!--Start session-->
session_start();
if($_POST["submit"]){
include('connection.php'); 

//<!--Check user inputs-->
//    <!--Define error messages-->

$missingFirstname = '<p><strong>Please enter your First Name!</strong></p>';
$missingLastname = '<p><strong>Please enter your Last Name!</strong></p>';
 $missingEmail = '<p><strong>Please enter your email address!</strong></p>';
$invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';
$missingPassword = '<p><strong>Please enter a Password!</strong></p>';
$invalidPassword = '<p><strong>Your password should be at least 6 characters long and inlcude one capital letter and one number!</strong></p>';

//    <!--Get firstname, lastname, email, password-->
//Get firstname

    
if(empty($_POST["firstname"])){
    $errors .= $missingFirstname;
}else{
    $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);   
}
// Get lastname
if(empty($_POST["lastname"])){
    $errors .= $missingLastname;
}else{
    $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);   
}

//Get email
if(empty($_POST["email"])){
    $errors .= $missingEmail;   
}else{
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors .= $invalidEmail;   
      }
    }
//Get passwords
if(empty($_POST["password"])){
    $errors .= $missingPassword; 
}elseif(!(strlen($_POST["password"])>6
         and preg_match('/[A-Z]/',$_POST["password"])
         and preg_match('/[0-9]/',$_POST["password"])
        )
       ){
    $errors .= $invalidPassword; 
}else{
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING); 
    }
//If there are any errors print error
if($errors){
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;
    exit;
}

//no errors

//Prepare variables for the queries
$firstname = mysqli_real_escape_string($link, $firstname);
$lastname = mysqli_real_escape_string($link, $lastname);
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);
//$password = md5($password);
$password = hash('sha256', $password);
//128 bits -> 32 characters
//256 bits -> 64 characters

//If email exists in the users table print error
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>'; exit;
}
$results = mysqli_num_rows($result);
if($results){
    echo '<div class="alert alert-danger">That email is already registered. Please login with your correct details!</div>';  exit;
}

$sql = "INSERT INTO users (`firstname`,`lastname`, `email`, `password`) VALUES ('$firstname', '$lastname','$email', '$password')";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
    exit;
}

//Send the user an email with a link to activate.php with their email and activation code
$message = "Thanks for the Registration!\n\n";
$message .= "Shivansh\nCEO,RestaurantFinder\n\n";
$message .= "Click here to login:  http://ishu.thecompletewebhosting.com";

if(mail($email, 'Confirm Registration', $message, 'From:'.'restaurantfinder@gmail.com')){
       echo "<div class='alert alert-success'>Thanks for your Registration. A confirmation email has been sent to $email. Please go back and Log in with your correct details. </div>";
      
      // echo "<input  class="btn btn-success" name="submit" type="submit" value="Go to main page !">";
    
}
   
}

 ?>
                  
    
<form method="post" id="signupform" >
 <div class="form-group">
   <label for="firstname" class="sr-only">First Name:</label>
   <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name" class="form-control" maxlength="50">
   </div>
                   
   <div class="form-group">
   <label for="lastname" class="sr-only">Last Name:</label>
   <input class="form-control" type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" maxlength="50">
   </div>

   <div class="form-group">
   <label for="email" class="sr-only">Email:</label>
   <input class="form-control" type="email" name="email" id="email" class="form-control" placeholder="Email Address" maxlength="50">
   </div>
                  
   <div class="form-group">
   <label for="password" class="sr-only">Choose a password:</label>
   <input class="form-control" type="password" name="password" class="form-control" id="password" placeholder="Choose a password" maxlength="64">
   </div>
       
   <div>
       <input id="b1" class="btn btn-success" name="submit" type="submit" value="Register">
       <button id="b2" type="button" class="btn btn-success" >Cancel</button>
   </div>
    
</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
         
            
            