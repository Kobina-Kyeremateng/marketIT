<?php include('pageloader.php'); ?>
<?php include('connect.php');?>

<div class="tab-content">
  <div class="tab-pane active" role="tabpanel" id="tab-1">
    <p>
      <div>
          <ul class="nav nav-tabs">
              <li><a href="?page=index"> Homepage <img src="assets/img/details.png"></a></li>
              <li><a href="?page=adminAdd">Staff   <img src="assets/img/staff48.png"></a></li>
              <li><a href="?page=userAdd">Clients  <img src="assets/img/student48.png"></a></li>
              <li><a href="?page=serviceAdd">Services  <img src="assets/img/course.png"></a></li>
              <li class="active"><a href="?page=productAdd"> Products <img src="assets/img/details.png"></a></li>
              <li><a href="?page=departmentAdd" >Departments  <img src="assets/img/department.png"></a></li>
              <li><a href="?page=sms">SMS    <img src="assets/img/details.png"></a></li>
              <li><a href="?page=notice">Notice Board <img src="assets/img/details.png"></a></li>
          </ul>
      </div>
      <div class="table-responsive">
        <!--****************************************************************************-->
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

        <!--*************************************************************************************************************************-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
              <div class="panel panel-primary">
                <div class="panel-heading">Add Product</div>

                <!-- /.panel-heading -->
                <div>
                  <div class="table">

                    <form action="productAction.php" method="POST">
                      <b>
                        <h5>Product Details</h5>
                      </b>
                        <div>
                          <label>Product Category</label>
                            <select name="productcategory" id="productcategory" class="form-control"  style="width: 500px">
                              <option value=""> Select a Category</option>
                                <?php
                                  global $db;
                                  $query=$db->query('Select * from productcategory');
                                  $rowCount = $query->num_rows;
                                   if($rowCount > 0){
                                      while ($row = $query->fetch_assoc()) {
                                        echo '<option value="'.$row['ProductCategoryID'].'">'.$row['ProductCategoryName'].'</option>';
                                      }
                                   }
                                ?>
                            </select>
                        </div> 
                      
                        <div>
                          <label>Product Type</label>
                            <select name="producttype" id="producttype" class="form-control" style="width: 500px">
                              <option value=""> Select a Category First</option>
                            </select>
                        </div> 
                      
                        <div>
                          <label>Product Brand</label>
                            <select name="productbrand" id="productbrand" class="form-control" style="width: 500px">
                              <option value=""> Select a Type First</option>
                            </select>
                        </div> 
                      
                        <div>
                          <label>Product Version</label>
                            <select name="productversion" id="productversion" class="form-control" style="width: 500px"> <a href="">Add</a>
                              <option value=""> Select a Brand First</option>
                            </select>
                        </div> 


                        <div>
                          <label>Product Colour</label>
                            <select name="productcolour" id="productcolour" class="form-control" style="width: 500px"> <a href="">Add</a>
                              <option value=""> Select a Version First</option>
                            </select>  
                        </div> 

                        <div>
                          <label>Product Details</label>
                           <input type="text" name="otherDetails" id="otherDetails" class="form-control" style="width:500px">
                        </div>
                      
                        <div>
                          <label> Region </label>
                            <select name="region" id="region" class="form-control"  style="width: 500px">
                                <?php
                                  $con = mysqli_connect('localhost', 'root', '', 'marketit');
                                  $querry = 'select * from region';
                                  $result = mysqli_query($con, $querry);
                                  while ($data = mysqli_fetch_assoc($result)) {
                                    echo "<option value=" . $data['RegionID'] . ">" . $data['RegionName'] . "</option>";
                                  }
                                ?>
                            </select>
                        </div>

                        <div>
                          <label>Product Location Details</label>
                           <input type="text" name="productLocation" id="productLocation" class="form-control" style="width:500px">
                        </div>

                        <div>
                          <label>Product Location GPS</label>
                           <input type="text" name="productGPS" id="productGPS" class="form-control" style="width:500px">
                        </div>

                        <div>
                          <label> Status </label>
                            <select name="status" id="status" class="form-control"  style="width: 500px">
                                <?php
                                  $con = mysqli_connect('localhost', 'root', '', 'marketit');
                                  $querry = 'select * from status';
                                  $result = mysqli_query($con, $querry);
                                  while ($data = mysqli_fetch_assoc($result)) {
                                    echo "<option value=" . $data['StatusID'] . ">" . $data['StatusName'] . "</option>";
                                  }
                                ?>
                            </select>
                        </div>

                        <div>
                          <label>Manufacturer's Date</label>
                          <input type="date" name="manDate" id="manDate" style="width: 500px" class="form-control" required>
                        </div>
                      
                        <div>
                          <br>
                        </div>
                      
                        <div>
                          <label>Expiry Date</label>
                          <input type="date" name="expDate" id="expDate" style="width: 500px" class="form-control" required>
                        </div>

                      <div class="buttons">
                        <button type="submit" class="btn waves-effect m-2 btn-dark" name="save">Add</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<!-- ======== Must needed plugins to the run this template ======= -->
<script src="assets/js/jquery/jquery.2.2.4.min.js"></script>
<script src="assets/js/bootstrap/popper.min.js"></script>
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins-js/menu-active.js"></script>
<script src="js/plugins-js/plugins-js/materialize.js"></script>
<script src="js/box-switch.js"></script>

<script src="js/fullscreen.js"></script>
<script src="js/nicescroll.min.js"></script>
<script src="js/active.js"></script>
<!-- this plugins only for demo purpose -->
<script src="js/settings.js"></script>
<!-- ======== /. Must needed plugins to the run this template ======= -->

<!-- ======== Only needs these plugins for the run this page ======== -->
<script src="assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/vendor_components/jvectormap/lib2/jquery-jvectormap-us-aea-en.js"></script>
<script src="assets/vendor_components/jvectormap/lib2/jvectormap.custom-usa.js"></script>

<script src="js/plugins-js/data-labelling-js/chart-bundel.js"></script>
<script src="js/plugins-js/data-labelling-js/utils.js"></script>
<script src="js/plugins-js/data-labelling-js/active.js"></script>

<script src="js/plugins-js/table-js/scrool-bar.js"></script>
<script src="js/plugins-js/table-js/table.js"></script>


<!-- ======== /. Only needs these plugins for the run this page ======== -->
