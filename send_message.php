<?php
// ربط الاتصال بقاعدة البيانات
include 'db_connect.php';

// التحقق من إرسال النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // الحصول على الرسالة من النموذج
    $message = $_POST['message'];
    $user_id = 1; // يجب تعيين user_id بناءً على المستخدم المسجل

    // إدراج الرسالة في قاعدة البيانات
    $sql = "INSERT INTO messages (user_id, message) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $message);

    if ($stmt->execute()) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
