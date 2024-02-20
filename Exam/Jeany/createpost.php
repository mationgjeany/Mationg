<?php
    include "conn.php";
    session_start();

    $e=$_SESSION['email'];

    $getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e'");
    while($row=mysqli_fetch_object($getname)){

        $name= $row -> name;

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

<a href="userhome.php"> HOME </a> 
<a href=""> GALLERY </a> 
<a href=""> GROUP PROJECT </a> 
<a href="createpost.php"> CREATE POST </a> 
<a href="update_profile.php"> UPDATE PROFILE </a> 
<a href="index.php"> LOGOUT </a>

<hr> </hr>

    <h1> CREATE POST </h1>

    <form action="process.php" method="POST">

           <b> <label>Title of your Post </label> </br>
            <input type="text" name="title" required placeholder="Add Title here..."> </p>

           <b> <label>Select Date </label> </br>
            <input type="date" name="mydate" required > </p>

         <b>  <label>Add Description </label> </br>
            <textarea cols="50" rows="10" name="desc"></textarea> </p>

            <input type="hidden" name="posted_by" value="<?php echo $name;?>">

           <input type="submit" name="create_post" value="POST">

</form>

</body>
</html>

<style>
    body {
    background: url('img/tuscany.jpg');
    background-size: cover;
}
</style>