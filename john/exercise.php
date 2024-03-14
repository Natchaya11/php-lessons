// ####################
// EXERCISE 1
// ####################

<?php
    $a = 1; 
    $b = 2; 
    $c = $a + $b;

    echo $a; // Outputs : 
    echo $b; // Outputs : 
    echo $c; // Outputs : 
?>


// ####################
// EXERCISE 2
// ####################

<?php
    $a = 1578764; 
    $b = 22; 
    $b = $b; 
    $a = $b + 22;

    echo $a; // Outputs : 
    echo $b; // Outputs : 
?>

// ####################
// EXERCISE 3
// ####################

<?php
    $a = 11; 
    $b = 22; 
    $c = 33;
    $a = $b + $c;
    $b = $a + $a; 
    $a = $b + $c;
    $c = $a + $b; 

    echo $a; // Outputs : 
    echo $b; // Outputs : 
    echo $c; // Outputs : 
?>


// ####################
// EXERCISE 4
// ####################

<?php
    $a = "hello"; 
    $b = "goodbye"; 
    $c = "see you later";
    $d = "goodnight";

    $d = $a;
    $a = $b;
    $b = $c;
    $c = $d;

    echo $a; // Outputs : 
    echo $b; // Outputs : 
    echo $c; // Outputs : 
    echo $d; // Outputs : 
?>


// ####################
// EXERCISE 5 (optional)
// ####################

<?php
    $name = "Kiki";
    $lastname = "Koko";

    echo $name . $lastname; // Outputs : 
?>



// ####################
// EXERCISE 6 (optional)
// ####################

<?php
    $name = "Bob";
    $lastname = "Marley";

    echo "Hello everyone, my name is " . $name . " " . $lastname; // Outputs : 
?>




// ####################
// EXERCISE 7 (optional)
// ####################

<?php
    class Cat {
        public $name = "Garfield";
        public $breed = "Scottish";

        public function meow() {
            echo $this->name . " the " . $this->breed . " cat just meowed!";
        }
    }

    $myCat = new Cat();
    echo $myCat->name; // Outputs: 

    $myCat->meow(); // Outputs: 
?>