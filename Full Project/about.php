<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
      <title>About | RestaurantFinder</title>

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
           margin-top: -21%;
          margin-left: 400px;
          
       }
        
        
       .search { position: relative; }
.search input { text-indent: 30px;}
.search .fa-search { 
  position: absolute;
  top: 7px;
  left: 410px;
  font-size: 15px;
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
    
        
       #logo1{
           float: left;
           margin-top: -2.8%;
       }
        
        .container1{
         
            background-color: #F3F3F3;
            width: 100%;
            height: 100%;
            padding-top: 2%;
            padding-bottom: 2%
            
        }
        #container2{
            background-color: #FFFFFF;
            margin:30px 100px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
         
        
        #p3{
            font-size: 1.3em;
            font-family:sans-serif;
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
        
        .imgg{
            border-top-left-radius: 7px; 
            border-top-right-radius: 7px;
        }
        
        .form-control{
           width:400px;
           margin-top: 50px;
           height:40px;
           margin-left: 400px;
       }
        
        .btn {
           font-size: 1em;
           background-color: #A71823;
           color: white;
           border-radius: 7px;
       }
       
      
        
    </style>
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
          echo '<script>window.location="ghaziabad.php";</script>';end();}      }
         else{
             echo '<script>';
             echo 'window.alert("Please enter correct city name!")';
             echo '</script>';
         }
     }
    ?>
  <body>
    <div class="header1">
     <div class="container-fluid">
         
   <div id="menu">
    <ul>
        <li><a href="home.php"><b>HOME</b></a></li>
        <li><a href="about.php"><b><u>ABOUT</u></b></a></li>
        <li><a href="contactus.php"><b>CONTACT US</b></a></li>
    </ul>
         </div>
         <p id="p1"><b>Find the best restaurants in India </b></p>
          <form method="post">
        <div class="search">
            <span class="fa fa-search"></span>
             <input class="form-control" list="city" type="text" name="city" placeholder="Enter your city*" required >
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
          <input type="submit" name="submit" style="margin-left:812px;padding-right:50px; margin-top:-65px; width:9%; height:12%;text-align:center;" class="btn" value="Search">
             </div>
          

         </form>
         
    </div> 
      </div>
      <div class="container1">
      <div id="container2">
     <img class="imgg" src="img/small.jpg" alt="Image Loading.." width="1150px" height="400px">
          <br />
          <br />
         
     <center><h2><strong>We do this by</strong></h2></center>
     <center><h3><strong>Helping people discover great places around them.</strong></h3></center><br />
     <center><p id="p3">Our team gathers information from every restaurant on a regular basis to ensure our data is fresh. Our vast community of food lovers share their reviews and photos, so you have all that you need to make an informed choice.</p></center><br />
          
    <center><h3><strong>Building amazing experiences around dining.</strong></h3></center><br />
     <center><p id="p3">Starting with information for over 1 million restaurants (and counting) globally, we're making dining smoother and more enjoyable with services like online ordering and table reservations.</p></center><br />
          
    <center><h3><strong>Enabling restaurants to create amazing experiences.</strong></h3></center><br />
     <center><p id="p3">With dedicated engagement and management tools, we're enabling restaurants to spend more time focusing on food itself, which translates directly to better dining experiences.</p></center><br />
      </div>
     
      
      <div class="container3">
      <center><img class="img-circle" style="margin-top:10px;" src="img/shiv.jpg" alt="Image Loading.." width="200px" height="200px"></center>
          <center><p style="margin-top:7px;"><b><i>Shivansh Sharma, </i></b>CEO</p></center>
          <center><h4 style="margin-top:16px;margin-left:90px;margin-right:90px;">Shivansh Sharma, Founder and CEO of Restaurant Finder</h4></center>
          <br />
          <br />
          <center><a href="https://www.facebook.com/shivansh-sharma"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
              <a href="https://twitter.com/Hashtag_shiv"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
              <a href="https://www.linkedin.com/in/shivansh-sharma-4b84a5107/"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></center>
      </div>
       </div>
       <footer class="footer">
                <div id="content1">
                   <center> <p style="color: white;">RESTAURANT FINDER | Copyright &copy; 2017-2018 | All Right Reserved</p></center>
                </div>
               
            </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>