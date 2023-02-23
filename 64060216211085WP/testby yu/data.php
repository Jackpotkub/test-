<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form action="data2.php" method="post" name="post">
    <table border="1" style="width:100%">
        <tr>
            <th colspan="2"><h2>เพิ่มข้อมูลลูกค้า</h2></th>
        </tr>
        <tr>
            <td colspan="2"><font color="red">*requirea field</td>
        </tr>
        <tr>
            <td width="200">ชื่อ-นามสกุล : </td>
            <td><input type="text" name="customerName"size="50" minlength="4"></td>
        </tr>
        <tr>
        <td width="200">ที่อยู่ : </td>
            <td><input type="text" name="customerAddress" size="48"></td>
        </tr>
        <tr>
        <td width="200">อีเมล์ : </td>
            <td><input type="text" name="customerEmail" size="50" placeholder="E-mail"></td>
        </tr>
        <tr>
        <td width="200">หมายเลขโทรศัพท์ : </td>
            <td><input type="text" name="customerTelephone"></td>
        </tr>
    </table>

    <input type="submit" value="บันทึกข้อมูล">
    <input type="reset" value="ล้างข้อมูล">
</form>
</center>
</body>
</html>