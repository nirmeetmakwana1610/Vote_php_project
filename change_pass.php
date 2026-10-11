<?php include 'hadder.php';?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4">Profile</h1>
                                                </div>
                                                <form class="user" action="update_pass.php" method="POST">
                                                    <div class="form-group">
                                                        <input type="text" name="txt_user" class="form-control form-control-user"
                                                        readonly value="<?php echo $data['1'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="txt_pass" class="form-control form-control-user"
                                                        placeholder="Enter Password...">
                                                    </div>
                                                    
                                                    <input type="submit" name="sub" value="Update" class="btn btn-primary btn-user btn-block"> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include 'footer.php';?>           