<?

class Auto {
    public $marca;
    public $modelo;
    public $anio;
}

// Creacion de objetos
$auto1 = new Auto();

// Asignacion valores a la instancia
$auto1->marca = "Hyundai";
$auto1->modelo = "Grand i10";
$auto1->anio = 2026;

echo "Lanzamiento del auto nuevo: " . $auto1->marca . " " . $auto1->modelo . " anio " . $auto1->anio;
