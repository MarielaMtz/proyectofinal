      <?php
        $usuario  = "root";
        $password = "";
        $servidor = "localhost";
        $basededatos = "bd_pj";
        $con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");

        $db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

        $sqlcat_facilitadores         = ("SELECT * FROM  cat_facilitadores ORDER BY nombre ASC LIMIT 35");
        $datacat_facilitadoresSelect  = mysqli_query($con, $sqlcat_facilitadores);

        $sqlcat_oficinas         = ("SELECT * FROM  cat_oficinas ORDER BY oficina ASC LIMIT 20");
        $datacat_oficinasSelect  = mysqli_query($con, $sqlcat_oficinas);

        $sqlcat_status_anios         = ("SELECT * FROM  cat_status_anios ORDER BY anio ASC LIMIT 10");
        $datacat_status_aniosSelect  = mysqli_query($con, $sqlcat_status_anios);

        $sqlcat_etapa         = ("SELECT * FROM  cat_etapa ORDER BY etapa DESC LIMIT 5");
        $datacat_etapaSelect  = mysqli_query($con, $sqlcat_etapa);
        ?>

      