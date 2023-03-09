<?php
    $customerId = $_POST['customerId'];
    $customerName = $_POST['customerName'];
    $customerAddress = $_POST['customerAddress'];
    $customerEmail = $_POST['customerEmail'];
    $customerTelephone = $_POST['customerTelephone'];


    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookstore";

    echo 'name-lastname'.$customerName;
    echo 'Address'.$customerAddress;
    echo 'Email'.$customerEmail;
    echo 'Tol'.$customerTelephone;
    $conn = mysqli_connect($hostname,$username,$password);
    echo"<center>";
    if(!$conn)
        die("ไม่สามารถติดต่อกับ mySQL ได้");

    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookstore ได้");

    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_client=utf8mb4");
    mysqli_query($conn,"set character_set_results=utf8mb4");

    $sql = "update customer set customerName='$customerName',
                                customerAddress ='$customerAddress',customerEmail = '$customerEmail',
                                customerTelephone='$customerTelephone'where 
                                customerId = '$customerId'";
    mysqli_query($conn, $sql) or die ("update table customer error".mysqli_error());
    mysqli_close($conn);
    echo '<br><br><h2>แก้ไขข้อมูลลูกค้ารหัส'.$customerId.'เรียบร้อย</h2>';
    echo '<br><br><a href = "indexcal2.php">Back to list indexcal.php</a>';
    echo '</center>';

?>