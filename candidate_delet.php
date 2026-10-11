<?php
include 'connection.php';
$id=$_GET['i'];

	$j="delete from candidads_info where C_Id=$id";

	if (mysqli_query($con,$j))
	{
		echo "<script>
                        alert('Remove Candidates...');
                        window.location.href='add_candidates.php';
                      </script>";
	}
?>
