<?
class Producto{
    public $nombre;
    public $precio;
    public $stock;

    public function __construct($nombre, $precio, $stock){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
        echo "Producto creado: " . $this->nombre . "<br>";
    }
    public function mostrar(){
        echo $this->nombre . " - Precio: $" . $this->precio . "<br>";
    }
}
$producto1 = new Producto("mouse", 5.75, 7);
$producto1->mostrar(); // mouse - Precio: $5.75
