<?php
include 'header.php';
include 'nav.php';

// Form Submit
if (isset($_POST["btnEdit"])) {
  $staff_id = $_POST["staff_id"];
  $staff_fname = $_POST["staff_fname"];
  $staff_lname = $_POST["staff_lname"];
  $staff_tel = $_POST["staff_tel"];
  $staff_addr = $_POST["staff_addr"];
  $staff_name = $_POST["staff_name"];
  $staff_password = $_POST["staff_password"];


  $sql = "UPDATE staff SET staff_fname='$staff_fname', staff_lname='$staff_lname', staff_tel='$staff_tel', staff_addr='$staff_addr', staff_name='$staff_name', staff_password='$staff_password'
          WHERE staff_id='$staff_id'
          ";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('แก้ไขสำเร็จ');";
    echo "window.location='member_view.php';";
    echo "</script>";

  }else{
    echo "<font color='red'>SQL Error</font><hr>";
  }
}else{
  $staff_id = $_GET["id"];
  $sql = "SELECT * FROM staff WHERE staff_id='$staff_id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $staff_id = $row["staff_id"];
    $staff_fname = $row["staff_fname"];
    $staff_lname = $row["staff_lname"];
    $staff_tel = $row["staff_tel"];
    $staff_addr = $row["staff_addr"];
    $staff_name = $row["staff_name"];
    $staff_password = $row["staff_password"];
  }else{
    $staff_id ="";
    $staff_fname = "";
    $staff_lname = "";
    $staff_tel = "";
    $staff_addr = "";
    $staff_name = "";
    $staff_password = "";
  }
}
 ?>

 <!-- page content -->
 <div class="right_col" role="main">
   <div class="">
     <div class="page-title">
       <div class="title_left">
         <h3><i class="fa fa-cube"></i> ส่วนงานพนักงาน</h3>
       </div>

       <div class="title_right">

       </div>
     </div>

     <div class="clearfix"></div>

     <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
           <div class="x_title">
             <h2><i class="fa fa-cube"></i> แก้ไขข้อมูลพนักงาน</h2>
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
               <form class="form-horizontal form-label-left" method="post">


                 <span class="section">แก้ไขรายละเอียดพนักงาน</span>

                 <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12">ชื่อพนักงาน <span>*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input name="staff_fname" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo "$staff_fname"; ?>">
                   </div>
                 </div>
                 <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12">นามสกุลพนักงาน <span>*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input name="staff_lname" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo "$staff_lname"; ?>">
                   </div>
                 </div>
                 <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12">ที่อยู่ <span>*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input name="staff_addr" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo "$staff_addr"; ?>">
                   </div>
                 </div>
                 <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12" >เบอร์โทรศัพท์ <span>*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input name="staff_tel" class="form-control col-md-7 col-xs-12" type="tel" value="<?php echo "$staff_tel"; ?>">
                   </div>
                 </div>
                 <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12">กำหนดชื่อเข้าใช้ <span>*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input name="staff_name" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo "$staff_name"; ?>">
                   </div>
                 </div>
                 <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12">กำหนดรหัสผ่าน <span>*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input name="staff_password" class="form-control col-md-7 col-xs-12" type="password" value="<?php echo "$staff_password"; ?>">
                   </div>
                 </div>




                 <div class="ln_solid"></div>
                 <div class="form-group">
                   <div class="col-md-6 col-md-offset-3">
                     <input name="staff_id" type="hidden" value="<?php echo "$staff_id"; ?>" />
                     <button type="reset" class="btn btn-primary">เริ่มใหม่</button>
                     <button name="btnEdit" type="submit" class="btn btn-success">เพิ่มแก้ไข</button>
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

 <!-- <script type="text/javascript">
$(function(){

    // เมื่อโหลดขึ้นมาครั้งแรก ให้ ajax ไปดึงข้อมูลจังหวัดทั้งหมดมาแสดงใน
    // ใน select ที่ชื่อ province_name
    // หรือเราไม่ใช้ส่วนนี้ก็ได้ โดยไปใช้การ query ด้วย php แสดงจังหวัดทั้งหมดก็ได้
    var IDSelected=$("select[name=province_name]").data("initval");
    $.post("getAddress.php",{
        IDSelected:IDSelected,
        IDTbl:1
    },function(data){
        $("select[name=province_name]").html(data);
        $("select[name=province_name]").trigger("change");
    });

    // สร้างตัวแปร สำหรับเก็บค่าข้อความให้เลือกรายการ เช่น เลือกจังหวัด
    // เราจะเก็บค่านี้ไว้ใช้กรณีมีการรีเซ็ต หรือเปลี่ยนแปลงรายการใหม่
    var chooseText=[];
    $(".ajax_address").each(function(i,k){
        var initObj=$(".ajax_address").eq(i).find("option:eq(0)")[0];
        chooseText[i]=initObj;
    });

    // ส่วนของการตรวจสอบ และดึงข้อมูล ajax สังเกตว่าเราใช้ css คลาสชื่อ ajax_address
    // ดังนั้น css คลาสชื่อนี้จำเป็นต้องกำหนด หรือเราจะเปลี่ยนเป็นชื่ออื่นก็ได้ แต่จำไว้ว่า
    // ต้องเปลี่ยนในส่วนนี้ด้วย
    $(".ajax_address").on("change",function(){
        var indexObj = $(".ajax_address").index(this); // เก็บค่า index ไว้ใช้งานสำหรับอ้างอิง
        // วนลูปรีเซ็ตค่า select ของแต่ละรายการ โดยเอาค่าจาก array ด้านบนที่เราได้เก็บไว้
        $(".ajax_address").each(function(i,k){
            if(i>indexObj){ // รีเซ็ตค่าของรายการที่ไม่ได้เลือก
                $(".ajax_address").eq(i).html(chooseText[i]);
            }
        });

        var obj=$(this);
        var IDCheck=obj.val();  // ข้อมูลที่เราจะใช้เช็คกรณี where เช่น id ของจังหวัด
        var IDWhere=obj.data("where"); // ค่าจาก data-where ค่าน่าจะเป็นตัวฟิลด์เงื่อนไขที่เราจะใช้
        var targetObj=$("select[data-where='"+(IDWhere+1)+"']"); // ตัวที่เราจะเปลี่ยนแปลงข้อมูล
        var IDSelected=targetObj.data("initval");
        if(targetObj.length>0){ // ถ้ามี obj เป้าหมาย
            targetObj.html("<option>.. กำลังโหลดข้อมูล.. </option>");  // แสดงสถานะกำลังโหลด
            setTimeout(function(){ // หน่วงเวลานิดหน่อยให้เห็นการทำงาน ตัดเออกได้
                // ส่งค่าไปทำการดึงข้อมูล option ตามเงื่อนไข
                 $.post("getAddress.php",{
                    IDTbl:IDWhere,
                    IDCheck:IDCheck,
                    IDSelected:IDSelected,
                    IDWhere:IDWhere-1
                },function(data){
                    targetObj.html(data);   // แสดงค่าผลลัพธ์
                    targetObj.trigger("change");
                });
            },1500);
        }
    });

});
</script>       -->
 <!-- /page content -->


 <?php
 include 'footer.php';
  ?>
