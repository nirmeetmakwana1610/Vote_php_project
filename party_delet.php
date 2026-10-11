<?php
include 'connection.php';
$id=$_GET['i'];

	$j="delete from party_info where P_Id=$id";

	if (mysqli_query($con,$j))
	{
		echo "<script>
                        alert('Remove Party...');
                        window.location.href='add_party.php';
                      </script>";
	}
?>
