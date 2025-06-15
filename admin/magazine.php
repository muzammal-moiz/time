<?php
require_once("header.php");
require_once("sidebar.php");
$query="SELECT * FROM `magazine`";
$data_magazine=db::getRecords($query);
?>
<!-- main content start -->
<div class="main-content">
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card" style="background: #e90606;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-0 text-light">Magazine</h4>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <a href="add_magazine.php" class="btn btn-primary w-100">Add Magazine</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-25">
        <?php
    if($data_magazine){
        foreach($data_magazine as $magazine){
            ?>
        <div class="col-lg-4 col-6 col-xs-12">
            <div class="card main_card h-400">
                <div class="card-body">
                    <img src="./uploads/<?php echo $magazine['image'];?>">
                    <h4 class="mt-4"><?php echo $magazine['title'];?></h4>
                    <div class="mt-3">
                        <a href="pdf/<?php echo $magazine['pdf_file'];?>" download>Click Here to Download</a>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <a href="update_magazine.php?id=<?php echo $magazine['id'];?>"
                                class="btn btn-primary w-100 text-dark">Edit</a>
                        </div>
                        <div class="col-md-6">
                            <a href="action.php?del_magazine=<?php echo $magazine['id'];?>"
                                class="btn btn-outline-danger w-100 text-dark">Trash</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
    </div>


    <?php
require_once("footer.php")
?>