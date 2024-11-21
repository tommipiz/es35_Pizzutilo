<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: errore.php");
        exit();
    }

    // Controlla se la sessione è scaduta (20 secondi)
    $login_time = $_SESSION['login_time'];
    $current_time = time();
    if ($current_time - $login_time > 20) {
        header("Location: sessione_scaduta.php");
        exit();
    }

    $login_date = date("Y-m-d h:i:s A", $login_time);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvenuto</title>
</head>
<body>
    <h1>Benvenuto, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Nome: [Il tuo nome]</p>
    <p>Cognome: [Il tuo cognome]</p>
    <p>Data di nascita: [La tua data di nascita]</p>
    <p>Hai effettuato il login il: <?php echo $login_date; ?></p>
</body>
</html>
