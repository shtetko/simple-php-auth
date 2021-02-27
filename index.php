<?php
    session_start();
    $auth = isset($_SESSION["auth"]);
?>

<html>
    <head>
        <title>Auth</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?php if($auth) { ?>
        <h1>Welcome!</h1>
        <p>Your are login.</p>
        <p>Your id is <?php echo $_SESSION["id"]; ?></p>
        <a href="logout.php">Logout</a>
        <?php } else { ?>
        <form action="login.php" method="post">
            <p>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email"/>
            </p>
            
            <p>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password"/>
            </p>
            <input type="submit" name="submit"/>
        </form>
        <?php } ?>
    </body>
</html>