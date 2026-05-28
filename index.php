<?php
include 'connect.php';


$stmt = $conn->prepare("SELECT * FROM reservering");
$stmt->execute();
?>

<!DOCTYPE html>
<head>
    <title>Kapsalon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="top-nav">
        <div class="nav-container">
            <h1>Kapsalon Studio</h1>
            <nav>
                <a href="index.php">Home</a>
            </nav>
        </div>
    </header>

    <main class="container">
        
        <section class="intro">
            <h2>Welkom bij de kapper</h2>
            <p>Hier kan je je afspraak plannen om geknipt te worden.</p>
            <br>
            <a href="#" class="btn-book">Plan hier later je afspraak in</a>
        </section>

        <section class="diensten-sectie">
            <h3>Onze Behandelingen</h3>
            <ul class="diensten-lijst">
                <li>Knippen Heren</li>
                <li>Knippen Dames</li>
                <li>Wassen & Föhnen</li>
                <li>Knippen & Kleuren</li>
            </ul>
        </section>

    </main>

</body>
</html>