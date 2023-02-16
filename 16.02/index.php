<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลลูกค้า</title>
</head>
<center>
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
        <td><input type="text" name="namelast" size="50" value="" minlength="4"> </td>
        </tr>
        <tr>
        <td> ที่อยู่ : </td>
        <td>
                <textarea name="address" row="4"  cols="48" value="" required></textarea>
                    <font color ="red">*</font>
        </td>
        </tr>
        <tr>
        <td> อีเมล์ : </td>
        <td><input type="text" name="email" size="50" value=""/></td>

        </tr>
        <tr>
        <td>หมายเลขโทรศัพท์ : </td>
        <td><input type="text" name="tol" size="10" value=""/></td>
        </tr>
        <tr>
        <td colspan="2" align="center">
                <input type="submit" value=" บันทึกข้อมูล " />
                <input type="reset" value=" ล้างข้อมูล " />
        </td>
        <tr>
    </table>
    </form>
</body>
</center>
</html>