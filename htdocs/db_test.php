<?php
// إعدادات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root"; // الافتراضي في XAMPP هو "root"
$password = ""; // الافتراضي هو كلمة مرور فارغة
$dbname = "test_database"; // اسم قاعدة البيانات التي أنشأتها

// محاولة الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
echo "تم الاتصال بقاعدة البيانات بنجاح!";
?>
