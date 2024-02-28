<script>
    document.addEventListener('DOMContentLoaded', function () {
        const contentDiv = document.getElementById('name');
        const data = localStorage.getItem('data');
        document.cookie = "selected_item=" + data;
        if (data) {
            contentDiv.innerHTML = data;
        }
    });
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        * {
            padding: 0;
            margin: 0;
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

        .user {
            padding-top: 50px;
            text-align: center;
            font-size: 30px;
        }

        .main {
            min-height: 800px;
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
    <div class="user">
        Username: <span id="name"></span>
    </div>
    <div class="main">

<?php
            $server1 = "localhost";
            $username1 = "root";
            $password1 = "";

            $con = mysqli_connect($server1, $username1, $password1);
            $imp1 = $_COOKIE["selected_item1"];
            $imp2 = $_COOKIE["selected_item2"];

            if($imp2 == 1){
           $query = "delete * from `inventory management`.`shirt` where sr no=$imp1";
            }else if($imp2 == 2){
                $query = "delete * from `inventory management`.`tshirt` where sr no=$imp1";
            }else if($imp2 == 3){
                $query = "delete * from `inventory management`.`jeans` where sr no=$imp1";
            }else {
                $query = "delete * from `inventory management`.`shoes` where sr no=$imp1";
            }
           if ($con->query($query) === TRUE) {
            echo "Record deleted successfully";
          } else {
            echo "Error deleting record: " . $con->error;
          }
            $con->close();
?>
    </div>
    <footer>
        copyright &copy; <br>
        Inventory Management
    </footer>
</body>

<script>
       document.addEventListener('DOMContentLoaded', function () {
        const contentDiv = document.getElementById('but1');
        const data = localStorage.getItem('data');
        if (data) {
            contentDiv.innerHTML = data;
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