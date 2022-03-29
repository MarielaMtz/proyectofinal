<?php 

  date_default_timezone_set("America/Lima");
  $date = new DateTime();

  $fecha_inicio = $date->format('Y-m-d H:i:s');
  
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Poder Judicial</title>
    <?php
        include ("include/head.php");
    ?>
</head>

<body>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
            include ("include/navbar.php");
        ?>
        <div class="container-fluid ">
            <div class="row">
                <?php
                    include ("include/admin_menu.php");
                ?>
                <div class="col-lg-8 col-md-12">
                    <h1 class="blog_bvn">Catálogo de Encuestas</h1>
                    <br></br>
                    <h4 class="blog_bvn">Nombre</h4>
                    <input class="form-control" type="text" placeholder="Nombre de la encuesta"
                        aria-label="default input example">
                    <br>
                    <h4 class="blog_bvn">Periodo</h4>
                    <input class="form-control" type="text" placeholder="Ingrese un periodo"
                        aria-label="default input example">
                    <br>
                    <h4 class="blog_bvn">Fecha</h4>
                    <input class="form-control" type="date" placeholder="" aria-label="default input example">
                    <br>
                    <h4 class="blog_bvn">Descripción</h4>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Ingresa la descripción de la encuesta"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2"></label>
                    </div>
                    <br>
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary" type="button">Enviar</button>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <footer class="bg-dark py-4 mt-auto">
            <?php
            include ("include/footer.php")
        ?>
        </footer>

        </div>

</html>