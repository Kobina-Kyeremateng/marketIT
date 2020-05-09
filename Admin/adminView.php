<?php include('pageloader.php');?>
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

<div class="table-responsive"  >
<!--**************************************************************************************************************************-->
    <div class="container" style="width:100%">
        <ul class="nav nav-tabs">
            <li><a href="?page=adminAdd">Add Staff <img src="assets/img/new.png"> </a></li>
            <li class="active"><a href="?page=adminView">View Staff<img src="assets/img/view2.png"></a></li>
            <li><a href="?page=adminEdit">Edit Staff <img src="assets/img/import.png"></a></li>
            <li><a href="?page=adminReport">Reports <img src="assets/img/import.png"></a></li>
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
                                                <th>Image</th>
                                                <th>Staff Number</th>
                                                <th>Full Name</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Phone Number</th>
                                                <th>Department</th>
                                                <th>Role</th>
                                                <th>Address</th>
                                                <th>E-Mail</th>
                                                <th>Appointment Date</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                //connection to database
                                                $con = mysqli_connect('localhost', 'root','','marketit') ;
                                                $query = "SELECT concat(year(AppointmentDate),'0',month(AppointmentDate), 'ADM', AdminID) AS AdminNumber, a.Image, a.FirstName, a.LastName,a.DOB,a.Mobile,a.Email,a.Address,AppointmentDate,r.RoleName,a.AdminID,d.DepartmentName ,Gender from admin a INNER JOIN Department d on a.DepartmentID=d.DepartmentID INNER JOIN roles r on a.RoleID=r.RoleID";
                                                // $query = "SELECT concat(year(u.AppointmentDate), 'ADM', u.UserID) AS AdminNumber, u.Image, u.FirstName, u.LastName,u.DOB,u.PhoneNumber,u.Email,u.Address,u.AppointmentDate,u.RoleID,u.UserID ,u.Gender from admin u WHERE RoleID = '1'";
                                                $result = mysqli_query($con,$query);
                                                while($data = mysqli_fetch_assoc($result))
                                                {
                                                        $src= $data['Image'];
                                                        $AdminID = $data['AdminID'];
                                                        $FirstName = $data['FirstName'];
                                                        $LastName = $data['LastName'];
                                                        $gender = $data['Gender'];
                                                        $dob = $data['DOB'];
                                                        $Mobile = $data['Mobile'];
                                                        $Email=$data['Email'];
                                                        $Address=$data['Address'];
                                                        $appointmentDate=$data['AppointmentDate'];
                                                        $Role = $data['RoleName'];
                                                        $Department = $data['DepartmentName'];
                                                        $AdminNumber = $data['AdminNumber'];

                                                    echo "<tr class='gradeX'>
                                                            <td class='center'><img src='$src' width='50px'></td>
                                                            <td class='center'>$AdminNumber</td>
                                                            <td class='center'>$FirstName $LastName </td>
                                                            <td class='center'>$gender</td>
                                                            <td class='center'>$dob</td>
                                                            <td class='center'>$Mobile</td>
                                                            <td class='center'>$Department</td>
                                                            <td class='center'>$Role</td>
                                                            <td class='center'>$Address</td>
                                                            <td class='center'>$Email</td>	
                                                            <td class='center'>$appointmentDate</td>
                                                            <td class='center'><a href='?page=adminView&&id=$AdminID'>View</a>||<a href='?page=adminEdit&&id=$AdminID'>Edit</a>||</td
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
			xhttp.open("GET", "ajaxViewStaff.php"+"?q="+str, true);
			xhttp.send();
		}
		</script>
