
<?php
//connection to database
  $para = $_GET['firstname'];
  $con = mysqli_connect('localhost', 'root','','marketit') ;
  $query = "select * from users where firstName like '%$para%'";
  $result = mysqli_query($con,$query);
  while($data = mysqli_fetch_assoc($result))
      {
        $src=$data['Picture'];
        $aid=$data['UserID'];
        $fname=$data['FirstName'];
        $lname=$data['LastName'];
        $oname=$data['OtherNames'];
        $email=$data['email'];
        $PhoneNumber=$data['PhoneNumber'];

        echo "  <tr>
        <td><img src='$src'></td>
        <td> $aid</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$oname</td>
        <td>$email</td>
        <td>$PhoneNumber</td>
        <td><a href='?page=editstudent&&id=$aid'>Edit</a> | <a href='?page=viewprofile&&id=$aid'>View</a></td>
          </tr>";
      }
?>
