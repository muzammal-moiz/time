<?php
session_start();
require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");
// all insertion code start
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $rec = db::getRecord($query);
    if ($rec != NULL) {
        $_SESSION['email'] = $_POST['email'];
        header('location:dashboard.php');
    } else {
        header('location:index.php');
    }
}
//update admin
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    if ($_FILES['doc_file']['name'] == "") {
        $sql2 = "UPDATE admin SET name='$name',password='$password'";
        $r = db::query($sql2);
        echo "<script>location='profile.php?status=1'</script>";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['doc_file']['name'];
        $file_loc = $_FILES['doc_file']['tmp_name'];
        $file_size = $_FILES['doc_file']['size'];
        $file_type = $_FILES['doc_file']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql2 = "UPDATE admin SET name='$name',password='$password',image='$final_file'";
        $r = db::query($sql2);
        echo "<script>location='profile.php?status=1'</script>";

    }
}

//logout
if (isset($_GET['logout'])) {
    unset($_SESSION['email']);
    echo "<script>location='index.php'</script>";
}

// update_logo
if (isset($_POST['update_logo'])) {
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id = $db->real_escape_string($_POST['id']);

    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE logo SET dcp='$dcp'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE logo SET dcp='$dcp',image='$final_file' ";
        db::query($sql);
    }
    echo "<script>location='logo.php'</script>";
}


