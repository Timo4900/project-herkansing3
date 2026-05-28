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
            <h2>Hier de reserveringen</h2>
            <p>Hier staan alle geplande reserveringen.</p>
            <br>
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
                $datum = date('d-m', strtotime($reservering['datum']));
                $tijd = date('H:i', strtotime($reservering['tijd']));
   
                echo "<tr>";
                echo "<td>" . $datum . " " . $tijd . "</td>";
                echo "<td>" . $reservering['Soort'] . "</td>";
                echo "<td>" . $reservering['naam'] . "</td>";
                echo "<td>" . $reservering['email'] . "</td>";
                echo "<td>" . $reservering['tel_nr'] . "</td>";
                echo "</tr>";
            }
            ?>
            </table>
        </section>



    </main>

</body>
</html>