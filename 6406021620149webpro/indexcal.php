<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพื่มข้อมูลลูกค้า</title>
</head>
<body>
    <?php
       $customerId = $_REQUEST['customerId'];
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

   ?>    
</body>
</html>