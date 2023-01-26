<!DOCTYPE html>
<html lang="en">

<head>
    <title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <?php
    function studentID($fname, $lname, $stdID, $password, $sex) {
        echo "ชื่อนักศึกษา : " .$fname . '<br>';
        echo "นามสกุล :".$lname. '<br>';
        echo "รหัสนักศึกษา: " .$stdID. '<br>';
        echo "รหัสผ่าน: ".$password. '<br>';
        echo "เพศ: ".$sex. '<br>';
    };

    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $stdID = $_REQUEST['stdID'];
    $password = $_REQUEST['password'];
    $sex = $_REQUEST['sex'];

    studentID($fname, $lname, $stdID, $password, $sex);

    ?>

    <center>
    <div style="background-color: Gainsboro; width: 900px; height: 900px;" >
    <div class="flex justify-center items-center  h-[100vh]">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ">
            <h2 class="text-xl text-center">แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2><br>
            <form action="lab2-27cal.php1" method="post" name="form1" id="form1">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            ชื่อนักศึกษา
                        </label>
                        <?php echo $fname ?>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            นามสกุลนักศึกษา
                        </label>
                        <?php echo $lname ?>
                    </div>
                </div>
                <div class="md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fname">
                        รหัสนักศึกษา
                    </label>
                    <?php echo $stdID ?>
                </div>
                <br>
                <div class="md-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        รหัสผ่าน
                    </label>
                    <?php echo $password ?>
                </div>
                <br>
                <div class="md-4">
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="grid-state"> 
                                เพศ
                            </label>
                            <?php
                            echo $sex;
                            ?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="md-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        งานอดิเรก
                    </label>

                    <?php 
                        if(isset($_REQUEST['hobby1'])) echo $_REQUEST['hobby1']."<br>";
                        if(isset($_REQUEST['hobby2'])) echo $_REQUEST['hobby2']."<br>";
                        if(isset($_REQUEST['hobby3'])) echo $_REQUEST['hobby3']."<br>";
                    ?>

                </div>
                <br>
                <div class="md-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        เลือกสีที่ชอบ
                    </label>

                    <?php 
                        foreach ($_REQUEST['chkColor'] as $key => $value) {
                            echo $value."<br>";
                        }
                    ?>
                </div>

                <br>
                
            </form>
            <div class="md-4">
                <div class="flex items-center justify-between">
                    <a href="index1.php">
                        <button class="bg-red-400 hover:bg-red-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Back
                            <body style = "background-color : lavender;" 
                            </center>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>