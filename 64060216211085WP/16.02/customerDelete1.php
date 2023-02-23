
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete1</title>
</head>
<body>
    <?php
    $customerId = $_REQUEST['customerId'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookstore";

    $conn = mysqli_connect($hostname, $username, $password);
    echo"<center>";
    if(!$conn)
        die("ไม่สามารถติดต่อกับ mySQL ได้");

    mysqli_select_db($conn,$dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");

    $sql = "delete from customer where customerId='$customerId'";

    mysqli_query($conn, $sql) or die ("delete จากตาราง customer มีข้อผิดพลาดเกิดขึ้น".mysqli_error());

    mysqli_close($conn);
    
    header("location:indexcal2.php"); 

    ?>
</body>
</html>

