<?php include 'hadder.php';?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Party</h1>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                    <div class="row">
                                        <div class="col-lg-12 p-5">
                                            <?php
  include 'connection.php';
  $id=$_GET['i'];
  $s="select * from party_info where P_Id='$id'";
  $q=mysqli_query($con,$s);
  while ($r=mysqli_fetch_array($q))
  {
    ?>
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Add Party!</h1>
                                            </div>
                                            <form class="row g-3" action="edit_party_query.php" enctype="multipart/form-data" method="POST">
                                                <div class="col-12">
                                                    <input type="hidden" name="pid" value="<?php echo $r[0];?>">
                                                    <label for="inputNanme4" class="form-label">Party Name</label>
                                                    <input type="text" class="form-control" name="txt_party" value="<?php echo $r[1];?>"  id="inputNanme4">
                                                </div>
                                                
                                                <div class="col-12 mt-3">
                                                    <label for="inputNanme4" class="form-label">Party Logo</label>
                                                    <input class="form-control" name="p_logo" style="height:43px" type="file" >
                                                </div>
                                                <div class="text-center">
                                                    <input type="submit" class="btn btn-primary mt-3 ml-3" value="ADD" name="edit_par">
                                                </div>
                                            </form><!-- Vertical Form -->
                                        </div>
                                    </div>
                                <?php }?>
                                </div>
                             </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->
                 

            </div>
            <!-- End of Main Content -->

<?php include 'footer.php';?>           