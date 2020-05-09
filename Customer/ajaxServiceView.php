<div class="container" style="width:100%">
    <div class="table-responsive" id="search">
      <table class="table table-bordered table-striped sortable">
        <thead>
          <tr>
              <th style="width: 20%; vertical-align: middle;" rowspan="2"  data-defaultsign="nospan" data-defaultsort="asc">
                  <i class="ion ion-ios-navigate"></i>&nbsp; Picture</th>
              <th colspan="4" data-mainsort="3" style="text-align: center;">Results</th>
              <th data-defaultsort="disabled"></th>
          </tr>
          <tr>
            <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">User ID</th>
            <th style="width: 20%">FirstName</th>
            <th style="width: 20%">LastName</th>
            <th style="width: 20%">Email</th>
            <th style="width: 20%">PhoneNumber</th>
            <th style="width: 20%">Date Registered</th>
            <th style="width: 20%">Package</th>
            <th style="width: 20%">Operation</th>
          </tr>
        </thead>
          <tbody>
              <?php
                  //connection to database
                  $para = $_GET['q'];
                  $con = mysqli_connect('localhost', 'root','','marketit') ;
                  $query = "select u.*, s.ServiceName from users u inner join services s on u.ServiceID = s.ServiceID where FirstName like '%$para%' || LastName like '%$para%' || userID like '%$para%' and u.RoleID = '2'";
                  $result = mysqli_query($con,$query);
                  while($data = mysqli_fetch_assoc($result))
                      {
                        $src=$data['Image'];
                        $uid=$data['UserID'];
                        $fname=$data['FirstName'];
                        $lname=$data['LastName'];
                        $email=$data['email'];
                        $PhoneNumber=$data['PhoneNumber'];
                        $ServiceID=$data['ServiceID'];
                        $ServiceName=$data['ServiceName'];

                        echo "  <tr>
                        <td><img src='$src'></td>
                        <td> $uid</td>
                        <td>$fname</td>
                        <td>$lname</td>
                        <td>$email</td>
                        <td>$PhoneNumber</td>
                        <td>$ServiceName</td>
                        <td><a href='?page=editstudent&&id=$aid'>Edit</a> | <a href='?page=viewprofile&&id=$aid'>View</a></td>
                          </tr>";
                          }
                  ?>
          </tbody>
      </table>
  </div>
