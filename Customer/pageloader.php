<?php
$page = (isset($_GET['page']))? $_GET['page'] : 'index';
switch ($page)
{
      //Customer
      case 'index':
        $url = 'dashboard.php';
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
  
        
  }

  ?>
