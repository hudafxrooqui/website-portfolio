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
    <title>My Projects</title>
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

                if (isset($_SESSION["email"]) == "") {
                ?>
                    <li style="float:right"><a class="active" href="login.php">Login</a></li>

                <?php

                } else {

                ?>
                    <!-- the email is printed along with a Welcome messgae in the nav bar-->
                    <p style="float:right; margin-top:12px; margin-left: 20px;color:#FFF;font-family: 'Inter';letter-spacing: 0.1pt;">Welcome! <?php echo $_SESSION["email"]; ?>
                    </p>

                    <!-- see comments above for explanation-->
                    <li style="float:right"><a class="active" href="add-entry.php">Add Entry</a></li>
                    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>

                <?php

                }
                ?>
            </ul>
        </nav>

        <hgroup>
            <h1>MY PROJECTS</h1>
        </hgroup>
    </header>

    <section>
        <br>
        <table>
            <tr>
                <td id="a"><img src="images/alevelcs.png" width="280" height="280"></br><br>A level Computer Science Programming Project-For this project, I began independently learning how to code in a simplified version of Java to produce a webcam-operated rubix cube solver.The program works with the user showing each face of the Rubix's cube, and the webcam capturing each image so that when the "Solve" button is clicked, the scrambled cube is able to solve itself.</td>
                <td id="b"><img src="images/aleveld&t3.png" width="280" height="180"></br></br>A level Design Engineering Project-For this project, I produced a digital portfolio showing how I produced an automated "smart" bin prototype. This project provided me an opportunity to develop my analytical thinking skills, design skills and communication skills, as I had to work with a client to produce a final prototype that was sustainable and catered to their needs. I used CAD and CAM for this, and design practises such as vaccum forming and soldering PCB components.<br><br></td>
            <tr>

                <td id="c"><img src="images/procedural.mini.png" width="340" height="180"></br><br>First Year Procedural Programming mini project - For this module I produced a small program that could produce the correct output based on decisions, and output data that is stored in record types.The program was a simple chatbot that the user could send messages to, and the chatbot would send messages back based on what the user inputted.</td>
                <td id="d"><img src="images/investment.app.png" width="280" height="180"></br><br>First Year Object Oriented Programming mini project - I developed a simple Investment App, allowing users to add clients, deposit and withdraw amounts. I used core Object Oriented programming principles to produce a working GUI.</td>
            <tr>
                <td id="e"><img src="images/react.png" width="340" height="180"></br><br>Muslim Prayer App using React.Js and API - I used React.Js to produce a Prayer App for my laptop that showed the prayer times ( Fajr, Zuhr, Asr, Maghrib and Isha) based on what city was selected. The website sends window alerts via Javascript to the user when it is prayer time. I used a city API and a prayer API to fetch data. </td>
                <td id="f"><img src="images/zeba.png" width="340" height="180"></br><br>Social Media and Web Design Project - Communicating with a local beauty salon startup to produce a set of social media pages and a website design that differentiated them from their competitors and attracted local customers. Documentation is unavailable.</td>
            <tr>
        </table>
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