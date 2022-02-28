<?php

        session_start();
        require "../db_conn.php";
    
        if(isset($_SESSION['role']) == 'admin')
        {
            header('Location: ../admin_index.php');
        }
        elseif(isset($_SESSION['role']) == 'user'){
            
            header('Location: ../user_index.php');
        }
?>