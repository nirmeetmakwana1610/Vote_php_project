<?php
        include 'connection.php';
if(isset($_POST["add_par"]))
 {
  $p_name= $_POST['txt_party'];
  $target_dir="Party_logos/";
  $target_file=$target_dir.basename($_FILES['p_logo'] ['name']);
  if (move_uploaded_file($_FILES['p_logo'] ['tmp_name'],$target_file))
    {

       //echo "File uplode";
       $h="insert into party_info values('','$p_name','$target_file')";
       $j=mysqli_query($con,$h);
       if ($j)
        {
            header('location:add_party.php');
        } 
    }
    else 
        {
         echo "not done";
        } 
 }
?>