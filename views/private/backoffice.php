    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
         include "views/private/modules/sidebar.php";
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <?php
                include "views/private/modules/topbar.php";

                if(isset($_GET["route"])){

                    if(
                        $_GET["route"] == "dashboard" ||
                        $_GET["route"] == "usuarios" ||
                        $_GET["route"] == "categorias" ||
                        $_GET["route"] == "productos"

                    ){
                        include_once "views/private/pages/".$_GET["route"]."/index.php";
                    }else{
                        include_once "views/private/pages/404/index.php";
                    }

                }else{
                    include "views/private/pages/dashboard/index.php";
                }



                ?>


            </div>
        
            <!-- End of Main Content -->

            <!-- Footer -->
                <?php
                include "views/private/modules/footer.php";
                ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php
    include "views/private/modules/botonesFlotantes.php";
    include "views/private/modules/modals.php";
    ?>