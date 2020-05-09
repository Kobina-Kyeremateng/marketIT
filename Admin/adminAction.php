<?php
if (isset($_POST['saveAdmin'])) {

    $pic_name = $_FILES['Image']['name'];
    $pic_tmp_name=$_FILES['Image']['tmp_name'];
    $picture ="uploads/".rand(1,100000).$pic_name;
    move_uploaded_file($pic_tmp_name,$picture);

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $otherName = $_POST['otherName'];
    $dob = $_POST['DOB'];
    $gender = $_POST['gender'];
    $title = $_POST['title'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $mobile = $_POST['mobile']; 
    $address=$_POST['address']; 
    $email=$_POST['email'];
    $password = $_POST['password'];
    $appointmentDate=$_POST['appointmentDate'];
    $role=$_POST['role'];
    $department = $_POST['department'];
    $status = $_POST['status'];
    $guardianName = $_POST['guardianName'];
    $guardianMobile = $_POST['guardianMobile'];
    $guardianRelationship = $_POST['guardianRelationship'];

 if(!empty($picture) && !empty($firstName) && !empty($lastName) && !empty($otherName) && 
    !empty($dob) && !empty($gender) && !empty($title) && !empty($religion) && 
    !empty($nationality) && !empty($mobile) && !empty($address) && !empty($email) && 
    !empty($password) && !empty($appointmentDate) && !empty($role) && !empty($department) && 
    !empty($guardianName) && !empty($guardianMobile) && !empty($guardianRelationship))
 {
    $dbc = mysqli_connect('localhost', 'root', '','marketit') or die('Error connecting to mysql server');
    $query = "INSERT INTO admin(FirstName,LastName, OtherNames, DOB, Gender, PrefixID, ReligionID, NationalityID, Mobile, Address,Email,Password,Image,AppointmentDate,RoleID,DepartmentID,StatusID, guardianName,guardianMobile,guardianRelationship) VALUES('$firstName','$lastName','$otherName','$dob','$gender','$title','$religion','$nationality','$mobile','$address','$email','$password','$picture','$appointmentDate','$role','$department','$status','$guardianName','$guardianMobile', '$guardianRelationship')";
    $query2 = "INSERT INTO login(Email,Password,RoleID,Image,FirstName)VALUES('$email','$password','$role','$picture','$firstName')";
    $result = mysqli_query($dbc, $query) or die('Error querying database');
    $result2 = mysqli_query($dbc, $query2) or die('Error querying database');

	mysqli_close($dbc);
    header('location:index.php?page=adminView');

      // Clear the score data to clear the form
          $firstName;
          $lastName;
          $otherName;
          $dob;
          $gender;
          $title;
          $religion;
          $nationality;
          $mobile; 
          $address; 
          $email;
          $password;
          $appointmentDate;
          $role;
          $department;
          $status;
          $guardianName;
          $guardianMobile;
          $guardianRelationship;
}
else

{

	  echo '<p >Please enter all of the information to add your information.</p>';
}
}
?>


<?php
if (isset($_POST['update'])) {



    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $dob = $_POST['dob'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Email=$_POST['Email'];
    $Address=$_POST['Address'];
    $ZipCode=$_POST['ZipCode'];
    $DoA=$_POST['DoA'];
    $Staffid=$_POST['Staffid'];

    $dbc = mysqli_connect('localhost', 'root', '','marketit') or die('Error connecting to mysql server');
    $query = "UPDATE `staffmembers` SET `firstName`='$firstName',`lastName`='$lastName',`gender`='$gender',`department`='$department'
    ,`dob`='$dob',`PhoneNumber`='$PhoneNumber',`Email`='$Email',`Address`='$Address',`ZipCode`='$ZipCode',`DoA`='$DoA'
     WHERE Staffid=$Staffid";

    $result = mysqli_query($dbc, $query) or die('Error querying database');
    mysqli_close($dbc);
    header('location:index.php?page=viewstaff');
  }
  ?>
