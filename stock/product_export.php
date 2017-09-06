<?php
include 'header.php';
include 'nav.php';
if (isset($_POST["btnEdit"])) {
  $product_id = $_POST["product_id"];
  $product_unit = $_POST["product_unit"];

  $query = mysqli_query($conn, "SELECT * FROM product WHERE product_id='$product_id'");
  if (mysqli_num_rows($query) > 0) {
    $sql = "UPDATE `product` SET `product_unit`=product_unit-$product_unit, `product_update`='".date("Y-m-d H:i:s")."' WHERE `product_id`='$product_id'";
    // $sql = "INSERT INTO `order` (`order_date`, `order_supp_id`, `order_unit`, `order_staff_id`) VALUES (NOW(), '$order_supp_id', '$order_unit', '$order_staff_id')";

  }	else {
    $sql = "INSERT INTO `product`(`product_id`, `product_name`, `product_category`, `product_unit`, `product_update` ) VALUES('$product_id', '$product_name', '$product_category', '$product_unit', NOW())";
    // $sql = "INSERT INTO `order` (`order_date`, `order_supp_id`, `order_unit`, `order_staff_id`) VALUES (NOW(), '$order_supp_id', '$order_unit', '$order_staff_id')";

  }



  $result = mysqli_query($conn, $sql);
  if ($result){
    echo "<script type='text/javascript'>";
    echo "alert('เบิกสินค้าสำเร็จ');";
    echo "window.location='product_view.php';";
    echo "</script>";
    //header('location: admin_product.php');
  }else{
    echo "<script type='text/javascript'>";
    echo "alert('สินค้าเหลือไม่เพียงพอ');";
    echo "</script>";  }
}
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
             <h2><i class="fa fa-cube"></i> เบิกสินค้า</h2>
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
               <form class="form-horizontal form-label-left" novalidate method="post">


                 <span class="section">กรอกรายละเอียดสินค้า</span>

                 <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">รหัสสินค้า <span class="required">*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input class="form-control col-md-7 col-xs-12" data-validate-length-range="13" name="product_id" placeholder="ใส่รหัสสินค้า หรือ บาร์โค้ด 13 หลัก" required="required" type="text">
                   </div>
                 </div>
                 <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">จำนวนสินค้า <span class="required">*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="number" name="product_unit" required="required" data-validate-minmax="1,1000" class="form-control col-md-7 col-xs-12">
                   </div>
                 </div>

                 <div class="ln_solid"></div>
                 <div class="form-group">
                   <div class="col-md-6 col-md-offset-3">
                     <button type="reset" class="btn btn-primary">เริ่มใหม่</button>
                     <button name="btnEdit" type="submit" class="btn btn-success">เบิกสินค้า</button>
                   </div>
                 </div>
               </form>
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
