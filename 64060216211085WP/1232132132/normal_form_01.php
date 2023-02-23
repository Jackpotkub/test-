<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การสร้างฟอร์ม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body  style="background-color: black;">
<div class="d-flex vh-100">
    <div style="background-color: #2c2c2c; width: 500px; height: 410px; border-radius: 24px; padding: 5px 16px 75px 16px;color:white" class ="mx-auto align-self-center" > 
    <h1 style="color: white; background: none;">Normal Form</h1>
    <form action="normal_form_02.php" method="post" name = "form1s" id="form1">
        Username : <input type="text" name="username" id="username" maxlength="10"><br>
        Password : <input type="password" name="password" id="password" maxlength="6"><br>
        ความคิดเห็น : <textarea name="comment" id="comment" cols="40" rows="5"></textarea><br>
        <br>
        <input type="submit" name="submit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset">
    </form>
    </div>
</div>
</body>
</html>