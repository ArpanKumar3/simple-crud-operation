<?php  
include("config/database.php");
include("middleware.php");

$sql = "select * from users";
$result = $conn->query($sql);

//print_r($rows);

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
        
        <h2>All Users</h2>

        <table id="users">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($result->num_rows > 0){
                while($rows = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $rows['username']?></td>
                    <td><?php echo $rows['date']?></td>
                    <td>
                        <a href="edit-user.php?id=<?php echo $rows['id']?>" class="button edit">Edit</a>
                        <a href="delete.php?id=<?php echo $rows['id']?>" class="button delete">Delete</a>
                    </td>
                </tr>
                <?php
                }
                }else{?>
                    <tr>
                        <td><?php echo "No results found" ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>

<div class="container" style="background-color:#f1f1f1">
    <a href="add-user.php" class="footerbtn">Add User</a>

    <a href="logout.php" class="footerbtn">Logout</a>
</div>
</section>

</body>

</html>