<?php include('pageloader.php');?>
<div>
  <ul class="nav nav-tabs">
      <li><a href="?page=index">Administration <img src="assets/img/details.png"></a></li>
      <li><a href="?page=addStudent">Students <img src="assets/img/student48.png"></a></li>
      <li><a href="?page=addAdmin">Staff Member <img src="assets/img/staff48.png"></a></li>
      <li><a href="?page=course">Courses<img src="assets/img/course.png"></a></li>
      <li class="active"><a href="?page=currentClasses">All Classes<img src="assets/img/users.png"></a></li>
      <li><a href="?page=depart" >Departments<img src="assets/img/department.png"></a></li>
      </ul>

<!-- ====== Page Content Area Start ====== -->
<div class="page-content">
    <!-- Wrapper -->
  <!-- <div class="table-responsive"  > -->
<!--**************************************************************************************************************************-->
    <div class="container" style="width:100%">
      <ul class="nav nav-tabs">
          <li class="active"><a href="?page=currentClasses">Current Classes<img src="assets/img/view2.png"></a></li>
          <li><a href="?page=viewAllClasses">View All Classes<img src="assets/img/view2.png"></a></li>
          <li><a href="?page=classList">Student in Classes<img src="assets/img/view2.png"></a></li>
          <li><a href="?page=addClasses">New Class <img src="assets/img/new.png"> </a></li>
      </ul>
<!--**************************************************************************************************************************-->
<!-- <div class="container" style="width:100%"> -->

    <br>
    <!-- <div class="container" style="width:100%"> -->

        <br>
        <div class="table-responsive">
            <p align="right"> <input type="text" onkeydown="loadDoc(this.value)" placeholder="Type here to search">

            <div id="search">
              <table class="table table-bordered table-striped sortable">
            <thead>
              <tr>
                  <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">Class Name & Total Students</th>
              </tr>
          </thead>
          <tbody>
              <!-- <div class="container" style="width:100%"> -->
                  <?php
                    $con=mysqli_connect('localhost','root','','marketit');
                    $table = " ";
                    $query = "Select pc.productCategoryid as productCategory_id, count(p.productID) as TotalProducts, pc.productCategoryName as productCategoryName from product p left join productCategory pc on pc.productCategoryID = p.productID group by productCategoryName";
                    $result=mysqli_query($con,$query);
                    while ($data=mysqli_fetch_assoc($result)){
                    $table .="<tr><td>&raquo;&nbsp;<a href='productCategoryView.php?productCategoryid=".$data['productCategory_id']."'>".$data['productCategoryName']."</a>&nbsp;&nbsp;".$data['TotalProducts']." Product[s]</td></tr>";
                  }
                      echo $table;
                  ?>
          <tbody>
      </table>
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
  xhttp.open("GET", "ajaxProductCategoryView.php"+"?q="+str, true);
  xhttp.send();
}
</script>
