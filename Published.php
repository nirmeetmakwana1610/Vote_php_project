<?php include 'hadder.php';?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <?php 

                    $cid=mysqli_query($con,"SELECT candidads_info.C_Name,candidads_info.C_Id,candidads_info.C_Photo,party_info.P_Name, COUNT(votes.c_id) AS vc 
                        FROM candidads_info 
                        LEFT JOIN votes ON candidads_info.C_Id = votes.c_id
                        LEFT JOIN party_info ON candidads_info.P_Id = party_info.P_Id 
                        GROUP BY candidads_info.C_Id;
                        ");
                    while($r=mysqli_fetch_assoc($cid))
                    {  $ccid=$r['C_Id'];
                        $vt= $r['vc'];?>

                        

                        <div class="card border-left-primary shadow h-100 mt-4 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div> <img src="<?php echo $r['C_Photo']?>" width="100px" height="100px"></div>
                                        <div class="col mr-2">
                                            <div class="h3text-xs font-weight-bold text-primary text-uppercase mb-1 ml-3">
                                               <?php echo $r['C_Name'];?></div>
                                            <div class="h2text-xs font-weight-bold text-primary text-uppercase mb-1 ml-3">
                                               <?php echo $r['P_Name'];?></div>   
                                            <div class="h2 mb-0 font-weight-bold text-gray-800 ml-3"> <?php echo $r['vc'];?></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                             <?php
                } 

                $sql = "SELECT candidads_info.C_Name,party_info.P_Id,candidads_info.C_Id, COUNT(votes.c_id) AS vote_count 
        FROM candidads_info 
        JOIN votes ON candidads_info.C_Id = votes.c_id
        JOIN party_info ON candidads_info.P_Id = party_info.P_Id
        GROUP BY candidads_info.C_Id
        ORDER BY vote_count DESC
        LIMIT 1";

$result = mysqli_query($con, $sql);
if($result)
{
     $winner = mysqli_fetch_assoc($result);
        $a=$winner['C_Id'];
        $b=$winner['vote_count'];
        $pid= $winner['P_Id'];
        ?>
                            <form action="result_insert.php" method="POST">
                            <input type="hidden" name="cid" value="<?php echo $a;?>">
                            <input type="hidden" name="vc" value="<?php echo $b;?>">
                            <input type="hidden" name="txt_p" value="<?php echo $pid;?>">
                            <section class="section dashboard d-flex flex-column align-items-center ">
                            <?php  
                            $sel=mysqli_query($con,"Select * from result where c_id='$a' AND p_id='$pid'");
                            $data=mysqli_fetch_array($sel);
                            if($data)
                            {
                            ?>
                   
                            <?php }
                             else
                            {?>
                            <input type="submit" class="mt-5 btn w-50 btn-square btn-primary" value="Published" name="pub">
                        <?php } ?>
                            </section>
                            </form>
     <?php                  
}

                ?>
                </div>

        </div>

<?php include 'footer.php';?>           