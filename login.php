<?php

if (isset($_POST['username'])) {
    $server1 = "localhost";
    $username1 = "root";
    $password1 = "";

    $con = mysqli_connect($server1, $username1, $password1);

    if (!$con) {
        die("connection failed" . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from `inventory management`.`registration` where username = '$username' and password = '$password'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        header("location:index.php");
        
    } else {
        echo '<script> alert( "check username and password")</script>';
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
    <style>
                *{
            padding: 0;
            margin: 0;
        }

        nav{
            height: 50px;
            /* background-color: red; */
            overflow: hidden;
        }

        .cname{
            float: left;
            height: 50px;
            text-align: center;
            width: 25%;
            font-size: 35px;
            overflow: hidden;
            min-width: 400px;
            /* background-color: yellow; */
        }

        .mnav{
            margin: auto;
            /* background-color: purple; */
            height: 40px;
            text-align: center;
            padding-top: 10px;
            width: 70%;
            font-size: 25px;
            overflow: hidden;
            /* height: 50px; */
            /* min-width: 500px; */
        }

        li{
            /* background-color: blue; */
            display: inline;
            padding-left: 25px;
            padding-right: 25px;
            overflow: hidden;
        }

        .main {
            text-align: center;
            margin-top: 200px;
        }

        .login {
            font-size: xx-large;
        }

        input {
            font-size: large;
            width: 500px;
            height: 50px;
            text-align: center;
        }

        .opt {
            font-size: larger;
        }

        a {
            text-decoration: none;
        }
        a:hover{
            color: blue;
        }

        button {
            font-size: x-large;
            border: none;
            /* background-color: greenyellow; */
            width: 150px;
            height: 45px;
        }

        /* #but{ */
            /* background-color: black; */
            /* color: white; */
        /* } */

        /* #but:hover{
            color: #DDD0C8;
        } */
    </style>
</head>
<body>
    <nav>
        <div class="cname">
            Inventory&nbsp;Management
        </div>
        <div class="mnav">
        <ul>
                <li onclick="location.href='index.php'">Home</li>
                <li onclick="location.href='feedback.php'">feeback</li>
                <li onclick="location.href='about.php'">About&nbsp;us</li>
                <li onclick="location.href='contact.php'">Contact&nbsp;us</li>
                <li onclick="location.href='search.php'">search</li>
            </ul>
        </div>
    </nav>

    <div class="main">
        <div class="login">Log&nbsp;in</div> <br> <br>
        <form method="post" name="login">
            <input type="text" name="username" id="username" placeholder="Enter your username" autocomplete="off" required> <br> <br>
            <input type="password" name="password" id="password" placeholder="Enter your password" required> <br> <br><br>
            <button type="submit" id="but" onclick="reg()">Log&nbsp;in</button>
        </form>
        <br> <br> <br>
        <div class="opt">
            don't have an account? <a href="signup.php">click here</a>!
        </div>
    </div>
</body>

<script>
function reg(){
    var username1 =document.forms['login']['username'].value
    localStorage.setItem('data', username1)
}
</script>

</html>