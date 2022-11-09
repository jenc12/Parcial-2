<?php
class usuario{
    private $usuario;
    private $password;
    private $salt;
    
    public function __construct($usuario,$password,$salt){

        $this->usuario = $usuario;
        $this->password = $password;
        $this->salt = $salt;

    }

    public function validar_usuario(){
        
        $tabla[]=["usuario"=>"jenc12","password"=>"7ff980af962f96d4f2d8e3249f3de64f77e5aa0f","salt"=>"XbyZ4Cv56bDP"];
        foreach($tabla as $t){
            $pass = sha1($this->password.$t["salt"]);
            if($this->usuario == $t["usuario"] && $pass == $t["password"])
                return $t;
        }
        return [];
        
    }
}
?>