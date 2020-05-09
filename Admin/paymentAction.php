<?php
if (isset($_POST['pay'])) {
    $userID = $_POST['userID'];
    $FullName = $_POST['FullName'];
    $CourseID = $_POST['CourseID'];
    $payDate = $_POST['payDate'];
    $feepayable = $_POST['feepayable'];
    $amountPaid= $_POST['amountPaid'];
    $currentArears=$_POST['currentArears'];




      if(!empty($Image) && !empty($userID) && !empty($FullName) && !empty($CourseID) && !empty($payDate) && !empty($feepayable) && !empty($amountPaid) && !empty($currentArears))
         {
          $dbc = mysqli_connect('localhost', 'root', '','marketit') or die('Error connecting to mysql server');
          $query = "INSERT INTO payments (Image, userID, FullName, Lastname, CourseID, payDate, currentArears, amountPaid) 
                    VALUES ('$Image','$userID','$FullName','$CourseID','$payDate','$currentArears','$amountPaid')";

          $result = mysqli_query($dbc, $query) or die('Error querying database');

        	mysqli_close($dbc);
          header('location:index.php?page=customerPaymentView');
        }
        else
        {
        	  echo '<p>Please enter all of the information to add your information.</p>';
        }
        }
        ?>
