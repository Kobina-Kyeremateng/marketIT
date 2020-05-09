<?php include('pageloader.php');?>
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                <div class="container" style="width:100%">
                    <ul class="nav nav-tabs">
                      <li><a href="?page=activateStud">Activate Students<img src="assets/img/view2.png"></a></li>
                      <li><a href="?page=viewClassAc">View All Students<img src="assets/img/view2.png"></a></li>
                      <li class="active"><a href="?page=viewPaymentsAc">Payments<img src="assets/img/import.png"></a></li>
                      <li><a href="?page=addExpen">Add Expenditure<img src="assets/img/import.png"></a></li>
                      <li><a href="?page=viewAllExpen">All Expenditures<img src="assets/img/import.png"></a></li>
                      <li><a href="?page=addStudAc">Add a Student<img src="assets/img/new.png"> </a></li>
                </ul>
                
                <div class="container" style="width:100%">

    <br>
    <div class="table-responsive">
        <p align="right"> <input type="text" onkeydown="loadDoc(this.value)" placeholder="Type here to search">

        <div id="search">
        <table class="table table-bordered table-striped sortable">
                          <thead>
                              <tr>
                                  <th>Payment ID</th>
                                  <th>Payment Date</th>
                                  <th>Student ID</th>
                                  <th>Course ID</th>   
                                  <th>Amount Paid</th>
                              </tr>
                            </thead>
                            <tbody>

                              <?php
                              //connection to database
                              $con = mysqli_connect('localhost', 'root','','marketit') ;
                              $query = "select * from payments ORDER BY payDate desc";
                              $result = mysqli_query($con,$query);
                              while($data = mysqli_fetch_assoc($result))
                              {
                                  $paymentID= $data['paymentID'];
                                  $payDate = $data['payDate'];
                                  $studentID = $data['studentID'];
                                  $CourseID = $data['CourseID'];
                                  $amountPaid = $data['amountPaid'];

                      echo "<tr class='gradeX'>
                                  <td class='center'>$paymentID </td>
                                  <td class='center'>$payDate</td>
                                  <td class='center'>$studentID</td>
                                  <td class='center'>$CourseID</td>   
                                  <td class='center'>$amountPaid</td>
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
      xhttp.open("GET", "ajaxViewPayAct.php"+"?q="+str, true);
      xhttp.send();
    }
    </script>
