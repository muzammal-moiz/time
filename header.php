<?php
require_once("admin/database.php");

$query="SELECT * from logo";
$logo=db::getRecord($query);

$query="SELECT * from categories";
$recs=db::getRecords($query);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newslatter</title>

    <link rel="shortcut icon" type="image/x-icon" href="admin/uploads/<?php  echo $logo['image'] ?>">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link href="css/plugin.css" rel="stylesheet" type="text/css">

    <link href="fonts/flaticon.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css">
</head>

<body>
    <!-- 
	<div id="preloader">
		<div id="status"></div>
	</div>

-->

    <header class="main_header_area">
        <div class="header-content py-1 bg-navy">
            <div class="container d-flex align-items-center justify-content-between">
                <h4 class="mb-0 w-25 fw-normal text-center me-2 white"><i class="fas fa-bolt"></i> Mood</h4>
                <div class="links float-right">
                    <marquee scrolldelay="50" behavior="scroll" onmouseover="this.stop();" onmouseleave="this.start();">
                        <li><a href="#" class="white"><i class="fa fa-star"></i> “Μια Δαλιδά να κόψει τα μαλλιά του
                                Σαμψών</a></li>
                        <li><a href="#" class="white"><i class="fa fa-star"></i> Μια Δαλιδά να κόψει τα μαλλιά του
                                Σαμψών.</a></li>
                        <li><a href="#" class="white"><i class="fa fa-star"></i> Μια Δαλιδά να κόψει τα μαλλιά του
                                Σαμψών</a></li>
                        <li><a href="#" class="white"><i class="fa fa-star"></i> Μια Δαλιδά να κόψει τα μαλλιά του
                                Σαμψών.</a></li>
                    </marquee>
                </div>
            </div>
        </div>

        <div class="header_menu header_mlogo" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-middle text-center w-100 pt-5 pb-5 border-b">
                        <a class="navbar-brand" href="index.php"><img src="admin/uploads/<?php  echo $logo['image'] ?>"
                                alt="image"></a>
                        <a class="navbar-night" href="index.php"><img src="admin/uploads/<?php  echo $logo['image'] ?>"
                                alt="image"></a>
                    </div>
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2"
                        style="justify-content: center !important;">

                        <div class="navbar-header" style="width: 14%;">
                            <a class="navbar-brand" href="index.php">
                                <img src="admin/uploads/<?php  echo $logo['image'] ?>" alt="image">
                                <img src="admin/uploads/<?php  echo $logo['image'] ?>" alt="image">
                            </a>
                        </div>

                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li><a href="index.php" style="font-weight: 900;">Home</a></li>
                                <li><a href="magazine.php" style="font-weight: 400;">Magazine</a></li>
                                <!-- <li><a href="about.php">About Us</a></li> -->
                                <?php
							if($recs)
							{
								foreach($recs as $rec)
								{
									?>
                                <li><a href="news.php?id=<?php echo $rec['id']; ?>"><?php  echo $rec['heading'] ?> </a>
                                </li>
                                <?php
								}
							}
							?>
                                <!-- <li><a href="blog.php">Blogs</a></li> -->
                                <!-- <li><a href="contact.php">Contact Us</a></li> -->
                            </ul>
                        </div>
                        <div class="d-flex align-items-center">
                            <!-- <div class="search-main"><a href="#search1" class="mt_search"><i class="fa fa-th-large theme mr-2"></i></a></div> -->
                        </div>
                        <div id="slicknav-mobile"></div>
                    </div>
                </div>
            </nav>
        </div>

    </header>