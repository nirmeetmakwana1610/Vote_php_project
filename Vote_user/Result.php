<?php include 'hadder.php';?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Result</h1>
                    </div>
                    <section class="section dashboard d-flex flex-column align-items-center ">
                        <h1 class="font-weight-bold text-primary text-uppercase">Winner</h1>
                        <?php
                            $w="SELECT 
    c.C_Name,
    c.C_Photo,
    p.P_Name,
    r.Vote_Count
FROM 
    result r
JOIN 
    candidads_info c ON r.c_Id = c.C_Id
JOIN 
    party_info p ON r.P_Id= p.P_Id;
";
                            $rs=mysqli_query($con,$w);
                            While($date=mysqli_fetch_array($rs))
                            {
                        ?>
                        <div class=" col-xl-9 card border-left-primary shadow h-100 mt-4 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div> <img src="<?php echo "../".$date['C_Photo']?>" width="100px" height="100px">
                                        </div>
                                        <div class="col mr-2">
                                        <div class="h3text-xs font-weight-bold text-primary text-uppercase mb-1 ml-3">
                                        <?php echo $date['C_Name'];?>
                                        <div class="h4 mb-0 font-weight-bold text-gray-800 mt-2">Votes :  <?php echo $date['Vote_Count'];?>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </section>
                </div>

        </div>

<?php include 'footer.php';?>           