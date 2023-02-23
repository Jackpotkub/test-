<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>
    <form action="lab2-27cal.php" method="post" name="form1" id="form1">
    รหัสนักศึกษา : <input type="text" name="ID" maxlength="10" /><br />
    ชื่อ-นามสกุลนักศึกษา : <input type="text" name="Name,Lastname" size="40" /><br />
    รหัส่ผ่าน : <input type="password" name="password" maxlength="6" size="6" /><br />
    เพศ : <input type="radio" name="sex" value="1" /> ชาย
    <input type="radio" name="sex" value="2" /> หญิง <br />
    งานอดิเรก :
    <input type="checkbox" name="Book" value="อ่านหนังสือ" /> อ่านหนังสือ
    <input type="checkbox" name="TV" value="ดูโทรทัศน์" /> ดูโทรทัศน์
    <input type="checkbox" name="sport" value="เล่นกีฬา" /> เล่นกีฬา<br />
    Please select color.<br>
    <input type="checkbox" name="chkColor[]" value="Red">Red<br>
    <input type="checkbox" name="chkColor[]" value="Blue">Blue<br>
    <input type="checkbox" name="chkColor[]" value="Green">Green<br>
    <input type="checkbox" name="chkColor[]" value="Orange">Orange<br>
    <input type="checkbox" name="chkColor[]" value="Black">Black<br>

    อัพโหลดข้อมูล : <input type="file" name="Upload" /> <br />
    <input type="submit" value="submit" />
    <input type="reset" value="reset"/>
 </form>
 </body>
 </html>