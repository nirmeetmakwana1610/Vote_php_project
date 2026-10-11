<?php include 'hadder.php';?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Candidates</h1>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                    <div class="row">
                                        <div class="col-lg-12 p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Add Candidates!</h1>
                                            </div>
                                            <form class="row g-3" action="add_candidates_query.php"  enctype="multipart/form-data" method="POST">
                                                <div class="col-12 mt-3">
                                                    <label for="inputNanme4" class="form-label">Candidates Name</label>
                                                    <input type="text" class="form-control"  name="txt_candidates"  id="inputNanme4">
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="exampleFormControlSelect1">select Party</label>
                                                        <select name="txt_party" class="form-control" id="exampleFormControlSelect1">
                                                        <?php
                                                                include 'connection.php';
                                                                $s="SELECT * FROM party_info";
                                                                $q=mysqli_query($con,$s);
                                                                $a=1;
                                                                while ($r=mysqli_fetch_array($q))
                                                                {
                                                        ?> 
                                                            <option value="<?php echo $r[0]?>"><?php echo $r[1]?></option>
                                                        <?php
                                                                }
                                                        ?>    
                                                        </select>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="inputNanme4" class="form-label">Candidates Photo</label>
                                                    <input class="form-control" name="c_photo" style="height:43px" type="file" >
                                                </div>
                                                <div class="text-center mt-3">
                                                    <input type="submit" class="btn btn-primary mt-3 ml-3" value="ADD" name="add_can">
                                                </div>
                                            </form><!-- Vertical Form -->
                                        </div>
                                    </div>
                                </div>
                             </div>
                             <div class="card-body col-lg-12">
                                    <h5 class="card-title">Candidates List</h5>
                                    <table class="table">
                                        <tr>
                                            <th>NO.</th>
                                            <th>Candidates Name</th>
                                            <th>Party Name</th>
                                            <th>Candidates Photo</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                        <?php
                                                include 'connection.php';
                                                $a="SELECT c.*,p.P_Name as party_name FROM candidads_info c
                                                    JOIN party_info p ON c.P_Id = p.P_Id ";   
                                                $q=mysqli_query($con,$a);
                                                $a=1;
                                                while ($r=mysqli_fetch_array($q))
                                                {
                                    
                                                    ?>

                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $r[1];?></td>
                                            <td><?php echo $r['party_name'];?></td>
                                            <td><img src="<?php echo $r[3];?>" width="80px" height="80px"></td>
                                            <td><a href="candidate_edit.php?i=<?php echo $r[0];?>">Edit</a></td>
                                            <td><a href="candidate_delet.php?i=<?php echo $r[0];?>">Delete</a></td> 
                                        </tr>
                                        <?php
                                                $a++;
                                                }
                                        ?>        
                                        </tr>  
                                    </table><!-- End Default Table Example -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                 

            </div>
            <!-- End of Main Content -->

<?php include 'footer.php';?>           

               