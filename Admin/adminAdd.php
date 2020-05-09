<?php include('pageloader.php'); ?>

<div>
    <ul class="nav nav-tabs">
        <li><a href="?page=index">Administration <img src="assets/img/details.png"></a></li>
        <li class="active"><a href="?page=adminAdd">Staff   <img src="assets/img/staff48.png"></a></li>
        <li><a href="?page=userAdd">Clients  <img src="assets/img/student48.png"></a></li>
        <li><a href="?page=serviceAdd">Services  <img src="assets/img/course.png"></a></li>
        <li><a href="?page=productAdd">Products  <img src="assets/img/details.png"></a></li>
        <li><a href="?page=departmentAdd" >Departments  <img src="assets/img/department.png"></a></li>
        <li><a href="?page=sms">SMS    <img src="assets/img/details.png"></a></li>
        <li><a href="?page=notice">Notice Board <img src="assets/img/details.png"></a></li>
    </ul>

  <div class="table-responsive">
    <!--**************************************************************************************************************************-->
    <div class="container" style="width:100%">
      <ul class="nav nav-tabs">
        <li class="active"><a href="?page=adminAdd">Add Staff <img src="assets/img/new.png"> </a></li>
        <li><a href="?page=adminView">View Staff<img src="assets/img/view2.png"></a></li>
        <li class="disabled"><a href="?page=adminView">Edit Staff <img src="assets/img/import.png"></a></li>
        <li><a href="?page=adminReport">Reports <img src="assets/img/import.png"></a></li>
      </ul>
    </div>
    <br>
    <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
              <div class="panel panel-primary">
                <div class="panel-heading">Add New Staff</div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                  <div class="table">


                    <form action="adminAction.php" method="POST" enctype="multipart/form-data">
                      <div style="float:left;  position:relative">
                        <div>
                          <h4>Personal Details</h4>
                        </div>

                        <div>
                          <label>First Name</label>
                          <input type="text" name="firstName" id="firstName" class="form-control">
                        </div>

                        <div>
                          <label>Last Name</label>
                          <input type="text" name="lastName" id="lastName" class="form-control">
                        </div>

                        <div>
                          <label> Other Names</label>
                          <input type="text" name="otherName" id="otherName" class="form-control">
                        </div>

                        <div>
                          <label>Date Of Birth</label>
                          <input type="date" name="DOB" id="DOB" onchange="tdate()" required class="form-control">
                        </div>

                        <div>
                          <label>Gender</label>
                          <select name="gender" id="gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>

                          <div>
                            <label> Title </label>
                            <select name="title" id="title" onchange="OnSelectionChange(this)" class="form-control">
                             <?php
                               $con = mysqli_connect('localhost', 'root', '', 'marketit');
                               $querry = 'select * from Prefix';
                               $result = mysqli_query($con, $querry);
                               while ($data = mysqli_fetch_assoc($result)) {
                                 echo "<option value=" . $data['PrefixID'] . ">" . $data['PrefixInitial'] . "</option>";
                               }
                             ?>
                            </select>
                          </div>


                        <div>
                          <label>Religion</label>
                          <select name="religion" id="religion" class="form-control">
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'marketit');
                            $querry = 'select * from religion';
                            $result = mysqli_query($con, $querry);
                            while ($data = mysqli_fetch_assoc($result)) {
                              echo "<option value=" . $data['ReligionID'] . ">" . $data['ReligionName'] . "</option>";
                            }
                            ?>
                          </select>
                        </div>

                        <div>
                          <label> Nationality</label>
                          <select name="nationality" id="nationality" class="form-control">
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'marketit');
                            $querry = 'select * from nationality';
                            $result = mysqli_query($con, $querry);
                            while ($data = mysqli_fetch_assoc($result)) {
                              echo "<option value=" . $data['NationalityID'] . ">" . $data['NationalityName'] . "</option>";
                            }
                            ?>
                          </select>
                        </div>

                        <!-- <div>
                          <label> Deformity</label>
                          <select name="deformity" id="deformity" onchange="OnSelectionChange(this)" class="form-control">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>
                        </div> -->
                        

                      </div>
                      <!--section two-->
                      <div style="float:right; position:relative">
                        <div>
                          <h4>Contact Details</h4>
                        </div>
                        <div>
                          <label> Phone Number</label>
                          <input type="text" name="mobile" class="form-control">
                        </div>

                        <div>
                          <label> Address</label>
                          <input type="text" name="address" class="form-control">
                        </div>

                        <div>
                          <label> Email</label>
                          <input type="email" name="email" class="form-control">
                        </div>

                        <div>
                          <label>Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                        
                        <div>
                          <label>Appointment Date</label>
                          <input type="date" name="appointmentDate" required class="form-control" max="<?php echo date('Y-m-d');?>">
                        </div>
                        
                        <div>
                          <input type="hidden" name="role" id="role" value="1" readonly>
                        </div>

                        <div>
                          <label>Department</label>
                            <select name="department" id="department" class="form-control">
                              <?php
                              $con = mysqli_connect('localhost', 'root', '', 'marketit');
                              $querry = 'select * from department';
                              $result = mysqli_query($con, $querry);
                              while ($data = mysqli_fetch_assoc($result)) {
                                echo "<option value=" . $data['DepartmentID'] . ">" . $data['DepartmentName'] . "</option>";
                              }
                              ?>
                            </select>
                        </div>

                        <div>
                          <label>Status</label>
                            <select name="status" id="status" class="form-control">
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
                          <label>Image</label>
                          <input type="file" name="Image" class="form-control">
                        </div>


                      </div>

                      <!--this is section three-->
                      <div style="float:left;  position:relative; clear:both;">
                        <h4>Emergency Contact Information</h4>
                        <div>
                          <label>Full Name</label>
                          <input type="text" name="guardianName" id="guardianName" class="form-control">
                        </div>

                        <div>
                          <label>Mobile</label>
                          <input type="text" name="guardianMobile" class="form-control">
                        </div>

                        <div>
                          <label>Relationship</label>
                          <select name="guardianRelationship" id="guardianRelationship" class="form-control">
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'marketit');
                            $querry = 'select * from relation';
                            $result = mysqli_query($con, $querry);
                            while ($data = mysqli_fetch_assoc($result)) {
                              echo "<option value=" . $data['RelationID'] . ">" . $data['RelationName'] . "</option>";
                            }
                            ?>
                          </select>
                        </div>


                        <br>
                        <br>


                        <div><button onclick="checkDOB()" onclick="sayHurray()" class="ladda-button seven btn btn-warning" data-style="zoom-out" name="saveAdmin">Submit</button></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>