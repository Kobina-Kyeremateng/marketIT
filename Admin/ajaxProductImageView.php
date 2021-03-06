<div class="page-content">
<!-- Wrapper -->
<div class="wrapper wrapper-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
      <!-- Ibox -->
      <div class="ibox bg-boxshadow mb-30">
        <h5 class="mb-30">Data Table</h5>
          <p align="right"> <input type="text" placeholder="Type here to search" onkeydown="loadDoc(this.value)">
            <div id="search">
          <!-- Ibox Content -->
          <div class="ibox-content">
              <!-- Table Responsive -->
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover dataTables-example">
                <thead>
                  <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th>Image 4</th>
                    <th>Image 5</th>
                    <th>Image 6</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                //connection to database
                $con = mysqli_connect('localhost', 'root','','marketit') ;
                $query = "SELECT Product.ProductID, ProductVersion.ProductVersionName, ProductImage.Image1, ProductImage.Image2, ProductImage.Image3, ProductImage.Image4, ProductImage.Image5, ProductImage.Image6 from Product INNER JOIN ProductImage ON Product.ProductID=ProductImage.ProductID INNER JOIN ProductVersion on Product.ProductVersionID=ProductVersion.ProductVersionID";
                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_assoc($result))
                {
                    $ProductID = $data['ProductID'];
                    $ProductVersionName = $data['ProductVersionName'];
                    $Image1 = $data['Image1'];
                    $Image2 = $data['Image2'];
                    $Image3 = $data['Image3'];
                    $Image4 = $data['Image4'];
                    $Image5 = $data['Image5'];
                    $Image6 = $data['Image6'];
                    
                echo "<tr class='gradeX'>
                    <td class='center'>$ProductID</td>
                    <td class='center'>$ProductVersionName</td>
                    <td class='center'><img src='$Image1' width='50px'></td>
                    <td class='center'><img src='$Image2' width='50px'></td>
                    <td class='center'><img src='$Image3' width='50px'></td>
                    <td class='center'><img src='$Image4' width='50px'></td>
                    <td class='center'><img src='$Image5' width='50px'></td>
                    <td class='center'><img src='$Image6' width='50px'></td>
                    <td class='center'><a href='?page=productImage&&id=$ProductID'>Add Images</a> || <a href='?page=productEdit&&id=$ProductID'>Edit</a></td
                  </tr>";
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>