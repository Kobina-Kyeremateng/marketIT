
<?php include('pageloader.php');?>

<link rel="stylesheet" href="style.css">

<div>
  <ul class="nav nav-tabs">
        <li><a href="?page=index">Administration <img src="assets/img/details.png"></a></li>
        <li><a href="?page=adminAdd">Staff   <img src="assets/img/staff48.png"></a></li>
        <li><a href="?page=userAdd">Clients  <img src="assets/img/student48.png"></a></li>
        <li><a href="?page=serviceAdd">Services  <img src="assets/img/course.png"></a></li>
        <li class="active"><a href="?page=productAdd">Products  <img src="assets/img/details.png"></a></li>
        <li><a href="?page=departmentAdd" >Departments  <img src="assets/img/department.png"></a></li>
        <li><a href="?page=sms">SMS    <img src="assets/img/details.png"></a></li>
        <li><a href="?page=notice">Notice Board <img src="assets/img/details.png"></a></li>
    </ul>
  </div>


<div class="table-responsive"  >
<!--**************************************************************************************************************************-->
    <div class="container" style="width:100%">
      <ul class="nav nav-tabs">
            <li><a href="?page=productAdd">New Product<img src="assets/img/new.png"> </a></li>
            <li><a href="?page=productView">View Product <img src="assets/img/update2.png"> </a></li>
            <li><a href="?page=productImage">Add Images <img src="assets/img/update2.png"> </a></li>
            <li><a href="?page=productImageView">View Images <img src="assets/img/update2.png"> </a></li>
            <li class="active"><a href="?page=productEdit">Edit Product <img src="assets/img/update2.png"> </a></li>
            <li><a href="csvtesting.php">Import/Export CSV<img src="assets/img/export.png"></a></li>
            <li><a href="?page=productDelete">Delete <img src="assets/img/delete2.png"></a></li>
          </ul>
    </div>
  <br>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading">Add a Payment</div>
            <div class="table"></div>

              <form action="customerPaymentAction.php" method="post">
                  <div style="float:left;  position:relative">
                            <div>
                              <label>Student ID</label>
                                <?php
                                    $id=$_GET['id'];
                                    $con=mysqli_connect('localhost','root','','marketit');
                                    $querry="select * from users where userID='$id'";
                                    $result=mysqli_query($con,$querry);
                                    $data=mysqli_fetch_assoc($result);
                                ?>
                                <input type="text" name="userID" id="userID"  value="<?=$data['userID']?>" readonly>
                            </div> 

                            <div>
                              <label>User</label>
                                <?php
                                    $id=$_GET['id'];
                                    $con=mysqli_connect('localhost','root','','marketit');
                                    $querry="select * from users where userID='$id'";
                                    $result=mysqli_query($con,$querry);
                                    $data=mysqli_fetch_assoc($result);
                                ?>
                                <input type="text" name="FullName" id="FullName"  value="<?=$data['FullName']?>" readonly>
                            </div>

                            <div>
                              <label>Date of Payment</label>
                                <input type="date" name="payDate" id="payDate">
                            </div>

                            <div>
                              <label>Fee Payable</label>
                                <?php
                                    $cid=$_GET['id'];
                                    $con=mysqli_connect('localhost','root','','marketit');
                                    $querry="select * from services where serviceID='$cid'";
                                    $result=mysqli_query($con,$querry);
                                    $data=mysqli_fetch_assoc($result);
                                ?>

                                <input type="text" name="feepayable" id="feepayable" value="<?=$data['feepayable']?>" readonly>
                            </div>

                            <div>
                              <label>Amount Paid</label>
                                <input type="text" name="amountPaid" id="amountPaid" required>
                            </div>

                            <div>
                              <label>Current Balance</label>
                                <input type="text" name="currentArears" id="currentArears" readonly>
                            </div>
                  </div>

                  <div class="btn--area" style="float:left;  position:relative; clear:both;">
                    <div class="btn--area"><button class="btn waves-effect waves-light" type="submit" name="pay">Make Payment</button></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
