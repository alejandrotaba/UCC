<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="views/sources/libs/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="views/sources/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- estilos propios -->
     <link rel="stylesheet" href="views/sources/css/backoffice.css">


    <!-- SRIPTS EXTERNOS -->

    <!-- Bootstrap core JavaScript-->
    <script src="views/sources/libs/jquery/jquery.min.js"></script>
    <!-- <script src="views/sources/libs/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- Core plugin JavaScript-->
    <script src="views/sources/libs/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="views/sources/js/sb-admin-2.min.js"></script>
    <!-- <script src="views/sources/js/scripts.js"></script> -->
    <script src="views/sources/js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- sweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="views/sources/libs/datatables/jquery.dataTables.min.js"></script>
 <script src="views/sources/libs/datatables/dataTables.bootstrap4.min.js"></script>
     <script src="views/sources/js/activar-datatables.js"></script>
</head>

<body id="page-top">

    <?php
        if(isset($_SESSION['admin']) && $_SESSION['admin'] == "ok"){
            include_once "views/private/backoffice.php";
        }else{
            include_once "views/public/landingpage.php";
        }
        
    ?>


</body>

</html>