
<?php include('pageloader.php');?>

<link rel="stylesheet" href="style.css">

<div>
  <ul class="nav nav-tabs">
        <li><a href="?page=index">Administration <img src="assets/img/details.png"></a></li>
        <li><a href="?page=adminAdd">Staff   <img src="assets/img/staff48.png"></a></li>
        <li><a href="?page=userAdd">Clients  <img src="assets/img/student48.png"></a></li>
        <li><a href="?page=serviceAdd">Services  <img src="assets/img/course.png"></a></li>
        <li class="active"><a href="?page=productAdd">Products  <img src="assets/img/details.png"></a></li>
        <li><a href="?page=departmentAdd" >Departments  <img src="assets/img/department.png"></a></li>
        <li><a href="?page=sms">SMS    <img src="assets/img/details.png"></a></li>
        <li><a href="?page=notice">Notice Board <img src="assets/img/details.png"></a></li>
    </ul>
  </div>


<div class="table-responsive"  >
<!--**************************************************************************************************************************-->
    <div class="container" style="width:100%">
      <ul class="nav nav-tabs">
            <li><a href="?page=productAdd">New Product<img src="assets/img/new.png"> </a></li>
            <li class="active"><a href="?page=productView">View Product <img src="assets/img/update2.png"> </a></li>
            <li><a href="?page=productImage">Add Images <img src="assets/img/update2.png"> </a></li>
            <li><a href="?page=productImageView">View Images <img src="assets/img/update2.png"> </a></li>
            <li><a href="?page=productEdit">Edit Product <img src="assets/img/update2.png"> </a></li>
            <li><a href="csvtesting.php">Import/Export CSV<img src="assets/img/export.png"></a></li>
            <li><a href="?page=productDelete">Delete <img src="assets/img/delete2.png"></a></li>
          </ul>
    </div>
  <br>

<div class="page-content">
<!-- Wrapper -->
<div class="wrapper wrapper-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
      <!-- Ibox -->
      <div class="ibox bg-boxshadow mb-30">
        <h5 class="mb-30">Data Table</h5>
          <p align="right"> <input type="text" placeholder="Type here to search" onkeydown="loadDoc(this.value)">
            <div id="search">
          <!-- Ibox Content -->
          <div class="ibox-content">
              <!-- Table Responsive -->
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover dataTables-example">
                <thead>
                  <tr>
                    <th>Product ID</th>
                    <th>Product Category</th>
                    <th>Product Type</th>
                    <th>Product Version</th>
                    <th>Product Colour</th>
                    <th>Product Location</th>
                    <th>Product GPS</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                //connection to database
                $con = mysqli_connect('localhost', 'root','','marketit') ;
                $query = "SELECT Product.ProductID, ProductCategory.ProductCategoryName, ProductType.ProductTypeName, ProductVersion.ProductVersionName, ProductColour.ProductColourName, Product.ProductLocation,Product.ProductGPS from Product INNER JOIN ProductCategory ON Product.ProductCategoryID=ProductCategory.ProductCategoryID INNER JOIN ProductType ON Product.ProductTypeID=ProductType.ProductTypeID INNER JOIN productversion ON Product.ProductVersionID=productversion.ProductVersionID INNER JOIN ProductColour on Product.ProductColourID=ProductColour.ProductColourID ORDER BY Product.ProductID DESC";
                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_assoc($result))
                {
                    $ProductID = $data['ProductID'];
                    $ProductCategoryName = $data['ProductCategoryName'];
                    $ProductTypeName = $data['ProductTypeName'];
                    $ProductVersionName = $data['ProductVersionName'];
                    $ProductColourName = $data['ProductColourName'];
                    $ProductLocation = $data['ProductLocation'];
                    $ProductGPS = $data['ProductGPS'];
                    
                echo "<tr class='gradeX'>
                    <td class='center'>$ProductID</td>
                    <td class='center'>$ProductCategoryName</td>
                    <td class='center'>$ProductTypeName</td>
                    <td class='center'>$ProductVersionName</td>
                    <td class='center'>$ProductColourName</td>
                    <td class='center'>$ProductLocation</td>
                    <td class='center'>$ProductGPS</td>
                    <td class='center'><a href='?page=productImage&&id=$ProductID'>Add Images</a> || <a href='?page=productEdit&&id=$ProductID'>Edit</a></td
                  </tr>";
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>

