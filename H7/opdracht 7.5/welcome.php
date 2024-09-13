<?php
session_start();

$favoriteColor = isset($_SESSION['favorite_color']) ? $_SESSION['favorite_color'] : (isset($_GET['color']) ? $_GET['color'] : 'Onbekend');
?>

    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>Welkom</title>
    </head>
    <body>
    <h1>Welkom!</h1>
    <p>Je favoriete kleur is: <strong style="color: <?php echo htmlspecialchars($favoriteColor); ?>;"><?php echo htmlspecialchars($favoriteColor); ?></strong></p>
    <a href="process_color.php?color=<?php echo urlencode($favoriteColor); ?>">Verwerk je kleurvoorkeur verder</a>
    </body>
    </html>

