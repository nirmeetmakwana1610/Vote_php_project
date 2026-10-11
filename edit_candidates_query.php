<?php
	include 'connection.php';
		if (isset($_POST['edit_par']))
			{

				$cid      = $_POST['cid'];
				$c_name   = $_POST['txt_candidates'];
				$p   	  = $_POST['txt_party'];
				$c        = $_POST['c_photo'];

			$sql ="UPDATE candidads_info SET C_Name='$c_name',P_Id='$p',C_Photo='$c' where C_Id=$cid";
		
			if (mysqli_query($con,$sql))
				{
					echo "<script>
                        window.location.href='add_candidates.php';
                      </script>";
				}
				else
				{
					echo "error";
				}
			}		

?>