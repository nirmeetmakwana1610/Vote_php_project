<?php 
session_start();
include 'connection.php';

if (isset($_POST["pub"])) {
    $ccid = $_POST['cid'];      // constituency id
    $vt   = $_POST['vc'];       // vote count
    $pid  = $_POST['txt_p'];    // party id

    // Always specify column names
    $sql = "INSERT INTO result (C_Id, P_Id, Vote_Count) 
            VALUES ('$ccid', '$pid', '$vt')";

    $in = mysqli_query($con, $sql);

    if ($in) {
        echo "<script>
                alert('Published Result');
                window.location.href='Admin_panel.php';
              </script>";
    } else {
        echo "Insert Failed: " . mysqli_error($con);
    }
}
?>
