<body class="nav-md footer_fixed">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-cube"></i> <span>ระบบสินค้าคงคลัง</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="../favicon.ico" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>ยินดีต้อนรับ,</span>
              <h2><?=$_SESSION['staff_name_ses']?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Lite Version</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> หน้าหลัก <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php"><i class="fa fa-windows"></i> แดชบอร์ด</a></li>
                    <li><a href="product_view.php"><i class="fa fa-shopping-cart"></i> สินค้าทั้งหมด</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-barcode"></i> ส่วนงาน เพิ่ม-เบิก <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="product_order.php"><i class="fa fa-cloud-upload"></i> รับ/เพิ่มสินค้า</a></li>
                    <li><a href="product_export.php"><i class="fa fa-cloud-download"></i> เบิกสินค้า</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-users"></i> ส่วนงานพนักงาน <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="member_view.php"><i class="fa fa-info-circle"></i> ข้อมูลพนักงาน / เจ้าหน้าที่</a></li>
                    <li><a href="member_add.php"><i class="fa fa-download"></i> เพิ่มข้อมูล</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-clipboard"></i> ประวัติการทำรายการ <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a onclick="new TabbedNotification({
                                    title: 'ชี้แจ้งรายการรับสินค้า',
                                    text: 'รายการประวัติการรับสินค้า อยู่ในช่วงปรับปรุง สามารถใช้ได้ในเวอร์ชั่นเต็ม.',
                                    type: 'error',
                                    sound: false
                                })"><i class="fa fa-file-text"></i> รายการรับสินค้า</a></li>
                    <li><a onclick="new TabbedNotification({
                                    title: 'ชี้แจ้งรายการเบิกสินค้า',
                                    text: 'รายการประวัติการเบิกสินค้า อยู่ในช่วงปรับปรุง สามารถใช้ได้ในเวอร์ชั่นเต็ม.',
                                    type: 'error',
                                    sound: false
                                })"><i class="fa fa-file-text"></i> รายการเบิกสินค้า</a></li>
                  </ul>
                </li>

              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="../favicon.ico" alt=""><?=$_SESSION['staff_name_ses']?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> โปรไฟล์</a></li>
                  <li>
                    <a href="javascript:;">
                      <span>ตั่งค่า</span>
                    </a>
                  </li>
                  <li><a href="../information.pdf">Help</a></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> ออกจากระบบ</a></li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->
