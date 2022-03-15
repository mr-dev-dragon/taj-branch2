<?php
  $mysqli = new mysqli('localhost', 'root', '123','Database_e-commerce');


session_start();
$addbtn = true;
$id = 0;

if (isset($_POST['save'])){
  $id = $_POST['id'];
  $productName = $_POST['productName'];
  $description = $_POST['description'];
  $unitPrice = $_POST['unitPrice'];
  $quantityInStock = $_POST['quantityInStock'];
  $image = $_POST['image'];
  $mysqli->query("INSERT INTO `products`( `productName`, `description`, `unitPrice`, `quantityInStock`, `image`) 
                  VALUES ('$productName','$description','$unitPrice','$quantityInStock','$image ')") or die($mysqli->error());

  $_SESSION['message'] =  "Record has been saved!";
  $_SESSION['msg_type'] = 'success';
  $addbtn = true;
  header("location:../index.php#produit");
}
else{
   $addbtn = false;
}

 if(isset($_GET['delete'])){
    $id = $_GET['delete'];
     $mysqli->query("SET FOREIGN_KEY_CHECKS=0; -- to disable them") or die($mysqli->error());
     $mysqli->query("DELETE FROM `products` WHERE  productID = '$id';") or die($mysqli->error());
      $mysqli->query(" SET FOREIGN_KEY_CHECKS=1; -- to re-enable them") or die($mysqli->error());
    $_SESSION['message'] =  "Record has been Delete!";
    $_SESSION['msg_type'] = 'danger';
    header("location:index.php#produit");
 }




 



 if (isset($_GET['edit'])){
   $id = $_GET['edit'];
   $result = $mysqli->query("SELECT * FROM products WHERE productID ='$id'=1 LIMIT 1 ") or die($mysqli->error());

      $row = $result->fetch_array();
       $productName = $row['productName'];
       $description = $row['description'];
       $unitPrice = $row['unitPrice'];
       $quantityInStock = $row['quantityInStock'];
       $image = $row['image'];
       $update = true;
       $addbtn = false;
      //  header("location:index.php#produit");

 }
 else{
  $productName = '';
  $description = '';
  $unitPrice = '';
  $quantityInStock ='';
  $image = '';
  $update = false;
  $addbtn = true;
 }
 if (isset($_POST['update'])){
    $id = $_POST['id'];
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $unitPrice = $_POST['unitPrice'];
    $quantityInStock = $_POST['quantityInStock'];
    $salary = $_POST['salary'];
    $f_unction = $_POST['function'];
    $image = $_POST['image'];
    $mysqli->query("UPDATE `products` SET `productName`='$productName', `description`='$description', `unitPrice`='$unitPrice', `quantityInStock`='$quantityInStock',  `image`='$image'  WHERE productID ='$id'")or die($mysqli->error()); 
    $_SESSION['message'] = "the update was successful";
    $_SESSION['msg_type'] = 'warning';
    $addbtn = true;
    header("Location:../index.php#produit");
 }
 if (isset($_POST['addbtn'])){

 $addbtn = false ;  

 }




?>
