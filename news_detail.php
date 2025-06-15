<?php
require_once("header.php");

$id=$_GET['id'];
$data="SELECT * FROM news WHERE id='$id'";
$rec=db::getRecord($data);
?>
<style>
.span_heading {
    color: #b90503;
    font-weight: bold;
}
</style>

<div class="section mt-5">
    <div class="container">


        <div class="row">
            <div class="col-md-12">
                <img src="admin/uploads/<?php  echo $rec['image'] ?>" class="w-100">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <h3><?php  echo $rec['heading'] ?></h3>
                <p><?php  echo $rec['dcp'] ?></p>
            </div>
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>