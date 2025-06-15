<?php
require_once("header.php");
require_once("sidebar.php");

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query="SELECT * from news where id='$id'";
	$new=db::getRecord($query);

	$q2="SELECT * from categories";
	$categoriess=db::getRecords($q2);
}
?>

<!-- main content start -->
<div class="main-content">

	<div class="main-content">
		<div class="dashboard-breadcrumb mb-25">
			<h2>Update News Fields</h2>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel mb-25">
					<div class="panel-body">
						<div class="row g-3">
							<form method="POST" action="action.php" enctype="multipart/form-data">
								<div class="col-sm-12">
									<label for="basicInput" class="form-label">Heading</label>
									<input type="text" class="form-control" id="basicInput" name="heading" value="<?php echo $new['heading']; ?>">
								</div>

								<div class="col-sm-12 mt-3">
									<label for="basicInput" class="form-label">Categories</label>
									<select class="form-control" name="cat_id">
										<?php foreach ($categoriess as $key => $categories) { ?>
											<option value="<?php echo $categories['id'] ?>"
												<?php if($categories['id']==$categories['id']){
													echo"selected";
												}
												?>
												>
												<?php echo $categories['heading']; ?>
											</option>	
										<?php } ?>
									</select>
								</div>

								<div class="col-sm-12 mt-3">
									<label for="basicInput" class="form-label">Description</label>
									<textarea class="form-control" style="height: 300px !important" name="dcp"><?php echo $new['dcp']; ?></textarea>
								</div>


								<div class="col-sm-12 mt-4">
									<label for="formFile" class="form-label">Upload Your Image</label>
									<input class="form-control" type="file" id="formFile" name="image">
								</div>

								<input type="hidden" name="id" value="<?php echo $new['id']; ?>">

								<div class="row mt-4">
									<div class="col-md-4 mx-auto">
										<button class="btn btn-success w-100" name="update_news" type="submit">Update</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

	<?php
	require_once("footer.php")
?>