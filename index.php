<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'timesheet') or die ('unable to connect');

if (isset($_POST['login'])){
    $Username = $_POST['username'];
    $Password = $_POST ['password'];

    $select = mysqli_query($conn, "SELECT * FROM users WHERE username = '$Username' AND password = '$Password' ");
    
    

    if( $row = mysqli_fetch_assoc($select)) {

        $_SESSION["Username"] = $row['username'];
        $_SESSION["Password"] = $row['password'];
        if($Username ==$_SESSION['Username']){
            // echo $Username;
            // echo $Password;
            header('Location: dashboard1.php');
            }else{
            echo "Invalid Details";
        }


    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=T, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Timesheet</title>
</head>
<body>
    
    <div class="containers">
        <form method="POST" action="">
            <div class="imgcontainer">
                <img src="image/ctimesheet_logo.png" alt="" class="avatar">
            </div>

        
            <h2>Login details</h2>
            

            <div class="container">

                <input id="username" type="text" placeholder="Enter Username" name="username" required>
                
                <input id="password" type="password" placeholder="Enter Password" name="password" required>
                    
                <button name='login' type="submit">Login</button>
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <span class="psw"> <a href="#">Forget password?</a></span>

            </div>

    
        </form>
    </div>

    <a href="dashboard1.php">okay</a>
    
</body>
</html>