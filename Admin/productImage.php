
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
            <li><a href="?page=productView">View Product <img src="assets/img/update2.png"> </a></li>
            <li class="active"><a href="?page=productImage">Add Images <img src="assets/img/update2.png"> </a></li>
            <li><a href="?page=productImageView">View Images <img src="assets/img/update2.png"> </a></li>
            <li><a href="?page=productEdit">Edit Product <img src="assets/img/update2.png"> </a></li>
            <li><a href="csvtesting.php">Import/Export CSV<img src="assets/img/export.png"></a></li>
            <li><a href="?page=productDelete">Delete <img src="assets/img/delete2.png"></a></li>
          </ul>
    </div>
  <br>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading">Add Images</div>
            <div class="table">
              <form action="productAction.php" method="POST" enctype="multipart/form-data">
                  <div>
                    <div>
                              <div>
                                <label>Product ID</label>
                                  <?php
                                      $id=$_GET['id'];
                                      $con=mysqli_connect('localhost','root','','marketit');
                                      $querry="select * from Product where ProductID='$id'";
                                      $result=mysqli_query($con,$querry);
                                      $data=mysqli_fetch_assoc($result);
                                  ?>
                                  <input type="text" name="ProductID" id="ProductID"  value="<?=$data['ProductID']?>" readonly>
                              </div> 

                             


                              <div>
                                  <label>Image 1</label>
                                  <input type="file" name="Image1" id="Image1">
                             </div>

                             <div>
                                  <label>Image 2</label>
                                  <input type="file" name="Image2" class="form-control">
                             </div>

                             <div>
                                  <label>Image 3</label>
                                  <input type="file" name="Image3" class="form-control">
                             </div>

                             <div>
                                  <label>Image 4</label>
                                  <input type="file" name="Image4" class="form-control">
                             </div>

                             <div>
                                  <label>Image 5</label>
                                  <input type="file" name="Image5" class="form-control">
                             </div>

                             <div>
                                  <label>Image 6</label>
                                  <input type="file" name="Image6" class="form-control">
                             </div>
                             <div>
                               <br>
                             </div>
                             <div>
                                <div class="btn--area"><button class="btn waves-effect waves-light" type="submit" name="addImage">Add Images</button></div>
                            </div>
                    </div>

                    
                  </div>
                </form>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
