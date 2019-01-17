<?php
parse_str(file_get_contents('php://input'), $_PUT);
session_start();

if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    if(isset($_SESSION['sign'])){
        session_unset();

        $datum = $_PUT['datum'];

        echo $datum;
        $_SESSION["datum"] = $datum;


        $month = substr($datum, -4, -2);
        $day = substr($datum, -2);


        if ($month == "01"){
            if ($day > 20)
                $sign = "Stenbocken";
            else
                $sign ="Vattumannen";
        }

        else if ($month == "02"){
            if ($day > 18)
                $sign = "Fiskarna";
            else
                $sign = "Vattumannen";
        }

        else if ($month == "03"){
            if ($day > 21)
                $sign = "Väduren";
            else
                $sign = "Fiskarna";
        }

        else if ($month == "04"){
            if ($day > 19)
                $sign = "Oxen";
            else
                $sign = "Väduren";
        }

        else if ($month == "05"){
            if ($day > 20)
                $sign = "Tvillingarna";
            else
                $sign = "Oxen";
        }

        else if ($month == "06"){
            if ($day > 21)
                $sign = "Kräftan";
            else
                $sign = "Tvillingarnaus";
        }

        else if ($month == "07"){
            if ($day > 23)
                $sign = "Lejonet";
            else
                $sign = "Kräftan";
        }

        else if ($month == "08"){
            if ($day > 23)
                $sign = "Jungfrun";
            else
                $sign = "Lejonet";
        }

        else if ($month == "09"){
            if ($day > 22)
                $sign = "Vågen";
            else
                $sign = "Jungfrun";
        }

        else if ($month == "10"){
            if ($day > 22)
                $sign = "Skorpionen";
            else
                $sign = "Vågen";
        }

        else if ($month == "11"){
            if ($day > 21)
                $sign = "Skytten";
            else
                $sign = "Skorpionen";
        }

        else if ($month == "12"){
            if ($day > 22)
                $sign = "Stenbocken";
            else
                $sign = "Skytten";
        }

        $_SESSION["sign"] = $sign;


        echo true;
    }else{
        echo false;
    }
}


?>