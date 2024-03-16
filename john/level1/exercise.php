// ####################
// EXERCISE 1
// ####################

<?php
    $a = 1; 
    $b = 2; 
    $c = $a + $b;

    echo $a; // Outputs : 1
    echo $b; // Outputs : 2
    echo $c; // Outputs : 3
?>


// ####################
// EXERCISE 2
// ####################

<?php
    $a = 1578764; 
    $b = 22; 
    $b = $b; 
    $a = $b + 22;

    echo $a; // Outputs : 44
    echo $b; // Outputs : 22
?>

// ####################
// EXERCISE 3
// ####################

<?php
    $a = 11; 
    $b = 22; 
    $c = 33;
    $a = $b + $c; 55
    $b = $a + $a; 110
    $a = $b + $c; 143
    $c = $a + $b; 253

    echo $a; // Outputs : 55
    echo $b; // Outputs : 110
    echo $c; // Outputs : 77
?>


// ####################
// EXERCISE 4
// ####################

<?php
    $a = "hello"; 
    $b = "goodbye"; 
    $c = "see you later";
    $d = "goodnight";

    $d = $a; hello
    $a = $b; goodbye
    $b = $c; see you later
    $c = $d; hello

    echo $a; // Outputs : goodbye 
    echo $b; // Outputs : see you later
    echo $c; // Outputs : hello
    echo $d; // Outputs : hello
?>


// ####################
// EXERCISE 5 (optional)
// ####################

<?php
    $name = "Kiki";
    $lastname = "Koko";

    echo $name . $lastname; // Outputs :kikikoko 
?>



// ####################
// EXERCISE 6 (optional)
// ####################

<?php
    $name = "Bob";
    $lastname = "Marley";

    echo "Hello everyone, my name is " . $name . " " . $lastname; // Outputs : hello everyone, my name is bob marley
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
    echo $myCat->name; // Outputs: the

    $myCat->meow(); // Outputs: the cat just meowed!
?>