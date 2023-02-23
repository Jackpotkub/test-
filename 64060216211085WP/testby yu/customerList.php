<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "book_store";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn) {
        die("ไม่สามารถติดต่อกับ MySQL ได้");
    }
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");

    $sql = "select * from customer order by customerId";

    $result = mysqli_query($conn, $sql);
    echo '<center>';
    echo '<br><h3>รายชื่อลูกค้า</h3>';
    echo '<table width="800" border="0">';
    echo '<tr><td align="left"><a href="data.php">เพิ่มข้อมูลลูกค้า</a></td><tr>';
    echo '</table>';

    echo '<br><table width="800" border="1">';
    echo '<tr bgcolor="">';
    echo '<th width ="150">รหัส</th>';
    echo '<th width ="200">ชื่อ-นามสกุล</th>';
    echo '<th width ="200">ที่อยู่</th>';
    echo '<th width ="200">อีเมล์</th>';
    echo '<th width ="300">หมายเลขโทรศัพท์</th>';
    echo '<th width ="90">แก้ไข</th>';
    echo '<th width ="90">ลบ</th></tr>';

    while ($rs = mysqli_fetch_array($result))
?>
</body>
</html>