<?php
    //include config login
    include "config.php";

    $title = $content = "";

    //basic PHP validation in case blank data got through

    //check if title is empty
    if( empty( trim( $_POST["title"] ) ) )
    {
        $title_err = "Please enter title";
    } else 
    {
        $title = trim( $_POST["title"] );

    }
    
    //check if content is empty
    if( empty( trim( $_POST["content"] ) ) )
    {
        $content_err = "Please enter some content";
    } else {
        $content = trim( $_POST["content"] );

    }

    if( isset( $_POST["preview"] ) )
    {

    } else {

        //set up the sql statement
        $sql = "INSERT INTO blogposts ( title, content )
        VALUES ( ?, ? )";

        //prepare the statement and store the result
        if( $stmt = $mysqli->prepare( $sql ) )
        {

        //sanitise the data - binds parameters to the sql statement
        $stmt->bind_param( "ss", $title, $content );

        //execute the statement
        if( $stmt->execute() )
        {
            // Redirect user to view blog entry page
            header("location: ../view-blog.php");
        }

        } else {
        //some network or other error
        echo "Oops! Something went wrong. Please try again later.";

        }
    }
    //closes database connection
    $mysqli->close();

?>