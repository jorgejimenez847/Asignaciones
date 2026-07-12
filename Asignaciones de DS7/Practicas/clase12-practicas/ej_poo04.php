<?
class Estudiante {
    public $nombre;
    public $nota;

    public function calificacion() {
        if ($this->nota >= 60) {
            return "Aprobado";
        } else {
            return "Reprobado";
        }
    }

    public function mostrar() {
        echo $this->nombre . ": " . $this->calificacion() . "<br>";
    }
}

$est01 = new Estudiante();
$est01->nombre = "Andres";
$est01->nota = "96";
$est01->mostrar();
