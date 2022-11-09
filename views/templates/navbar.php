<?php
if (session_status() == 1) session_start();
require_once("models/productos_models.php");
require_once("controllers/shop_controllers.php");
?>


<link rel="stylesheet" type="text/css" href="style.php">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <div class="icon">
        <a class="navbar-brand" href="#"><img src="../img/logo.png" class="img-fluid" alt="..."></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#catalogo" style="color: red;">Catálogo</a>
                </li>
            </ul>
            
            <ul class="navbar-nav">
            <?php if (isset($_SESSION["usuario"])) { ?>
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION["usuario"] ?>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>">Cerrar Sesion</a></li>
                            <li>
                            </li>
                        </ul>
                    </li>

                <?php } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>">Login</a>
                    </li>
                <?php }  ?>
                </ul>

            <form action="<?php echo "index.php?c=" . seg::codificar("shop") . "&m=" . seg::codificar("validar") ?>" class="d-flex" method="post">
                <input class="form-control me-2" type="text" name="id" placeholder="Ingrese un nombre" aria-label="Search" >
                <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
                <button class="btn btn-outline-danger" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>