<?php
if (isset($_POST['save'])) {
    $DepartmentName = $_POST['DepartmentName'];
    $DepartmentInitial = $_POST['DepartmentInitial'];
    $StatusID = $_POST['status'];

 if(!empty($DepartmentName) && !empty($DepartmentInitial) && !empty($StatusID))
 {
    $dbc = mysqli_connect('localhost', 'root', '','marketit') or die('Error connecting to mysql server');
    $query = "INSERT INTO department(DepartmentName, DepartmentInitial, StatusID) VALUES ('$DepartmentName','$DepartmentInitial','$StatusID')";
    $result = mysqli_query($dbc, $query) or die('Error querying database');

  mysqli_close($dbc);
    header('location:index.php?page=departmentView');

      // Clear the score data to clear the form
          $DepartmentName;
          $DepartmentInitial;
          $StatusID;
}
else

{

    echo '<p >Please enter all of the information to add your information.</p>';
}
}
?>

<?php
if (isset($_POST['update'])) {
    $DepartmentName = $_POST['DepartmentName'];
    $DepartmentInitial = $_POST['DepartmentInitial'];
    $StatusID = $_POST['status'];
    $DepartmentID = $_POST['DepartmentID'];

    $dbc = mysqli_connect('localhost', 'root', '','marketit') or die('Error connecting to mysql server');
    $query = "UPDATE `department` SET `DepartmentName`='$DepartmentName',`DepartmentInitial`='$DepartmentInitial',`StatusID`='$StatusID' WHERE DepartmentID=$DepartmentID";

    $result = mysqli_query($dbc, $query) or die('Error querying database');
    mysqli_close($dbc);
    header('location:index.php?page=departmentView');
  }
  ?>