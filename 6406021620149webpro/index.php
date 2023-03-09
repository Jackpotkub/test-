<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลลูกค้า</title>
</head>
<body>
    <form method="post" action="indexcal1.php">
    <table border="1" align="center" width="500">
        <tr>
                <td colspan="2" align="center">
                <big>เพิ่มข้อมูลลูกค้า </big>
                </td>
        </tr>
        <tr>
                <td > 
                    <font color="red">*required field</font>
                    
                </td>
               
        </tr>
        <tr>
                <td> ชื่อ-นามสกุล : </td>
                <td><input type="text" name="customerName" size="50" value="" minlength="4"> </td>
        </tr>
        <tr>
                <td> ที่อยู่ : </td>
                <td>
                    <textarea name="customerAddress" row="4"  cols="48" value="" required></textarea>
                    <font color ="red">*</font>
                </td>
        </tr>
        <tr>
                <td> อีเมล์ : </td>
                <td><input type="text" name="customerEmail" size="50" value=""/></td>
        </tr>
        <tr>
                <td>หมายเลขโทรศัพท์ : </td>
                <td><input type="text" name="customerTelephone" size="10" value=""/></td>
        </tr>
        <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" บันทึกข้อมูล " />
                    <input type="reset" value=" ล้างข้อมูล " />
                </td>
        <tr>
    </table>
    <center><a href="indexcal2.php">กลับไปหน้า listcustomer</a></center>
    </form>
</body>
</html>