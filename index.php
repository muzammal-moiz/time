<?php
require_once("header.php");

$query="SELECT * from news order by id desc limit 3";
$news=db::getRecords($query);

$query="SELECT * from categories WHERE id='1'";
$categories=db::getRecord($query);

// $query="SELECT * FROM `magazine`";
// $categories=db::getRecord($query);


$query="SELECT * from categories WHERE id='3'";
$categories_three=db::getRecord($query);
?>


<section class="banner overflow-hidden pb-10">
    <div class="container">
        <div class="slider p-0 pt-4">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
					if($news)
					{
						foreach($news as $new)
						{
							?>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image"
                                style="background-image:url(admin/uploads/<?php  echo $new['image'] ?>)"></div>
                            <div class="swiper-content container">

                                <h1 class="mb-4"><a
                                        href="news_detail.php?id=<?php  echo $new['id']; ?>"><?php  echo $new['heading'] ?>"</a>
                                </h1>
                                <p><?php echo substr($new['dcp'], 0, 150) ?></p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <?php
						}
					}
					?>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
</section>

<section class="trending pb-5 pt-0 ptop">
    <div class="container">
        <div class="section-title mb-4 pb-1 w-50">
            <h2 class="m-0"><?php  echo $categories['heading'] ?> </h2>
        </div>
        <div class="row">
            <?php

				$query="SELECT * from news WHERE cat_id='1' ";
				$sections=db::getRecords($query);
				

				if($sections)
				{
					foreach($sections as $section)
					{
						?>
            <div class="col-lg-4 mt-3">
                <div class="trend-item box-shadow bg-white">
                    <div class="trend-image">
                        <img src="admin/uploads/<?php  echo $section['image'] ?>" alt="image">
                    </div>
                    <div class="trend-content-main p-4">
                        <div class="trend-content">
                            <h5 class="theme"><?php  echo $categories['heading'] ?></h5>
                            <h4><a
                                    href="news_detail.php?id=<?php  echo $section['id']; ?>"><?php  echo $section['heading'] ?></a>
                            </h4>
                            <p class="mb-2">
                                <?php echo substr($section['dcp'], 0, 70) ?>

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

<section class="trending pb-5 pt-0 ptop">
    <div class="container">
        <div class="section-title mb-4 pb-1 w-50">
            <h2 class="m-0"><?php  echo $categories_three['heading'] ?> </h2>
        </div>
        <div class="row">
            <?php


				$query="SELECT * from news WHERE cat_id='3'";
				$three_sections=db::getRecords($query);
				

				if($three_sections)
				{
					foreach($three_sections as $three_section)
					{
						?>
            <div class="col-lg-4 mt-3">
                <div class="trend-item box-shadow bg-white">
                    <div class="trend-image">
                        <img src="admin/uploads/<?php  echo $three_section['image'] ?>" alt="image">
                    </div>
                    <div class="trend-content-main p-4">
                        <div class="trend-content">
                            <h5 class="theme"><?php  echo $categories_three['heading'] ?></h5>
                            <h4><a
                                    href="news_detail.php?id=<?php  echo $three_section['id']; ?>"><?php  echo $three_section['heading'] ?></a>
                            </h4>
                            <p class="mb-2">
                                <?php echo substr($three_section['dcp'], 0, 70) ?>

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

<section class="trending pb-5 pt-0 ptop">
    <div class="container">
        <div class="section-title mb-4 pb-1 w-50">
            <h2 class="m-0">Magazine</h2>
        </div>

        <div class="row">
            <?php

				$query="SELECT * from `magazine` ORDER BY id DESC LIMIT 3";
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
                            <h5 class="theme mt-5 mb-5"><?php  echo $two_section['title'] ?></h5>
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
	require_once("footer.php")
?>