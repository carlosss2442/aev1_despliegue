<?php 

session_start();
$fin = $_SESSION['finished'];
$won = $_SESSION['won'];
$secret = $_SESSION['secret'];

if ($won === true) {
    echo '<h3>¡Correcto! El número era .' . $secret . '</h3>';
} else {
    echo ' <h3>¡Has perdido! El número era  .' . $secret . '</h3>';
}

echo "<a href='index.php'>volver a intentar</a>";
?>