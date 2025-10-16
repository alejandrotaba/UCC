
<!-- estilos plantilla landingpage -->
<link href="views/sources/css/styles.css" rel="stylesheet" />

<?php

    if(isset($_GET["route"])){
        if(
            // $_GET["route"] == "ingreso" ||
            $_GET["route"] == "inicio"  
        ){
            include_once "views/public/".$_GET["route"]."/index.php";
        }else{
                include_once "views/public/404/index.php";
        }
    }else{
        include "views/public/inicio/index.php";
    }
?>

    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Core theme JS-->
    <script src="views/sources/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>