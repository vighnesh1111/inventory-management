<?php
$op = 0;
if (isset($_POST['username'])) {
    $server1 = "localhost";
    $username1 = "id21723960_vighnesh";
    $password1 = "@Ima123456";
    $con = mysqli_connect($server1, $username1, $password1);

    $username = $_POST['username'];
    $prod = $_POST['prod'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $cat = $_POST['cat'];
    $image = time() . $_FILES["image"]['name'];
    if (move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/static/' . $image)) {
        $target_file = $_SERVER['DOCUMENT_ROOT'] . '/static/' . $image;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $picname = basename($_FILES['image']['name']);
        $photo = time() . $picname;
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        } else {
            $op = 1;
        }
    }
    if ($op == 1) {
        if ($cat == 'shirt') {
            $query = "INSERT INTO `id21723960_inventorym`.`shirt`(`username`, `image`, `prod`, `size`, `price`) VALUES ('$username', '$photo', '$prod', '$size', '$price')";
            if ($con->query($query) === TRUE) {

            } else {

            }
        } else if ($cat == 'tshirt') {
            $query = "INSERT INTO `id21723960_inventorym`.`tshirt`(`username`, `image`, `prod`, `size`, `price`) VALUES ('$username', '$photo', '$prod', '$size', '$price')";
            if ($con->query($query) === TRUE) {
            } else {

            }
        } else if ($cat == 'jeans') {
            $query = "INSERT INTO `id21723960_inventorym`.`jeans`(`username`, `image`, `prod`, `size`, `price`) VALUES ('$username', '$photo', '$prod', '$size', '$price')";
            if ($con->query($query) === TRUE) {

            } else {

            }
        } else if ($cat == 'shoes') {
            $query = "INSERT INTO `id21723960_inventorym`.`shoes`(`username`, `image`, `prod`, `size`, `price`) VALUES ('$username', '$photo', '$prod', '$size', '$price')";
            if ($con->query($query) === TRUE) {

            } else {

            }
        } else {
        }
    }
    header("location:index.php");
    $con->close();
}
?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const contentDiv = document.getElementById('but1');
        const data = localStorage.getItem('data');
        if (data) {
            contentDiv.innerHTML = data;
        }

        var last = localStorage.getItem("selAdd")
        document.getElementById("ok").innerHTML = last
        var size1 = document.getElementById("size1")
        var size2 = document.getElementById("size2")
        var size3 = document.getElementById("size3")
        if (last == "shirt" || last == "tshirt") {
            size1.style.display = 'block'
            size2.style.display = 'none'
            size3.style.display = 'none'
        } else if (last == "jeans") {
            size1.style.display = 'none'
            size2.style.display = 'block'
            size3.style.display = 'none'
        } else if (last == "shoes") {
            size1.style.display = 'none'
            size2.style.display = 'none'
            size3.style.display = 'block'
        } else { }
    });
</script>

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

        select {
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

            </ul>
        </div>
    </nav>

    <div class="main">
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="username" id="username" readonly><br><br>
            <input type="text" name="prod" id="prod" required placeholder="Enter name" autocomplete="off"><br><br>
            category: <span id="ok"></span> <br><br>

            <div class="size">
                Select size:
                <select id="size1" name="size1" required>
                    <option value="small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>

                <select id="size2" name="size2" required>
                    <option value="28">28</option>
                    <option value="30">30</option>
                    <option value="32">32</option>
                    <option value="34">34</option>
                    <option value="36">36</option>
                </select>

                <select id="size3" name="size3" required>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select>
            </div>

            <br><br>
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
            window.location.href = "login.php"
        } else {
            window.location.href = "profile.php"
        }
    }
</script>

</html>