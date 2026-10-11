<?php 
session_start();
    include 'connection.php';

        if(isset($_POST["sub"]))
        {
            $name=$_POST['txt_user'];
            $pass=$_POST['txt_pass'];
            $sel=mysqli_query($con,"Select * from v_user  where U_email='$name' AND U_Pass='$pass'");
            $data=mysqli_fetch_array($sel);
            if($data)
            {
                $_SESSION['id']=$data['U_Id'];
                echo "<script>
                        window.location.href='dashbord.php';
                      </script>";

            }
            else
            { 
                echo "<script>
                        alert('Enter valide data');
                        window.location.href='index.php';
                      </script>";
            }
            
        }
?>