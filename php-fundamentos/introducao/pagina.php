<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Minha primeira página com PHP!</h1>

    <?php echo "<p>String vinda do PHP! " . date("d/m/Y H:i:s") . " (forma normal)</p>"; ?>
    <?= "<p>String vinda do PHP! ".date("d/m/Y H:i:s")." (short tag PHP)</p>" ?>

    <!-- Forma convencional de inserir PHP em HTML -->
    <p>Estou no curso de <?php echo "PHP "; ?> (forma normal)</p>

    <!-- Forma enxuta de inserir PHP em HTML -->
     <p>Estou no curso de <?= "PHP " ?> (short tag PHP)</p>

    <?php 
        echo "Linha 1 <br>";
        echo "Linha 2 <br>";
        echo "Linha 3 <br>";
    ?>
</body>
</html>