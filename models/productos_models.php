<?php
class productos_models{
    private $id;
    private $produto;
    private $descripcion;
    private $precio;
    private $precioventa;
    private $cantidad;

    public function __construct($id){

        $this->id = $id;


    }
    public function getId(){
        return $this->id;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getprecio(){
        return $this->precio;
    }
    public function getprecio_venta(){
        return $this->precio_venta;
    }
    public function getcantidad(){
        return $this->cantidad;
    }


    public static function Mostrar(){
        
        $productos[]=["id"=>"1","producto"=>"Arceus","descripcion"=>"Peluche de Arceus de 13''","precio"=> 44.99,"cantidad"=>15];
        $productos[]=["id"=>"2","producto"=>"Celebi","descripcion"=>"Peluche de Celebi de 8''","precio"=> 10.99,"cantidad"=>2];
        $productos[]=["id"=>"3","producto"=>"Darkrai","descripcion"=>"Peluche de Darkrai de 10''","precio"=> 19.98,"cantidad"=>14];
        $productos[]=["id"=>"4","producto"=>"Giratina","descripcion"=>"Peluche de Giratina de 18''","precio"=> 39.99,"cantidad"=>18];
        $productos[]=["id"=>"5","producto"=>"Mimikyu","descripcion"=>"Peluche de Mimikyu de 8''","precio"=> 13.99,"cantidad"=>6];
        $productos[]=["id"=>"6","producto"=>"Pikachu","descripcion"=>"Peluche de Pikachu de 12''","precio"=> 34.99,"cantidad"=>40];
        $productos[]=["id"=>"7","producto"=>"Piplup","descripcion"=>"Peluche de Piplup de 31''","precio"=> 349.99,"cantidad"=>25];
        $productos[]=["id"=>"8","producto"=>"Mew","descripcion"=>"Peluche de Mew de 16''","precio"=> 52.99,"cantidad"=>1];
        
        return $productos;
        
    }
    public function Buscar(){
        
        $productos[]=["id"=>"1","producto"=>"Arceus","descripcion"=>"Peluche de Arceus de 13''","precio"=> 44.99,"cantidad"=>15];
        $productos[]=["id"=>"2","producto"=>"Celebi","descripcion"=>"Peluche de Celebi de 8''","precio"=> 10.99,"cantidad"=>2];
        $productos[]=["id"=>"3","producto"=>"Darkrai","descripcion"=>"Peluche de Darkrai de 10''","precio"=> 19.98,"cantidad"=>14];
        $productos[]=["id"=>"4","producto"=>"Giratina","descripcion"=>"Peluche de Giratina de 18''","precio"=> 39.99,"cantidad"=>18];
        $productos[]=["id"=>"5","producto"=>"Mimikyu","descripcion"=>"Peluche de Mimikyu de 8''","precio"=> 13.99,"cantidad"=>6];
        $productos[]=["id"=>"6","producto"=>"Pikachu","descripcion"=>"Peluche de Pikachu de 12''","precio"=> 34.99,"cantidad"=>40];
        $productos[]=["id"=>"7","producto"=>"Piplup","descripcion"=>"Peluche de Piplup de 31''","precio"=> 349.99,"cantidad"=>25];
        $productos[]=["id"=>"8","producto"=>"Mew","descripcion"=>"Peluche de Mew de 16''","precio"=> 52.99,"cantidad"=>1];
        
        foreach($productos as $t){
            
            if($this->id == $t["id"])
                return $t;
        }
        return [];
    }
}
?>