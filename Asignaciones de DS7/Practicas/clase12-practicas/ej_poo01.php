<?
class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        return "Hola, soy $this->nombre";
    }
}

// Crear objeto
$persona1 = new Persona("Carlos", 28);

// Acceder a propiedades publicas
echo $persona1->nombre; // Carlos
echo $persona1->edad;   // 28

// Llamar a método
echo $persona1->saludar(); // Hola, soy Carlos