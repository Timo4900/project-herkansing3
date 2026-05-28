<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    $soort = $_POST['Soort'];
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $tel_nr = $_POST['tel_nr'];

    $sql = "INSERT INTO reservering (datum, tijd, Soort, naam, email, tel_nr) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt->execute([$datum, $tijd, $soort, $naam, $email, $tel_nr])) {
        header("Location: index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapsalon Studio | Reserveren</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="top-nav">
        <h1>Kapsalon Studio</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>

    <main class="container">
        
        <section class="intro">
            <h2>Vul je gegevens in</h2>
        </section>

        <form action="reserveren.php" method="POST" class="reserveren-form">
            
            <label>Datum:</label>
            <input type="date" name="datum" required>
            
            <label>Tijd:</label>
            <input type="time" name="tijd" required>
            
            <label>Behandeling:</label>
            <select name="Soort" required>
                <option value="Knippen Heren">Knippen Heren</option>
                <option value="Knippen Dames">Knippen Dames</option>
                <option value="Wassen & Föhnen">Wassen & Föhnen</option>
                <option value="Knippen & Kleuren">Knippen & Kleuren</option>
            </select>
            
            <label>Volledige Naam:</label>
            <input type="text" name="naam" required>
            
            <label>E-mailadres:</label>
            <input type="email" name="email" required>
            
            <label>Telefoonnummer:</label>
            <input type="text" name="tel_nr" required>
            
            <button type="submit" class="btn-book">Bevestig Afspraak</button>
            
        </form>

    </main>

</body>
</html>