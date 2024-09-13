<?php
session_start();
if (isset($_POST['language'])) {
    $_SESSION['language'] = $_POST['language'];
    echo "Taal is ingesteld op: " . htmlspecialchars($_SESSION['language']);
} else {
    echo "Kies een taal:<br>";
    echo '<form method="post" action="">';
    echo '<input type="radio" name="language" value="Nederlands"> Nederlands<br>';
    echo '<input type="radio" name="language" value="Engels"> Engels<br>';
    echo '<input type="submit" value="Stel taal in">';
    echo '</form>';
}
?>
    <a href="show_language.php">Bekijk taalvoorkeur</a>

