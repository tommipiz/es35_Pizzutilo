<?php
    session_start();
?>

<?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if ($username == "admin" && $password == "1234") {
            $_SESSION['login_time'] = time();
            $_SESSION['username'] = $username;
            
            header("Location: benvenuti.php");
            exit();
        } else {
            header("Location: errori.php");
            exit();
        }
    } else {
        header("Location: errori.php");
        exit();
    }
?>
    