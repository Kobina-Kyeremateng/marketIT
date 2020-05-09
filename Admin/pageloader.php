<?php
$page = (isset($_GET['page']))? $_GET['page'] : 'index';
switch ($page)
{
      case 'index':
      $url='dashboard.php';
      break;

      case 'userAdd':
      $url = 'userAdd.php';
      break;
      
      case 'adminAdd':
      $url = 'adminAdd.php';
      break;
      
      case 'adminView':
      $url = 'adminView.php';
      break;
      
      case 'userView':
      $url = 'userView.php';
      break;

      case 'userEdit':
      $url = 'userEdit.php';
      break;
      
      case 'adminEdit':
      $url = 'adminEdit.php';
      break;

      case 'userReport':
      $url = 'userReport.php';
      break;

      case 'paymentAdd':
      $url='paymentAdd.php';
      break;

      case 'paymentView':
      $url='paymentView.php';
      break;

      case 'serviceAdd':
      $url = 'serviceAdd.php';
      break;

      case 'serviceView':
      $url = 'serviceView.php';
      break;

      case 'serviceEdit':
      $url = 'serviceEdit.php';
      break;

      case 'productAdd':
      $url = 'productAdd.php';
      break;

      case 'productView':
      $url = 'productView.php';
      break;

      case 'productEdit':
      $url = 'productEdit.php';
      break;

      case 'productImage':
      $url = 'productImage.php';
      break;
      
      case 'productImageView':
      $url = 'productImageView.php';
      break;

      case 'departmentAdd':
      $url = 'departmentAdd.php';
      break;

      case 'departmentView':
      $url = 'departmentView.php';
      break;

      case 'departmentEdit':
      $url = 'departmentEdit.php';
      break;

      case 'createUser':
      $url = 'createUser.php';
      break;
  }

  ?>
