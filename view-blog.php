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
    <title>View Blog Entries</title>
    <link rel="stylesheet" href="css/phase1.css">
    <link rel="stylesheet" href="css/reset.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <script src="js/dropdown.js" defer></script>
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
                    <p style="float:right; margin-top:12px; margin-right:25px;color:#FFF;font-family: 'Inter';letter-spacing: 0.1pt;">Welcome! <?php echo $_SESSION["email"]; ?>
                    </p>

                    <!-- see comments above for explanation-->
                    <li style="float:right; margin-right:15pt;"><a class="active" href="add-entry.php">Add Entry</a></li>
                    <li style="float:right; margin-right:0pt;"><a class="active" href="logout.php">Logout</a></li>

                <?php
                }
                ?>
            </ul>
        </nav>
        <br>
        <br>

        <hgroup>
            <h1>VIEW BLOG POSTS</h1>
            <br>
        </hgroup>
    </header>

    <!-- for extra 1 - drop down menu-->
    <button onclick="myFunction();" class="dropbtn">Filter by Months</button>
    <a id="viewlink" href="view-blog.php" style="float:none;background-color:#e8998d;font-size:10pt;font-family: 'Inter'; letter-spacing:0.1pt; text-transform:none;margin-left:180pt;color:white; text-decoration: none;">View all Posts</a>
    <div id="myDropdown" class="dropdown-content">
        <a href="?month=01">January</a><br>
        <a href="?month=02">February</a><br>
        <a href="?month=03">March</a><br>
        <a href="?month=04">April</a><br>
        <a href="?month=05">May</a><br>
        <a href="?month=06">June</a><br>
        <a href="?month=07">July</a><br>
        <a href="?month=08">August</a><br>
        <a href="?month=09">September</a><br>
        <a href="?month=10">October</a><br>
        <a href="?month=11">November</a><br>
        <a href="?month=12">December</a><br>
    </div>
    </div>

    </aside>
    <br>
    <br>

    </div>
    </div>

    <?php

    //include config login
    include "php/config.php";

    //set up SQL query to fetch data from blogposts
    if (isset($_GET["month"])) {
        $month = $_GET["month"];

        // represents the start of the month
        $startingDate = "2022-" . $month . "-01";
        // represents end of month
        $endingDate = "2022-" . $month . "-31";

        //fetches data from only that specific month
        $sql = "SELECT ID, title, content, date_time FROM blogposts WHERE date_time BETWEEN '$startingDate' AND '$endingDate'";
    } else {

        $sql = "SELECT ID, title, content, date_time FROM blogposts";
    }
    //perform the query and store the result
    $result = $mysqli->query($sql);
    $data = [];

    //if the result comes back with more than 0 rows, run whilte loop
    if ($result->num_rows > 0) {

        // output data of each row
        // whilst there is a row of data - go and fetch all its information
        while ($row = $result->fetch_assoc()) {
            // data fetched for array sorting
            $data[] = array("title" => $row["title"], "content" => $row["content"], "date_time" => $row["date_time"]);
        }
        //usort is not used for sorting the array itself
        $data[] = usort($data, "sortBlogPosts");

        for ($i = 0; $i < Count($data) - 1; $i++) {
            //prints all of the data
    ?>
            <fieldset id="viewblogbox">
                <div id="vlogpoststyle">

                    <div style="font-family:Arial, Helvetica, sans-serif;float:right;color:white;"><?php echo $data[$i]["date_time"]; ?></div>
                    <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><br><?php echo $data[$i]["title"]; ?></div>
                    <div><br><?php echo $data[$i]["content"]; ?></div>

                </div>

            </fieldset>

        <?php
        }
    } else {

        if (isset($_GET["month"])) {
            //when the user cannot see blog posts for that specific month
        ?>

            <br />
            <p style="float:none;margin-left:20pt;font-family:Verdana, Geneva, Tahoma, sans-serif">Sorry, can't seem to find any posts for this month.</p>
            <br />

        <?php

        } else {
            // when there are no blog posts
        ?>

            <br />
            <p>Sorry, can't seem to find any posts...</p>
            <br />
            <p>Why not add a <a href="add-entry.php" style="float:none;">new entry</a>?</p>
            <br />

    <?
        }
        //header( "location: login.php" );
    }

    //required for the usort command to work but is not used for sorting
    function sortBlogPosts($item1, $item2)
    {
        //compares two items and swaps them.If 0 is returned, the date of item1 and item2 are the same, if date of item1 is before item 2, returns 1.If date of item1 is more than item2, returns -1
        if ($item1['date_time'] == $item2['date_time']) return 0;

        return ($item1['date_time'] < $item2['date_time']) ? 1 : -1;
    }
    ?>


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