<?php
include 'header.php';
include 'nav.php';
 ?>

 <!-- page content -->
 <div class="right_col" role="main">
   <div class="">
     <div class="page-title">
       <div class="title_left">
         <h3><i class="fa fa-cube"></i> ระบบสินค้าคงคลัง</h3>
       </div>

       <div class="title_right">
       </div>
     </div>

     <div class="clearfix"></div>

     <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
           <div class="x_title">
             <h2><i class="fa fa-cube"></i> แสดงรายการสินค้า</h2>
             <ul class="nav navbar-right panel_toolbox">
               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
               </li>
               <li><a class="close-link"><i class="fa fa-close"></i></a>
               </li>
             </ul>
             <div class="clearfix"></div>
           </div>
           <div class="x_content">
               <!--ใส่เนื้อหา-->
               <div class="x_content">
                 <p class="text-muted font-13 m-b-30">
                   <!--ใส่รายละเอียด-->
                 </p>
                 <table id="datatable" class="table table-striped table-bordered">
                   <thead>
                     <tr>
                        <th>รหัสสินค้า</th>
                      	<th>ชื่อสินค้า</th>
                      	<th>ประเภท</th>
                      	<th>จำนวน</th>
                      	<th>วันที่เปลี่ยนแปลง</th>
                      	<th>ลบ</th>
                     </tr>
                   </thead>


                   <tbody>
                     <?php
                     	if (isset($_GET["id"])) {
                     		$product_id = $_GET["id"];
                     		$sql = "delete from product where product_id='$product_id'";
                     		$result = mysqli_query($conn, $sql);
                     	}

                     	// $sql = "select * from  product";
                     	$sql = "SELECT product.product_id, category.cat_name, product.product_name, product.product_unit, product.product_update FROM product INNER JOIN category ON product.product_category = category.cat_id ";
                     	$result = mysqli_query($conn, $sql);
                     	while ($row = mysqli_fetch_array($result)) {
                     		$product_id = $row["product_id"];
                     		$product_name = $row["product_name"];
                     		$product_category = $row["cat_name"];
                     		$product_unit = $row["product_unit"];
                     		$product_update = $row["product_update"];



                     	echo "<tr>
                     				<td>$product_id</td>
                     				<td>$product_name</td>
                     				<td>$product_category</td>
                     				<td>$product_unit</td>
                     				<td>$product_update</td>
                     				<td><center><a href='product_view.php?id=$product_id' onclick='return confirm(\"ยืนยันการลบ?\");'><i class='glyphicon glyphicon-trash'></i></td>
                     			</tr>";
                      		}
                      ?>
                   </tbody>
                 </table>
               </div>
               <!--ส่วนเนื้อหา-->
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- /page content -->


 <?php
 include 'footer.php';
  ?>
