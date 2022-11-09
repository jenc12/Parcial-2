<?php
ob_start();

require_once("controllers/usuario_controllers.php");
require_once("controllers/shop_controllers.php");
require_once("controllers/principal_controllers.php");
require_once("utils/seg.php");

#principal_controllers::index();
if (count($_GET) == 0)
    call_user_func("principal_controllers::index");
else {
    $controlador = seg::decodificar($_GET["c"]);
    $metodo = seg::decodificar($_GET["m"]);

    if (isset($_SESSION["token"]) && !isset($_GET["id"])) {
        call_user_func($controlador . "_controllers::" . $metodo);
    } elseif (isset($_SESSION["token"]) && isset($_GET["id"])) {
        call_user_func($controlador . "_controllers::" . $metodo);
    } elseif ($controlador == "usuario" && $metodo == "validar") {
        call_user_func($controlador . "_controllers::" . $metodo);
    } else {
        call_user_func("principal_controllers::index");
    }
}
ob_end_flush();