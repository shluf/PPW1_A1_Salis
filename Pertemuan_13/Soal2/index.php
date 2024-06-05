<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    <title>Pertemuan 13 | Soal 2</title>
</head>
<body>
    <?php
        $game = array(
            array("Game" => "Minecraft", "Genre" => "Sandbox", "Rating" => 9.5, "Total Download" => "100M+"),
            array("Game" => "Among Us", "Genre" => "Social Deduction", "Rating" => 8.8, "Total Download" => "500M+"),
            array("Game" => "Valorant", "Genre" => "FPS", "Rating" => 8.9, "Total Download" => "50M+"),
            array("Game" => "Mobile Legends", "Genre" => "MOBA", "Rating" => 3.1, "Total Download" => "5B+")
        );

        echo "<table class='table table-bordered'>";
        echo "<tr><th>Game</th><th>Genre</th><th>Rating</th><th>Total Download</th><th>Keterangan </th></tr>";
        foreach($game as $g) {
            echo "<tr> <td>" 
                . $g["Game"] . "</td><td>" 
                . $g["Genre"] . "</td><td>" 
                . $g["Rating"] . "</td><td>" 
                . $g["Total Download"] . "</td> <td>" 
                . ($g["Rating"] >= 7 ? "Direkomendasikan" : "Tidak direkomendasikan") 
                . "</td> </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
