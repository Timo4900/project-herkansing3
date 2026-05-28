<?php
include 'connect.php';


$stmt = $conn->prepare("SELECT * FROM reservering");
$result = $stmt->execute();
$reserveringen = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapsalon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="top-nav">
        <div class="nav-container">
            <h1>Kapsalon</h1>
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
            <a href="reserveren.php" class="btn-book">Plan je afspraak in</a>
        </section>

        <section>
            <table>
                <tr>
                    <th>Datum & Tijd</th>
                    <th>Behandeling</th>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Telefoonnummer</th>
                </tr>
            <?php

            foreach ($reserveringen as $reservering) {
                echo "<tr>";
                echo "<td>" . $reservering['datum'] . " " . $reservering['tijd'] . "</td>";
                echo "<td>" . $reservering['Soort'] . "</td>";
                echo "<td>" . $reservering['naam'] . "</td>";
                echo "<td>" . $reservering['email'] . "</td>";
                echo "<td>" . $reservering['tel_nr'] . "</td>";
                echo "</tr>";
            }
            ?>
            </table>
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