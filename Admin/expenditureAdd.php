<?php include('pageloader.php');?>
<link rel="stylesheet" href="style.css">
<div>
<div class="table-responsive"  >
<!--**************************************************************************************************************************-->
    <div class="container" style="width:100%">
      <ul class="nav nav-tabs">
          <li><a href="?page=activateStud">Activate Students<img src="assets/img/view2.png"></a></li>
          <li><a href="?page=viewClassAc">View All Students<img src="assets/img/view2.png"></a></li>
          <li><a href="?page=viewPaymentsAc">Payments<img src="assets/img/import.png"></a></li>
          <li class="active"><a href="?page=addExpen">Add Expenditure<img src="assets/img/import.png"></a></li>
          <li><a href="?page=viewAllExpen">All Expenditures<img src="assets/img/import.png"></a></li>
          <li><a href="?page=addStudAc">Add a Student<img src="assets/img/new.png"> </a></li>
      </ul>
    </div>
  <br>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading">Add an Expenditure</div>
            <div class="table"></div>
            
              <form action="expenditureAction.php" method="post">
                  <div style="float:left;  position:relative">
                    <br>
                    <br>
                            <div>
                              <label>Name of Expenditure</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <input type="text" name="item" id="item">
                            </div>


                            <div>
                              <label>Staff who made Expense</label> &nbsp; &nbsp;
                                    <select  name="staff" id="staff">
                                           <?php
                                               $con=mysqli_connect('localhost','root','','marketit');
                                                $querry="select l.*, u.FullName from login l INNER JOIN Users u on l.UserID=u.UserID where RoleID=1";
                                                $result=mysqli_query($con,$querry);
                                               while ($data=mysqli_fetch_assoc($result))
                                               {
                                                  echo "<option value=".$data['RoleID'].">".$data['FullName']."</option>";
                                               }
                                            ?>
                                          </select>
                            </div>

                            <div>
                              <label>Amount</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <input type="text" name="amountP" id="amountP">
                            </div>
                           
                            <div>
                              <label>Date</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                <input type="date" name="date" id="date">
                            </div>
                            <br>
                            <br>
                  </div>

                  <div class="btn--area" style="float:left;  position:relative; clear:both;">
                  <div class="btn--area"><button class="btn waves-effect waves-light" type="submit" name="addExpend">Add Expenditure</button></div>
                    <br>
                    <br>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
