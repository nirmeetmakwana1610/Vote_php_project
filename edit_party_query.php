<?php
	include 'connection.php';
		if (isset($_POST['edit_par']))
			{

				$pid      = $_POST['pid'];
				$p_name   = $_POST['txt_party'];
				$plogo    = $_POST['p_logo'];

			$sql ="UPDATE party_info SET P_Name='$p_name',P_Logo='$plogo' where P_Id=$pid";
		
			if (mysqli_query($con,$sql))
				{
					echo "<script>
                        window.location.href='add_party.php';
                      </script>";
				}
				else
				{
					echo "error";
				}
			}		

?>