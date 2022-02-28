<?php

    // require "../assets/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> New Registration </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body{
        width: 100%;
        height: 100%;
        background: url('../assets/img/hero-bg.jpg');
    }
</style>
<body>
    
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="act-register_POST.php" method="POST" id="signup-form" class="signup-form">
                    <h2> Register </h2>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-input" name="name" id="name" />
                        </div>
                        <div class="form-row">
                            <div class="form-radio">
                                <label for="class">Class</label>
                                <div class="form-flex">
                                    <input type="radio" name="class" value="FY" id="FY"  />
                                    <label for="FY">FY</label>
    
                                    <input type="radio" name="class" value="SY" id="SY" />
                                    <label for="SY">SY</label>

                                    <input type="radio" name="class" value="TY" id="TY" />
                                    <label for="TY">TY</label>
                                </div>
                            </div>
                            
                            <div class="form-radio">
                                <label for="batch">Batch</label>
                                <div class="form-flex">
                                    <input type="radio" name="batch" value="first" id="first"  />
                                    <label for="first">1 <sup>st</sup></label>
    
                                    <input type="radio" name="batch" value="second" id="second" />
                                    <label for="second">2 <sup>nd</sup></label>

                                    <input type="radio" name="batch" value="third" id="third" />
                                    <label for="third">3 <sup>rd</sup></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="enrollmen_no">Enrollment number</label>
                                <input type="number" class="form-input" name="enrollment_no" id="enrollment_no" />
                            </div>
                            <div class="form-group">
                                <label for="rollno">Roll No</label>
                                <input type="number" class="form-input " name="roll_no" id="roll_no"/>
                            </div>
                            
                        </div>
                        <div class="form-text">
                            <a href="#" class="add-info-link"><i class="zmdi zmdi-chevron-right"></i>Additional info</a>
                            <div class="add_info">
                                <div class="form-group">
                                    <label for="phone">Phone number</label>
                                    <input type="number" class="form-input" name="phone" id="phone" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-input" name="email" id="email"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>

<?php

    // require "../assets/footer.php";
?>