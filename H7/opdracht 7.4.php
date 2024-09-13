<?php
$ipAddress = $_SERVER['REMOTE_ADDR'];

$serverPort = $_SERVER['SERVER_PORT'];

$userAgent = $_SERVER['HTTP_USER_AGENT'];

echo "<h1>Informatie</h1>";
echo "<p><strong>IP-adres van de gebruiker:</strong> " . htmlspecialchars($ipAddress) . "</p>";
echo "<p><strong>Serverpoort:</strong> " . htmlspecialchars($serverPort) . "</p>";
echo "<p><strong>Besturingssysteem en browser (via HTTP_USER_AGENT):</strong> " . htmlspecialchars($userAgent) . "</p>";
?>
<?php
