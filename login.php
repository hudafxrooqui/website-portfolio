<?php
    // starts session for the home page
    session_start();
    if( isset( $_SESSION["loggedin"] ) == true )
    {
        //goes to add entry once logged in
        header( "location: add-entry.php" );
    } 
    else {
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/reset.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <title>Login Page</title>
</head>
<body>
    <header>
         <!--nav bar-->
        <nav class="horizontal">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about-me.php">About Me</a></li>
                <li><a href="view-blog.php">Blog</a></li>
                <li><a href="portfolio.php">My Projects</a></li>
                <li><a href="education.php">Education</a></li>  
                <li style="float:right"><a class="active"<a href="login.php">Login</a></li>
            </ul>
        </nav>
    
    </header>
    <br>
    
    <form action="php/action-login.php" method="POST">
        
    <fieldset>
        <legend>LOG IN</legend>
        <fieldset class="box">
             <p>
                  <label>Email Address:</label><br>
                  <input type="email" name="email" required/>
                </p>
            </fieldset>
            <br>
            
            <fieldset class="box">
                <p> 
                    <label>Password</label><br>
                    <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> <br>
                </p>
            </fieldset>
            
            <?php
            
            //echo error code 1 if there is one
            if( isset( $_GET[ "error" ]) == 1 )
            {
                 // prints invalid 
                 echo "<br/><p>Invalid email or password. Please try again.</p>";
                }
                ?>
                
                <button type="submit" id="button">LOGIN</button>
            </fieldset>
        
        </form>
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Contact Me</h4>
  	 			<ul>
  	 				<li>Phone - 07400 473254</li>
  	 				<li>Business Email huda.fxrooqui@gmail.com</li>
  	 				<li>University Email ec21694@qmul.ac.uk</li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Find Me Online</h4>
  	 			<div class="social-links">
                   <a href="https://github.com/hudafxrooqui"><img src="images/github.png" width="40" height="40"></a>
                   <a href="https://www.instagram.com/huda_fxrooqui/?hl=en"><img src="images/instagram.png" width="40" height="40"></a>
                   <a href="https://www.linkedin.com/in/huda-farooqui-4a099b228/"><img src="images/linkedin.png" width="40" height="40"></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>      
        </div>
                </footer>
        

    </body>
    </html>
