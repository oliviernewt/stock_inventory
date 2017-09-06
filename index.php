<?php
  include 'dbcon.php';
  session_start();

  //login ไม่ซ้ำ
  // กำหนด array ข้อความ error
  $msg_login_error=array(
    "1"=>"เกิดข้อผิดพลาด ชื่อล็อกอินนี้ กำลังใช้งานอยู่! ",
    "2"=>"เกิดข้อผิดพลาด โปรดกรอกชื่อผู้ใช้และรหัสผ่าน! ",
    "3"=>"เกิดข้อผิดพลาด ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง! ",
);
?>
<html>
  <head>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stock Inventory | ระบบสินค้าคงคลัง</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="check_login.php">
              <h1><img src="favicon.ico"> ระบบสินค้าคงคลัง</img></h1>
              <div>
                <input type="text" class="form-control" placeholder="ชื่อผู้ใช้ | username" name="staff_name" id="staff_name" required/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="รหัสผ่าน | password" name="staff_password" id="staff_password" required/>
              </div>
              <div>
                <button class="btn btn-default submit" type="submit" name="btn_login">เข้าสู่ระบบ</button>
              </div>


                <div class="clearfix"></div>
                <br />

                <?php if(isset($_GET['error'])){?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <?=$msg_login_error[$_GET['error']]?>
                  </div>
                <?php } ?>

                <div>
                  <h1><i class="fa fa-cogs"></i> STOCK INVENTORY</h1>
                  <p>©2016 All Rights Reserved. NATTAPONG KANTAKOON.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

  </body>
</html>
