<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("../includes/header.php");
    ?>
    <link rel="stylesheet" href="../css/styles-capOrden.css">
    <link rel="stylesheet" href="../css/normalize.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div>

            <?php
            include("../includes/sidebar.php");
            ?>


        </div>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include("../includes/topbar.php");
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <!-- <div class="container-fluid">

					
                    Page Heading
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

                </div> -->
                
                <div class="container-fluid"> 
                    <div class="col-lg-12">
                        <div class="card-body">
                            <?php
                                include("forms/FC_agente.php");
                                if(isset($_GET["error"]))
                                {
                                    if($_GET["error"] == "success")
                                    {
                                        echo "<p style='color: black;'> ¡Agente dado de alta exitosamente! </p>";
                                    }
                                    if($_GET["error"] == "success2")
                                    {
                                        echo "<p style='color: black;'> ¡Agente dado de baja exitosamente! </p>";
                                    }
                                    if($_GET["error"] == "sqlerror")
                                    {
                                        echo "<p style='color: black;'> ¡Algo salió mal! </p>";
                                    }

                                }
                            ?>
                        </div>
                    </div>
				</div>
				
                <!-- <div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <?php 
                            // $encontrado = false;
                            // if (($_SESSION["rol"] != "CXC") && ($_SESSION["rol"] != "ADM")) {
                            //     if(isset($_SESSION["permisos"])){
                            //         foreach($_SESSION["permisos"] as $permiso){
                            //             // echo "<p> $permiso</p>";
                            //             if($permiso == "pc_agente"){
                            //                 $encontrado = true;
                            //             }
                            //         }
                                    
                            //     }
                            //     if ($encontrado == false){
                            //         // echo "HOLA";

                            //     }
                            //     else{
                            //         include("forms/FC_agente.php");
                            //     }       
                            // }
                            // else{
                            //     include("forms/FC_agente.php");
                            // }
                            // include("forms/FC_agente.php");
                            ?>
                        </div>
                    </div>
                </div> -->
           

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>