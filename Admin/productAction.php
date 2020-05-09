<?php
if (isset($_POST['save'])) {
    $productcategory = $_POST['productcategory'];
    $producttype = $_POST['producttype'];
    $productbrand = $_POST['productbrand'];
    $productversion= $_POST['productversion'];
    $productcolour=$_POST['productcolour'];
    $otherDetails=$_POST['otherDetails'];
    $region=$_POST['region'];
    $productLocation=$_POST['productLocation'];
    $productGPS=$_POST['productGPS'];
    $status=$_POST['status'];
    $manDate=$_POST['manDate'];
    $expDate=$_POST['expDate'];

if(!empty($productcategory) && !empty($producttype) && !empty($productbrand) && !empty($productversion) && !empty($productcolour) && !empty($otherDetails) && !empty($region) && !empty($productLocation) && !empty($productGPS) && !empty($status) && !empty($manDate) && !empty($manDate) )
   {
    $dbc = mysqli_connect('localhost', 'root', '','marketit') or die('Error connecting to mysql server');
  	$query = "INSERT INTO product (ProductCategoryID,ProductTypeID,ProductBrandID,ProductVersionID,ProductColourID, ProductDetails, RegionID, ProductLocation, ProductGPS, StatusID,ManufacturingDate,ExpiryDate) VALUES('$productcategory','$producttype','$productbrand','$productversion','$productcolour','$otherDetails','$region','$productLocation','$productGPS','$status','$manDate','$expDate') ";
    $result = mysqli_query($dbc, $query) or die('Error querying database');

  	mysqli_close($dbc);
    header('location:index.php?page=productView');
  }
  else
  {
  	  echo '<p>Please enter all of the information to add your information.</p>';
  }
  }
?>

<?php 
  if(isset($_POST['addImage'])){

    $pic_name1 = $_FILES['Image1']['name'];
    $pic_tmp_name1=$_FILES['Image1']['tmp_name'];
    $picture1 ="uploads/".rand(1,100000).$pic_name1;
    move_uploaded_file($pic_tmp_name1,$picture1);

    $pic_name2 = $_FILES['Image2']['name'];
    $pic_tmp_name2=$_FILES['Image2']['tmp_name'];
    $picture2 ="uploads/".rand(1,100000).$pic_name2;
    move_uploaded_file($pic_tmp_name2,$picture2);

    $pic_name3 = $_FILES['Image3']['name'];
    $pic_tmp_name3=$_FILES['Image3']['tmp_name'];
    $picture3 ="uploads/".rand(1,100000).$pic_name3;
    move_uploaded_file($pic_tmp_name3,$picture3);

    $pic_name4 = $_FILES['Image4']['name'];
    $pic_tmp_name4=$_FILES['Image4']['tmp_name'];
    $picture4 ="uploads/".rand(1,100000).$pic_name4;
    move_uploaded_file($pic_tmp_name4,$picture4);

    $pic_name5 = $_FILES['Image5']['name'];
    $pic_tmp_name5=$_FILES['Image5']['tmp_name'];
    $picture5 ="uploads/".rand(1,100000).$pic_name5;
    move_uploaded_file($pic_tmp_name5,$picture5);

    $pic_name6 = $_FILES['Image6']['name'];
    $pic_tmp_name6=$_FILES['Image6']['tmp_name'];
    $picture6 ="uploads/".rand(1,100000).$pic_name6;
    move_uploaded_file($pic_tmp_name6,$picture6);

    $ProductID = $_POST['ProductID'];
  

    if(!empty ($ProductID) && !empty($picture1) && !empty($picture2)){
      $con = mysqli_connect('localhost', 'root', '','marketit') or die('Error connecting to mysql server');
      $query = "INSERT INTO ProductImage(ProductID,Image1,Image2,Image3,Image4,Image5,Image6) VALUES ('$ProductID','$picture1','$picture2','$picture3','$picture4','$picture5','$picture6')";
      $result = mysqli_query($con,$query) OR DIE ('Error querying databse');
      mysqli_close($dbc);
      header('location:index.php?page=productImageView');
    }else
      {
      echo '<p>Please enter all of the information to add your information.</p>';
      }


    //   if(!empty ($ProductID) && !empty($picture1) && !empty($Image2) && !empty($Image3) && !empty($Image4) && !empty($Image5) && !empty($Image6)){
    //   $con = mysqli_connect('localhost', 'root', '','marketit') or die('Error connecting to mysql server');
    //   $query = "INSERT INTO ProductImage(ProductID,Image1,Image2,Image3,Image4,Image5,Image6) VALUES ('$ProductID','$picture1','$picture2','$picture3','$picture4','$picture5','$picture6')";
    //   $result = mysqli_query($con,$query) OR DIE ('Error querying databse');
    //   mysqli_close($dbc);
    //   header('location:index.php?page=productImageView');
    // }else
    //   {
    //   echo '<p>Please enter all of the information to add your information.</p>';
    //   }
  }
?>
