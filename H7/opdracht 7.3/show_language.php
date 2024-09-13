<?php
session_start();

if (isset($_POST['unset_language'])) {
    unset($_SESSION['language']);
    echo "Taalvoorkeur is verwijderd.";
} else {
    if (isset($_SESSION['language'])) {
        echo "Huidige taalvoorkeur: " . htmlspecialchars($_SESSION['language']);
    } else {
        echo "Er is geen taalvoorkeur ingesteld.";
    }
    echo '<form method="post" action="">';
    echo '<input type="submit" name="unset_language" value="Verwijder taalvoorkeur">';
    echo '</form>';
}
?>
    <a href="set_language.php">Stel een andere taal in</a>
