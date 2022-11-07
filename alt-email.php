<?php 
$message = '<!doctype html>
                <html lang="en">
                <head>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                
                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
                    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
                    crossorigin="anonymous">
                    <style>
                    body  {
                        background-color: #dddddd;
                        font-size: 1.3em;

                    }
                    </style>
                    <title>Hello, world!</title>
                </head>
                <body>
                    <p>' . $array["date"] . ' - ' . $array["time"] . '</p>
                    <h2>Beste gebruiker</h2>
                    <p> Beste gebruiker u heeft zich onlangs geregistreed voor de site www.inlogsysteem.nl </p>
                    <p> Klik href=  <a href="https://inlogbmi.000webhostapp.com/index.php?content=activate&id=' . $id . '&pwh=' . $array['password_hash'] . '">hier</a> voor het activeren en wijzigen van het wachtwoord van uw 
                    account</p>
                    <p> Bedankt voor het registreren </p>
                    <p> Met vriendelijke groet, </p>
                    <p> CEO website INC. </p>
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                </body>
                </html>';
?>