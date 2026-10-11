<?php
        include 'connection.php';
if(isset($_POST["add_can"]))
 {
  $c_name= $_POST['txt_candidates'];
  $c_party= $_POST['txt_party'];
  $target_dir="Candidates_photo/";
  $target_file=$target_dir.basename($_FILES['c_photo'] ['name']);
  if (move_uploaded_file($_FILES['c_photo'] ['tmp_name'],$target_file))
    {

       //echo "File uplode";
       $h="insert into candidads_info values('','$c_name','$c_party','$target_file')";
       $j=mysqli_query($con,$h);
       if ($j)
        {
            header('location:add_candidates.php');
        } 
    }
    else 
        {
         echo "not done";
        } 
 }
?>