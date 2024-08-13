<?php
$id = $_GET["id"];
if($id){
include("../connect.php");
$sqlDelete = "DELETE FROM posts WHERE id = $id";
if(mysqli_query($conn, $sqlDelete)){
    session_start();
    $_SESSION["delete"] = "پست حذف شد";
    header("Location:index.php");
}else{
    die("خطایی رخ داده است");
}
}else{
    echo "پستی یافت نشد";
}
?>