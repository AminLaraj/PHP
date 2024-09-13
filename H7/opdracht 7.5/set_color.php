<?php
session_start();

if (isset($_POST['color'])) {
    $_SESSION['favorite_color'] = $_POST['color'];
    header('Location: welcome.php?color=' . urlencode($_SESSION['favorite_color']));
    exit();
}
?>

    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>Stel je favoriete kleur in</title>
    </head>
    <body>
    <h1>Voer je favoriete kleur in</h1>
    <form method="post" action="">
        <label for="color">Kleur:</label>
        <input type="text" id="color" name="color" required>
        <input type="submit" value="Verzenden">
    </form>
    </body>
    </html>
