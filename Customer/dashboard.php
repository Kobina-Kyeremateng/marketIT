<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','marketit');
$db=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
?>
<div>
  <ul class="nav nav-tabs">
    <li class="active"><a href="?page=index"> Dashboard <img src="assets/img/info.png"></a></li>
    <li><a href="?page=productAdd">New Product<img src="assets/img/new.png"> </a></li>
    <li><a href="?page=productView">View Product <img src="assets/img/update2.png"> </a></li>
    <li><a href="?page=productEdit">Edit Product <img src="assets/img/update2.png"> </a></li>
    <li><a href="csvtesting.php">Import/Export CSV<img src="assets/img/export.png"></a></li>
    <li><a href="?page=productDelete">Delete <img src="assets/img/delete2.png"></a></li>
</ul>
<!-- ====== Page Content Area Start ====== -->
<div class="page-content">
    <!-- Wrapper -->
<div class="wrapper wrapper-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4">
                <!-- Element -->
                <div class="warning-element bg-boxshadow--">
                    <div class="agile-header">
                        <h6>Clients</h6>
                    </div>
                    <div class="agile-board-content- p-20">
                        <span>
                          <font color="red">
                             <?php
                             $sql="SELECT * FROM users";
                           $result=mysqli_query($db,$sql) or die("error getting data");
                           $num_rows=mysqli_num_rows($result);
                             echo "$num_rows  Client[s] found</font><br>";
                              echo "<a href='?page=userView'>View Clients</a>";
                              echo " <br>";
                              echo "<a href=''>Record Displinary case</a>";
                              echo " <br>";
                              echo "<a href=''>Monitor Client </a>";
                              ?><br>
                                 <?php
                                $sql="SELECT * FROM users WHERE Gender='Female'";
                                $result=mysqli_query($db,$sql) or die("error getting data");
                                $num_rows=mysqli_num_rows($result);
                                 echo "$num_rows Female Client[s]</font>";
                                 ?>
                                 <img src="assets/img/students.png">
                                 <br>
                                 <?php
                                $sql="SELECT * FROM users WHERE Gender='Male'";
                                $result=mysqli_query($db,$sql) or die("error getting data");
                                $num_rows=mysqli_num_rows($result);
                                 echo "$num_rows Male Client[s]</font>";
                                 ?>
                                 </font>
                                 <img src="assets/img/students.png">
                                </span>
                      </div>

                        </div>
                    </div>
                    <div class="col-xl-4">
                <!-- Element -->
                <div class="warning-element bg-boxshadow--">
                    <div class="agile-header">
                        <h6>Staff</h6>
                    </div>
                    <div class="agile-board-content- p-20">
                        <span>
                          <font color="red">
                             <?php
                             $sql="SELECT * FROM admin";
                           $result=mysqli_query($db,$sql) or die("error getting data");
                           $num_rows=mysqli_num_rows($result);
                             echo "$num_rows  Staff[s] found</font><br>";
                              echo "<a href='?page=adminView'>View Staff</a>";
                              echo " <br>";
                              echo "<a href=''>Record Displinary case</a>";
                              echo " <br>";
                              echo "<a href=''>Monitor Staff </a>";
                             
                              ?><br>
                                 <?php
                                $sql="SELECT * FROM admin WHERE Gender='Female'";
                                $result=mysqli_query($db,$sql) or die("error getting data");
                                $num_rows=mysqli_num_rows($result);
                                 echo "$num_rows Female Staff[s]</font>";
                                 ?>
                                 <img src="assets/img/students.png">
                                 <br>
                                 <?php
                                $sql="SELECT * FROM admin WHERE Gender='Male'";
                                $result=mysqli_query($db,$sql) or die("error getting data");
                                $num_rows=mysqli_num_rows($result);
                                 echo "$num_rows Male Staff[s]</font>";
                                 ?>
                                 </font>
                                 <img src="assets/img/students.png">
                                </span>
                                <br>
                                <a href="?page=viewstaff" >Recomendation letter<br></span>
                      </div>

                        </div>
                    </div>    
                    


                <!-- <div class="col-xl-4">
                 Element -->
                <!-- <div class="warning-element bg-boxshadow--"> -->
                    <!-- <div class="agile-header">
                        <h6>Staff</h6>
                    </div>
                    <div class="agile-board-content- p-20">
                        <span><a href="?page=viewstaff" >View Staffs<br>
                       

                    </div>
                </div>
            </div> --> 
            <div class="col-xl-4">
                <!-- Element -->
                <div class="warning-element bg-boxshadow--">
                    <div class="agile-header">
                        <h6>Communication</h6>
                    </div>
                    <div class="agile-board-content- p-20">
                        <span>   <a href="sms.php" >Bulk sms<br><img src="assets/img/sms.png"></a><br>
                    <!--***when i click a link to get a confirmation wheathert to continue or not-->
                           <script type="text/javascript">
                                  function AlertIt() {
                                  var answer = confirm ("Please click on OK to continue.")
                                  if (answer)
                                  window.location="http://www.continue.com";
                                  }
                          </script>
                    <!--***when i click a link to get a confirmation wheathert to continue of not-->
                     <!--      <a href="javascript:AlertIt();">Bulk Emails</a> -->
                           <a href="createUser.php">Create a User<br><img src="assets/img/users.png"></a></span>
                        <div class="agile-detail">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Element -->
                <div class="warning-element bg-boxshadow--">
                    <div class="agile-header">
                        <h6>Accounting</h6>
                    </div>
                    <div class="agile-board-content- p-20">
                        <span>
                                                                          </span>
                     </div>

                       </div>
                   </div>

                                                                <div class="col-xl-4">
                                                                   <!-- Element -->
                                                                   <div class="warning-element bg-boxshadow--">
                                                                       <div class="agile-header">
                                                                           <h6>Company Information</h6>
                                                                       </div>
                                                                       <div class="agile-board-content- p-20">
                                                                           <span>

                                                                                 </span>
                                                                         </div>

                                                                           </div>
                                                                       </div>
