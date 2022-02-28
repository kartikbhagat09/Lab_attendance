<?php

    session_start();
    require "../db_conn.php";

    // echo 'Hello';
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role']))
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);
        $role = test_input($_POST['role']);

        if(empty($username))
        {
            header("Location: ../login.php?error = Username is Required");
        }
        else if(empty($password))
        {
            header("Location: ../login.php?error = Password is Required");
        }
        else
        {
            // echo '<center><h2 style="color:green">Cool! Good to go...</h2></center>';
            // Hashing the password
            $password =($password);

            $sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1)
            {
                //the user name must be unique
                $row = mysqli_fetch_assoc($result);
                
                // echo "<pre>";
                // print_r($row);

                if($row['password'] === $password && $row ['role'] == $role)
                {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];

                    header("Location: home.php");
                }
                else
                {
                    header("Location: ../login.php?error = Incorrect Username or Password");
                }
            }
            else
            {
                header("Location: ../login.php?error = Incorrect Username or Password");
            }
            
        }
    }
    else{
        header('Location: ../login.php');
    }


?>