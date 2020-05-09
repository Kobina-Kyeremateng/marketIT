<?php include('pageloader.php');?>
<?php
$id=$_GET['id'];
  $con = mysqli_connect('localhost', 'root','','marketit');
    $query = "Select * from department where DepartmentID=$id";
      $result = mysqli_query($con,$query);
      $row = mysqli_fetch_assoc($result);
    $DepartmentID=$row['DepartmentID'];
  $DepartmentName=$row['DepartmentName'];
$DepartmentInitial=$row['DepartmentInitial'];
?>

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


<div class="table-responsive"  >
<!--**************************************************************************************************************************-->
<div class="container" style="width:100%">
  <ul class="nav nav-tabs">
    <li><a href="?page=departmentAdd">New Department<img src="assets/img/new.png"> </a></li>
    <li><a href="?page=departmentView">View Department<img src="assets/img/update2.png"> </a></li>
    <li class="active"><a href="?page=departmentEdit">Edit Department <img src="assets/img/update2.png"> </a></li>
    <li><a href="csvtesting.php">Import/Export CSV<img src="assets/img/export.png"></a></li>
    <li><a href="?page=departmentDelete">Delete <img src="assets/img/delete2.png"></a></li>
  </ul>
</div>
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading">Edit a Department</div>
          <form action="departmentAction.php" method="post"  enctype="multipart/form-data">
            <div>
              <h4>Department Details</h4>
                <div>
                  <label>Department Name</label>
                  <input type="text" name="DepartmentName" id="DepartmentName" value="<?php echo $DepartmentName?>">
                </div>

                <div>
                  <label for="DepartmentInitial">Department Initial</label>
                  <input type="text" name="DepartmentInitial" id="DepartmentInitial" value="<?php echo $DepartmentInitial?>">
                </div>

                <div>
                  <label>Status</label>
                    <select name="status" id="status" class="form-control">
                      <?php
                      $con = mysqli_connect('localhost', 'root', '', 'marketit');
                      //$querry = 'select * from status';
                      $querry = 'select d.StatusID,s.StatusName from department d INNER JOIN Status s ON d.StatusID=s.StatusID';
                      $result = mysqli_query($con, $querry);
                      while ($data = mysqli_fetch_assoc($result)) {
                        echo "<option value=".$data['StatusID'].">".$data['StatusName']."</option>";
                      }
                      ?>
                    </select>
                  </div>
                <button class="btn waves-effect waves-light" type="submit" name="update">Update</button>
                <input type="hidden" name="DepartmentID" value="<?php echo $DepartmentID?>">
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
</div>
