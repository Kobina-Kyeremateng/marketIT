<?php 
    include('connect.php');
    global $db;
     //$productCategory = $_POST['productcategory'];
     //$productType = $_POST['producttype'];
     //$productBrand = $_POST['productbrand'];
     //$productVersion = $_POST['productversion'];
     //$productColour = $_POST['productcolour'];

    //if (isset($_POST["productcategory"]) && !empty($_POST["productcategory"])) {
    if (isset($_POST["productcategory"])) {
        $query = $db->query("Select * from producttype WHERE ProductCategoryID = ".$_POST['productcategory']." ORDER BY ProductTypeName ASC");
        $rowCount = $query->num_rows;
        if ($rowCount > 0) {
            while ($data = $query->fetch_assoc()) {
                echo '<option value="'.$data['ProductTypeID'].'">'.$data['ProductTypeName'].'</option>';
            }
        } 
        else {
            echo '<option value=""> Product Type not available</option>';
        }
    }

    if (isset($_POST["producttype"])) {
        $query = $db->query("Select * from productbrand WHERE ProductTypeID = ".$_POST['producttype']." ORDER BY ProductBrandName ASC");
        //$query = $db->query("Select * from productbrand WHERE ProductTypeID = ".$_POST['producttype']." ");
        $rowCount = $query->num_rows;
        if ($rowCount > 0) {
            while ($data = $query->fetch_assoc()) {
                echo '<option value="'.$data['ProductBrandID'].'">'.$data['ProductBrandName'].'</option>';
            }
        } 
        else {
            echo '<option value=""> Product Type not available</option>';
        }
    }

    if (isset($_POST["productbrand"])) {
        $query = $db->query("Select * from productversion WHERE ProductBrandID = ".$_POST['productbrand']." ORDER BY ProductVersionName ASC");
        //$query = $db->query("Select * from productbrand WHERE ProductTypeID = ".$_POST['producttype']." ");
        $rowCount = $query->num_rows;
        if ($rowCount > 0) {
            while ($data = $query->fetch_assoc()) {
                echo '<option value="'.$data['ProductVersionID'].'">'.$data['ProductVersionName'].'</option>';
            }
        } 
        else {
            echo '<option value=""> Product Version not available</option>';
        }
    }

    if (isset($_POST["productversion"])) {
        $query = $db->query("Select * from productcolour WHERE ProductVersionID = ".$_POST['productversion']." ORDER BY ProductColourName ASC");
        //$query = $db->query("Select * from productbrand WHERE ProductTypeID = ".$_POST['producttype']." ");
        $rowCount = $query->num_rows;
        if ($rowCount > 0) {
            while ($data = $query->fetch_assoc()) {
                echo '<option value="'.$data['ProductColourID'].'">'.$data['ProductColourName'].'</option>';
            }
        } 
        else {
            echo '<option value=""> Product Colour not available</option>';
        }
    }


?>