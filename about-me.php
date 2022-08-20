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
    <title>About Me</title>
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

                if (isset($_SESSION["loggedin"]) == false) {
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
            <h1>ABOUT ME</h1>
        </hgroup>
        <br>
        <br>
    </header>

    <section id="handshake">

        <img src="images/handshake.png" width="60" height="50">
    </section>

    <section id="technical">
        <img src="images/console.png" width="60" height="50">
    </section>

    <section id="personal">
        <img src="images/badminton.png" width="60" height="50">
    </section>

    <section id="research">
        <img src="images/security.png" width="60" height="50">
    </section>


    <div class="table2">
        <table>
            <tr>
                <td id="a">My non technical skills
                    <p> Highly Organised</p>
                    <p> Excellent written and verbal communication skills</p>
                    <p> Ability to solve non-technical problems</p>
                    <p> Excellent team building skills</p>
                    <p> Hardworking and motivated</p>
                    <p> Empathetic</p>
                </td>

                <td id="b">My technical skills
                    <p> Java</p>
                    <p> HTML</p>
                    <p> CSS</p>
                    <p> PHP</p>
                    <p> C++</p>
                    <p> React.Js</p>
                    <p> Python</p>
                    <p> MySQL</p>
                </td>

                <td id="c">My Hobbies
                    <p>Cooking and Baking</p>
                    <p>Video games</p>
                    <p>Travelling and Exploring new cities</p>
                    <p>Badminton</p>
                    <p>Hiking</p>
                    <p>Going on rollercoasters</p>
                </td>

                <td id="d">My Research Interests
                    <p> Object Oriented <br>Programming</p>
                    <p> Web Technology</p>
                    <p> Proffessional and Research Practise</p>
                    <p> Cyber Security</p>
                </td>
            </tr>
            </tr>
        </table>

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