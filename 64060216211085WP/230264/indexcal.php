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
        
            $namelast = $_POST['namelast'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $tol = $_POST['tol'];
            
        
        echo"</h3><br>";
        echo"ชื่อ-นามสกุล : $name<br>";
        echo"ที่อยู่  : $address<br>";
        echo"อีเมล : $email<br>";
        echo"หมายเลขโทรศัพท์ : $tol<br>";

        /*if(empty(trim($namelast)) || empty(trim($address)) || empty(trim($email)) || empty(trim($tol)))
        {
            echo "<script> alert('กรุณากรอกข้อมูลให้ครบถ้วน');
            history.back();</script> ";
            exit();
        }
        else */if(!preg_match("/^[กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรฤลฦวศษสหฬอฮะัาำิีึืฺุูเแโไๅ๐็่้๋์a-zA-Z ]+$/",$namelast))
        {
            echo "<script> alert('กรุณากรอก');
            history.back();</script> ";
            exit();
        }
        

   ?>    
</body>
</html>