<html>
<head>
<title> register page</title>
</head>
<body>
 
<h1><CENTRE><p style="background-color:rgb(175,255,71);"> REGISTER PAGE </p> </CENTRE></h1><BR><HR><BR>
    
    <form action="DATABASE.PHP" method="post">
        <label> Enter your email id : </label>
        <input type="text" name="n1"><br><hr>
        <label> Enter your password  : </label>
        <input type="text" name="n2"><br><hr>
        <label> Enter your phone number : </label>
        <input type="number" name="n3"><br><hr>
        <label> Enter your username : </label>
        <input type="text" name="n4"><br><hr>
        <input type="submit" name="ap" value="REGISTER"><br><hr>
    </form> 

 <form action="login.php" method="get">
    <p style="color: aqua;"><label>GO BACK TO LOGIN PAGE </label></p>
    <input type="submit" name="ip" value="BACK">
 </form>   
</body>
</html>