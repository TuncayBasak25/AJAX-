  <?php
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];

        echo "Voici la table de multiplication de  " . $nombre;
        echo "<br>";
        echo "<br>";
        for ($i = 0; $i < 11; $i++) {
            echo $nombre . " x " . $i . " =   " . $nombre * $i . "<br />";
            echo "<br>";
        }
        echo "Tu veut aller encore plus loin ?";
    }
    ?>