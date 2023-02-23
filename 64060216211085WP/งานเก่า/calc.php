<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>คำนวณต่างๆ</title>
</head>

<body>
<form action="calc1.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>สูตรหาพื้นที่/เ้ส้นรอบวงกลม<br />
    รัศมีของวงกลม : 
      <label>
      <input type="text" name="r" id="r" />
      </label>
  </p>
  <p>สูตรหาพื้นที่สามเหลี่ยม<br />
สูง :
  <label>
  <input type="text" name="h1" id="h1" />
  </label>
ฐาน :
  <label>
  <input type="text" name="w" id="w" />
  </label>
  </p>
  <p>สูตรหาพื้นที่สี่เหลี่ยมคางหมู<br />
สูง :
  <label>
  <input type="text" name="h2" id="h2" />
  </label>
ด้านที่ขนานกัน ด้านที่1:
<label>
<input type="text" name="d1" id="d1" />
</label>
ด้านที่2:
<label>
<input type="text" name="d2" id="d2" />
</label>
</p>
  <p>สูตรหาพื้นที่หกเหลี่ยมด้านเท่า<br />
    ความยาวด้าน:
<label>
<input type="text" name="d3" id="w5" />
</label>
</p>
  <p>แปลงนิ้วเป็นเซนติเมตร : 
    <label>
    <input type="text" name="in" id="in" />
    </label>
  นิ้ว</p>
  <p>แปลงไมล์เป็นกิโลเมตร :
    <label>
    <input type="text" name="mi" id="mi" />
    </label> 
    ไมล์</p>
  <p>
    <label>
    <input type="submit" name="button" id="button" value="คำนวณ" />
    </label>
  </p>
</form>
</body>
</html>
