<?php

include("config/database.php");
include("middleware.php");

//Fetch the data using id which is passing from user.php
if(isset($_GET['id'])){
$sql = "select * from users where id=".$_GET['id'];
$result = $conn->query($sql);
$user = mysqli_fetch_assoc($result); 
}else{
    die("Invalid Input");
}

//Upgdate the data 
if(isset($_POST['submit'])){
    extract($_POST);
$sql = "update users set username = '$username' where id =".$_GET['id'];
$result = $conn->query($sql);

if ($result) {
    echo "Updated Successfully";
}else{
    echo "Something went wrong. Try again..";
}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP CRUD Application</title>
</head>

<body>
    <section class="section">
        <h2>Edit User</h2>

        <form action="" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required value="<?php echo $user['username'] ?>">

                <?php
                /* <label for="psw"><b>Password</b></label>
                    <input type="text" placeholder="Enter Password" name="password" required value="<?php echo $user['password'] ?>">
                */ ?>

                <button type="submit" name="submit">Update</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="users.php" class="footerbtn">All Users</a>
        </div>
    </section>

</body>

</html>