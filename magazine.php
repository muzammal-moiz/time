<?php
require_once("header.php");

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$read="SELECT * FROM news WHERE cat_id='$id'";
	$news=db::getRecords($read);
}
?>


<section class="breadcrumb-main pb-0 pt-6" style="background-image: url(images/bg/bg2.jpg);    height: 150px;">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content d-md-flex align-items-center pt-6">
                <h2 class="text-white">Magazine</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li>
                            <h5 class="text-white">Magazine</h5>
                        </li>
                        <!-- <li class="breadcrumb-item active" aria-current="page"><?php  echo $categorie['heading'] ?></li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<section class="trending pb-5 pt-0 ptop">
    <div class="container">
        <div class="row">
            <?php

				$query="SELECT * from `magazine`";
				$categories=db::getRecords($query);
				

				if($categories)
				{
					foreach($categories as $two_section)
					{
						?>
            <div class="col-lg-4 mt-3">
                <div class="trend-item box-shadow bg-white">
                    <div class="trend-image mt-5">
                        <img src="admin/uploads/<?php  echo $two_section['image'] ?>" alt="image">
                    </div>
                    <div class="trend-content-main p-4">
                        <div class="trend-content">
                            <h5 class="theme mt-3 mb-5"><?php  echo $two_section['title'] ?></h5>
                            <a href="admin/pdf/<?php echo $two_section['pdf_file'];?>" download>Click Here to
                                Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
					}
				}
				?>
        </div>
    </div>
</section>


<?php
require_once("footer.php");
?>