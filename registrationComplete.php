<?php

    $name1a = $_POST["name1"];
    $lastName1a = $_POST["lastName"];
    $email = $_POST["email"];
    $bday = $_POST["bday1"];
    $users = $_POST["user1a"];
    $pass1b = $_POST["pass1a"];
   


    //server configuration

    include 'server_con.php';



     //SQL Commands
  
     $sql_check  = "SELECT * FROM users1 WHERE username1 = '$users' or email ='$email' ";
     $query = mysqli_query($connection,$sql_check);

         if(mysqli_num_rows($query)>0){
            header("Location: registrationPHP.php?error= Username or Email already exists");
         }else{
            $sql_command = "INSERT INTO users1 (id,name1,lastName,email,birthday,username1,password1)

            VALUES (NULL, '$name1a', '$lastName1a', '$email', '$bday', '$users', '$pass1b')";

            if(mysqli_query($connection, $sql_command)){
                echo " <h3> REGISTERED SUCCESSFULLY </h3>";
                header ('Location:index.php');
            }else {
                    echo "DATABASE ALREADY EXIST ".mysqli_error($connection);
                }
            
         }
        



   

    



?>