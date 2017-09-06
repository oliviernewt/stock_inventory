<?php
    include 'dbcon.php';
    /**
      * @author	Nattapong Kantakoon
      * @copyright	Copyright (c) 2016
      * @since	Version 1.0.0
    **/
    session_start();
    require("../dbcon.php");
    // ถ้าไม่มี session ที่กำหนดสถานะสมาชิก
    if(!isset($_SESSION['staff_id_ses']) || $_SESSION['staff_id_ses']=="")
    {
        // ไปที่หน้าล็อกอิน
        header("Location:../index.php");
        exit;
    }
?>
<html>
<head>

  <title>Stock Inventory | ระบบสินค้าคงคลัง</title>
  <link href="../favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- jQuery custom content scroller -->
  <link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">

</head>
<body>
  <script type="text/javascript">
  $(function(){

      // กำหนดให้สคริปเช็คสถานะการใช้งานอยู่ของสมาชิกและอัพเดทเวลา ให้ทำงานทุกๆ 5 วินาที
      setInterval(function(){
          $.post("checkloginuser.php",function(data){
              if(data==0){ // ถ้าไม่ได้ใช้แล้วหรือล็อกเอาท์หรืออื่นๆ
                  // ให้ไปที่หน้าล็อกอิน
                  window.location='index.php';
              }
          });
      },300000);  // 1000 เท่ากับ 1 วินาที // เท่ากับ 300 วินาทีเท่ากับ 5 นาทีี
  });
  </script>
  
</body>
</html>
