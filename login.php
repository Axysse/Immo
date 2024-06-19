<?php

session_start();

$user = 'nicolas';
$password = '123';

if (isset($_POST['submit'])) {

    if ($user == $_POST['name'] && $password == $_POST['password']) {
        $_SESSION['name'] = $user;
    } else {
        print 'Toi tu sors!';
        session_destroy();
    }
}

if (isset($_SESSION['name'])) {
    print 'Salut vieille branche';
} else {
    print ' T\'es qui toi?';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <form action="" method="post">
                <label for="name">Votre identifiant:</label>
                <input type="text" name="name" id="name">
                <label for="password">Votre mot de passe</label>
                <input type="text" name="password" id="password">
                <button type="submit" value="login" name="submit">login</button>
            </form>
            <?php if (isset($_SESSION['name'])) { ?>
                <a href="logout.php"><input type="button" value="logout"></a>
            <?php } ?>
        </nav>
    </header>
</body>

</html>