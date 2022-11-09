<?php
if (session_status() == 1) session_start();
require_once("models/productos_models.php");
require_once("controllers/shop_controllers.php");
?>
<body>
<br><br><br>
    <div class="container">
        <br>
        <h1 class="text-center" id="catalogo">Catálogo</h1>
        <br>
        <div class="row">
            <?php
            if (isset($_GET["id"])) {
                $obj = new productos_models($_GET["id"]);
                $resultado = $obj->Buscar();
                $h1 = 1;
                $n = 6;
            } else {
                $resultado = productos_models::Mostrar();
                $h1 = 2;
            }
            ?>
            <?php foreach ($resultado as $producto) {
                if ($h1 == 1) {
                    if (count($resultado) == $n) {
                        $n = 7; ?>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="../img/producto<?php echo $resultado["id"] ?>.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3><?php echo $resultado["producto"] ?></h3>
                                    <p class="card-text"><?php echo $resultado["descripcion"] ?>.</p>
                                    <h3><?php echo $resultado["precio"] ?>$</h3>
                                    <hr>
                                    <p>Cantidad disponible: <?php echo $resultado["cantidad"] ?></p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div class="col text-center">
                                            <form method="post">
                                                <button type="button" class="btn btn-danger"><i class="bi bi-eye"></i>Ver</button>
                                                <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar </button>
                                                <?php
                                                if ($_POST) {
                                                    $obj = new seg();
                                                    $h = $obj->compras();
                                                }
                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../img/pokemon<?php echo $producto["id"] ?>.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3><?php echo $producto["producto"] ?></h3>
                                <p class="card-text"><?php echo $producto["descripcion"] ?>.</p>
                                <h3><?php echo $producto["precio"] ?>$</h3>
                                <hr>
                                <p>Cantidad disponible: <?php echo $producto["cantidad"] ?></p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <div class="col text-center">
                                        <form method="post">
                                            <button type="button" class="btn btn-danger"><i class="bi bi-eye"></i> Ver</button>
                                            <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar </button>
                                            <?php
                                            if ($_POST) {
                                                $obj = new seg();
                                                $h = $obj->compras();
                                            }
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } {
                ?>
            <?php }
            }
            ?>
        </div>
    </div>
    <br>
</div>