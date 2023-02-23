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
    $customerId = $_REQUEST['customerID'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "book_store";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn) {
        die("ไม่สามารถติดต่อกับ MySQL ได้");
    }
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
    $sql = "delete from customer where customerID='$customerId'";
    mysqli_query($conn, $sql) or die("delete จากตารางcustomer มีข้อผิดพลาดเกิดขึ้น" . mysqli_error($conn));
    mysqli_close($conn);
    header("location:customerList.php");
    ?>
</body>
</html>