<?php
$servername = "localhost"; // vervang dit indien nodig met de juiste hostnaam
$username = "root"; // vervang dit met je MySQL gebruikersnaam
$password = "Zinedine020"; // vervang dit met je MySQL wachtwoord
$dbname = "supermarkt"; // vervang "Winkel" met de naam van de database

// Stap 1: Maak verbinding met de MySQL-server
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer op connectiefouten
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to database ($dbname).";
?>



