<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="login";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    $email=$_POST['l1'];
    $password=$_POST['l2'];

    $ak="SELECT * FROM social where email = '$email' ";
    $ras= mysqli_query($conn,$ak);

    $row = mysqli_fetch_array($ras);

    if($row['password'] == $password)
    {
        echo" YOU HAVE SUCCESSFULLY LOGED IN ";
        include 'homepage.php';
    }
    else
    {
        echo" LOGIN FAILED : INNCORRECT CREDENTIALS ";
    }
?>