<?php
require_once("header.php");
require_once("sidebar.php");

$query="SELECT * from contact";
$recs=db::getRecords($query);
?>



<!-- main content start -->
<div class="main-content">
    <div class="dashboard-breadcrumb mb-25">
        <h2>Agency Dashboard</h2>
        
    </div>
    <div class="row mb-25">

        <div class="col-lg-4 col-6 col-xs-12">
            <div class="card main_card">
                <div class="card-body">
                    <h4 >About Us </h4>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-6 col-xs-12">
            <div class="card main_card">
                <div class="card-body">
                    <h4 >Categories </h4>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-6 col-xs-12">
            <div class="card main_card">
                <div class="card-body">
                    <h4 >News</h4>
                </div>
            </div>
        </div>

        <div class="dashboard-breadcrumb mb-25 mt-5 ">
            <h2>Contact Us</h2>
        </div>

        <div class="col-12">
            <div class="card" style="background: #fff;">
                <div class="card-body">
                    <table class="table table-bordered table-dashed table-hover digi-dataTable dataTable-resize table-striped" id="componentDataTable3">
                        <thead>
                            <tr>
                                <th><span class="resize-col">ID</span></th>
                                <th><span class="resize-col">First Name</span></th>
                                <th><span class="resize-col">Last Name</span></th>
                                <th><span class="resize-col">Email</span></th>
                                <th><span class="resize-col">Phone</span></th>
                                <th><span class="resize-col">Message</span></th>
                                <th><span class="resize-col">Action</span></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            if($recs)
                            {
                                foreach($recs as $rec)
                                {
                                    ?>
                                    <tr>
                                        <td><span class="resize-col"><?php  echo $rec['id'] ?></span></td>
                                        <td><span class="resize-col"><?php  echo $rec['f_name'] ?></span></td>
                                        <td><span class="resize-col"><?php  echo $rec['l_name'] ?></span></td>
                                        <td><span class="resize-col"><?php  echo $rec['email'] ?></span></td>
                                        <td><span class="resize-col"><?php  echo $rec['phone'] ?></span></td>
                                        <td><span class="resize-col"><?php  echo $rec['message'] ?></span></td>
                                        <td><span class="resize-col">
                                            <a href="action.php?del_contact=<?php  echo $rec['id']; ?>" class="btn  btn-danger text-light" style="text-decoration: none;">Trash</a>
                                        </span></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <?php
    require_once("footer.php")
?>