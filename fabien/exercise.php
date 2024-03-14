####################<br>
EXERCISE 1<br>
####################<br>

<?php
    $a = 1; 
    $b = 2; 
    $c = $a + $b;


    echo $a ."<br>"; 
    echo $b ."<br>"; 
    echo $c ."<br>"; 
?>


####################<br>
EXERCISE 2<br>
####################<br>

<?php
    $a = 1578764; 
    $b = 22; 
    $b = $b; 
    $a = $b + 22;


    echo $a ."<br>"; 
    echo $b ."<br>"; 
?>

####################<br>
EXERCISE 3<br>
####################<br>

<?php
    $a = 11; 
    $b = 22; 
    $c = 33;
    $a = $b + $c; // 55
    $b = $a + $a; // 110
    $a = $b + $c; // 143
    $c = $a + $b;  // 253

    echo $a ."<br>"; 
    echo $b ."<br>"; 
    echo $c ."<br>"; 
?>


####################<br>
EXERCISE 4<br>
####################<br>

<?php
    $a = "hello"; 
    $b = "goodbye"; 
    $c = "see you later";
    $d = "goodnight";

    $d = $a;
    $a = $b;
    $b = $c;
    $c = $d;


    echo $a ."<br>"; 
    echo $b ."<br>"; 
    echo $c ."<br>"; 
    echo $d ."<br>"; 
?>

####################<br>
EXERCISE 5 (optional)<br>
####################<br>

<?php
    $name = "Kiki";
    $lastname = "Koko";

    echo $name . $lastname ."<br>"; 
?>



####################<br>
EXERCISE 6 (optional)<br>
####################<br>

<?php
    $name = "Bob";
    $lastname = "Marley";

    echo "Hello everyone, my name is " . $name . " " . $lastname ."<br>";
?>




####################<br>
EXERCISE 7 (optional)<br>
####################<br>

<?php
    class Cat {
        public $name = "Garfield";
        public $breed = "Scottish";

        public function meow() {
            echo $this->name . " the " . $this->breed . " cat just meowed!" ."<br>"; 
        }
    }

    $myCat = new Cat();

    echo $myCat->name ."<br>"; 

    $myCat->meow(); 
?>