'<?php
    include "conn.php";
    session_start();

    $e=$_SESSION['email'];

    $getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e'");
    while($row=mysqli_fetch_object($getname)){

        $id= $row -> id;
        $name= $row -> name;
        $email= $row -> email;
        $pass= $row -> password;
        $pn= $row -> phone_number;  
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
</head>
<body>

<center>
<b><a href="userhome.php"> HOME </a> |
<b><a href=""> GALLERY </a> |
<b><a href=""> GROUP PROJECT </a> |
<b><a href="createpost.php"> CREATE POST </a> |
<b><a href="update_profile.php"> UPDATE PROFILE </a>|
<b><a href="index.php"> LOGOUT </a>
</center>

<hr> </hr>

<center>
     <h1> UPDATE PROFILE </h1>

     <form action="process.php?id=<?php echo $id;?>" method="POST">

            <b><label>Name: </label> </br>
            <input type="text" name="up_name" value="<?php echo $name;?>" required> </p>

            <b><label>Email: </label> </br>
            <input type="email" name="up_email" value="<?php echo $email;?>" required> </p>

            <b><label>Password: </label> </br>
            <input type="password" name="up_pass" value="<?php echo $pass;?>" required> </p>

            <b><label>Phone Number: </label> </br>
            <input type="text" name="up_pn" value="<?php echo $pn;?>" required> </p>

            <input type="submit" value="UPDATE" name="update_account">

</center>
    
</form>
</body>
</html>

<style>
    body {
    background: url('img/teal.jpg');
    background-size: cover;
}
</style>