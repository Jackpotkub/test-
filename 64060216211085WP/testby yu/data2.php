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
        $customerName = $_POST['customerName'];
        $customerAddress = $_POST['customerAddress'];
        $customerEmail = $_POST['customerEmail'];
        $customerTelephone = $_POST['customerTelephone'];

        echo "Name : $customerName <br>";
        echo "Address : $customerAddress <br>";
        echo "Email : $customerEmail <br>";
        echo "Tel.Phone : $customerTelephone <br>";



        if (empty(trim($customerName)) || empty(trim($customerAddress)) || empty(trim($customerEmail)) || empty(trim($customerTelephone))) {
            echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน');
            history.back(); </script>";
            exit();
        } else if (!preg_match("/^[กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรลวศษสหฬอฮฯะ ั า ำ ิ ี ึ ื ุ ฺูเแโใไๅๆ ็ ่ ้ ๊ ๋ ์a-zA-Z ]+$/", $customerName)) {
            echo "<script>alert('กรุณากรอกชื่อเป็นตัวอักษร');
            history.back(); </script>";
            exit();
        }else if(!filter_var(trim($customerEmail),FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('$customerEmail กรุณากรอกอีเมล');
            history.back(); </script>";
            exit();
        }else if(!ctype_digit(trim($customerTelephone))){
            echo"<script>alert('กรุณากรอกหมายเลขโทรศัพท์ให้ถูกต้อง'); history.back();</script>";
            exit();
        }


        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbName = "book_store";
        $conn = mysqli_connect($hostname,$username,$password);
        if (!$conn) {
            die("ไม่สามารถติดต่อกับ myySQL ได้");
        }
        mysqli_select_db($conn,$dbName) or
        die("ไม่สามาระเลือกฐานข้อมูล bookStore ได้");

        mysqli_query($conn,"set character_set_connection=utf8mb4");
        mysqli_query($conn,"set character_set_client=utf8mb4");
        mysqli_query($conn,"set character_set_results=utf8mb4");

        $sql = "INSERT INTO customer(customerName,customerAddress,customerEmail,customerTelephone) VALUES ('$customerName','$customerAddress','$customerEmail','$customerTelephone')";
        
        mysqli_query($conn,$sql) or die("insert ลงตาราง customer มีขอผิดพลาดเกิดขึ้น".mysqli_error());
        echo '<br><br><h2>บันทึกข้อมูล'.$customerName.'เรีบยร้อย</h2>';
    ?>
</body>
</html>