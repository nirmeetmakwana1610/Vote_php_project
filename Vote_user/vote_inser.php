<?php 
session_start();
    include 'connection.php';

        if(isset($_POST["vote"]))
        {
            $c_id= $_POST['txt_vote'];
			$u_id= $_SESSION['id'];
            $a=1;
			$dt=date('d/m/Y h:m:s A',time());
            $a="INSERT INTO votes values(' ',$c_id,$u_id,'$dt',$a)";
            $sel=mysqli_query($con,$a);
            if($sel)
            {
                echo "<script>
                        alert('Your Vote submitted');
                        window.location.href='dashbord.php';
                      </script>";
            }
            else
            { 
                echo "not";
            }
            
        }
?>
