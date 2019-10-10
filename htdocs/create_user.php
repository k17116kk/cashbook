<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>CASH BOOK - Register</title>
        <link rel="stylesheet" href="css/signin.css">
    </head>

    <body class="text-center">
        <form class="form-signin" action="web/UserRegister.php" method="POST">
            <h2 class="h4 mb-3 font-weight-normal">Create User</h2>
            <?php
            if ($_GET['error'] != null) {
                print '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';
            }
            ?>
            <label for="inputEmail" class="sr-only">Sign in ID (Email address)</label>
            <input type="email" id="inputEmail" name="form-email" class="form-control form-control-first" placeholder="ID (Email address)" required autofocus>
            <label for="inputName" class="sr-only">Your Name</label>
            <input type="text" id="inputName" name="form-name" class="form-control" placeholder="Your Name" required>
            <label for="inputPassword" class="sr-only">Sign in Password</label>
            <input type="password" name="form-pwd" id="inputPassword" class="form-control form-control-last" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted"></p>
        </form>
    </body>
</html>
