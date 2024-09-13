<?php
session_start();

$color = isset($_GET['color']) ? $_GET['color'] : 'Onbekend';
?>

    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>Kleurverwerking</title>
    </head>
    <body>
    <h1>Kleurverwerking</h1>
    <p>Je favoriete kleur is: <strong style="color: <?php echo htmlspecialchars($color); ?>;"><?php echo htmlspecialchars($color); ?></strong></p>
    <p>Je kunt hier verdere bewerkingen uitvoeren, zoals het aanpassen van een kleurthema.</p>
    </body>
    </html>

