<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title="About";?>
    <title><?php echo $title ?></title>
</head>
<body>

    <?php require "./nav.php"; ?>
    <h1><?php echo $title ?></h1>
    <p>Este es el contenido de la pagina de <?php echo $title ?></p>
    <footer>
    <i><?php require "./foot.php"; echo " ".$title; ?></i>
    </footer>
    
</body>
</html>