<?php
abstract class Shape {
    abstract public function area();
}
class Circle extends Shape {
    private $r;

    public function __construct($r) {
        $this->r = $r;
    }
    public function area() {
        return 3.14 * $this->r * $this->r;
    }
}
class Rectangle extends Shape {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function area() {
        return $this->panjang * $this->lebar;
    }
}
$circle = new Circle(7);
$rectangle = new Rectangle(10, 5);

echo "Luas lingkaran: " . $circle->area() . "\n";
echo "Luas persegi panjang: " . $rectangle->area() . "\n";
?>