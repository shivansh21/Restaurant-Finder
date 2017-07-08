<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
      <title>Contact | RestaurantFinder</title>

    <!-- Bootstrap -->
    <link rel="icon" href="img/icon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

   </head>
   <style>
          
       .header1{
        background-image: url(img/header.jpg);
           padding-top:23%;
           opacity: 0.9;
            box-shadow: 6px 6px 5px #888888;
           
         
       }
       #p1{
         text-align: center;
         color: white;
         font-family : 'Oswald', sans-serif;
         font-size: 3.5em;
         margin-top: 6%;
          
       }
       
      
       
       .container{
        margin-top: 0.2%;
         margin-left: -1.01%;
         margin-right: 2%;
       }
       #menu{
           margin-top: -20%;
          margin-left: 400px;
          
       }
       ul{
         list-style: none;   
         }
       #menu ul li{
           
          float: left;
          height: 30px;
           padding: 0 30px;
       }
       
       #menu ul li a{
           text-decoration: none;
           text-transform: uppercase;
           font-size: 17px;
           color: white;
           line-height: 30px;
           -webkit-transition: font-size 0.3s ease;
           -moz-transition: font-size 0.3s ease;
           -o-transition: font-size 0.3s ease;
           -ms-transition: font-size 0.3s ease;
            transition: font-size 0.3s ease;
       }
       .logo{
           margin-top: -23%;
       }
       .footer{
    height: 80px;
    background-color: #282c35;
    padding: 10px 30px;
    margin-top: -1%;
}
    
        
      
        .container1{
         
            background-color: #F3F3F3;
            width: 100%;
            height: 100%;
            padding-top: 2%;
            padding-bottom: 10%;
            
        }
        .container2{
            background-color: #FFFFFF;
            margin:30px 100px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
             padding-bottom: 40px;
           padding-top: 30px;
        }
          .container2  .img-circle {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
       
    }
        
        #p3{
            font-size: 1.3em;
            font-family: cursive;
            margin-left: 90px;
            margin-right: 90px;
        }
         .container3{
            background-color: #FFFFFF;
            margin:7px 100px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        
        .fa{
            padding: 5px;
        }
        #content1{
            margin-top: 15px;
            height: 16px;
        }
         .contactForm{
    
      margin: 50px;
      border-radius: 15px;
                 }
      
      
     
    </style>
  <body>
    <div class="header1">
     <div class="container-fluid">
   
         
   <div id="menu">
    <ul>
        <li><a href="home.php"><b>HOME</b></a></li>
        <li><a href="about.php"><b>ABOUT</b></a></li>
        <li><a href="contactus.php"><b><u>CONTACT US</u></b></a></li>
    </ul>
         </div>
     <p id="p1">Find the best restaurants in India </p>
 
         
    </div> 
      </div>
      
      <div class="container1">
         <div class="container2">
           <div class="contactForm">
              <form>
               
                                
 <div class="form-group">
 
   <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Name*" class="form-control" required>
   </div>
                   

   <div class="form-group">
  
   <input class="form-control" type="email" name="email" id="email" class="form-control" placeholder="Email Address*" required>
   </div>
                  
    <div class="form-group">
   
   <input class="form-control" type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number (optional)" required>
   </div>
                  
   <div class="form-group">
   
    <textarea class="form-control" id="textarea" rows="5" placeholder="Message*" required></textarea>
   </div>
       
   <div>
       <center><input id="b1" style="margin-top: 20px;" class="btn btn-success btn-lg disabled" name="submit" type="submit" value="Send Message" ></center>
       
   </div>
   
</form>
                
               </div>       
             </div>
            </div>
            <footer class="footer">
                <div>
                   <center> <p style="color: white;">RESTAURANT FINDER | Copyright &copy; 2017-2018 | All Right Reserved</p></center>
                </div>
               
            </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>