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
             <h2><i class="fa fa-cube"></i> ระบบสินค้าคงคลัง</h2>
             <ul class="nav navbar-right panel_toolbox">
               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
               </li>
               <li><a class="close-link"><i class="fa fa-close"></i></a>
               </li>
             </ul>
             <div class="clearfix"></div>
           </div>
           <div class="x_content">
               <center>
                 <img src="../favicon.ico"></br>
                 <h3>STOCK INVENTORY</h3>
                 <div class="x_content">

                                   <div class="bs-example" data-example-id="simple-jumbotron">
                                     <div class="jumbotron">
                                       <h1>Hello, <?=$_SESSION['staff_name_ses']?>!</h1>
                                       <p>ขอต้อนรับเข้าสู่ระบบสินค้าคงคลัง ซึ่งระบบนี้จัดทำขึ้นเพื่อใช้ในการศึกษาในรายวิชา การพัฒนาแอพพลิเคชั่นบนเว็บ รหัสวิชา INT2403 ความสามารถโดยรวมของระบบจะเขียนบนพื้นฐานของภาษา PHP ร่วมกับฐานข้อมูล MySQL ระบบนี้ยังเป็นเวอร์ชั่นทดลอง (lite version) จึงอาจมีบางส่วนผิดพลาดบ้าง จึงขออภัยมา ณ ที่นี้ด้วย</p>
                                     </div>
                                   </div>

                                 </div>
               </center>
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
