<?php include('pageloader.php');?>

<div>
    <ul class="nav nav-tabs">
        <li><a href="?page=index">Administration <img src="assets/img/details.png"></a></li>
        <li><a href="?page=addStudent">Students <img src="assets/img/student48.png"></a></li>
        <li class="active"><a href="?page=addAdmin">Staff Member <img src="assets/img/staff48.png"></a></li>
        <!-- <li><a href="?page=viewClassAc">Accountant<img src="assets/img/update.png"></a></li> -->
        <li><a href="?page=course">Courses <img src="assets/img/course.png"></a></li>
        <li><a href="?page=currentClasses">All Classes <img src="assets/img/users.png"></a></li>
        <li><a href="?page=depart" >Departments <img src="assets/img/department.png"></a></li>
        <li><a href="sms.php">SMS <img src="assets/img/details.png"></a></li>
        <li><a href="?page=notice">Notice Board <img src="assets/img/details.png" width="30px"></a></li>
    </ul>

        <div class="table-responsive"  >
            <!--**************************************************************************************************************************-->
        <div class="container" style="width:100%">
           <ul class="nav nav-tabs">
             <li><a href="?page=addAdmin">New Staff Member <img src="assets/img/new.png"> </a></li>
             <li><a href="?page=viewstaff">View List<img src="assets/img/view2.png"></a></li>
             <li><a href="">Edit Staff <img src="assets/img/import.png"></a></li>
            <li class="active"><a href="?page=staffreport">Reports <img src="assets/img/import.png"></a></li>
           </ul>
        </div>
        <br>
       <div class="container-fluid">
           <div class="row">
             <div class="col-lg-6 col-lg-offset-3">
               <div class="panel panel-primary">
                   <div class="panel-heading">Reports</div>
                    <!-- /.panel-heading -->
                      <div class="panel-body">
                       <div class="table">
                          <form action="inventory.php" method="POST" enctype="multipart/form-data">
                           <a href="reports_all/staff_reports.php">All Staff</a> <br>
                         </form>
                       </div>
                      </div>
              </div>
                           <!-- /.container-fluid -->
            </div>
                       <!-- /#page-wrapper -->
          </div>
        </div>
