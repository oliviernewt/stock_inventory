    <?php
    session_start();
    include("dbcon.php");
    if(isset($_POST['btn_login'])){ // เมื่อกดปุ่มล็อกอิน
        // ตรวจสอบการส่งค่าฟอร์ม ชื่อผู้ใช้และรหัสผ่าน ในที่น้้จะใช้รูปแบบอ่างง่าย หากต้องการความภัยเพิ่ม
        // ควรปรับรูปแบบตามต้องการ
        if(isset($_POST['staff_name']) && $_POST['staff_name']!=""
             &&  isset($_POST['staff_password']) && $_POST['staff_password']!=""){

                $sql="
                SELECT * FROM staff WHERE staff_name='".$_POST['staff_name']."'
                AND staff_password='".$_POST['staff_password']."'
                ";

                // คำสั่งคิวรี่ทำงาน
                if($result = $conn->query($sql)){
                    if($result->num_rows>0){ // พบข้อมูล
                        $row = $result->fetch_assoc();// ดึงข้อมูลจากฐานข้อมูล
                        $staff_login_status_exist=$row['staff_login_status'];  // เก็บสถานะล็อกอิน
                        $staff_datetime_using=$row['staff_datetime_using']; // เก็บเวลาที่ใช้อยู่ล่าสุด

                        // ถ้ามีผู้ใช้ค้างสถานะล็อกอินชื่อนี้อยู่
                        if($staff_login_status_exist==1){
                            // ถ้าเวลาที่ใช้อยู่ บวกอีก 10 วินาที มากกว่าหรือเท่ากับเวลาในปัจจุบัน
                            if(strtotime(date("Y-m-d H:i:s",strtotime($staff_datetime_using." +5 minute")))>=time()){
                                // กลับไปยังหรอล็อกอิน ส่ง error กลับ
                                header("Location:index.php?error=1");
                                exit;
                            }else{ // ถ้าน้อยกว่า หรือไม่ได้ใช้งานแล้ว
                                // สร้างตัวแปร session
                                $_SESSION['staff_id_ses']=$row['staff_id'];
                                $_SESSION['staff_name_ses']=$row['staff_name'];
                                // อัพเดทสถานะการล็อกอิน
                                $conn->query("
                                UPDATE staff SET staff_datetime_using='".date("Y-m-d H:i:s")."'
                                WHERE staff_id='".$_SESSION['staff_id_ses']."'
                                ");
                                // ไปยังหน้าสมาชิก
                                header("Location:stock/index.php");
                                exit;
                            }
                        }else{ // ถ้า ไม่มี  ผู้ใช้ล็อกอินชื่อนี้อยู่
                                // สร้างตัวแปร session
                                $_SESSION['staff_id_ses']=$row['staff_id'];
                                $_SESSION['staff_name_ses']=$row['staff_name'];
                                // อัพเดทวันที่ เวลา และสถานะการล็อกอิน
                                $conn->query("
                                UPDATE staff SET
                                staff_login_status=1,
                                staff_datetime_using='".date("Y-m-d H:i:s")."'
                                WHERE staff_id='".$_SESSION['staff_id_ses']."'
                                ");
                                // ไปยังหน้าเพจของสมาชิก
                                header("Location:stock/index.php");
                                exit;
                        }
                    }else{ // เกิดข้อผิดพลาด ไม่พบข้อมูลผู้ใช้ในระบบ
                        // กลับไปยังหรอล็อกอิน ส่ง error กลับ
                        header("Location:index.php?error=3");
                        exit;
                    }
                }else{ // เกิดข้อผิดพลาดการคิวรี่
                    // กลับไปยังหรอล็อกอิน ส่ง error กลับ
                    header("Location:index.php?error=3");
                    exit;
                }
            }else{ // ไม่ได้กรอกข้อมูล
                    // กลับไปยังหรอล็อกอิน ส่ง error กลับ
                header("Location:index.php?error=2");
                exit;
            }

    }else{ // ไม่ได้กดปุ่มล็อกอิน
        // กลับไปยังหรอล็อกอิน ส่ง error กลับ
        header("Location:index.php?error=2");
        exit;
    }
    ?>
