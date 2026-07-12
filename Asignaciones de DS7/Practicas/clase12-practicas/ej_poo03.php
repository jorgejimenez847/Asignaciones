<?

class Dog
{
    private $edad ;
    private $peso ;
    private $color ;

    public function ladrar() { echo 'WOOF! WOOF! <br>'; }

    public function __construct($edad, $peso, $color) {
        $this->edad = $edad;
        $this->peso = $peso;
        $this->color = $color;
    }
    public function getedad() { return $this->edad; }
    public function getpeso() { return $this->peso; }
    public function getcolor() { return $this->color; }
}
$lucky = new Dog(4, 32, 'gris');
echo 'Lucky es de color ' . $lucky->getcolor(). '<br>';
echo 'Lucky tiene ' . $lucky->getedad() . ' años<br>';
echo 'Lucky pesa ' . $lucky->getpeso() . ' libras<br>';
$lucky->ladrar();