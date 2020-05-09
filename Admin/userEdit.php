<?php include('pageloader.php');?>
<?php
$id=$_GET['id'];
$con = mysqli_connect('localhost', 'root','','marketit');
$query = "select * from staffmembers where Staffid=$id";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$Staffid=$row['Staffid'];
$firstName=$row['firstName'];
$lastName=$row['lastName'];
$gender=$row['gender'];
$department=$row['department'];
$dob=$row['dob'];
$PhoneNumber=$row['PhoneNumber'];
$Email=$row['Email'];
$Address=$row['Address'];
$ZipCode=$row['ZipCode'];
$DoA=$row['DoA'];
?>

<div>
   <ul class="nav nav-tabs">
        <li><a href="?page=index">Administration <img src="assets/img/details.png"></a></li>
        <li><a href="?page=adminAdd">Staff   <img src="assets/img/staff48.png"></a></li>
        <li class="active"><a href="?page=userAdd">Clients  <img src="assets/img/student48.png"></a></li>
        <li><a href="?page=serviceAdd">Services  <img src="assets/img/course.png"></a></li>
        <li><a href="?page=productAdd">Products  <img src="assets/img/details.png"></a></li>
        <li><a href="?page=departmentAdd" >Departments  <img src="assets/img/department.png"></a></li>
        <li><a href="?page=sms">SMS    <img src="assets/img/details.png"></a></li>
        <li><a href="?page=notice">Notice Board <img src="assets/img/details.png"></a></li>
    </ul>


<div class="table-responsive"  >
<!--**************************************************************************************************************************-->
<div class="container" style="width:100%">
      <ul class="nav nav-tabs">
        <li><a href="?page=userAdd">New Client <img src="assets/img/new.png"> </a></li>
        <li><a href="?page=userView">View List<img src="assets/img/view2.png"></a></li>
        <li class="active"><a href="?page=userEdit">Edit Client <img src="assets/img/import.png"></a></li>
        <li><a href="?page=userReport">Reports <img src="assets/img/import.png"></a></li>
      </ul>
    </div>
<br>
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6 col-lg-offset-3">
              <div class="panel panel-primary">
                  <div class="panel-heading">Edit a Staff</div>
                           <!-- <div class="table">
                           </div> -->

                            <form action="userAction.php" method="post"  enctype="multipart/form-data">
                              <div style="float:left;  position:relative">
                                  <h4>Personal Details</h4>
                                      <div class="fieldgroup">
                                        <input type="text" name="firstName" id="firstName" value="<?php echo $firstName?>">
                                        <label for="firstName">First name</label>
                                      </div>

                                      <div class="fieldgroup">
                                        <input type="text" name="lastName" id="lastName" value="<?php echo $lastName?>">
                                        <label for="lastName">Last name</label>
                                      </div>

                                      <select name="gender" id="select" required class="form-control" value="<?php echo $gender?>">
                                        <option value="">Select Your Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select>


                                      <div class="fieldgroup">
                                        <input type="text" name="department" id="department" value="<?php echo $department?>">
                                        <label for="department">Department</label>
                                      </div>

                                      <div class="fieldgroup">
                                        <input type="datetime" name="dob" id="dob" value="<?php echo $dob?>">
                                        <label for="dob">Date Of Birth</label>
                                      </div>
                                </div>

                                      <!--section two-->
                                <div style="float:right; position:relative">
                                  <h4>Contact Details</h4>
                                    <div class="fieldgroup">
                                      <input type="text" name="PhoneNumber" id="PhoneNumber" value="<?php echo $PhoneNumber?>">
                                      <label for="PhoneNumber">Phone Number</label>
                                    </div>

                                    <div class="fieldgroup">
                                      <input type="text" name="Email" id="Email" value="<?php echo $Email?>">
                                      <label for="Email">Email</label>
                                    </div>

                                    <div class="fieldgroup">
                                      <input type="text" name="Address" id="Address" value="<?php echo $Address?>">
                                      <label for="Address">Address</label>
                                    </div>

                                    <div class="fieldgroup">
                                      <input type="text" name="ZipCode" id="ZipCode" value="<?php echo $ZipCode?>">
                                      <label for="ZipCode">Zip Code</label>
                                    </div>

                                    <div class="fieldgroup">
                                      <input type="datetime" name="DoA" id="DoA" value="<?php echo $DoA?>">
                                      <label for="DoA">Date of Appointment</label>
                                    </div>
                                </div>

                                <input type="hidden" name="Staffid" value="<?php echo $Staffid?>">

                                <div class="btn--area" style="float:left;  position:relative; clear:both;">

                                  <div class="btn--area">
                                    <button class="btn waves-effect waves-light" type="submit" name="update">Update</button>
                                  </div>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
