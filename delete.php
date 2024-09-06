<?php 

include("config/database.php");
if (isset($_GET['id'])) {
    $sql = "delete from users where id=".$_GET['id'];
    $result = $conn->query($sql);

    if ($result) {
        echo "Deleted Successfully";
    }else{
        echo "Someting wrong...";
    }
}
header("location: users.php");
?>