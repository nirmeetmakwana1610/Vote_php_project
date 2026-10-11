<?php 
session_start();
    include 'connection.php';

        if(isset($_POST["sub"]))
        {
            $name=$_POST['txt_user'];
            $pass=$_POST['txt_pass'];
            $sel=mysqli_query($con,"Select * from admin  where A_Name='$name' AND A_Pass='$pass'");
            $data=mysqli_fetch_array($sel);
            if($data)
            {
                $_SESSION['id']=$data['A_Id'];
                echo "<script>
                        window.location.href='admin_panel.php';
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