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
<form action="" method="post" name="form1" id="form1">
รหัสนักศึกษา : <input type="text" name = "stdID" maxlength="10" /><br /><br/>
รหัสบัตรประชาชน : <input type="text" name="IDcard" maxlength="13"><br/><br/>
ชื่อ-นามสกุลนักศึกษา : <input type="text" name = "strName" size="40" /><br />
<br/>
วุฒิการศึกษา :
<select name="equ">
<option>ประถมศึกษา </option>
<option>มัธยมศึกษา </option>
<option selected>ปริญญาใจ </option>
<option>สูงกว่าปริญญาตรี </option>
</select>
ผลไม้ที่ชอบ :
<select name="fruit">
<optgroup label="ผลไม้เมืองร้อน">
<option value="durian">ทุเรียน </option>
<option value="banana">กล้วย </option>
</optgroup>
<optgroup label="ผลไม้เมืองหนาว">
<option value="apple">แอปเปิ้ล </option>
</optgroup>
</select><br/><br/>
สีที่ชอบ :
<select size="3" multiple name="color">
<option value="yellow">สีเหลือง </option>
<option value="white">สีขาว </option>
<option value="green">สีเขียว </option>
<option value="blue">สีน้ำเงิน </option>
</select><br/>
เพศ : <select name="sex"><option value="male">ชาย </option><option value="female" >หญิง</option></select><br /><br/>
<!--
    งานอดิเรก :
<input type="checkbox" name ="read" value="1" /> อ่านหนังสือ
<input type="checkbox" name ="tv" value="2" /> ดูโทรทัศน์
<input type="checkbox" name ="sport" value="3" /> เล่นกีฬา<br /><br/> 
-->
งานอดิเรก :
<select size="2" multiple name="hobby">
<option value="readbook"> อ่านหนังสือ</option><option value="tv"> ดูโทรทัศน์</option><option value="sport"> เล่นกีฬา</option>
</select><br /><br />
ความคิดเห็น :<textarea cols="50" rows="5"></textarea><br/><br/>
Uesrname : <input type="text" maxlength="10" name="username"><br/><br/>
Password : <input type="password" maxlength="4 " name="password"><br/><br/>
อัพโหลดข้อมูล : <input type="file" name="upload"> <br />
<input type="submit" value="Submit Quey" name="submit">
<input type="reset" value="Reset" name="reset">
<br/>
</form>
</body>
</html>
