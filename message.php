<?php
$alert = isset($_GET["alert"]) ? $_GET["alert"] : "default";
$id = isset($_GET["id"]) ? $_GET["id"] : "";
$pwh = isset($_GET["pwh"]) ? $_GET["pwh"] : "";
$email = isset($_GET["email"]) ? $_GET["email"] : "";

switch ($alert) {
    case "no-email":
        echo '<div class="alert alert-info mt-5 w-50 mx-auto" role="alert">
            U heeft geen e-mailadres ingevuld, probeer het opnieuw..
          </div>';
        header("Refresh: 3; ./index.php?content=register");

        break;
    case "emailexists":
        echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
          Het door u gekozen email bestaat al
        </div>';
        header("Refresh: 3; ./index.php?content=register");

        break;
    case "register-error":
        echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
          Er is iets fout gegaan in het registratieproces... Probeer het nogmaals of neem contact op
          met sherickeksteen5@outlook.com
        </div>';
        header("Refresh: 3; ./index.php?content=register");

        break;
    case "register-success":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
         U bent succesvol geregistreed. U ontvangt een e-mail van ons met daarin een activatielink.
        </div>';
        header("Refresh: 3; ./index.php?content=login");

        break;
    case "hacker=alert":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
         U heeft geen rechten op deze pagina.
        </div>';
        header("Refresh: 3; ./index.php?content=home");

        break;
    case "password-empty":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        U heeft een van beide wachtwoorden niet ingevuld probeer het opnieuw
        </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");

        break;
    case "nomatch=password":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        U ingevulde password zijn niet gelijk, Porbeer het opnieuw
        </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");

        break;
    case "no-id-pwh-match":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        U bent niet geregistreerd in de database, u wordt doorgestuurd naar de registratiepagina
        </div>';
        header("Refresh: 3; ./index.php?content=register");

        break;
    case "update-success":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        U bent succesvol geregistreed, u wordt doorgestuurd naar de inlogpagina...
        </div>';
        header("Refresh: 3; ./index.php?content=login");

        break;
    case "update-error":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        Het registertieproces is niet gelukt, kies een nieuw wachtwoord
        </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");

        break;
    case "already-active":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        Uw account is al actief, log in met uw zelfgekozen wachtwoord en emailadres.
        </div>';
        header("Refresh: 3; ./index.php?content=login");

        break;
    case "no-match-pwh":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        Uw inlog gegeven zijn incorrect...
        </div>';
        header("Refresh: 3; ./index.php?content=register");

        break;
    case "loginform-empty":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        Probeer het opnieuw...
        </div>';
        header("Refresh: 3; ./index.php?content=login");

        break;
    case "email-unknown":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        het emailadres is onbekend...
        </div>';
        header("Refresh: 3; ./index.php?content=login");

        break;
    case "not-activated":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        Uw account is nog niet geactiveerd check uw mail ....
        </div>';
        header("Refresh: 3; ./index.php?content=login");

        break;
    case "no-pw-match":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        Uw Wachtwoord is incorrect ....
        </div>';
        header("Refresh: 3; ./index.php?content=login");

        break;
    case "auth-error":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
          U bent niet ingelogd, u wordt doorgestuurd naar de homepagina....
          </div>';
        header("Refresh: 3; ./index.php?content=home");

        break;
    case "logout":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
        U bent succesvol uitgelogt
        </div>';
        header("Refresh: 3; ./index.php?content=home");

        break;
    default:
        header("Location: ./index.php?content=login");
        
        break;
}
?>
