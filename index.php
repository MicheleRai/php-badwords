<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $testo = "Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    ?>
    <h1>BAD WORLDS</h1>
    <P>
        <?= "$testo"; ?>
    </P>
    <p>
        Il testo è lungo :<?= strlen($testo); ?>
    </p>
    <form method="GET" action="">
        <label for="badwords">parola da censurare</label>
        <input type="text" id="badwords" name="badwords">
        <button>Censura!</button>
    </form>
    <?php
        $badwords = $_GET['badwords'];
        $testo2 = str_ireplace($_GET['badwords'], '***', $testo)
    ?>
    <P>
        <?= "$testo2"; ?>
    </P>
    <p>
        Il testo è lungo :<?= strlen($testo2); ?>

    </p>
</body>
</html>