<?php

    session_start();
    require "assets/header.php";

    if(!isset($_SESSION['username']) && !isset($_SESSION['id']))
    { ?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Login</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            </head>
            <!-- For DKTE image -->
            <style>
                body{
                    background-image: url(assets/img/hero-bg.jpg);
                    width: 100%;
                    height: 100%;
                    opacity: 1;
                }
            </style>
            <body>
                <br><br><br>
                <div class="container d-flex justify-content-center align-items-center" style="min-height: 95vh"> 
                    <form class="border shadow p-5 rounded" action="php/check_login.php" method="POST" style="width: 450px;">
                        <h1 class="text-center p-3">LOGIN</h1>
                        <?php if(isset($_GET['error'])){?>
                        <div class="alert alert-danger" role="alert">
                            <?=$_GET['error']?>
                        </div>
                        <?php } ?>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" id="password">
                        </div>
                    
                        <div class="mb-1">
                            <label class="form-label">Select User Type:</label>                    
                        </div>
                        <select class="form-select mb-3" name="role" aria-label="Default select example">
                            <option selected value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        <br>
                        <center><button type="submit" class="btn btn-primary">Submit</button></center>
                    </form>
                </div>
                
            </body>
        </html>
<?php }else{
    header("Location: php/home.php");
} ?>
<?php

    require "assets/footer.php";
?>