<?php
    
    require_once("baza.php");
    session_start();
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {
        if($_POST['login'] == USERNAME)
        {
            //password_hash(PASSWORD, PASSWORD_DEFAULT);
            if(password_verify($_POST['password'], PASSWORD))
            {
                unset($_SESSION['error']);
                //session_start();
                $_SESSION["logged_in"] = true;
                header('Location: chroniony_formularz.php');
            }
            else
            {
                $_SESSION['error'] = "Nieprawidłowy login lub hasło";
                header('Location: login.php');
                
            }
        }
        else
        {
            $_SESSION['error'] = "Nieprawidłowy login lub hasło";
            header('Location: login.php');
        }
    }
?>