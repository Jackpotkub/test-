<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพื่มข้อมูลลูกค้า</title>
</head>
<body>
    <?php
        echo "<h3>";
        
            $customerName = $_POST['customerName'];
            $customerAddress = $_POST['customerAddress'];
            $customerEmail = $_POST['customerEmail'];
            $customerTelephone = $_POST['customerTelephone'];

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbName = "bookstore";

            $conn = mysqli_connect($hostname,$username,$password);
            echo"<center>";
            if(!$conn)
                die("ไม่สามารถติดต่อกับ mySQL ได้");

            mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookstore ได้");


            mysqli_query($conn,"set character_set_connection=utf8mb4");
            mysqli_query($conn,"set character_set_client=utf8mb4");
            mysqli_query($conn,"set character_set_results=utf8mb4");

            $sql = "insert into customer(customerName,customerAddress,customerEmail,customerTelephone) values ('$customerName','$customerAddress','$customerEmail','$customerTelephone')";

            mysqli_query($conn,$sql) or die("insert ลงตาราง customer มีข้อผิดพลาดเกิดขึ้น".mysqli_error());

            echo "<br><br><h2>บันทึกข้อมูลลูกค้าชื่อ".$customerName."เรียบร้อย</h2>";

        echo"</h3><br>";
        echo"ชื่อ-นามสกุล : $customerName<br>";
        echo"ที่อยู่  : $customerAddress<br>";
        echo"อีเมล : $customerEmail<br>";
        echo"หมายเลขโทรศัพท์ : $customerTelephone<br>";

        if(empty(trim($customerName)) || empty(trim($customerAddress)) || empty(trim($customerEmail)) || empty(trim($customerTelephone)))
        {
            echo "<script> alert('กรุณากรอกข้อมูลให้ครบถ้วน');
            history.back();</script> ";
            exit();
        }
        else if(!preg_match("/^[กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรฤลฦวศษสหฬอฮะัาำิีึืฺุูเแโไๅ๐็่้๋์a-zA-Z ]+$/",$namelast))
        {
            echo "<script> alert('กรุณากรอกตัวอักษร');
            history.back();</script> ";
            exit();
        }
        else if(!filter_var(trim($customerEmail),FILTER_VALIDATE_EMAIL))
        {
            echo "<script> alert('$customerEmail is not a valid email customerAddress');
            history.back();</script> ";
            exit();
        }
        else if(!ctype_digit(trim($customerTelephone)))
        {
            echo "<script> alert('กรุณากรอก หมายเลขโทรศัพท์');
            history.back();</script> ";
            exit();
        }
        

?>    
</body>
</html>