<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class="container vh-100 subirView">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h1>Subir foto</h1>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">
                    <label for="foto">Seleccionar foto</label>
                    <input type="file" id="foto" name="foto">

                    <label for="titulo">Título de la foto</label>
                    <input type="text" id="titulo" name="titulo">

                    <label for="text">Descripción de foto</label>
                    <textarea name="texto" id="text"></textarea>

                    <?php if(isset($error)):?>
                        <p>
                            <?php echo $error; ?>
                        </p>
                    <?php endif;?>

                    <input type="submit" value="Subir foto">
                </form>
            </div>
        </div>
    </div>

    <footer class="container-fluid m-0">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <p class="p-0 m-0">
                    2022 © | Curso PHP | Desarrollado por Felipe Aguilar
                </p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>