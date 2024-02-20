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
    <title><p?php echo $e;?></title>

</head>
<body>

<center>
     <b><a href="userhome.php"> HOME </a> |
     <b><a href=""> GALLERY </a> |
     <b><a href=""> GROUP PROJECT </a> |
     <b><a href="createpost.php"> CREATE POST </a> |
     <b><a href="update_profile.php"> UPDATE PROFILE </a> |
     <b><a href="index.php"> LOGOUT</a>
</center>

<hr> </hr>

<center>
<h1> This is My Post </h1>
</center>

<?php

$getpost = mysqli_query($conn, "SELECT * FROM post WHERE posted_by='$name' ");
    while($row1=mysqli_fetch_array($getpost)){


        ?>
<center>
          <h2>Title: <?php echo $row1['title']; ?> </h2>
          <h3>Date: <?php echo $row1['mydate']; ?> </h3>
          <h3>Description: <?php echo $row1['description']; ?> </h3>
          <h3>Posted By: <?php echo $row1['posted_by']; ?> </h3>
        <hr> </hr>
    </center>

        <?php
    }
    ?>

     
     
      
    
</body>
</html>

<style>

body {
    background: url('img/pixel.jpg');
    background-size: cover;
}

</style>


