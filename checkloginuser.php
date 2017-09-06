<?php
session_start();
include("dbcon.php");
// ถ้าสมาชิกยังมีการใช้งานเพจอยู่
if(isset($_SESSION['staff_id_ses']) && $_SESSION['staff_id_ses']!="")
{
    // ให้อัพเดทเวลาที่ใช้อยู่ปัจจุบัน กับ สถานะการล็อกอิน
    $conn->query("
    UPDATE stock SET
    staff_login_status=1,
    staff_datetime_using='".date("Y-m-d H:i:s")."'
    WHERE staff_id='".$_SESSION['staff_id_ses']."'
    ");
    echo date("Y-m-d H:i:s");
}else{ // ถ้าไม่ได้ใช้แล้วหรือล็อกเอาท์หรืออื่นๆ ส่งค่ากลับเป็น 0
    echo 0;
}
?>
