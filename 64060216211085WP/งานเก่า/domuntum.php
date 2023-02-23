<form id="form1" name="form1" method="post" action="test.php">

<p>สูตรพื้นที่สี่เหลี่ยมผืนผ้า </p>

<table width="200" border="0">

<tr>

<td>ความกว้าง</td>

<td><input type="text" name="t1" /></td>

</tr>

<tr>

<td>ความยาว</td>

<td><input type="text" name="t2" /></td>

</tr>

<tr>

<td>หน่วย</td>

<td><select name="t3">

<option value="เซนติเมตร">เซนติเมตร</option>

<option value="นิ้ว">นิ้ว</option>

<option value="เมตร">เมตร</option>

</select>

<input type="submit" name="Submit" value="คำนวน" />

</td>

</tr>

<tr>

<td></td>

<td>

<?php

$t1=$_POST[t1];

$t2=$_POST[t2];

$t3=$_POST[t3];

 

if (($t1!="")&&($t2!="")){

$a=$t1*$t2;

$a=sprintf("%.2f",$a);

echo $a.$t3;

}

?>

</td>

</tr>

</table>

</form>