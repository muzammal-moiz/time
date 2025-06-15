<?php
require_once("admin/database.php");

$query="SELECT * from logo";
$logo=db::getRecord($query);

$query="SELECT * from categories";
$recs=db::getRecords($query);

$query="SELECT * from news order by id  limit 3";
$news=db::getRecords($query);

?>
<footer class="pt-10 footermain">
	<div class="footer-upper pb-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="footer-about">
						<img src="admin/uploads/<?php  echo $logo['image'] ?>" style="background:white" alt>
						<p class="mt-3 mb-3 white">
							<?php  echo $logo['dcp'] ?>
						</p>
					</div>
				</div>
				<div class="col-lg-1 col-md-6 col-sm-12 mb-4"></div>
				<div class="col-lg-2 col-md-6 col-sm-12 mb-4">
					<div class="footer-links">
						<h3 class="white">Quick link</h3>
						<ul>
							<li><a href="index.php">HOME</a></li>
							<!-- <li><a href="about.php">ABOUT US</a></li> -->
							<?php
							if($recs)
							{
								foreach($recs as $rec)
								{
									?>
									<li><a href="news.php?id=<?php echo $rec['id']; ?>"><?php  echo $rec['heading'] ?> </a></li>
									<?php
								}
							}
							?>
						</ul>
					</div>
				</div>
				<div class="col-lg-1 col-md-6 col-sm-12 mb-4"></div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="footer-links">
						<h3 class="white">Popular Posts</h3>
						<div class="trend-main">
							<?php
							if($news)
							{
								foreach($news as $new)
								{
									?>
									<div class="trend-item d-flex align-items-center mb-2">
										<div class="trend-image w-25 me-4">
											<img src="admin/uploads/<?php  echo $new['image'] ?>" alt="image">
										</div>
										<div class="trend-content-main me-3 w-75">
											<div class="trend-content">
												<h4 class="mb-1"><a href="#"><?php  echo $new['heading'] ?></a></h4>
											</div>
										</div>
									</div>
									<?php
								}
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright pt-2 pb-2">
		<div class="container">
			<div class="copyright-inner d-md-flex align-items-center justify-content-between">
				<div class="copyright-text">
					<p class="m-0 white">2024 All rights reserved. By Softrobo Systems </p>
				</div>
				<div class="social-links">
					<ul>
						<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>


<div id="back-to-top">
	<a href="#"></a>
</div>








<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/main.js"></script>
<script src="js/custom-swiper.js"></script>
<script src="js/custom-nav.js"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'81705e677e450dbc',t:'MTY5NzQ2MDAxMC4xNjYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/g/scripts/jsd/dffb14d6/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

</html>