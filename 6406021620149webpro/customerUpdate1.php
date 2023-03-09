<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
p {
    color: red;
}
</style>

<body>
<?php
        $customerId = $_REQUEST['customerId'];
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

        $sql = "select * from customer WHERE customerId = '$customerId'";

        $dbQuery = mysqli_query($conn, $sql);

        if (!$dbQuery){
            die("select join error ".mysqli_error());
        }
        $result = mysqli_fetch_object($dbQuery);
   ?> 
    <form action="customerUpdate2.php" method="post">
        <table border="2" align="center">
            <tr>
                <td colspan="2" width="600" align="center"> แก้ไขมูลลูกค้า </td>
            </tr>
            <tr>
                <td colspan="2"><p>*required field</p></td>
            </tr>
            <tr>
                <td width="200">รหัส</td>
                <td width="400"><input type="text" name="customerId"  size="13" value="<?php echo $result->customerId?>" readonly ></td>
            </tr>
            <tr>
                <td width="200">ชื่อ-นามสกุล : </td>
                <td><input type="text" name="customerName" value="<?php echo $result->customerName?>" minlength="4" placeholder="username"></td>
            </tr>
            <tr>
                <td width="200">ที่อยู่ : </td>
                <td><textarea name="customerAddress" id="address" cols="30" rows="5" value="" required><?php echo $result->customerAddress?></textarea></td>
            </tr>
            <tr>
                <td width="200">อีเมล์ : </td>
                <td><input type="text" name="customerEmail" value="<?php echo $result->customerEmail?>" placeholder="E-mail"></td>
            </tr>
            <tr>
                <td>หมายเลขโทรศัพท์ : </td>
                <td><input type="text" name="customerTelephone" value="<?php echo $result->customerTelephone?>" minlength="10" width="20"placeholder="Phone-number">
                </td>
            </tr>
        </table>
        <br>
        <center>
            <a href="indexcal2.php">ดูข้อมูลที่มี</a><br><br>
            <input type="submit" name="submit" value="บันทึกข้อมูล">
            <input type="reset" name="reset" value="ล้างข้อมูล">
        </center>
    </form>
</body>
</html>