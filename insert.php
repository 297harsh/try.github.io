<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            background: url(https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260) no-repeat;
            background-size: cover;
            height: 100%;
            background-color: #000;
        }
        form {
            color: #C0C0C0;
            font-family: Arial, san-serif;
        }
        div {
            background-color: gold;
            color: black;
            /* font: bold italic ; */
        }
    </style>
</head>

<body>
    <ul class="nav nav-pills nav-fill navbar" style="background-color: #9eccee;">
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.html">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contant.html">CONTANT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="registration.html">REGISTRATION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact us.html">CONTACT US</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="view.html">view your data</a>
        </li>
    </ul>

    <div>
        <?php
    if (isset($_POST['ID'])) {

        $server = "localhost";
        $username = "root";
        $password = "";
        $database_name = "web1";
        $connection = mysqli_connect($server, $username, $password, $database_name);
        if (!$connection) {
            die(mysqli_connect_error());
        }

        $ID = $_POST['ID'];
        $NAME = $_POST['NAME'];
        $SURNAME = $_POST['SURNAME'];
        $mobileno = $_POST['mobileno'];

        $val = "INSERT INTO registartion (ID,NAME,SURNAME,mobileno) VAlUES ('$ID','$NAME','$SURNAME','$mobileno')";

        $query = mysqli_query($connection, $val);
        if ($query) {
            echo "<br>";
            echo "$NAME , Your Data is inserted ";
        }
    }
    ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>