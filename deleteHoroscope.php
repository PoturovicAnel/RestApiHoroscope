<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    if(isset($_SESSION['sign'])){
        session_unset();
        echo true;
    }else{
        echo false;
    }
}
?>