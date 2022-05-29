
<?php
    ob_start();
    session_start();
    
    

    //navigation bar
    include 'home.html';
    include 'footer.html';

    //server connection
    include 'server_con.php';


    //SQL Commands
    if (isset($_POST['usermail1']) && isset($_POST['password1a'])) {

        function validate($data){
    
           $data = trim($data);
    
           $data = stripslashes($data);
    
           $data = htmlspecialchars($data);
            
           $data = htmlentities($data);
           return $data;
    
        } 

        //getting a ll the data input from the form in index.php

        $uname2a = validate($_POST['usermail1']);
        $pass2a = validate($_POST['password1a']);

        if (empty($uname2a)) {
        
            //to avoid logging in even with no user input

            header("Location: index.php?error=User Name is required");

            exit();

                }else if(empty($pass2a)){

                    //to avoid logging in even with no password input

                    header("Location: index.php?error=Password is required");

                    exit();

                //"else statement" for accepting user and password input from the index.php
                //checking if the data encoded is inside the database and is correct.
                
                }else{ 
                    $sql_command = "SELECT * FROM users1 WHERE username1='$uname2a' OR email ='$uname2a'
                    AND password1='$pass2a' ";


                    $db_con = mysqli_query($connection,$sql_command); //made it to a variable to make use in checking data later
                if (mysqli_num_rows($db_con) === 1) {

                            $row = mysqli_fetch_assoc($db_con);

                            if ($row['username1'] === $uname2a  || $row['email'] === $uname2a && $row['password1'] === $pass2a) {

                                echo "Logged in!";

                                $_SESSION['id'] = $row['id'];
                                $_SESSION['name7b'] = $row['name1'];
                                $_SESSION['lastName7b'] = $row['lastName'];
                                $_SESSION['email7b'] = $row['email'];
                                $_SESSION['birthday7b'] =$row['birthday'];
                                $_SESSION['username7b'] = $row['username1'];
                                $_SESSION['pass7b'] = $row['password1'];
                                
                                
                               

                                header("Location: home.php");
                                
                                exit();
                                //else statement if the data is not found inside the database
                                }else{

                                    header("Location: index.php?error=Incorect User Name or Password");

                                    exit();
                                    
                                }
                    //else statement 
                    }else{

                        header("Location: index.php?error=Incorect User Name or Password");

                        exit();

                    }

            }
    }

 
    require('check_session.php');
    
    ob_end_flush();
    
?>

<script>

    const toggleButton = document.getElementsByClassName('toggle-button')[0]
    const navbarLinks = document.getElementsByClassName('navbar-links')[0]

    toggleButton.addEventListener('click',() =>{
        navbarLinks.classList.toggle('active')
    })

</script>