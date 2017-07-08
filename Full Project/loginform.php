<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
      <title>RestaurantFinder-LoginPage</title>

    <!-- Bootstrap -->
     <link rel="icon" href="img/icon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

   </head>
    
    <style>
        h1{
            color: cadetblue;
            font-family: cursive;
        }
         .contactForm{
      border:1px solid #CECED6;
      margin-top: 50px;
      border-radius: 15px;
     margin-bottom: 5%;
            
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
    <div class="col-sm-offset-2 col-sm-8 contactForm">
        <center><h1><b>WELCOME </b></h1></center>
  
              
        
       <?php
        //<!--Start session-->
        session_start();
        if($_POST["submit"]){
        // connect database
        include('connection.php');
         //define errors
        $missingEmail = '<p><strong>Please enter your email address!</strong></p>';
       $invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';
        $missingPassword = '<p><strong>Please enter a Password!</strong></p>';
       $invalidPassword = '<p><strong>Your password should be at least 6 characters long and inlcude one capital letter and one number!</strong></p>';

         if(empty($_POST["email"])){
             $errors .= $missingEmail; 
         }   
         else{
             $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
             if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
               $errors .= $invalidEmail;   
            }
         }
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
            
         if($errors){
              $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
              echo $resultMessage;
             exit;
         }  
         //no errors   
        //Prepare variables for the queries 
         $email = mysqli_real_escape_string($link, $email);
         $password = mysqli_real_escape_string($link, $password);
         //$password = md5($password);
         $password = hash('sha256', $password);   
          
         //query
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($link,$sql);
        if(!$result){
          echo '<div class="alert alert-danger">Error running the query!</div>'; exit;
              }
        $result = mysqli_num_rows($result);
        if($result){
           header("Location: home.php");
        }
        else{
         echo '<div class="alert alert-danger"><p><strong>YOU ARE NOT REGISTERED! PLEASE REGISTER YOURSELF FIRST.</strong></p></div>';exit;
        }
        }
        ?>
        
   
 <form  method="post" id="loginform" >
 
   <div class="form-group">
   <label for="email" class="sr-only">Email:</label>
   <input class="form-control" type="email" name="email" id="email" class="form-control" placeholder="Email Address" maxlength="50">
   </div>
                  
   <div class="form-group">
   <label for="password" class="sr-only">Choose a password:</label>
   <input class="form-control" type="password" name="password" class="form-control" id="password" placeholder="Choose a password" maxlength="64">
   </div>
       
   <div>
       <input id="b1" class="btn btn-success" name="submit" type="submit" value="Login">
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
<?php ob_flush(); ?>   

    