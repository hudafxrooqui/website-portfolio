<?php
    // starts session for the home page
    session_start();

    if( isset( $_SESSION["loggedin"] ) == false )
    {

        header( "location: login.php" );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huda Farooqui</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/blog-form.css">
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
                <li style="float:right"><a class="active"<a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <div>
    
        <form action="php/action-add-entry.php" method="POST" id="blog">

            <fieldset>

                <legend>ADD BLOG POST</legend>

                <div id="formAddPost">
                    <fieldset class="box">
                        <legend>TITLE</legend>
                        <input style="width:100%; font-family: Verdana" type="text" name="title" placeholder="Please enter a title for your post" >
                    </fieldset>
                    
                    <fieldset class="box">
                        <legend>CONTENT</legend>
                        <textarea style="width:100%; font-family: Verdana"  name="content" placeholder="Start your blog post here!" rows=10></textarea>
                    </fieldset>

                    <button id="previewPostButton" type="button" onclick="previewPost()">Preview</button>

                    <button id="clearPostButton" type="button" onclick="clearButton()">Clear</button>
                
                </div>
                
                <fieldset id="viewblogbox">
                    <legend>PREVIEWING POST</legend>
                    <!--shows preview format of post-->
                    <div id="vlogpoststyle">
                        <div id="postDate">0000-00-00</div>

                        <div id="postTitle">Title of post</div>

                        <div id="postContent">Content of post</div>
                    </div>
                
                </fieldset>
                
                <button id="addPostButton" type="submit" id="addPost">Submit</button>
                <br/>
                <button id="editPostButton" type="button" onclick="editPost()" id="editPost">Edit</button>
            
            </fieldset>
            <div id="message">
                <br/>
            </div>
        
        </form>
        <br/><br/>
    </div>
    
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
    
    <script src="js/script.js" defer></script>

    </body>
</html>