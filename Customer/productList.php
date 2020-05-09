<?php include('pageloader.php');?>
<div>
  <ul class="nav nav-tabs">
      <li><a href="?page=index"> Homepage <img src="assets/img/details.png"></a></li>
      <li><a href="?page=addStudent">Students <img src="assets/img/student48.png"></a></li>
      <li><a href="?page=addAdmin">Staff Member <img src="assets/img/staff48.png"></a></li>
      <!-- <li><a href="?page=viewClassAc">Accountant<img src="assets/img/update.png"></a></li> -->
      <li><a href="?page=course">Courses<img src="assets/img/course.png"></a></li>
      <li class="active"><a href="?page=currentClasses">All Classes<img src="assets/img/users.png"></a></li>
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
          <li><a href="?page=currentClasses">Current Classes<img src="assets/img/view2.png"></a></li>
          <li><a href="?page=viewAllClasses">View All Classes<img src="assets/img/view2.png"></a></li>
          <li class="active"><a href="?page=classList">Student in Classes<img src="assets/img/view2.png"></a></li>
          <li><a href="?page=addClasses">New Class <img src="assets/img/new.png"> </a></li>
      </ul>
<!--**************************************************************************************************************************-->
      <table class="table table-bordered table-striped sortable">
          <thead>
              <tr>
                  <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">Class Name</th>
                  <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">Image</th>
                  <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">Student ID</th>
                  <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">Full Name</th>
                  <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">Arears</th>
                  <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">Amount Paid</th>
                  <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">Balance</th>
              </tr>
          </thead>
          <tbody>
              <div class="container" style="width:100%">
                  <?php
                  $table = " ";
                  $con = mysqli_connect('localhost','root','','marketit');
                  //$query = 'select c.ID as course_id, count(Course) as TotalStudent, c.className as ClassName, s.Image, s.studentID, s.Lastname, s.Firstname, p.payArears, p.payAmount, p.payBalance from student s join class c left join pay p on s.studentID where course=course';
                  //$query = "select c.ID as course_id,count(Course) as TotalStudent,s.Lastname, s.Firstname, s.studentID, c.className as ClassName from student s join class c on c.ID=Course group by Course";
                  $query = "select c.ID as course_id, count(Course) as TotalStudent, c.className as ClassName from student left join class c on c.ID=Course group by ClassName";
                  $result = mysqli_query($con,$query);
                  while ($data = mysqli_fetch_assoc($result)){
                    // $cid=$data['ClassName'];
                    // //$img=$data['Image'];
                    // $id=$data['studentID'];
                    // $fname=$data['Firstname'];
                    // $lname=$data['Lastname'];
                    // $arears=$data['payArears'];
                    // $amount=$data['payAmount'];
                    // $balance=$data['payBalance'];

                  // echo "<tr>
                  //         <td>$id</td>
                  //         <td>$lname $fname</td>
                  //         <td>$cid</td>
                  //
                  //     </tr>";
                  //$table .="<tr><td>&raquo;&nbsp;<a href='currentClasses.php?classID=".$data['course_id']."'>".$data['ClassName']."</a>&nbsp;&nbsp;(".$data['TotalStudent']." Students)</td></tr>";
                  $table .="<tr><td>&raquo;&nbsp;<a href='classList.php?classID=".$data['course_id']."'>".$data['ClassName']."</a>&nbsp;&nbsp;(".$data['TotalStudent']." Students)</td></tr>";
                  }
                          echo $table;
                  ?>
              </div>
          <tbody>
      </table>
    </div>
  </div>
</div>
</div>
