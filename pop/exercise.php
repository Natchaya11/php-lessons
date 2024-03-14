// ####################
// แบบฝึกหัด 1
// ####################

<?php
    $a = 1; 
    $b = 2; 
    $c = $a + $b; 

    echo $a; // แสดงผล : 1
    echo $b; // แสดงผล : 2
    echo $c; // แสดงผล : 3
?>


// ####################
// แบบฝึกหัด 2
// ####################

<?php
    $a = 1578764; 
    $b = 22; 
    $b = $b; 22
    $a = $b + 22; 

    echo $a; // แสดงผล : 44 
    echo $b; // แสดงผล : 22
?>

// ####################
// แบบฝึกหัด 3
// ####################

<?php
    $a = 11; 
    $b = 22; 
    $c = 33;
    $a = $b + $c; 
    $b = $a + $a;
    $a = $b + $c; 
    $c = $a + $b;

    echo $a; // แสดงผล : 55
    echo $b; // แสดงผล : 22
    echo $c; // แสดงผล : 77
?>


// ####################
// แบบฝึกหัด 4
// ####################

<?php
    $a = "สวัสดี"; 
    $b = "ลาก่อน"; 
    $c = "แล้วพบกันใหม่";
    $d = "ราตรีสวัสดิ์";

    $d = $a; สวัสดี
    $a = $b;ลาก่อน
    $b = $c; แล้วพบกันใหม่
    $c = $d; ราตรีสวัสดิ์

    echo $a; // แสดงผล : ลาก่อน
    echo $b; // แสดงผล : แล้วพบกันใหม่
    echo $c; // แสดงผล : ราตรีสวัสดิ์
    echo $d; // แสดงผล : สวัสดี
?>


// ####################
// แบบฝึกหัด 5 (ไม่บังคับ)
// ####################

<?php
    $name = "Kiki";
    $lastname = "Koko";

    echo $name . $lastname; // แสดงผล : KiKiKoko
?>



// ####################
// แบบฝึกหัด 6 (ไม่บังคับ)
// ####################

<?php
    $name = "Bob";
    $lastname = "Marley";

    echo "สวัสดีทุกคน, ชื่อของฉันคือ " . $name . " " . $lastname; // แสดงผล : "สวัสดีทุกคน.ชื่อของฉันคือ.Bob.Marlay"
?>




// ####################
// แบบฝึกหัด 7 (ไม่บังคับ)
// ####################

<?php
    class Cat {
        public $name = "Garfield";
        public $breed = "Scottish";

        public function meow() {
            echo $this->name . " แมวพันธุ์ " . $this->breed . " เพิ่งร้องเมี๊ยว!";
        }
    }

    $myCat = new Cat();
    echo $myCat->name; // แสดงผล: 

    $myCat->meow(); // แสดงผล: 
?>