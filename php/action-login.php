<?php

    //include config login
    include "config.php";
    
    $email = $password = "";

    //basic PHP validation in case blank data got through

    //check if email is empty
    if( empty( trim( $_POST["email"] ) ) )
    {
        $email_err = "Please enter email";

    } else {
        
        $email = trim( $_POST["email"] );

    }
    //check if password is empty
    if( empty( trim( $_POST["password"] ) ) )
    {
        $password_err = "Please enter password";

    } else {
        
        $password = trim( $_POST["password"] );

    }

    //set up the sql statement
    $sql = "SELECT ID, email, password 
            FROM users 
            WHERE email = ?
            AND password = ?";

    //prepare the statement and store the result
    if( $stmt = $mysqli->prepare( $sql ) )
    {
        //sanitise the data and bind parameters to the sql statement 
        $stmt->bind_param( "ss", $email, $password );
      
        //execute the statement
        if( $stmt->execute() )
        {
            //store the result
            $stmt->store_result();
            
            //if there is at least one row matching?
            if( $stmt->num_rows == 1 )
            {
                //takes each bit of data and store them in their own PHP variable
                $stmt->bind_result( $ID, $email, $password );

                //action the storing of the data
                if( $stmt->fetch() )
                {  
                    //you are logged in  
                    session_start();
     
                    //store data in session variables
                    $_SESSION[ "loggedin" ] = true;
                    $_SESSION[ "id" ] = $ID;
                    $_SESSION[ "email" ] = $email; 

                    // Redirect user to add blog entry page
                    header("location: ../add-entry.php");

                } else {

                }
                
            } else {
                //email or password incorrect
                header("location: ../login.php?error=1");
            }
        }
    
    } else { 
        //some network or other error that is not in the users control
        echo "Oops! Something went wrong. Please try again later.";
    }
    //sql closes
    $mysqli->close();

?>