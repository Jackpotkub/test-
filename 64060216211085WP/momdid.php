<html>
    <head>
        <title>momdid</title>
    </head>
<center>
    <body bgcolor="#FF6600">';
    <form action="momdid.php" method="post" name="form1" id="form1">
        <center>
            <h1> 99สาธุ </h1>
            <input type="text" name="YOLO[]" value=""></br></br>
            <input type="text" name="YOLO[]" value=""></br></br>
            <input type="text" name="YOLO[]" value=""></br></br>
            <input type="text" name="YOLO[]" value=""></br></br>
            <input type="text" name="YOLO[]" value=""></br></br>
            <input type="submit" name="btnsubmit" value="Submit"/>
            <input type="reset" /></center>
    </form>
    <center>
        <?php
            $YOLO = $_REQUEST['YOLO'];
            $sum = 0;
            $countYOLO = count($YOLO);
            rsort($YOLO);
            echo "<center> ____________________________________________________</center>"."<br>";
            echo "<enter><big><b>Result</b></big></center>";
            
            echo "<br><br>Max to Min : ";
            for ($i=0; $i < $countYOLO ; $i++) {
                echo $YOLO[$i] . ", ";
                $sum = $sum + $YOLO[$i];
            }

            echo "<br><br> Max : ".max($YOLO);
            echo "<br><br> Min : ".($countYOLO-1);
            echo "<br><br> Sum : ".$sum;
            
        
        ?>
    </center>
    </body>
</center>
</html>