<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería con PHP y MySQL</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class="container fotoView">
        <div class="row mt-5">
            <div class="col-12">
                <a href="index.php">
                    <svg width="23px" height="23px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M15 6l-6 6 6 6" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> Regresar
                </a>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-6">
                <img src="fotos/<?php echo $foto['imagen'];?>" alt="" class="img-fluid">
            </div>
            <div class="col-6 pt-1">
                <h2>
                    <?php 
                        if (!empty($foto['titulo'])) {
                            echo $foto['titulo'];
                        }else{
                            echo $foto['imagen'];
                        }
                    ?>
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, molestiae.
                </p>
            </div>
        </div>
    </div>

    <footer class="container-fluid">
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