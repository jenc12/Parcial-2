<?php
    if (session_status()==1)session_start();
?>
<?php
require_once("models/usuario_models.php");
class usuario_controllers
{
    public static function login()
    {
        
     
    }
    public static function validar(){
        if ($_POST) {

            $token= filter_var($_POST["token"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $_SESSION["token"] = $token;

            if (!isset($token) || !seg::validaSession($token)) {
                echo "Acceso restringido";
                exit();
            }

            $usuario= filter_var($_POST["Usuario"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $Contra= filter_var($_POST["Contra"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $obj = new usuario($usuario, $Contra, "");
            $resultado = $obj->validar_usuario();
            var_dump($resultado);
            
            if (count($resultado) > 0) {
                $_SESSION["usuario"] = $resultado["usuario"];
                header("location: index.php?c=".seg::codificar("shop")."&m=". seg::codificar("shop1"));
            }
            else{
                header("location: index.php?c=".seg::codificar("principal")."&m=". seg::codificar("index")."&msg=1");
            }
        }
    }
    public static function cerrar_sesion()
    {   
        if (session_status()==1)session_start();
        setcookie("compras", 0);
        session_destroy();
        header("location: index.php");
    }
}
?>
