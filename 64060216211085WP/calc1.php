<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>คำนวณต่างๆ</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>สูตรหาพื้นที่/เ้ส้นรอบวงกลม<br />
    รัศมีของวงกลม : 
       <? echo $r;?>  <br />
    พื้นที่วงกลม : <? echo (3.14*($r*$r));?><br />
  เส้นรอบวงกลม : <? echo (2*3.14*$r);?></p>
  <p>สูตรหาพื้นที่สามเหลี่ยม<br />
สูง :
  <label><? echo $h1;?></label>
ฐาน :
  <label><? echo $w;?></label>
  <br />
  พื้นที่สามเหลี่ยม : <? echo 0.5*$h1*$w;?></p>
  <p>สูตรหาพื้นที่สี่เหลี่ยมคางหมู<br />
สูง :
  <label><? echo $h2;?></label>
ด้านที่ขนานกัน ด้านที่1:
<label><? echo $d1;?></label>
ด้านที่2:
<label><? echo $d1;?></label>
<br />
  พื้นที่สี่เหลี่ยมคางหมู : <? echo 0.5*$h1*($d1+$d2);?></p>
  <p>สูตรหาพื้นที่หกเหลี่ยมด้านเท่า<br />
    ความยาวด้าน:
<label><? echo $d3;?></label>
<br />
  พื้นที่หกเหลี่ยมด้านเท่า : <? echo 2.598*($d3*$d3);?></p>
  <p>แปลงนิ้วเป็นเซนติเมตร : 
    <label><? echo $in;?></label>
  นิ้ว = <? echo $in*2.54;?> เซนติเมตร</p>
  <p>แปลงไมล์เป็นกิโลเมตร :
    <label></label>
    <label><? echo $mi;?></label>
ไมล์ = <? echo number_format ($mi/0.6214,2,'.',',');?> กิโลเมตร</p>
  <p>
    <label></label>
  </p>
</form>
</body>
</html>
