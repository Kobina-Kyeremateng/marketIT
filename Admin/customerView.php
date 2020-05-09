<?php include('pageloader.php');?>
<div>
    <ul class="nav nav-tabs">
      <li><a href="?page=index">Administration <img src="assets/img/details.png" width="30px"></a></li>
      <li class="active"><a href="?page=addStudent">Students <img src="assets/img/student48.png" width="30px"></a></li>
      <li><a href="?page=addAdmin">Staff Member <img src="assets/img/staff48.png" width="30px"></a></li>
      <!-- <li><a href="?page=viewClassAc">Accountant<img src="assets/img/update.png"></a></li> -->
      <li><a href="?page=course">Courses <img src="assets/img/course.png" width="30px"></a></li>
      <li><a href="?page=currentClasses">All Classes <img src="assets/img/users.png"></a></li>
      <li><a href="?page=depart" >Departments <img src="assets/img/department.png" width="30px"></a></li>
      <li><a href="sms.php">SMS <img src="assets/img/details.png" width="30px"></a></li>
      <li><a href="?page=notice">Notice Board <img src="assets/img/details.png" width="30px"></a></li>
    </ul>
                  <!-- ====== Page Content Area Start ====== -->
    <div class="page-content">
                  <!-- Wrapper -->
        <!-- <div class="table-responsive"  > -->
<!--********************************************************************************************************-->
      <div class="container" style="width:100%">
          <ul class="nav nav-tabs">
              <li><a href="?page=addStudent">New Student <img src="assets/img/new.png"> </a></li>
              <li class="active"><a href="?page=viewstudent">View List<img src="assets/img/view2.png"></a></li>
              <!-- <li><a href="?page=currentClassesStud">Current Classes<img src="assets/img/view2.png"></a></li> -->
              <li><a href="">Edit Student<img src="assets/img/view2.png"></a></li>
              <li><a href="?page=report">Reports</a></li>
          </ul>
<!--********************************************************************************************************-->
                <!-- <div class="container" style="width:100%"> -->
          <br>

      <div class="table-responsive">
        <p align="right"> <input type="text" onkeydown="loadDoc(this.value)" placeholder="Type here to search">

        <div id="search">
          <table class="table table-bordered table-striped sortable">
              <thead>
                <tr>
                    <th style="width: 20%; vertical-align: middle;" rowspan="2"  data-defaultsign="nospan" data-defaultsort="asc">
                        <i class="ion ion-ios-navigate"></i>&nbsp; Picture</th>
                    <th colspan="4" data-mainsort="3" style="text-align: center;">Results</th>
                    <th data-defaultsort="disabled"></th>
                </tr>
                <tr>
                  <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">User ID</th>
                  <th style="width: 20%">FirstName</th>
                  <th style="width: 20%">LastName</th>
                  <th style="width: 20%">Email</th>
                  <th style="width: 20%">PhoneNumber</th>
                  <th style="width: 20%">Date Registered</th>
                  <th style="width: 20%">Package</th>
                  <th style="width: 20%">Operation</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $con=mysqli_connect('localhost','root','','marketit');
                  //$querry =  "SELECT s.image, concat (year (s.regDate), cl.className,'M00', s.studentID) AS admissionNumber,s.studentID, s.regDate, s.firstName,s.lastName, s.gender,c.courseName as course ,cl.className as class ,n.nationalityName as nationality from student s left join course c on s.course=c.courseID left join class cl on s.class=cl.classID left join nationality n on s.nationality=n.nationalityID left join relation re on s.guardianRelationship=re.relationName";

                  $querry= "Select u.Image, concat('USR', u.DOR, u.UserID) AS UniqueID, u.DOR, u.FirstName, u.LastName, p.PrefixName, r.RoleName FROM Users u INNER JOIN Prefix p on u.PrefixID=p.PrefixID INNER JOIN Roles r on u.RoleID=r.RoleID where u.RoleID=2";
                  $result=mysqli_query($con,$querry);
                  while ($data=mysqli_fetch_assoc($result))
                      { $image=$data['Image'];
                        $UserID=$data['UserID'];
                        $UniqueID=$data['UniqueID'];
                        $DOR=$data['DOR'];
                        $FirstName=$data['FirstName'];
                        $LastName=$data['LastName'];
                        $PrefixName=$data['PrefixName'];

                  
                  echo " <tr>
                            <td><img src='$image'></td>
                            <td>$UniqueID</td>
                            <td><nobr>$PrefixName $LastName $FirstName</nobr></td>
                            <td>$DOR</td>
                            <td>$RoleName</td>
                            <td><a href='?page=UserEdit&&id=$UserID'>Edit</a> | <a href='?page=viewprofile&&id=$UserID'>View</a></td>
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



<script>
function loadDoc(str) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("search").innerHTML =   this.responseText;
    }
  };
  xhttp.open("GET", "ajaxViewStud.php"+"?q="+str, true);
  xhttp.send();
}
</script>
<!-- ====== Left Sidebar Area End ====== -->
