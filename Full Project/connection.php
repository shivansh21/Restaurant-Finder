<?php
$link = mysqli_connect("localhost", "ishuthec_newsite", "yl5ulrUH0H3]", "ishuthec_mysite");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>"; 
}
    ?>