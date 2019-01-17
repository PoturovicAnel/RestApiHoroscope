<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <title>Horoskop</title>
</head>
<body>
<div class="container">

    <form id="form" style="margin-top: 50px">
        <div class="offset-4 col-md-4">
            <input class="form-control" type="text" id="datum" placeholder="YYMMDD" >
        </div>

        <div class="offset-4 col-md-4 text-center" style="margin-top: 20px">
            <a href="#" class="btn btn-warning" onclick="updateHoroscope()">
                Uppdatera
            </a>
            <a href="#"  class="btn btn-danger" onclick="deleteHoroscope()">
                Radera
            </a>
            <a href="#" class="btn btn-primary" onclick="addHoroscope()">
                Spara
            </a>
        </div>

    </form>

    <div id="sign" class="text-center sign">
        <?php if (isset($_SESSION['sign'])){
            echo 'Ditt horoskop är: ' . $_SESSION['sign'];
        }else{
            echo 'Här kommer ditt horoskop visas!';
        }
        ?>
    </div>
</div>


</body>
</html>