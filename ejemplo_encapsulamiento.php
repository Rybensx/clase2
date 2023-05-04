<?php

class producto {

    #DEFINICION DE LOS ATRIBUTOS
    protected string $nombre;
    public int $precio;
    public bool $disponible;
    
    #METODO CONSTRUCTOR, SE EJECUTA AL EFECTUAR LA INSTANCIA
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        # SE LES DA VALORES A LOS ATRIBUTOS CON LOS PARAMETROS QUE RECIBE EL METODO CONSTRUCTOR
        $this ->nombre = $nombre;
        $this ->precio = $precio;
        $this ->disponible = $disponible;
    }

    #DEFINICION DE METODOS
    public function mostrarProducto() {
        echo "El Producto es; " . $this -> nombre . " y su precio es de: " . $this ->precio;
    }
    #METODO GETTER PARA LA PROPIEDAD PROTEGIDA DE NOMBRE
    public function getNombre(): string {
        return $this-> nombre;
    }
    #METODO SETTER PARA PROPIEDAD PROTEGIDA DE NOMBRE

public function setNombre (string $nombre) {
    $this -> nombre = $nombre;
    }

}

$producto = new Producto ('Tablet', 200, true);
// $producto->mostrarProducto();
// echo $producto->nombre //PRODUCE UN ERROR
    echo $producto->getNombre(); //OBTIENE EL NOMBRE
    $producto->setNombre('nuevo Nombre'); //SETEA EL NOMBRE
    echo $producto->getNombre(); // OBTIENE EL NOMBRE

?>