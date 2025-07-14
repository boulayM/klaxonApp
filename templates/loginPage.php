<?php
// We need to use sessions, so you should always initialize sessions using the below function
session_start();
// If the user is logged in, redirect to the home page
if (isset($_SESSION['account_loggedin'])) {
    header('Location: '.$uri.'/appKlaxon/templates/loginPage.php');
    exit;
}
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
        <div class="login">

            <h1>Member Login</h1>

            <form action="/appKlaxon/core/session.php" method="post" class="form login-form">

                <label class="form-label" for="username">Username</label>
                <div class="form-group">
                    <input class="form-input" type="text" name="email" placeholder="Username" id="username" required>
                </div>

                <label class="form-label" for="password">Password</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="keypass" placeholder="Password" id="keypass" required>
                </div>

                <button class="btn" type="submit">Login</button>

            </form>

        </div>
    </body>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </footer>
</html>