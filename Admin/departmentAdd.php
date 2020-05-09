<?php include('pageloader.php'); ?>

<div>
    <ul class="nav nav-tabs">
        <li><a href="?page=index">Administration <img src="assets/img/details.png"></a></li>
        <li><a href="?page=adminAdd">Staff   <img src="assets/img/staff48.png"></a></li>
        <li><a href="?page=userAdd">Clients  <img src="assets/img/student48.png"></a></li>
        <li><a href="?page=serviceAdd">Services  <img src="assets/img/course.png"></a></li>
        <li><a href="?page=productAdd">Products  <img src="assets/img/details.png"></a></li>
        <li class="active"><a href="?page=departmentAdd" >Departments  <img src="assets/img/department.png"></a></li>
        <li><a href="?page=sms">SMS    <img src="assets/img/details.png"></a></li>
        <li><a href="?page=notice">Notice Board <img src="assets/img/details.png"></a></li>
    </ul>
</div>

<div class="tab-content">
  <div class="tab-pane active" role="tabpanel" id="tab-1">
    <p>
      <div class="table-responsive">
        <!--****************************************************************************-->
        <div class="container" style="width:100%">
          <ul class="nav nav-tabs">
            <li class="active"><a href="?page=departmentAdd">New Department<img src="assets/img/new.png"> </a></li>
            <li><a href="?page=departmentView">View Department <img src="assets/img/update2.png"> </a></li>
            <li><a href="?page=departmentEdit">Edit Department <img src="assets/img/update2.png"> </a></li>
            <li><a href="csvtesting.php">Import/Export CSV<img src="assets/img/export.png"></a></li>
            <li><a href="?page=departmentDelete">Delete <img src="assets/img/delete2.png"></a></li>
            <!-- <li><a href="#">Manage Course </a></li> -->
          </ul>
          <br>
        </div>

        <!--*************************************************************************************************************************-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
              <div class="panel panel-primary">
                <div class="panel-heading">Add Department</div>

                <!-- /.panel-heading -->
                <div>
                  <div class="table">

                    <form action="departmentAction.php" method="POST">
                      <b>
                        <h5>Department Details</h5>
                      </b>
                      <div class="fieldgroup">
                        <input type="text" name="departmentName" id="departmentName" required>
                        <label for="departmentName">Department Name</label>
                      </div>

                      <div class="fieldgroup">
                        <input type="text" name="departmentInitial" id="departmentInitial" required>
                        <label for="departmentInitial">Department Initial</label>
                      </div>

                      <div>
                        <label>Status</label>
                          <select name="status" id="status" class="form-control">
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'marketit');
                            $querry = 'select * from status';
                            $result = mysqli_query($con, $querry);
                            while ($data = mysqli_fetch_assoc($result)) {
                              echo "<option value=".$data['StatusID'].">".$data['StatusName']."</option>";
                            }
                            ?>
                          </select>
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

</body>

</html>