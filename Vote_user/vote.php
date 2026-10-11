<?php include 'hadder.php';?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Vote</h1>
                    </div>
                    <div class="row">

                </div>
                <!-- /.container-fluid -->

                    <div class="card-body col-lg-12">
                                    <table class="table">
                                        <tr>
                                            <th>NO.</th>
                                            <th>Candidads Photo</th>
                                            <th>Candidads Name </th>
                                            <th>Party Logo </th>
                                            <th>Party Name </th>
                                            <th>Select</th>
                                            <form action="vote_inser.php" method="POST" >
                                        </tr>
                                           <?php
                                                include 'connection.php';
                                                $a="SELECT c.*,p.P_Logo as pl,p.P_Name as party_name FROM candidads_info c
                                                    JOIN party_info p ON c.P_Id = p.P_Id";   
                                                $q=mysqli_query($con,$a);
                                                $a=1;
                                                while ($r=mysqli_fetch_array($q))
                                                {
                                    
                                                    ?>

                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><img src="<?php echo "../".$r[3];?>" width="80px" height="80px"></td>
                                            <td><?php echo $r[1];?></td>
                                            <td><img src="<?php echo "../".$r['pl'];?>" width="80px" height="80px"></td>
                                            <td><?php echo $r['party_name'];?></td>
                                            <td><input type="radio"name="txt_vote" value="<?php echo $r[0];?>"></td>
                                        <?php
                                                $a++;
                                                }
                                        ?>     
                                        </tr>
                                    </table><!-- End Default Table Example -->
                                    <div class="row justify-content-center">
                                        <input type="submit" class="btn btn-primary col-6 mt-5 ml-3" name="vote">
                                    </div>    
                                    </form>
                                </div>

            </div>

        </div>

<?php include 'footer.php';?>           