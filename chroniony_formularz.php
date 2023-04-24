<?php
    session_start();
    if(!isset($_SESSION["logged_in"]))
    {
        header('Location: login.php');
        exit();
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>formularz</title>
        <link rel="stylesheet" href="ch_form_styles.css">
    </head>
    <body>
        
        <!-- div - sekcja strony -->
        <div class="wrapper">
            <form id="form" action="wyswietl.php" method="post">  
                <h1>formularz</h1>
                <!-- tekst -->
                <div class="input_field">
                    <label for="imie">Imię: </label>
                    <input id="name" type="text" name="imie" required pattern="[A-Z][a-z]+" minlength="2" maxlength="20">
                </div>
                
                <div class="input_field">
                    <label for="nazwisko">Nazwisko: </label>
                    <input id="surname" type="text" name="nazwisko" required pattern="([A-Z][a-z]{1,}-[A-Z][a-z]{1,})|([A-Z][a-z]+)" minlength="2" maxlength="40">
                </div>

                <div class="input_field">
                    <label for="ulica">Ulica: </label>
                    <input id="street" type="text" name="ulica" required pattern="[A-Z][a-z]+( [A-Z][a-z]+){0,2}" minlength="2" maxlength="20">
                </div>

                <div class="input_field">
                    <label for="miasto">Miasto: </label>
                    <input id="city" type="text" name="miasto" required pattern="[A-Z][a-z]+( [A-Z][a-z]+){0,2}" minlength="2" maxlength="20">
                </div>
                
                <!-- numerki -->
                <div class="input_field">
                    <label for="kodpocztowy">Kod pocztowy: </label>
                    <input id="zip_code" type="text" name="kodpocztowy" required placeholder="w formacie 11-111" pattern="[0-9]{2}-[0-9]{3}">
                </div>
                
                <div class="input_field">
                    <label for="nrdomu">Numer domu: </label>
                    <input id="house_number" type="text" name="nrdomu" required pattern="\d+[A-Za-z]?" maxlength="6">
                </div>

                <div class="input_field">
                    <label for="nrmieszkania">Numer mieszkania: </label>
                    <input id="apartment_number" type="text" name="nrmieszkania" pattern="\d+" maxlength="6" >
                </div>
            
                <!-- inne -->
                <div class="input_field">
                    <label for="prawko">Prawko: </label>
                    <input id="driving_license" type="checkbox" name="prawko">
                </div>

                <div class="input_field">
                    <label for="plec">Płeć: </label>
                    K<input type="radio" name="plec" value="k" required="required">
                    M<input type="radio" name="plec" value="m" required="required">
                </div>

                <div class="input_field">
                    <label for="dataurodzenia">Data urodzenia: </label>
                    <input id="date" type="date" name="dataurodzenia" required>
                </div>

                <div class="input_field">
                    <label for="pesel">Pesel: </label>
                    <input id="pesel" type="text" name="pesel" required pattern="\d{11}">
                </div>
                
                <div class="input_field">
                    <label for="nrtelefonu">Numer telefonu: </label>
                    <input id="phone_number" type="tel" name="nrtelefonu" required placeholder="w formacie 111 111 111" pattern="[0-9]{3} [0-9]{3} [0-9]{3}">
                    
                </div>

                <div class="input_field">
                    <label for="uwagi">Uwagi: </label>
                    <textarea name="uwagi" rows="10" cols="20" placeholder="Tutaj wpisz swoje uwagi"></textarea>
                </div>

                <!-- buttons -->
                <div class="buttons">
                    <button type="submit" name="zapisz">Zapisz</button>
                    <button type="reset">Wyczyść</button>
                    <a href="logout.php">Wyloguj się</a>
                </div>
                
                
            </form> 
        
        </div>
        <script src="script_form.js"></script>
    </body>
</html>