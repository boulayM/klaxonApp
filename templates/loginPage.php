<?php


// We need to use sessions, so you should always initialize sessions using the below function
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <title>Login</title>
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mt-2 ms-2">Conectez-vous</h1>

            <form action="/appKlaxon/core/session.php" method="post" class="form-control">

            <fieldset>

                <label class="form-label" for="username">Votre e-mail</label>
                <div class="form-group">
                    <input class="form-input" type="text" name="email" placeholder="email" id="username" required>
                </div>

                <label class="form-label" for="password">Votre mot de passe</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="keypass" placeholder="mot de passe" id="keypass" required>
                </div><br>

                <button class="btn btn-primary" type="submit">Login</button>

            </fieldset>

            </form>

        </div>
    </body>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </footer>
</html>