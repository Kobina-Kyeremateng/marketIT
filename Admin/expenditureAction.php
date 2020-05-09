<?php
if (isset($_POST['addExpend'])) {
    $item = $_POST['item'];
    $staff = $_POST['FullName'];
    $amount = $_POST['amountP'];
    $date = $_POST['date'];
   
      if(!empty($item) && !empty($staff) && !empty($amount) && !empty($date) )
         {
          $dbc = mysqli_connect('localhost', 'root', '','marketit') or die('Error connecting to mysql server');
          $query = "INSERT INTO Expenditure (Item,Staff,Amount,ExpDate)
                    VALUES('$item','$staff','$amount','$date')";

          $result = mysqli_query($dbc, $query) or die('Error querying database');

        	mysqli_close($dbc);
          header('location:index.php?page=ExpenditureView.php');
        }
        else
        {
        	  echo '<p>Please enter all of the information to add your information.</p>';
        }
        }
        ?>