//add_categories
if (isset($_POST['add_categories'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $query_insert = "INSERT INTO `categories` (`heading`) VALUES ('$heading')";
    db::query($query_insert);
    echo "<script>location='categories.php'</script>";
}

//update_categories
if (isset($_POST['update_categories'])) {
    $heading = $db->real_escape_string($_POST['heading']);

    $id=$_POST['id'];
    $sql = "UPDATE categories SET heading='$heading' WHERE id='$id'";
    db::query($sql);
    
    echo "<script>location='categories.php'</script>";
}
//del_categories
if (isset($_GET['del_categories'])) {
    $id = $_GET['del_categories'];
    $sql = "DELETE FROM categories WHERE id='$id'";
    db::query($sql);
    echo "<script>location='categories.php'</script>";
}

//add_news
if (isset($_POST['add_news'])) {
    $heading = $_POST['heading'];
    $dcp =  $db->real_escape_string($_POST['dcp']);
    $cat_id=$_POST['cat_id'];

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `news` (`id`,`cat_id`,`heading`,`dcp`,`image`) VALUES ('','$cat_id','$heading','$dcp','$final_file')";
    
    $ins=db::query($query_insert);
    if($ins){
        echo "<script>alert('News Added')</script>";
        echo "<script>location='news.php'</script>";
    }else{
     echo "<script>alert('News Not Added')</script>";
     echo "<script>location='add_news.php'</script>";
 }
}
// update_news
if (isset($_POST['update_news'])) {
   $heading = $_POST['heading'];
   $dcp =  $db->real_escape_string($_POST['dcp']);
   $cat_id=$_POST['cat_id'];

   $id = $_POST['id'];
   if ($_FILES['image']['name'] == "") {
    $sql = "UPDATE news SET heading='$heading',dcp='$dcp',cat_id='$cat_id' WHERE id='$id'";
} else {
    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $sql = "UPDATE news SET heading='$heading',dcp='$dcp',image='$final_file',cat_id='$cat_id' WHERE id='$id'";
}
$upd=db::query($sql);
if($upd){
 echo "<script>alert('News Updated')</script>";
 echo "<script>location='news.php'</script>";
}

}

// del_news
if (isset($_GET['del_news'])) {
    $id = $_GET['del_news'];
    $sql = "DELETE FROM news WHERE id='$id'";
    db::query($sql);
    echo "<script>location='news.php'</script>";
}

//add_about
if (isset($_POST['add_about'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `about` (`heading`,`image`,`dcp`) VALUES ('$heading','$final_file','$dcp')";
    db::query($query_insert);
    echo "<script>location='about.php'</script>";
}

//update_about
if (isset($_POST['update_about'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $id=$_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE about SET heading='$heading',dcp='$dcp' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE about SET heading='$heading',dcp='$dcp',image='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='about.php'</script>";
}
//del_about
if (isset($_GET['del_about'])) {
    $id = $_GET['del_about'];
    $sql = "DELETE FROM about WHERE id='$id'";
    db::query($sql);
    echo "<script>location='about.php'</script>";
}

//add_magazine
if(isset($_POST['add_magazine'])){
    $title=$db->real_escape_string($_POST['title']);

    $file=rand(1000,100000). "-" . $_FILES['image']['name'];
    $file_loc=$_FILES['image']['tmp_name'];
    $file_size==$_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $file = rand(1000,100000) . "-" . $_FILES['pdf_file']['name'];
$file_loc = $_FILES['pdf_file']['tmp_name'];
$file_size = $_FILES['pdf_file']['size'];
$file_type = $_FILES['pdf_file']['type'];
$folder = "pdf/";
$new_file_name = strtolower($file);
$final_file_pdf = str_replace(' ', '-', $new_file_name);
$a = move_uploaded_file($file_loc, $folder . $final_file_pdf);

    $query_insert="INSERT INTO `magazine`(`image`, `title`, `pdf_file`) VALUES ('$final_file','$title','$final_file_pdf')";
    db::query($query_insert);
    echo "<script>location='magazine.php'</script>";
}

//update_magazine
if (isset($_POST['update_magazine'])) {
$title = $db->real_escape_string($_POST['title']);
$id=$_POST['id'];

if ($_FILES['image']['name'] && $_FILES['pdf_file']['name'] == "") {
$sql = "UPDATE `magazine` SET `title`='$title' WHERE id='$id'";
db::query($sql);
}
else {

$file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
$file_size = $_FILES['image']['size'];
$file_type = $_FILES['image']['type'];
$folder = "uploads/";
$new_file_name = strtolower($file);
$final_file = str_replace(' ', '-', $new_file_name);
$a = move_uploaded_file($file_loc, $folder . $final_file);


$file = rand(1000,100000) . "-" . $_FILES['pdf_file']['name'];
$file_loc = $_FILES['pdf_file']['tmp_name'];
$file_size = $_FILES['pdf_file']['size'];
$file_type = $_FILES['pdf_file']['type'];
$folder = "pdf/";
$new_file_name = strtolower($file);
$final_file_pdf = str_replace(' ', '-', $new_file_name);
$a = move_uploaded_file($file_loc, $folder . $final_file_pdf);

$sql = "UPDATE `magazine` SET `image`='$final_file',`title`='$title',`pdf_file`='$final_file_pdf' WHERE id='$id'";
echo db::query($sql);
}
echo "<script>
location = 'magazine.php'
</script>";
}


//del_magazine
if(isset($_GET['del_magazine'])){
$id=$db->real_escape_string($_GET['del_magazine']);
$delete_query="DELETE FROM `magazine` WHERE id='$id'";
db::query($delete_query);
echo "<script>
location = 'magazine.php'
</script>";
}


//add_contact
if (isset($_POST['add_contact'])) {
$f_name = $db->real_escape_string($_POST['f_name']);
$l_name = $db->real_escape_string($_POST['l_name']);
$email = $db->real_escape_string($_POST['email']);
$phone = $db->real_escape_string($_POST['phone']);
$message = $db->real_escape_string($_POST['message']);

$query_insert = "INSERT INTO `contact` (`f_name`,`l_name`,`email`,`phone`,`message`) VALUES
('$f_name','$l_name','$email','$phone','$message')";
db::query($query_insert);
echo "<script>
location = '../contact.php'
</script>";
}

//del_contact
if (isset($_GET['del_contact'])) {
$id = $_GET['del_contact'];
$sql = "DELETE FROM contact WHERE id='$id'";
db::query($sql);
echo "<script>
location = 'contact.php'
</script>";
}

// update_contact_detail
if (isset($_POST['update_contact_detail'])) {
$heading = $db->real_escape_string($_POST['heading']);
$dcp = $db->real_escape_string($_POST['dcp']);
$phone = $db->real_escape_string($_POST['phone']);
$email = $db->real_escape_string($_POST['email']);
$location = $db->real_escape_string($_POST['location']);

$id = $db->real_escape_string($_POST['id']);

$sql = "UPDATE contact_detail SET heading='$heading',dcp='$dcp',phone='$phone',email='$email',location='$location'";
db::query($sql);

echo "<script>
location = 'contact_detail.php'
</script>";
}