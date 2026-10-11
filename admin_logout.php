<?php
session_start();
if ($_SESSION['id'])
{
	session_unset();
	session_destroy();
	echo "<script>
                        alert('Logout');
                        window.location.href='index.php';
                      </script>";
}
?> 