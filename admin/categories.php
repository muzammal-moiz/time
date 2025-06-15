<?php
require_once("header.php");
require_once("sidebar.php");


$query="SELECT * from categories";
$recs=db::getRecords($query);
?>

<!-- main content start -->
<div class="main-content">
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="card" style="background: #e90606;">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<h4 class="mb-0 text-light">Categories</h4>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<a href="add_categories.php" class="btn btn-primary w-100">Add Categories</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mb-25">
		<div class="col-12">
			<div class="card" style="background: #fff;">
				<div class="card-body">
					<table class="table table-bordered table-dashed table-hover digi-dataTable dataTable-resize table-striped" id="componentDataTable3">
						<thead>
							<tr>
								<th><span class="resize-col">ID</span></th>
								<th><span class="resize-col">Categories</span></th>
								<th><span class="resize-col">Action</span></th>
								<th><span class="resize-col">Delete</span></th>
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
										<td><span class="resize-col"><?php  echo $rec['heading'] ?></span></td>
										<td>
											<span class="resize-col">
												<a href="update_categories.php?id=<?php  echo $rec['id']; ?>" class="btn btn-primary w-100 text-dark">Edit</a>
											</span>
										</td>
										<td>
											<span class="resize-col">
												<a href="action.php?del_categories=<?php  echo $rec['id']; ?>" class="btn w-100 btn-danger text-light" style="text-decoration: none;">Trash</a>
											</span>
										</td>
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