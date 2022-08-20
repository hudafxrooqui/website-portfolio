<?php
// starts session for the home page
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huda Farooqui</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/phase1.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
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
                
                <?php
                    /*If the logged in state is true, meaning that the user has not logged in,
                    the nav bar displays the Login section. If the logged in state is false, meaning that the user has logged in,
                    the nav bar displays the Add Entry and Logout section in the nav bar*/

                    if( isset( $_SESSION[ "loggedin" ] ) == false )
                    {
                ?>
                    <li style="float:right"><a class="active" href="login.php">Login</a></li>
                
                <?php

                    } else {

                ?>      
                <!-- the email is printed along with a Welcome messgae in the nav bar-->
                    <p style="float:right; margin-top:12px; margin-left:20px;color:#FFF;font-family: 'Inter';letter-spacing: 0.1pt;">Welcome! <?php echo $_SESSION[ "email" ]; ?></p>

                 <!-- see comments above for explanation-->
                    <li style="float:right"><a class="active" href="add-entry.php">Add Entry</a></li>
                    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>

                <?php

                    }

                ?>
                </ul>
            </nav>
            
            <hgroup>
                <h1>HUDA FAROOQUI</h1>
            </hgroup>
        
        </header>
        <!--div classes used for background circles on home page-->
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        <div class="circle4"></div>
        <div class="circle5"></div>
        <div class="circle6"></div>
        <div class="circle7"></div>
        
        <!-- used for fancy font on home page-->
        
        <div class="title">
            <img src="images/alex.font.png" width="150" height="40">
        </div>
        
        <!-- this div class gives introduction and links the about me page-->
        <div class="introduction">
            <p> I'm Huda, a Second Year Computer Science Student and Aspiring CyberSecurity Expert.</p> <br>
            <a href="about-me.php">Learn more about me!</a>
        </div> 
        
        <!--image on home page-->
        <figure id="image">
            <img src="images/huda-farooqui.jpg" width="145" height="250">
        </figure>
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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