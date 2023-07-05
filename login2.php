<?php
// เชื่อมต่อฐานข้อมูล
$servername = "ชื่อเซิร์ฟเวอร์";
$username = "ชื่อผู้ใช้ฐานข้อมูล";
$password = "รหัสผ่านฐานข้อมูล";
$dbname = "ecomspex";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// รับข้อมูลการเข้าสู่ระบบ
$username = $_POST['username'];
$password = $_POST['password'];

// คำสั่ง SQL สำหรับตรวจสอบข้อมูลการเข้าสู่ระบบ
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    echo "เข้าสู่ระบบสำเร็จ";
} else {
    echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
}

$conn->close();
?>
