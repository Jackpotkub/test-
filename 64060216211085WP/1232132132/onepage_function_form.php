<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>การสร้างฟอร์ม</title>
</head>
<body  style="background-color: black;">
<div class="d-flex vh-100">
    <div style="background-color: #2c2c2c; width: 500px; height: 410px; border-radius: 24px; padding: 5px 16px 75px 16px;color:white" class ="mx-auto align-self-center" > 
    <h1 style="color: white; background: none;">OnePage Function Form</h1>
    <?php 

    if(isset($_REQUEST['btnSubmit'])){

        function showForm($username, $password, $comment) {
            echo "Username : " . $username . "<br>";
            echo "Password : " . $password . "<br>";
            echo "Comment : " . $comment . "<br>";
            echo '<a href="onepage_function_form.php">Back</a>';
        }

        showForm($username = $_REQUEST['username'], $password = $_REQUEST['password'], $comment = $_REQUEST['comment']);

    }else { ?>
        <form action="onepage_function_form.php" method="get" name="form1" id="form1">
        Username : <input type="text" name="username" maxlength="10" /><br /> <br />
        Password : <input type="password" name="password" maxlength="6" /><br /> <br />
        ความคิดเห็น : <textarea cols="40" rows="5" name="comment"></textarea><br />
        <br />
        <input type="submit" name="btnSubmit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset">
    <?php 
    } 
    ?>
    </div>
</div>    
</body>
</html>