<?php
include 'connection.php';

    if (isset($_POST['sub']))
    {   
        $name=$_POST['txt_user'];
        $pass = $_POST['txt_pass'];
        $j="update admin set A_pass='$pass' where A_Name='$name'";

        if (mysqli_query($con,$j))
        {
             echo "<script>
                        alert('Your Password update'); 
                        window.location.href='admin_panel.php';
                      </script>";
        }
        else
        {
            echo "error";
        }    
    }
?>

