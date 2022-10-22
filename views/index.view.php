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
    
    <div class="container galeria h-100">
        <div class="row d-flex mt-5">
            <div class="col-12 text-center">
                <h1>Galería dinámica</h1>
            </div>
        </div>

        <div class="row mt-4">
            <?php foreach($fotos as $foto):?>
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <a href="foto.php?id=<?php echo $foto['id']; ?>">
                        <img src="fotos/<?php echo $foto['imagen']?>" class="img-fluid">
                    </a>
                </div>
            <?php endforeach;?>
        </div>

        <div class="row justify-content-end mt-4">
            <div class="w-100">
                <?php if($pagina_actual > 1):?>
                    <a href="index.php?p=<?php echo $pagina_actual-1?>" class="anterior">
                        <svg width="27px" height="27px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M20 14a2 2 0 110-4 2 2 0 010 4zM15 12H2m0 0l3-3m-3 3l3 3" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> Anterior
                    </a>
                <?php endif;?>

                <?php if($total_paginas != $pagina_actual):?>
                    <a href="index.php?p=<?php echo $pagina_actual+1?>" class="siguiente">
                        Siguiente <svg width="27px" height="27px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M4 14a2 2 0 110-4 2 2 0 010 4zM9 12h13m0 0l-3-3m3 3l-3 3" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                <?php endif;?>
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