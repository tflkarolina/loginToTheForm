<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyswietlanie</title>
</head>
<body>
    <?php
        if(isset($_POST["zapisz"]))
        {
            echo("<h2> Cześć, " .$_POST["imie"]. " !</h2>");
            echo("<h3> Twoje dane to: </h3>");
            echo("Nazwisko: " .$_POST["nazwisko"]. "<br>");
            echo("Ulica: " .$_POST["ulica"]. "<br>");
            echo("Miasto: " .$_POST["miasto"]. "<br>");
            echo("Kod pocztowy: " .$_POST["kodpocztowy"]. "<br>");
            echo("Numer domu: " .$_POST["nrdomu"]. "<br>");
            echo("Numer mieszkania: " .$_POST["nrmieszkania"]. "<br>");
            echo("Posiada prawo jazdy: " );
            
            if(isset($_POST["prawko"])) 
            {
                echo("tak <br>");
            }
            else{
                echo("nie <br>");
            }
            
            echo("Płeć: ");

            if($_POST["plec"] == "k")
            {
                echo("kobieta <br>");
            }
            else{
                echo("mężczyzna <br>");
            }

            echo("Data urodzenia: " .$_POST["dataurodzenia"]. "<br>");
            echo("Pesel: " .$_POST["pesel"]. "<br>");
            echo("Numer telefonu: " .$_POST["nrtelefonu"]. "<br>");
            echo("Uwagi: " .$_POST["uwagi"]. "<br>");
        }

    ?>
    <a href="logout.php">Wyloguj się</a>
</body>
</html>