<?php 
    //start a session in case one hasn't been started already
    session_start(); 
    
    //destroy the session straight away resetting all variables
    session_destroy(); 

    //redirect to the home page
    header("Location: index.php"); 

?>
