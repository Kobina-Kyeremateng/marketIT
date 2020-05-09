<?php include('pageloader.php');?>

<?php

function get_all_records(){
    include('connect.php');
    $Sql = "SELECT * FROM student";
    $result = mysqli_query($db, $Sql);


    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr>  <th>studentID</th>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Fathername</th>
                          <th>MotherName</th>
                          <th>Dateofbirth</th>
                          <th>Gender</th>
                          <th>Religion</th>
                          <th>Deformity</th>
                          <th>PhoneNumber</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Course</th>
                          <th>Nationality</th>
                          <th>HomeTown</th>
                        </tr></thead><tbody>";



     while($row = mysqli_fetch_assoc($result)) {

         echo "<tr><td>" . $row['studentID']."</td>
                   <td>" . $row['Firstname']."</td>
                   <td>" . $row['Lastname']."</td>
                   <td>" . $row['Fathername']."</td>
                   <td>" . $row['MotherName']."</td>
                   <td>" . $row['dateofbirth']."</td>
                   <td>" . $row['gender']."</td>
                   <td>" . $row['Religion']."</td>
                   <td>" . $row['Deformity']."</td>
                   <td>" . $row['PhoneNumber']."</td>
                   <td>" . $row['email']."</td>
                   <td>" . $row['address']."</td>
                   <td>" . $row['Course']."</td>
                   <td>" . $row['Nationality']."</td>
                   <td>" . $row['HomeTown']."</td>
                   </tr>";
     }

     echo "</tbody></table></div>";

} else {
     echo "you have no records";
}
}
?>
<div>
<div>
  <ul class="nav nav-tabs">
      <li><a href="?page=index">Administration <img src="assets/img/details.png"></a></li>
      <li class="active"><a href="?page=addStudent">Students <img src="assets/img/student48.png"></a></li>
      <li><a href="?page=addAdmin">Staff Member <img src="assets/img/staff48.png"></a></li>
      <!-- <li><a href="?page=viewClassAc">Accountant<img src="assets/img/update.png"></a></li> -->
      <li><a href="?page=course">Courses<img src="assets/img/course.png"></a></li>
      <li><a href="?page=currentClasses">All Classes<img src="assets/img/users.png"></a></li>
      <li><a href="?page=depart" >Departments<img src="assets/img/department.png"></a></li>
      <li><a href="sms.php">SMS<img src="assets/img/details.png"></a></li>
      <li><a href="?page=notice">Notice Board <img src="assets/img/details.png" width="30px"></a></li>
  </ul>
<!-- ====== Page Content Area Start ====== -->
<div class="page-content">
    <!-- Wrapper -->
                            <div class="table-responsive"  >
                <!--**************************************************************************************************************************-->
                                <div class="container" style="width:100%">

                                        <ul class="nav nav-tabs">
                                             <li ><a href="?page=addStudent">New Student <img src="assets/img/new.png"> </a></li>
                                             <li><a href="?page=viewstudent">View List<img src="assets/img/view2.png"></a></li>
                                             <li><a href="">Edit Student<img src="assets/img/view2.png"></a></li>
                                            <li  class="active"><a href="?page=import">Import/Export Data <img src="assets/img/import.png"></a></li>
                                                                          <li><a href="?page=report">Reports </a></li>
                                        </ul>
                                        <div id="wrap">
      <div class="container">
          <div class="row">

              <form class="form-horizontal" action="studentaction.php" method="post" name="upload_excel" enctype="multipart/form-data">


                  <fieldset>

                      <!-- File Button -->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="filebutton">Select File.</label>
                          <div class="col-md-4">
                              <input type="file" name="file" id="file" class="input-large">
                          </div>
                      </div>

                      <!-- Button -->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                          <div class="col-md-4">
                              <button type="submit" id="submit" name="Importstudent" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                          </div>
                      </div>

                  </fieldset>
              </form>

          </div>
<!--function to display all the available records-->
          <?php
             get_all_records();
          ?>
      </div>
  </div>
<!--exporting data******************************************-->

<div>
  <form class="form-horizontal" action="studentaction.php" method="post" name="upload_excel"
                    enctype="multipart/form-data">
          <div class="form-group">
                  <div class="col-md-4 col-md-offset-4">
                      <input type="submit" name="Exportstudent" class="btn btn-success"  value="Export to excel"/>


                  </div>
          </div>
  </form>
</div>
