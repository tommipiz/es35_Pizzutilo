<?php
    session_start();

    // Elimina tutte le variabili di sessione
    session_unset();
    // Distrugge la sessione
    session_destroy();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessione Scaduta</title>
</head>
<body>
    <h1 style="color: red;">Sessione scaduta!</h1>
    <p><a href="pagina_login.html">Torna alla pagina di login</a></p>
    
</body>
</html>
