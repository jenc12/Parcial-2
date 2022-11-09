<?php
class seg{
    public static function codificar($p){
        return base64_encode($p);
    }
    public static function decodificar($p){
        return base64_decode($p);
    }
    public static function getToken(){
        if(isset($_SESSION["token"]))
            return $_SESSION["token"];
    
        $token = sha1(random_bytes(100));
        return  $token;
    }
    public static function validaSession($token){
        #if ($token != $_SESSION["token"])
        if (!isset($_SESSION["token"]) || !hash_equals($token,$_SESSION["token"]))
            return false;
        return true;
    }
    public static function compras()
    {
        
        header("location: index.php?c=".seg::codificar("shop")."&m=". seg::codificar("shop1")."#catalogo");
        if (!isset($_COOKIE["compras"])) {
            setcookie("compras", 1);
        } else {
            setcookie("compras", $_COOKIE["compras"] + 1);
        }
    }
} 

?>