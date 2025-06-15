<?php
require_once("header.php");

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$read="SELECT * FROM news WHERE cat_id='$id'";
	$news=db::getRecords($read);
}

$query="SELECT * FROM categories WHERE id='$id'";
$categorie=db::getRecord($query);
?>


<section class="breadcrumb-main pb-0 pt-6" style="background-image: url(images/bg/bg2.jpg);    height: 150px;">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content d-md-flex align-items-center pt-6">
                <h2 class="mb-0"><?php  echo $categorie['heading'] ?></h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php  echo $categorie['heading'] ?></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<section class="trending pb-5 pt-0 ptop mt-5 pt-5">
    <div class="container">

        <div class="row">
            <?php if($news){

				foreach ($news as $key => $new) { ?>
            <div class="col-lg-4 mt-3">
                <div class="trend-item box-shadow bg-white">
                    <div class="trend-image">
                        <img src="admin/uploads/<?php  echo $new['image'] ?>" alt="image">
                    </div>
                    <div class="trend-content-main p-4">
                        <div class="trend-content">
                            <h5 class="theme"><?php  echo $categorie['heading'] ?></h5>
                            <h4><a
                                    href="news_detail.php?id=<?php  echo $new['id']; ?>"><?php  echo $new['heading'] ?></a>
                            </h4>
                            <p class="mb-2">
                                <?php echo substr($new['dcp'], 0, 70) ?>
                            </p>

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