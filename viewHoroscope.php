<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if (isset($_SESSION['sign'])){
        echo 'Ditt horoskop är: ' . $_SESSION['sign'];
    }
}


?>