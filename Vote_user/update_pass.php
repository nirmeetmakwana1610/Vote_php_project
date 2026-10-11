<?php
include 'connection.php';

    if (isset($_POST['sub']))
    {   
        $name=$_POST['txt_user'];
        $pass = $_POST['txt_pass'];
        $j="update v_user set U_Pass='$pass' where U_email='$name'";

        if (mysqli_query($con,$j))
        {
             echo "<script>
                        alert('Your Password update'); 
                        window.location.href='dashbord.php';
                      </script>";
        }
        else
        {
            echo "error";
        }    
    }
?>

