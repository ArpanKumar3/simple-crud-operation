<?php

if($_SESSION['is_login']){
    return true;
}else{
    header('location:index.php');
}
