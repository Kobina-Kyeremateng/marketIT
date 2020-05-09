<div class="container" style="width:100%">
    <div class="table-responsive" id="search">
      <table class="table table-bordered table-striped sortable">
        <thead>
          <tr>
              <th style="width: 20%"  data-mainsort="1" data-firstsort="desc">Product Name & Total </th>
          </tr>
        </thead>
          <tbody>
            <?php
              $con=mysqli_connect('localhost','root','','marketit');
              $table = " ";
              $query = "Select pc.productCategoryid as productCategory_id, count(p.productID) as TotalProducts, pc.productCategoryName as productCategoryName from product p left join productCategory pc on pc.productCategoryID = p.productID group by productCategoryName";
              $result=mysqli_query($con,$query);
              while ($data=mysqli_fetch_assoc($result)){
              $table .="<tr><td>&raquo;&nbsp;<a href='productCategoryView.php?productCategoryid=".$data['productCategory_id']."'>".$data['productCategoryName']."</a>&nbsp;&nbsp;".$data['TotalProducts']." Product[s]</td></tr>";}
                
              echo $table;
            ?>
              </div>
          <tbody>
      </table>
    </div>
  </div>
</div>
