<?php include('pageloader.php');?>
<div>
  <ul class="nav nav-tabs">
    <li><a href="?page=index">Administration <img src="assets/img/details.png"></a></li>
    <li class="active"><a href="?page=addStudent">Students <img src="assets/img/student48.png"></a></li>
    <li><a href="?page=addAdmin">Staff Member <img src="assets/img/staff48.png"></a></li>
    <li><a href="?page=course">Courses <img src="assets/img/course.png"></a></li>
    <li><a href="?page=currentClasses">All Classes <img src="assets/img/users.png"></a></li>
    <li><a href="?page=depart" >Departments <img src="assets/img/department.png"></a></li>
   </ul>
<!-- ====== Page Content Area Start ====== -->
<div class="page-content">
    <!-- Wrapper -->
<div class="table-responsive"  >
<!--**************************************************************************************************************************-->
<div class="container" style="width:100%">
  <ul class="nav nav-tabs">
     <li><a href="?page=addStudent">New Student <img src="assets/img/new.png"> </a></li>
      <li><a href="?page=viewstudent">View List<img src="assets/img/view2.png"></a></li>
      <li><a href="">Edit Student<img src="assets/img/view2.png"></a></li>
      <li><a href="?page=import">Import/Export Data <img src="assets/img/import.png"></a></li>
      <li class="active"><a href="?page=report">Reports </a></li>
  </ul>
</div>
<br>

  <!--*************************************************************************************************************************-->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading">Reports</div>

        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table">
                <form action="inventory.php" method="POST" enctype="multipart/form-data">
                  <a href="reports_all/all_students_reports.php">All Students</a> <br>
                  <a href="reports_all/FSD.php">Foundations Of Software Development[FSD]</a><br>
                  <a href="reports_all/DBC.php">Diploma in Business Computing[DBC]</a><br>
                  <a href="reports_all/CCNA.php">CISCO Certified Network Associate[CCNA]</a><br>
                  <a href="reports_all/NIS.php">Network and Information Security[NIS]</a> <br>
                  <a href="reports_all/CISA.php">Certified Information Systems Auditor[CISA]</a><br>
                  <a href="reports_all/WAD.php">Web Applications Development[WAD]</a><br>
                  <a href="reports_all/Oracle.php">Oracle Database Managment</a><br>
                  <a href="reports_all/ICDL.php">Microsoft Office tools(ICDL)</a><br>
                  <a href="reports_all/MAD.php">PhoneNumber Applications Development</a><br>
                  <a href="reports_all/GIS.PHP">Geographic Information System[GIS]</a><br>
                  <a href="reports_all/CELSA.php">Certificate in Enterprise Linux System Administration[CELSA]</a><br>
                </form>
            </div>
        </div>
      </div>
                    <!-- /.container-fluid -->
    </div>
                <!-- /#page-wrapper -->
  </div>
</div>
