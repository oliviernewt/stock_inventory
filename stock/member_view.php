<?php
include 'header.php';
include 'nav.php';
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
             <h2><i class="fa fa-cube"></i> ข้อมูลพนักงาน</h2>
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
                       <th>รหัสพนักงาน</th>
                     	<th>รหัสประจำตัวประชาชน</th>
                     	<th>ชื่อพนักงาน</th>
                     	<th>นามสกุลพนักงาน</th>
                     	<th>ตำแหน่ง</th>
                      <th>ที่อยู่</th>
                     	<th>แก้ไข</th>
                     	<th>ลบ</th>
                     </tr>
                   </thead>


                   <tbody>
                     <?php
                    	if (isset($_GET["id"])) {
                    		$staff_id = $_GET["id"];
                    		$sql = "delete from staff where staff_id='$staff_id'";
                    		$result = mysqli_query($conn, $sql);
                    	}

                    	$sql = "SELECT staff.staff_id, staff.staff_sid, staff.staff_fname, staff.staff_lname, position.position_name, staff.staff_addr FROM staff INNER JOIN position ON staff.position = position.position_id";
                    	$result = mysqli_query($conn, $sql);
                    	while ($row = mysqli_fetch_array($result)) {
                    		$staff_id = $row["staff_id"];
                    		$staff_sid = $row["staff_sid"];
                    		$staff_fname = $row["staff_fname"];
                    		$staff_lname = $row["staff_lname"];
                    		$position = $row["position_name"];
                        $staff_addr = $row["staff_addr"];

                    		echo "<tr>
                    				<td>$staff_id</td>
                    				<td>$staff_sid</td>
                    				<td>$staff_fname</td>
                    				<td>$staff_lname</td>
                    				<td>$position</td>
                            <td>$staff_addr</td>
                    				<td><center><a href='member_edit.php?id=$staff_id'><i class='fa fa-pencil-square-o'></i></center></td>
                    				<td><center><a href='member_view.php?id=$staff_id' onclick='return confirm(\"ยืนยันการลบ?\");'><i class='fa fa-trash-o'></i></td>
                    				</center></td>
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
