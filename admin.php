<!DOCTYPE html>
<html lang="en">

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

<body class="d-flex flex-column ">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
            include ("include/navbar.php");
        ?>
        <!-- Page Content-->
        <section class="py-5" style="background-color:#d0d0d0">
            <div class="container h-100">
                <div class="row justify-content-sm-center h-100">
                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">

                        <div class="card shadow-lg">

                            <div class="card-body p-5">
                                <h1 class="fs-4 card-title fw-bold mb-4">Acceder modo administrador</h1>
                                <form action="validar.php" method="POST" class="needs-validation" novalidate=""
                                    autocomplete="off">
                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="text">Usuario</label>
                                        <input id="admin_usuario" type="text" placeholder="Ingrese usuario" class="form-control"
                                            name="admin_usuario" value="" required autofocus>
                                        <div class="invalid-feedback">
                                            usuario invalido
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="text">Contraseña</label>
                                        <input id="admin_password" type="password" class="form-control"
                                            placeholder="Ingrese contraseña" name="admin_password" value="" required
                                            autofocus>
                                        <div class="invalid-feedback">
                                            Contraseña invalida
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">

                                        <button type="submit" class="btn btn-primary ms-auto"
                                            style="background-color:#557982; border-color: #557982;">
                                            Acceder
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>


        </section>

    </main>
    <!-- Footer-->
    <?php
        include ("include/footer.php")
    ?>
</body>

</html>