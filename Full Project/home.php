<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
      <title>Home | RestaurantFinder</title>

    <!-- Bootstrap -->
    <link rel="icon" href="img/icon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
   </head>
   <style>
      
       .header1{
           background-image: url(img/header.jpg);
           padding-top:27%;
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
           margin-top: -25%;
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
      
       .footer{
    height: 80px;
    background-color: #282c35;
    
    padding: 10px 30px;
    margin-top: -0.05%;
}
    
        
       .form-control{
           width:400px;
           margin-top: 50px;
           height:40px;
           margin-left: 400px;
       }
      
       
       .search { position: relative; }
.search input { text-indent: 30px;}
.search .fa-search { 
  position: absolute;
  top: 13px;
  left: 410px;
  font-size: 15px;
}
       .btn {
           font-size: 1em;
           background-color: #A71823;
           color: white;
           border-radius: 7px;
       }
       
    </style>
    
   
    
  <body>
    <div class="header1">
     <div class="container-fluid">
   
         
   <div id="menu">
    <ul>
        <li><a href="home.php"><b>HOME</b></a></li>
        <li><a href="about.php"><b>ABOUT</b></a></li>
        <li><a href="contactus.php"><b>CONTACT US</b></a></li>
    </ul>
         </div>
     <p id="p1">Find the best restaurants in India </p>
         <form method="post">
        <div class="search">
            <span class="fa fa-search"></span>
             <input class="form-control" list="city"  type="text" name="city" placeholder="Enter your city*" required>
            <datalist id="city">
  <option value="New Delhi">
  <option value="Ghaziabad">
  <option value="Gurugram">
  <option value="Jalandhar">
  <option value="Ludhiana">
  <option value="Meerut">
  <option value="Noida">
  <option value="Chandigarh">
 
</datalist>
          <input type="submit" name="submit"  style="margin-left:812px;padding-right:50px; margin-top:-65px; width:9%; height:12%;text-align:center;"  class="btn" value="Search" >
             </div>
         

         </form>
         
    </div> 
      </div>
     
      <?php
     if(isset($_POST['submit'])){
    $check = array('New Delhi','Ghaziabad','Noida','Meerut','Jalandhar','Ludhiana','Chandigarh','Gurugram');
         
      if(in_array($_POST["city"],$check)){
          if($_POST["city"] == 'New Delhi'){
          echo '<script>window.location="newdelhi.php";</script>';end();}
          
           if($_POST["city"] == 'Noida'){
          echo '<script>window.location="noida.php";</script>';end();}
          
           if($_POST["city"] == 'Meerut'){
          echo '<script>window.location="meerut.php";</script>';end();}
          
           if($_POST["city"] == 'Jalandhar'){
          echo '<script>window.location="jalandhar.php";</script>';end();}
          
           if($_POST["city"] == 'Ludhiana'){
          echo '<script>window.location="ludhiana.php";</script>';end();}
          
           if($_POST["city"] == 'Chandigarh'){
          echo '<script>window.location="chandigarh.php";</script>';end();}
          
           if($_POST["city"] == 'Gurugram'){
          echo '<script>window.location="gurugram.php";</script>';end();}
          
           if($_POST["city"] == 'Ghaziabad'){
          echo '<script>window.location="ghaziabad.php";</script>';end();}
      }
         else{
             echo '<script>';
             echo 'window.alert("Please enter correct city name!")';
             echo '</script>';
         }
     }
    ?>
     
      
            <footer class="footer">
                <div>
                   <center> <p style="color: white;">RESTAURANT FINDER | Copyright &copy; 2017-2018 | All Right Reserved</p></center>
                </div>
                
            </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>