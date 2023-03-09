<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListCustomer</title>
</head>
<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookstore";
    $conn = mysqli_connect($hostname,$username,$password);
    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_client=utf8mb4");
    mysqli_query($conn,"set character_set_results=utf8mb4");

    if(!$conn){
        die("ไม่สามารถติดต่อได้");
    }
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูลได้");

    $sql = "select * from customer order by customerId";
    $result = mysqli_query($conn, $sql);


    echo '<center>';
    echo '<br><h3>รายชื่อลูกค้า</h3>';
    echo '<table width="800" border="0"';
    echo '<tr><td alighn ="left"><a href ="index.php">เพิ่มข้อมูลลูกค้า</a></td></tr>';
    echo '</table>';

    echo "<br><table width='800' border='1'";
    echo "<tr bgcolor=''>";
    echo "<th width = '150'>รหัส</th>";
    echo "<th width = '200'>ชื่อ-นามสกุล</th>";
    echo "<th width = '200'>ที่อยู่</th>";
    echo "<th width = '200'>อีเมล</th>";
    echo "<th width = '200'>หมายเลขโทรศัพท์</th>";
    echo "<th width = '80'>แก้ไข</th>";
    echo "<th width = '80'>ลบ</th></tr>";

    /*mysqli_fetch_array*/

    while ($rs = mysqli_fetch_array($result))
    {
        echo '<tr align = "center" bgcolor="">';
        echo '<td>'.$rs["customerId"].'</td>';
        echo '<td align="left">'.$rs["customerName"].'</td>';
        echo '<td align="left">'.$rs["customerAddress"].'</td>';
        echo '<td align="left">'.$rs["customerEmail"].'</td>';
        echo '<td align="left">'.$rs["customerTelephone"].'</td>';

        echo '<td><a href="customerUpdate1.php?customerId='.$rs["customerId"].'" >[แก้ไข]</a></td>';
        echo '<td><a href="customerDelete1.php?customerId='.$rs["customerId"].'" onclick="return confirm(\'ยืนยันการลบข้อมูลลูกค้ารหัส'.$rs["customerId"].'\')">[ลบ]</a></td>';
        echo '</tr>';
        
    }
    echo '</table>';
    mysqli_close($conn);

    echo'<br><br><a href="menu1.php">Back to menu</a>';
    echo'</center>';

    ?>
</body>
</html>+