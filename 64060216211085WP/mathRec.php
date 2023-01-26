<html>
    <head>
        <title>การคำนวณพื้นที่</title>
    </head>
    <body>
    <center>
    <form action="mathRec.php" method="post" name="form1" id="form1">
    <div style="text-align:center;width:100%;">
        <h2>การคำนวณพื้นที่ </h2><br>
        <?php
            if(isset($_REQUEST['กดเถอะ']))
            {
                $YOLO1 = $_REQUEST['YOLO1'];
                $YOLO2 = $_REQUEST['YOLO2'];
                function mathRec($YOLO1,$YOLO2)
                {
                    echo "YOLO 1 : " . $YOLO1 . "<br>";
                    echo "YOLO 2 : " . $YOLO2 . "<br>";

                        if(($_REQUEST['เหลี่ยมซิกแซ็ก'])== 'Square'){
                            echo "Square : ".($YOLO1 * $YOLO1)."<br>";
                        }


                }
                mathRec($YOLO1,$YOLO2);


                function mathxx($YOLO1,$YOLO2)
                {
                    echo "YOLO 1 : " . $YOLO1 . "<br>";
                    echo "YOLO 2 : " . $YOLO2 . "<br>";

                        if(($_REQUEST['เหลี่ยมซิกแซ็ก'])== 'Rectangle'){
                            echo "Rectangle : ".($YOLO1 * $YOLO2)."<br>";
                        }


                }
                mathxx($YOLO1,$YOLO2);

                function mathtt($YOLO1,$YOLO2)
                {
                    echo "YOLO 1 : " . $YOLO1 . "<br>";
                    echo "YOLO 2 : " . $YOLO2 . "<br>";

                        if(($_REQUEST['เหลี่ยมซิกแซ็ก'])== 'Triangle'){
                            echo "Triangle : ".((1/2)*$YOLO1 * $YOLO2)."<br>";
                        }

                }
                mathtt($YOLO1,$YOLO2);

                function mathgg($YOLO1,$YOLO2)
                {
                    echo "YOLO 1 : " . $YOLO1 . "<br>";
                    echo "YOLO 2 : " . $YOLO2 . "<br>";

                        if(($_REQUEST['เหลี่ยมซิกแซ็ก'])== 'Rhombus'){
                            echo "Rhombus : ".((1/2)*($YOLO1 * $YOLO2))."<br>";
                    }  

                }
                mathgg($YOLO1,$YOLO2);
            }?>

        <input type="text" name="YOLO1" maxlength="10"><br><br>
        
        <input type="text" name="YOLO2" maxlength="10"><br><br>

        <input type="radio" name ="เหลี่ยมซิกแซ็ก" YOLO="Square">สี่เหลี่ยมจตุรัส<br>
        <input type="radio" name ="เหลี่ยมซิกแซ็ก" YOLO="Rectangle">สี่เหลี่ยมผืนผ้า<br>
        <input type="radio" name ="เหลี่ยมซิกแซ็ก" YOLO="Rhombus">สี่เหลี่ยมขนมเปียกปูน<br>
        <input type="radio" name ="เหลี่ยมซิกแซ็ก" YOLO="Triangle">สามเหลี่ยม<br>
        <input type="submit" name="กดเถอะ" YOLO="Submit"/>
        <input type="reset" />
    </div>   
    </form>   
    </center>



    </body>
</html>
