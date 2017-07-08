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
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

   </head>
    <style>
        html{
    position: relative;
    min-height: 100%;
}

body{
     background: url("img/1.jpg") no-repeat center center ;
     background-attachment: fixed;
     background-size:cover;
    }
    
        .container-fluid{
            margin-top: 60px;
            
        }
       
        #button1{
            border-radius: 10px;
            margin-top: 7%;
            margin-left: 35%;
             opacity: 0.96;
            height: 50px;
            width: 130px;
            font-size: 23px;
            padding-bottom: 3%;
        }
         #button2{
            border-radius: 10px;
            margin-top: 7%;
            margin-left: 5%;
            opacity: 0.96;
            height: 50px;
            padding-bottom: 3%;
            font-size: 23px;
            width: 130px;
        }
       .content {
           
             font-family:'Oswald',sans-serif;
            font-size: 5em;
            color: white;
           margin-top: -80px;
            text-align: center;
            padding: 50px;
           
        }
       hr.style15 {
	border-top: 4px double #F8F8FF;
	text-align: center;
}
hr.style15:after {
	content: '\002665';
	display: inline-block;
	position: relative;
	top: -15px;
	padding: 0 10px;
	background: #f0f0f0;
	color: red;
	font-size: 20px;
}
       
       
       
/*        background: rgba(206, 206, 214 , 0.4);*/
</style>
  <body>
<div class="container" >
    <div class="content">
      
        <p><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
        <p ><u>WELCOME!&nbsp;&nbsp; FEELING HUNGRY ?</u></p></div>
<!--        <center><img id="img1" src="img/2.png" alt="chef" width="100px" height="100px"></center>-->
    <form>
  <input id="button1" type="button" class="btn btn-lg btn-default" value="Register">
  <input id="button2" type="button" class="btn btn-lg btn-default" value="Log in">
    </form>
    <br />
    <br />
    <br />
    <br />
    <br />
    
<hr class="style15">

</div>

    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
$(function(){
    $("#button1").click(function(){
        window.location="signupform.php";
    })
    $("#button2").click(function(){
    window.location="loginform.php";
    })
})      
      
</script>
</body>
</html>