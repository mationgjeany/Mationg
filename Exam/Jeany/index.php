<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<center>
       <h1> Welcome to My Login Page </h1>
</center>
       <form action="process.php" method="POST">
<center>
       <h1><label>Email</label></br></h1>
       <input type="email" name="login_email" 
       required placeholder="Enter Email Here!...">
       </br></br>

       <h1><label>Password</label></br></h1>
       <input type="password" name="login_pass" 
       required placeholder="Enter Password Here!...">
       </br></br>

       <input type="submit" name="login" value="Login">
</form>
<p><a href="index.php">Click Here To Register! </a></p>
</center>
<style>
    {
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

body {
    background: url('img/wallpaper.jfif');
    background-size: cover;
}

.login-form {
    padding: 80px;
    background-color: brown;
    opacity: 0.8;
    border-radius: 50px;
    width: 350px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    color: white;
}

.login-form h1 {
    font-size: 40px;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
}

.login-form p {
    font-size: 20px;
    margin: 15px 0;
}

.login-form input {
    font-size: 16px;
    width: 100;
    padding: 15px 10px;
    border: 0;
    outline: none;
    border-radius: 5px;
}

.login-form button {
    font-size: 18px;
    font-weight: bold;
    margin: 20px 0;
    width: 30%;
    border-radius: 5px;
    border: 0;
    padding: 10px 15px;
}

</style>

            


         
    
</body>
</html>