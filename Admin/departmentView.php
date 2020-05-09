<?php include('pageloader.php');?>
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
		<li class="active"><a href="?page=departmentView">View Department<img src="assets/img/update2.png"> </a></li>
		<li><a href="?page=departmentEdit">Edit Department <img src="assets/img/update2.png"> </a></li>
		<li><a href="csvtesting.php">Import/Export CSV<img src="assets/img/export.png"></a></li>
		<li><a href="?page=departmentDelete">Delete <img src="assets/img/delete2.png"></a></li>
	</ul>
</div>
<!-- ====== Left Sidebar Area End ====== -->

<!-- ====== Page Content Area Start ====== -->
<div class="page-content">
<!-- Wrapper -->
<div class="wrapper wrapper-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			<!-- Ibox -->
			<div class="ibox bg-boxshadow mb-30">
				<h5 class="mb-30">Data Table</h5>
					<p align="right"> <input type="text" placeholder="Type here to search" onkeydown="loadDoc(this.value)">
						<div id="search">
					<!-- Ibox Content -->
					<div class="ibox-content">
							<!-- Table Responsive -->
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover dataTables-example">
								<thead>
									<tr>
										<th>Department ID</th>
										<th>Department Name</th>
										<th>Department Initial</th>
										<th>Status</th>
										<th>Operation</th>
									</tr>
								</thead>
								<tbody>
								<?php
								//connection to database
								$con = mysqli_connect('localhost', 'root','','marketit') ;
								$query = "SELECT * from department d INNER JOIN Status s on d.StatusID=s.StatusID";
								$result = mysqli_query($con,$query);
								while($data = mysqli_fetch_assoc($result))
								{
										$DepartmentID = $data['DepartmentID'];
										$DepartmentName = $data['DepartmentName'];
										$DepartmentInitial = $data['DepartmentInitial'];
										$StatusName = $data['StatusName'];
										
								echo "<tr class='gradeX'>
										<td class='center'>$DepartmentID</td>
										<td class='center'>$DepartmentName</td>
										<td class='center'>$DepartmentInitial</td>
										<td class='center'>$StatusName</td>
										<td class='center'><a href='?page=departmentEdit&&id=$DepartmentID'>Edit</a></td
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
</div>
</div>
						<!-- ====== Page Content Area End ====== -->
</div>
				<!-- ==================================
				******* Page Wrapper Area End *******
				=================================== -->
</div>
		<!-- ======================================
		********* Main Wrapper Area End ***********
		======================================= -->
		<script>
		function loadDoc(str) {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("search").innerHTML =   this.responseText;
				}
			};
			xhttp.open("GET", "ajaxUserView.php"+"?q="+str, true);
			xhttp.send();
		}
		</script>