<?php

    // require "assets/header.php";
?>
<style>
        body{
            background-color: skyblue;
        }
        #table_info{
            background-color: white;
            margin:50px 20px 10px 20px;
            min-height: 300px;
            border: 1px solid blue;
            
        }
        table{
            margin: 10px 0px 0px 4px;
            min-width: 500px;
            
        }
        th{
            min-width: 150px;
        }
    </style>
    <center><h2> Registered Students </h2></center>
    <div id="table_info">
    <table border="1">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Enrollment_no</th>
                    <th scope="col">Roll_no</th>
                    <th scope="col">Class</th>
                    <th scope="col">Batch</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include 'db_conn.php'; 
                $sql = "SELECT * from `register_info`";

                $result = mysqli_query($conn,$sql);
                if($result) {
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <th scope="row"><?php echo $row['name'];?></th>
                <th scope="row"><?php echo $row['enrollment_no'];?></th>
                <th scope="row"><?php echo $row['roll_no'];?></th>
                <th scope="row"><?php echo $row['class'];?></th>
                <th scope="row"><?php echo $row['batch'];?></th>
            
            </tr>
            <?php
                        }
                    }
                }
            ?>
            </tbody>
        </table>
<?php

    // require "assets/footer.php";
?>