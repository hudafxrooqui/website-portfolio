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
    <title>Education</title>
    <link rel="stylesheet" href="css/phase1.css">
    <link rel="stylesheet" href="css/reset.css">
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
                        <p style="float:right; margin-top:12px; margin-right: 25px;color:#FFF;font-family: 'Inter';letter-spacing: 0.1pt;">Welcome! <?php echo $_SESSION[ "email" ]; ?>
                    </p>
                    
                    <!-- see comments above for explanation-->
                    <li style="float:right;margin-right:15pt;"><a class="active" href="add-entry.php">Add Entry</a></li>
                    <li style="float:right; margin-right:0pt;"><a class="active" href="logout.php">Logout</a></li>
                    
                    <?php
                    }
                    ?>
                    </ul>
                </nav>
                <br>
                <br>
                
                <hgroup>
                    <h1>EDUCATION</h1>
                </hgroup>
            </header>
            
            <section>
                <br>
                <div style="background-color:#eee;">
                <br>
                <br>
                
                    <tr>
                        
                    <div style="background-color:#353535;color:white; margin-left:220pt; margin-right:200pt; padding:20pt; border-radius:2%; "> 


                    <span style="color:#e8998d;font-family:'Courier New', Courier, monospace; font-weight:bold;">public class</span>
                    <span style="color:#eee;font-family:'Courier New', Courier, monospace;font-weight:bold;"> Education {</span><br>

                    <span style="color:#49b790;font-family:'Courier New', Courier, monospace;"> &nbsp;&nbsp;&nbsp;&nbsp;huda.universityName = </span>
                    <span style="color:#fae588;font-family:'Courier New', Courier, monospace;"> "Queen Mary University of London"</span><br><br>

                    <span style="color:#49b790;font-family:'Courier New', Courier, monospace;"> &nbsp;&nbsp;&nbsp;&nbsp;huda.course = </span>
                    <span style="color:#fae588;font-family:'Courier New', Courier, monospace;">"Bsc Computer Science"</span><br><br>

                    <span style="color:#49b790;font-family:'Courier New', Courier, monospace;"> &nbsp;&nbsp;&nbsp;&nbsp;huda.expectedGraduation =</span>
                    <span style="color:#fae588;font-family:'Courier New', Courier, monospace;">"2021-2024"</span><br><br>

                    <span style="color:#49b790;font-family:'Courier New', Courier, monospace;"> &nbsp;&nbsp;&nbsp;&nbsp;huda.favouriteModule = </span>
                    <span style="color:#fae588;font-family:'Courier New', Courier, monospace;">"Proffesional and Research Practise"</span><br><br>

                    <span style="color:#49b790;font-family:'Courier New', Courier, monospace;"> &nbsp;&nbsp;&nbsp;&nbsp;huda.school = </span>
                    <span style="color:#fae588;font-family:'Courier New', Courier, monospace;">"Bushey Meads School (2021-2024)"</span><br><br>

                    <span style="color:#49b790;font-family:'Courier New', Courier, monospace;"> &nbsp;&nbsp;&nbsp;&nbsp;huda.AlevelsOption1 = </span>
                    <span style="color:#fae588;font-family:'Courier New', Courier, monospace;">"Computer Science(A*)"</span><br><br>

                    <span style="color:#49b790;font-family:'Courier New', Courier, monospace;"> &nbsp;&nbsp;&nbsp;&nbsp;huda.AlevelsOption2 = </span> 
                    <span style="color:#fae588;font-family:'Courier New', Courier, monospace;">"IT(A*)"</span><br><br>

                    <span style="color:#49b790;font-family:'Courier New', Courier, monospace;"> &nbsp;&nbsp;&nbsp;&nbsp;huda.AlevelsOption3 = </span>
                    <span style="color:#fae588;font-family:'Courier New', Courier, monospace;">"Design Engineering(B)"</span><br><br>

                    <span style="color:#49b790;font-family:'Courier New', Courier, monospace;"> &nbsp;&nbsp;&nbsp;&nbsp;huda.GCSEs = </span>
                    <span style="color:#fae588;font-family:'Courier New', Courier, monospace;">"8 grades between A-C"</span><br><br>

                    <span style="color:white;font-family:'Courier New', Courier, monospace;">}</span><br><br>
                    </td>
                    </div>
            </tr>
            <br>
            <br>
        
    
    </section>
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