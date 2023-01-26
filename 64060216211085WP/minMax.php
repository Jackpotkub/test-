<html>
    <head>
        <title>MinMax</title>
    </head>
    <body>
    <form action="minMax.php" method="post" name="form1" id="form1">
        <center>
            <h1>Enter particpiants scores</h1>
            P1<input type="text" name="Score[]" value=""></br></br>
            P2<input type="text" name="Score[]" value=""></br></br>
            P3<input type="text" name="Score[]" value=""></br></br>
            P4<input type="text" name="Score[]" value=""></br></br>
            P5<input type="text" name="Score[]" value=""></br></br>
            <input type="submit" name="btnsubmit" value="Submit"/>
            <input type="reset" /></center>
    </form>
        
        <?php
            $Score = $_REQUEST['Score'];
            $sum = 0;
            $countScore = count($Score);
            rsort($Score);
            echo "<center> ____________________________________________________</center>"."<br>";
            echo "<enter><big><b>Result</b></big></center>";
            
            echo "<br><br>Max to Min : ";
            for ($i=0; $i < $countScore ; $i++) {
                echo $Score[$i] . ", ";
                $sum = $sum + $Score[$i];
            }
        sort($Score);
        echo "<br><br>Min to Max : ";
            for ($i=0; $i < $countScore ; $i++) {
                echo $Score[$i] . ", ";
                
            }

            echo "<br><br> Max : ".max($Score);
            echo "<br><br> Min : ".($countScore-1);
            echo "<br><br> Sum : ".$sum;
            
        
        ?>
    </body>
</html>