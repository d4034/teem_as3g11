<?php
// ربط الاتصال بقاعدة البيانات
include 'db_connect.php';

// جلب الرسائل من قاعدة البيانات
$sql = "SELECT users.username, messages.message, messages.created_at FROM messages JOIN users ON messages.user_id = users.id ORDER BY messages.created_at DESC";
$result = $conn->query($sql);

// عرض الرسائل
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['username'] . "</h3>";
        echo "<p>" . $row['message'] . "</p>";
        echo "<small>أرسل في: " . $row['created_at'] . "</small>";
        echo "</div><hr>";
    }
} else {
    echo "لا توجد رسائل حتى الآن.";
}

$conn->close();
?>
