<?php

// Make a Vector2D class with x, y in the constructor
class Vector2D {
    public $x;
    public $y;
}

?>

<?php

class Vector3D extends Vector2D {
    public $z;
}

// Create a Vector3D class that extends the Vector2D class and adds the z property

?>

<?php

class myNumber {
    public $a;

    public function add($anotherNumber) {
        $this->a = $this->a + $anotherNumber;
    }
}   
// Create the add method
$numberA = new myNumber();
$numberA->a = 15;
$numberA->add(2);
echo $numberA->a; // 17

function add($a, $b) {
    return $a + $b;
}

$myNumber = add(10, 20)

 
?>