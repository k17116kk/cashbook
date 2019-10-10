<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Sign In</title>
        <link rel="stylesheet" href="css/signin.css">
    </head>

    <body class="text-center">
        <form class="form-signin" action="web/Auth.php" method="POST">

            <h1 class="h2 mb-3 font-weight-normal">hello</h1>
            <h2 class="h4 mb-3 font-weight-normal">Please sign in</h2>
            <?php
            if ($_GET['error'] != null) {
                print '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';
            }
            ?>
            <label for="inputEmail" class="sr-only">Sign in ID (Email address)</label>
            <input type="email" id="inputEmail" name="form-email" class="form-control form-control-first" placeholder="ID (Email address)" required autofocus>
            <label for="inputPassword" class="sr-only">Sign in Password</label>
            <input type="password" name="form-pwd" id="inputPassword" class="form-control form-control-last" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mb-3 text-right">Don't you have an account? <a href="create_user.php ">Register now</a>.</p>
            <p class="mt-5 mb-3 text-muted"> </p>
        </form>
    </body>
</html>
