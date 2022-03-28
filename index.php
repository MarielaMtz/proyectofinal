<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Poder judicial</title>
    
    <?php
        include ("include/head.php");
    ?>
</head>

<body class="d-flex flex-column ">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
            include ("include/navbar.php");
        ?>
        <!-- Header-->
        <header class="bg-dark py-5">

            <div class="container " background="imagenes/im1.jpg">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Bienvenido al portal del Centro De Solucion
                                De Controversias</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Se parte de la encuesta de satisfacción</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Responder encuesta</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                            src="imagenes/im1.jpg" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Features section-->

        <!-- Footer-->
        <?php
            include ("include/footer.php")
        ?>
        <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: 'controlador.php',
                data: {
                    accion: 'buscarFacilitadores'
                },
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    if (json.resp == 1) {
                        json.sfalicitadores.forEach(function(v) {
                            $('#cmbFacilitador').append('<option value="' + v.id + '">' + v
                                .facilitador + '</option>');
                        });
                    }
                },
                error: function(xhr, status) {
                    console.log(xhr, status);
                },
            });
            $('#btnAdmin').click(function(e) {
                e.preventDefault();
                var contrasena = 0;
                contrasena = prompt("Por favor ingresa la clave de administrador y presiona aceptar");
                if (contrasena != null) {
                    if (contrasena.length > 0) {
                        //admin
                        $.ajax({
                            url: 'controlador.php',
                            data: {
                                accion: 'admin',
                                clave: contrasena
                            },
                            type: 'GET',
                            dataType: 'json',
                            success: function(json) {
                                console.log(json);
                                if (json.resp == -1) {
                                    alert('La clave que ingresaste es incorrecta.');
                                } else {
                                    sessionStorage.setItem('sys', 1);
                                    //console.log(sessionStorage.getItem('sys'));
                                    window.location.href = './miReporteEncuestas.html';
                                }
                            },
                            error: function(xhr, status) {
                                console.log(xhr, status);
                            },
                        });
                    } else {
                        alert('Necesitas una clave de administrador para ingresar.');
                    }
                }
            });

            $('#btnIniciar').click(function(evento) {
                evento.preventDefault();
                $('#formularioInicial').submit();
            });
        })
        </script>
</body>

</html>