// ####################
// EXERCICE 1
// ####################

<?php
    $a = 1; 
    $b = 2; 
    $c = $a + $b;

    echo $a; // Affichera : 
    echo $b; // Affichera : 
    echo $c; // Affichera : 
?>


// ####################
// EXERCICE 2
// ####################

<?php
    $a = 1578764; 
    $b = 22; 
    $b = $b; 
    $a = $b + 22;

    echo $a; // Affichera : 
    echo $b; // Affichera : 
?>

// ####################
// EXERCICE 3
// ####################

<?php
    $a = 11; 
    $b = 22; 
    $c = 33;
    $a = $b + $c;
    $b = $a + $a; 
    $a = $b + $c;
    $c = $a + $b; 

    echo $a; // Affichera : 
    echo $b; // Affichera : 
    echo $c; // Affichera : 
?>


// ####################
// EXERCICE 4
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

    echo $a; // Affichera : 
    echo $b; // Affichera : 
    echo $c; // Affichera : 
    echo $d; // Affichera : 
?>


// ####################
// EXERCICE 5 (optionnel)
// ####################

<?php
    $name = "Kiki";
    $lastname = "Koko";

    echo $name . $lastname; // Affichera : 
?>



// ####################
// EXERCICE 6 (optionnel)
// ####################

<?php
    $name = "Bob";
    $lastname = "Marley";

    echo "Hello everyone, my name is " . $name . " " . $lastname; // Affichera : 
?>




// ####################
// EXERCICE 7 (optionnel)
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
    echo $myCat->name; // Affichera: 

    $myCat->meow(); // Affichera: 
?>