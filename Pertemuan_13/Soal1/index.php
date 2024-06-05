<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 13 | Soal 1</title>
</head>
<body>
    <?php
        $data = array("Minecraft", "Among Us", "Valorant", "Genshin Impact", "Fortnite");

        echo "<h2>List Game</h2>";
        foreach($data as $item) {
            if ($item == "Valorant" || $item == "Fortnite") {
                echo "<ul> <li>" . $item . " >> Only for PC</li> </ul>";
            } else {
                echo "<ul> <li>" . $item . "</li> </ul>";
            }
        }
    ?>
</body>
</html>