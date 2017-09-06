<?php
header("Content-type:text/html; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
include_once("../dbcon.php");
?>
<?php
// แสดงรายการจังหวัดทั้งหมด
if(isset($_GET['type_option']) && $_GET['type_option']==1){
?>
<option value="">เลือกรายการ</option>
<?php
    $sql="
    SELECT * FROM tbl_provinces WHERE 1
    ";
    $result = $mysqli->query($sql);
    if($result){
        while($row=$result->fetch_array()){
            $is_selected=(isset($_GET['checkVal']) && $_GET['checkVal']==$row['province_id'])?" selected":"";
?>
        <option value="<?=$row['province_id']?>" <?=$is_selected?>><?=$row['province_name']?></option>
<?php
        }
    }
?>
<?php }else{ ?>
    <?php if(isset($_GET['type_option']) && $_GET['type_option']==1){  ?>
        <option value="">เลือกรายการ</option>
    <?php } ?>
<?php } //
exit;
?>
<?php
// ส่งค่าไอดีจังหวัดมาเพื่อแสดงรายการอำเภอ
if(isset($_GET['province_id']) && $_GET['province_id']!="" && $_GET['type_option']==2){
?>
<option value="">เลือกรายการ</option>
<?php
    $sql="
    SELECT * FROM tbl_amphures WHERE province_id = '".$_GET['province_id']."'
    ";
    $result = $mysqli->query($sql);
    if($result){
        while($row=$result->fetch_array()){
            $is_selected=(isset($_GET['checkVal']) && $_GET['checkVal']==$row['amphur_id'])?" selected":"";
?>
        <option value="<?=$row['amphur_id']?>" <?=$is_selected?>><?=$row['amphur_name']?></option>
<?php
        }
    }
?>
<?php }else{ ?>
    <?php if(isset($_GET['type_option']) && $_GET['type_option']==2){  ?>
        <option value="">เลือกรายการ</option>
    <?php } ?>
<?php } //
exit;
?>

<?php
// ส่งค่าไอดีอำเภอมาเพื่อแสดงรายการตำบล
if(isset($_GET['amphur_id']) && $_GET['amphur_id']!="" && $_GET['type_option']==3){
?>
<option value="">เลือกรายการ</option>
<?php
    $sql="
    SELECT * FROM tbl_districts WHERE amphur_id = '".$_GET['amphur_id']."'
    ";
    $result = $mysqli->query($sql);
    if($result){
        while($row=$result->fetch_array()){
            $is_selected=(isset($_GET['checkVal']) && $_GET['checkVal']==$row['district_id'])?" selected":"";
?>
        <option value="<?=$row['district_id']?>" <?=$is_selected?>><?=$row['district_name']?></option>
<?php
        }
    }
?>
<?php }else{ ?>
    <?php if(isset($_GET['type_option']) && $_GET['type_option']==3){  ?>
        <option value="">เลือกรายการ</option>
    <?php } ?>
<?php } //
exit;
?>
