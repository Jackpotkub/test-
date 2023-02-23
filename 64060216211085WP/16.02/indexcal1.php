<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพื่มข้อมูลลูกค้า</title>
</head>
<body>
<form method="REQUEST" action="index.php">
    <?php
        echo "<h3>";
        
            $namelast = $_REQUEST['namelast'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $tol = $_REQUEST['tol'];

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

            $sql = "insert into customer(customerName,customerAddress,customerEmail,customerTelephone) values ('$namelast','$address','$email','$tol')";

            mysqli_query($conn,$sql) or die("insert ลงตาราง customer มีข้อผิดพลาดเกิดขึ้น".mysqli_error());

            echo "<br><br><h2>บันทึกข้อมูลลูกค้าชื่อ".$namelast."เรียบร้อย</h2>";
            

        echo"</h3><br>";
        echo"ชื่อ-นามสกุล : $namelast<br>";
        echo"ที่อยู่  : $address<br>";
        echo"อีเมล : $email<br>";
        echo"หมายเลขโทรศัพท์ : $tol<br>";

        if(empty(trim($namelast)) || empty(trim($address)) || empty(trim($email)) || empty(trim($tol)))
        {
            echo "<script> alert('กรุณากรอกข้อมูลให้ครบถ้วน');
            history.back();</script> "; exit();
        }
        else if(!preg_match("/^[กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรฤลฦวศษสหฬอฮะัาำิีึืฺุูเแโไๅ๐็่้๋์a-zA-Z ]+$/",$namelast))
        {
            echo "<script> alert('กรุณากรอกตัวอักษร');
            history.back();</script> "; exit();
        }
        else if(!filter_var(trim($email),FILTER_VALIDATE_EMAIL))
        {
            echo "<script> alert('$email is not a valid email address');
            history.back();</script> "; exit();
        }
        else if(!ctype_digit(trim($tol)))
        {
            echo "<script> alert('กรุณากรอก หมายเลขโทรศัพท์ให้ถูกต้อง');
            history.back();</script> "; exit();
        }
        

?>    

<html>
    <a href="http://index.php">
</a></html>
</body>
</html>
            