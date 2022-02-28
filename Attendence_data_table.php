<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Attendence Details</title>
    <style>
    body{
        width: 100%;
        height: 100%;
        background: url('assets/img/hero-bg.jpg');
    }
</style>
</head>

<body class="bg-light m-5">
    <div class="container-fluid " style="background-color:rgb(235, 242, 250); border: 1px solid rgb(168, 199, 255);">
        <!-- lavender,lightsteelblue,rgb(203, 223, 248) -->

          <select class="mdb-select md-form m-3 p-1">
            <option value="" disabled selected>Select Class</option>
            <option value="1">First Year</option>
            <option value="2">Second Year</option>
            <option value="3">Third Year</option>
          </select>

          <select class="browser-default m-3 p-1"> <!-- custom-select -->
            <option value="" disabled selected>Select Batch</option>
            <option value="1">1st</option>
            <option value="2">2<sup>nd</sup></option>
            <option value="3">3<sup>rd</sup></option>
          </select>

          <input type="date" class="form-input form-icon m-3" name="birth_date" id="birth_date" placeholder="MM-DD-YYYY" />
          
    </div>

    <div class="table-responsive bg-white mt-2">
        <table class="table table-bordered mb-0">
            <thead>
          <tr>
            <th scope="col">Roll Number</th>
            <th scope="col">Enrollment Number</th>
            <th scope="col">Name</th>
            <th scope="col">Class</th>
            <th scope="col">Batch</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email Address</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include 'db_conn.php'; 
       $query = "SELECT * FROM `attendance_details`";

       $result = mysqli_query($conn,$query);
       if($result) {
           if(mysqli_num_rows($result) > 0) {
               while($row = mysqli_fetch_array($result)) {
                   
   ?>
   <tr>
       <th scope="row"><?php echo $row['roll_number'];?></th>
       <th scope="row"><?php echo $row['enrollment_number'];?></th>
       <th scope="row"><?php echo $row['name'];?></th>
       <th scope="row"><?php echo $row['class'];?></th>
       <th scope="row"><?php echo $row['batch'];?></th>
       <th scope="row"><?php echo $row['phone_number'];?></th>
       <th scope="row"><?php echo $row['email_address'];?></th>

   </tr>
   <?php
               }
           }
       }
   ?>
    </tbody>
</table>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>