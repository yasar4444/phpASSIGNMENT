<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="login";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    $name = $_POST['n4'];
    $email = $_POST['n1'];
    $phone = $_POST['n3'];
    $password = $_POST['n2'];

    $sql = "INSERT INTO `social` (`email`, `password`, `phone`, `name`) VALUES ('$email','$password', '$phone', '$name')";
    $rs = mysqli_query($conn,$sql);

    if($rs>0)
    {
        echo"YOU HAVE REGISTERED SUCCESSFULLY";
        include 'homepage.php';
    }

    ?>
    