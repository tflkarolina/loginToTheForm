<?php 
    session_start();

    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]==true)
    {
        header('Location: chroniony_formularz.php');
        exit(); //opuszczamy plik - po to aby kod z zaloguj się (to co dalej) nie wykonal
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="login_styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Zaloguj się</h1>
            <p>do formularza</p>
        </div>
        <form action="sprawdz.php" method="post">
            <div class="inputs">
                <label for="login">login</label>
                <input type="text" name="login" required placeholder="karolina"> 
            
                <label for="haslo">hasło</label>
                <input type="password" name="password" required placeholder="lab5">
            </div>
            <div class="login_button">
                <button type="submit">Zaloguj się</button>
            </div>
            <a href="index.html">powrót</a>
        </form>

        <?php
            if(isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
            }
        ?>

    </div>
</body>
</html>