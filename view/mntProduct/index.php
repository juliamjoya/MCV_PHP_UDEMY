<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once("../../mainHead.php");?>
    <title>Mantenimiento de Producto</title>
</head>

<body>
    <?php require_once("../../mainPreloader.php");?>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <?php require_once("../../mainNavHeader.php");?>

        <?php require_once("../../mainHeader.php");?>

        <?php require_once("../../mainSideBar.php");?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Productos</h1>
                        <p>Aqui puede revisar y dar mantenimiento a sus productos</p>
                        <div class="card">
                            <div class="card-header">
                                <!-- <h4 class="card-title">Heading With Background</h4> -->
                                <button id="btnNewProduct" type="button" class="btn btn-outline-primary"
                                    data-toggle="modal" data-target="#modalmaintenance">Nuevo
                                    Producto</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="tableProducts">
                                        <thead class="thead-primary text-center">
                                            <tr class="text-center">
                                                <th scope="col">Nombre</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <!-- <th scope="col">Handle</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <?php require_once("../../mainFooter.php"); ?>

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <?php require_once("mntmodal.php"); ?>

    <?php require_once("../../mainJS.php"); ?>

    <script type=" text/javascript" src="mntproduct.js"></script>

</body>

</html>