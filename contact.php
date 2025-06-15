<?php
	require_once("header.php");
?>
<section class="breadcrumb-main pb-0 pt-6" style="background-image: url(images/bg/bg2.jpg);    height: 150px;">
	<div class="breadcrumb-outer">
		<div class="container">
			<div class="breadcrumb-content d-md-flex align-items-center pt-6">
				<h2 class="mb-0">Contact Us</h2>
				<nav aria-label="breadcrumb">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="dot-overlay"></div>
</section>

<section class="contact-main pt-0 pb-5 contact1 bg-grey">
	<div class="container">
		<div class="contact-info pt-5">
			<div class="row pt-5">
				<div class="col-lg-6 mb-4">
					<div class="contact-info">
						<h3 class>INFORMATION ABOUT US</h3>
						<p class="mb-4">Sagittis posuere id nam quis vestibulum vestibulum a facilisi at elit hendrerit scelerisque sodales nam dis orci.</p>
						<div class="info-item d-flex align-items-center bg-white mb-3">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="info-content ps-4">
								<p class="m-0">445 Mount Eden Road, Mt Eden</p>
								<p class="m-0">Basundhara Chakrapath</p>
							</div>
						</div>
						<div class="info-item d-flex align-items-center bg-white mb-3">
							<div class="info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="info-content ps-4">
								<p class="m-0">+123 456 789</p>
								<p class="m-0">+987 654 321</p>
							</div>
						</div>
						<div class="info-item d-flex align-items-center bg-white mb-3">
							<div class="info-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="info-content ps-4">
								<p class="m-0"><a href="#" class="__cf_email__" data-cfemail="3e575058517e535f595c5b4c59105d5153">[Dummy@gmail.com]</a></p>
								<p class="m-0"><a href="#" class="__cf_email__" data-cfemail="7b131e170b3b161a1c191e091c55181416">[Dummy@gmail.com]</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div id="contact-form1" class="contact-form">
						<h3 class>Keep in Touch</h3>
						<p class="mb-4">Fundpress site thoughtfully designed for real humans which means the best user experience for your entire community.</p>
						<form method="post" action="admin/action.php"  >
							<div class="form-group mb-2">
								<input type="text" name="f_name" class="form-control" id="fname" placeholder="First Name">
							</div>
							<div class="form-group mb-2">
								<input type="text" name="l_name" class="form-control" id="lname" placeholder="Last Name">
							</div>
							<div class="form-group mb-2">
								<input type="email" name="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group mb-2">
								<input type="text" name="phone" class="form-control" id="phnumber" placeholder="Phone">
							</div>
							<div class="textarea mb-2">
								<textarea name="message" placeholder="Enter a message"></textarea>
							</div>
							<div class="comment-btn">
								<button type="submit" class="nir-btn" name="add_contact" >Send Message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
	require_once("footer.php");
?>