<?php
if (isset($_POST['pay'])) {
    $studentID = $_POST['studentID'];
    $payDate = $_POST['payDate'];
    $feepayable = $_POST['feepayable'];
    $amountPaid= $_POST['amountPaid'];
    $currentArears=$_POST['currentArears'];




      if(!empty($studentID) && !empty($payDate) && !empty($feepayable) && !empty($amountPaid) && !empty($currentArears))
         {
          $dbc = mysqli_connect('localhost', 'root', '','marketit') or die('Error connecting to mysql server');
        	$query = "INSERT INTO pay (studentID,payDate,feepayable,amountPaid,currentArears)VALUES('$studentID','$payDate','$feepayable','$amountPaid',$currentArears)";
          $result = mysqli_query($dbc, $query) or die('Error querying database');

        	mysqli_close($dbc);
          header('location:index.php?page=viewClassAc');
        }
        else
        {
        	  echo '<p>Please enter all of the information to add your information.</p>';
        }
        }
?>
