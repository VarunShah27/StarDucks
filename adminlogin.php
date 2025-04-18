<?php 

    if(isset($_POST['login'])){
        $email = $_POST['admin'];
        $pass = $_POST['password'];

        if($email=="admin@admin" && $pass=="admin"){
            header("location:admin.php");
        }
        else{
            echo"invalid username or password";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminlogin.css">
    <title>Document</title>
</head>
<body>
<div class="container">
	<div class="login_box">
		<h1>Admin Login</h1>
        <form method="post">
            <div class="input_box">
                <input type="text" name="admin">
                <label for="">Email</label>
                <ion-icon class="icon " name="mail-outline"></ion-icon>
            </div>
            <div class="input_box">
                <input type="password" name="password">
                <label for="">password</label>
                <ion-icon class="icon" name="lock-closed-outline"></ion-icon>
            </div>
            
            <div class="login">
                <button><input type="submit" class="submit" name="login" value="login"></button>
            </div>
</form>
		<div>
			
		</div>
	</div>
 </div>
 

	






	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>