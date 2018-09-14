
<html lang="en">
<head>
    <title>Project</title>
</head>
<body>
    <form action="" Method = "POST">
    Email : <input type="text" name="Email"><br>
    Password : <input type="password" name="Password"><br>
    <input type="submit" name="input" value"input"></form>

</body>
</html>
<?php
if(isset ($_POST['input'])){
    if( $_POST['Email'] =="RISMA" &&  $_POST['Password']=="123"){
        echo "Login Berhasil";
    }
    else {
        echo "Login GAGAL";
    }
}
?>
