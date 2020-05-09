<div class="page-content">
    <!-- Wrapper -->
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Ibox -->
                    <!-- <div class="ibox bg-boxshadow mb-30"> -->
                        <!-- <h5 class="mb-30">Data Table</h5> -->

                        <!-- Ibox Content -->
                        <!-- <div class="ibox-content"> -->
                            <!-- Table Responsive -->
                            <div class="table-responsive" id="search">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                      <tr>
                                          <th>Picture</th>
                                          <th>User ID</th>
                                          <th>Full Name</th>
                                          <th>Payment Date</th>
                                          <th>Total Arears</th>
                                          <th>Amount Paid</th>
                                          <th>Balance</th>
                                      </tr>
                                    </thead>
                                  <tbody>
                                    <?php
                                    //connection to database
                                    $para = $_GET['UserID'];
                                    $con = mysqli_connect('localhost', 'root','','marketit') ;
                                    $query = "select users.Image, users.userID, users.FirstName, users.LastName, payments.paymentDate, payments.TotalArears, payments.AmountPaid,payments.Balance from payments inner join users on payments.userID = users.userID where users.userID = '$para'";
                                    $result = mysqli_query($con,$query);
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                        $UserID=$data['UserID'];
                                        $src= $data['Image'];
                                        $FirstName = $data['FirstName'];
                                        $LastName = $data['LastName'];
                                        $PaymentDate = $data['PaymentDate'];
                                        //$TotalArears = $data['TotalArears']
                                        $PaymentAmount = $data['PaymentAmount'];
                                        //$Balance = $data['Balance']

                            echo "<tr class='gradeX'>
                                        <td class='center'><img src='$src' width='50px'></td>
                                        <td class='center'>$UserID </td>
                                        <td class='center'>$FirstName  $LastName</td>
                                        <td class='center'>$PaymentDate </td>
                                        <td class='center'>$PaymentAmount </td>
                                        
                                        <td class='center'><a href='?page=userEdit&&id=$UserID'>Edit</a></td
                                </tr>";
                            }
                            ?>

                                </tbody>
                            </table>
                          </div>
                        </div>
