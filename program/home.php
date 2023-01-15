<?php
session_start();
$title ='Home';
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UAS Pemrograman Web</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<div container>
<h1 style="color: #FFFFFF; text-align: center;">SELAMAT DATANG</h1>
<body style="margin-top: 30px; background-color: #2C74B3;">
    <div class = "container" style= "width: 100%; padding: 30px; ">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true" style="background-color: #2C74B3; text-align: center;">Menu</li>
            <li class="list-group-item" type="" style="font-size: 30px; color: #FFFFFF;"><a style="color: #144272;" href="index.php">Checklist Harian</a></li>
            <li class="list-group-item" style="font-size: 30px; color: #FFFFFF;"><a style="color: #144272;" href="ind_toilet.php">Data Toilet</a></li>
        </ul>
    </div>
        <button class="btn" type="button" style="background-color: #0081C9"><a style="color: #FFFFFF" href="login.php">Logout</a></button>
    </div>
</body>
</div>


</html>