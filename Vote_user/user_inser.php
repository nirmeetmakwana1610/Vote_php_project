<?php
        include 'connection.php';
if(isset($_POST["sub"]))
 {
    $name=$_POST['txt_user'];
    $pass=$_POST['txt_pass'];
    $email= $_POST['txt_email'];
    $mobil= $_POST['txt_num'];
    $u_date=date('d/m/Y');

       $t="INSERT INTO v_user values('','$name','$pass','$email',$mobil,'$u_date')";
       $j=mysqli_query($con,$t);
        if($j)
        {
            echo "<script>
                  window.location.href='index.php';
                 </script>";
            
        } 
    
        else 
        {
            echo "not done";
        } 
 }
?>