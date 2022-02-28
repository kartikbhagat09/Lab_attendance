<?php
	include "db_conn.php";

            $name=$_POST['name'];
            $class=$_POST['class'];
            $batch=$_POST['batch'];
            $enrollment_no=$_POST['enrollment_no'];
            $roll_no=$_POST['roll_no'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];


			$query = "INSERT INTO `register_info`(name,class,batch,enrollment_no,roll_no,phone,email)VALUES('$name','$class','$batch','$enrollment_no','$roll_no','$phone','$email')";

			$result = mysqli_query($con,$query) or $err = mysqli_error($con);
			if(isset($err)){
				// For showing error
				echo $err;
				echo "<center><h1 style='color:red'>Failed to register!!!</h1></center>";
			}
			else{
				echo "<center><h1 style='color:green'>Registration Success!!!</h1></center>";
			}

?>