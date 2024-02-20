<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
<center>
    <h1> Registration Form </h1>
</center>
    <form action="process.php" method="POST">

    <center>
            <label>Name: </label> </br>
            <input type="text" name="nm" required></p>

            <label>Email: </label> </br>
            <input type="email" name="email" required></p>

            <label>Password: </label> </br>
            <input type="password" name="pass" required></p>

            <label>Phone Number: </label> </br>
            <input type="text" name="pn" required></p>

            
    
            <input type="submit" name="reg_button" value="REGISTER">
</form>
<p><a href="index.php">Click Here To Login! </a></p>
</center>

</head>
<body>
    
</body>
</html>

<style>
   

body {
    background: url('img/yellow.jpg');
    background-size: cover;
}

</style>