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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $duplicate = mysqli_query($con, "select * from `inventory management`.`registration` where username='$username'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo '<script> alert("Username exists"); </script>';
    } else
        if ($con->query("INSERT INTO `inventory management`.`registration` (`username`, `password`, `fname`, `lname`, `email`) VALUES ('$username', '$password', '$fname', '$lname', '$email');") == true) {
            header("location:index.php");
        } else {
            echo "error: $sql <br> $con->error";
        }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
</head>
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

        .main{
            text-align: center;
            margin-top: 100px;
        }
        .signup{
            font-size: xx-large;
        }

        input{
            font-size: large;
            width: 500px;
            height: 50px;
            text-align: center;
        }

        .message{
            font-size: xx-large;
        }

        .opt{
            font-size: larger;
        }
        
        a{
            text-decoration: none;
        }

        a:hover{
            color: blue;
        }

        button{
            font-size: x-large;
            border: none;
            width: 150px;
            height: 45px;
        }
</style>

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
        <div class="signup">Signup</div> <br> <br>
        <form  method="post" name="signup">
            <input type="text" name="fname" id="fname" placeholder="Enter your first name" autocomplete="off" required>
            <input type="text" name="lname" id="lname" placeholder="Enter your last name" autocomplete="off" required> <br> <br>
            <input type="text" name="username" id="username" placeholder="Enter your username" autocomplete="off" required> <br> <br>
            <input type="email" name="email" id="email" placeholder="Enter your e-mail" autocomplete="off" required> <br> <br>
            <input type="password" name="password" minlength="8" id="password" placeholder="Enter your password" autocomplete="off" required> <br> <br> <br>
            <button type="submit" id="but" onclick="reg()">Sign&nbsp;up</button>
        </form>
        <br> <br> <br>
        <div class="opt">
            Already have an account? <a href="login.php">click here</a>!
        </div>
    </div>
</body>

<script>
    function reg(){
    var username1 =document.forms['signup']['username'].value
    localStorage.setItem('data', username1)
}
</script>

</html>