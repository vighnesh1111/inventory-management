<?php
$op = 0;
if (isset($_POST['username'])) {
    $server1 = "localhost";
    $username1 = "root";
    $password1 = "";

    $con = mysqli_connect($server1, $username1, $password1);

    if (!$con) {
        die("connection failed" . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $prod = $_POST['prod'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $cat = $_POST['cat'];
    $image = time() . $_FILES["image"]['name'];

    if (move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/inventory management/static/' . $image)) {
        $target_file = $_SERVER['DOCUMENT_ROOT'] . '/inventory management/static/' . $image;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $picname = basename($_FILES['image']['name']);
        $photo = time() . $picname;
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {

        } else {
            $op = 1;
        }
    }

    if ($op == 1) {
        if($cat == 'shirt'){
        $query = "INSERT INTO `inventory management`.`shirt`(`username`, `image`, `prod`, `size`, `price`) VALUES ('$username', '$photo', '$prod', '$size', '$price')";
        if ($con->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else if($cat == 'tshirt'){
        $query = "INSERT INTO `inventory management`.`tshirt`(`username`, `image`, `prod`, `size`, `price`) VALUES ('$username', '$photo', '$prod', '$size', '$price')";
        if ($con->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else if($cat == 'jeans'){
        $query = "INSERT INTO `inventory management`.`jeans`(`username`, `image`, `prod`, `size`, `price`) VALUES ('$username', '$photo', '$prod', '$size', '$price')";
        if ($con->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else if($cat == 'shoes'){
        $query = "INSERT INTO `inventory management`.`shoes`(`username`, `image`, `prod`, `size`, `price`) VALUES ('$username', '$photo', '$prod', '$size', '$price')";
        if ($con->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else {}
    }

    header("location:index.php");
    // header("location:index.php");
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            text-align: center;
            margin: auto;
        }

        nav {
            height: 50px;
            /* background-color: red; */
            overflow: hidden;
        }

        .cname {
            float: left;
            height: 50px;
            text-align: center;
            width: 25%;
            font-size: 35px;
            overflow: hidden;
            min-width: 400px;
            /* background-color: yellow; */
        }

        .mnav {
            margin: auto;
            /* background-color: purple; */
            height: 40px;
            text-align: center;
            padding-top: 10px;
            width: 45%;
            font-size: 25px;
            overflow: hidden;
            /* height: 50px; */
            /* min-width: 500px; */
        }

        .status {
            float: right;
            /* background-color: pink; */
            height: 45px;
            width: 25%;
            text-align: center;
            padding-top: 5px;
            overflow: hidden;
            /* min-width: 200px; */
        }

        li {
            /* background-color: blue; */
            display: inline;
            padding-left: 25px;
            padding-right: 25px;
            overflow: hidden;
        }

        #but1 {
            width: 200px;
            height: 40px;
            font-size: 20px;
            border: none;
            /* min-width: 200px; */
        }

select{
    font-size: 20px;
}

        form {
            text-align: center;
            font-size: x-large;
            padding-bottom: 100px;
        }

        .main {
            font-size: xx-large;
            text-align: center;
            height: 650px;
            padding-top: 100px;
        }

        input {
            text-align: center;
            height: 40px;
            width: 300px;
            font-size: large;
        }

        #but2 {
            width: 200px;
            height: 40px;
            font-size: 20px;
            border: none;
        }

        footer {
            /* background-color: brown; */
            height: 50px;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav>
        <div class="cname">
            Inventory&nbsp;Management
        </div>
        <div class="status">
            <button id="but1" onclick="stat()">Log&nbsp;in</button>
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
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="username" id="username" readonly><br><br>
            <input type="text" name="prod" id="prod" required placeholder="Enter name" autocomplete="off"><br><br>
            Select category:
            <select id="cat" name="cat" onclick="cati()" required>
                <option value="shirt">shirt</option>
                <option value="tshirt">tshirt</option>
                <option value="jeans">jeans</option>
                <option value="shoes">shoes</option>
            </select> <br><br>

            <input type="text" name="size" id="size" placeholder="Enter size" required autocomplete="off"><br><br>
            Enter image: <input type="file" name="image" id="img" required> <br><br>
            <input type="number" name="price" id="price" placeholder="Enter price" required autocomplete="off"><br><br>
            <button type="submit" id="but2">Submit</button>
        </form>
    </div>

    <footer>
        copyright &copy; <br>
        Inventory Management
    </footer>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const contentDiv = document.getElementById('username');
        const data = localStorage.getItem('data');
        if (data) {
            contentDiv.value = data;
        }
    });
    function stat() {
        var status = document.getElementById("but1")
        if (status.innerHTML == "Log&nbsp;in") {
            window.location.href = "http://localhost/inventory management/login.php"
        } else {
            window.location.href = "http://localhost/inventory management/profile.php"
        }
    }
</script>

</html>