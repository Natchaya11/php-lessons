# คลาส PHP
คลาส PHP เป็นวิธีหนึ่งในการห่อหุ้มและจัดระเบียบโค้ดของคุณเข้าไว้ในกลุ่มที่มีเหตุผลโดยใช้แนวคิดของออบเจกต์ วิธีการนี้เป็นส่วนหนึ่งของสิ่งที่เรียกว่าการเขียนโปรแกรมแบบเชิงวัตถุ (OOP) ลองมาแยกวิเคราะห์แนวคิดเหล่านี้โดยใช้ตัวอย่างของคลาส `Animal` และนำไปขยายต่อไปยังสัตว์ที่เฉพาะเจาะจงเช่น `Cat`, `Human` และ `Dog`

### คลาสพื้นฐาน: Animal
คิดถึงคลาสเปรียบเสมือนบลูพริ้นท์สำหรับการสร้างออบเจกต์ คลาส `Animal` สามารถแทนคุณลักษณะและพฤติกรรมที่สัตว์ทั้งหมดมีร่วมกันได้

```php
class Animal {
    public $name;
    public $age;
}
```

- **Constructor**: เมธอดพิเศษที่เรียกขึ้นมาโดยอัตโนมัติเมื่อมีออบเจกต์ใหม่ของคลาสถูกสร้างขึ้นมา มักใช้เพื่อเริ่มต้นคุณสมบัติของคลาส ที่นี่ มันเริ่มต้นค่าสำหรับคุณสมบัติ `$name` และ `$age`  ของ `Animal`

- **เมธอด**: ฟังก์ชันที่กำหนดขึ้นภายในคลาสที่อธิบายพฤติกรรมของออบเจกต์ เมธอด `eat` เป็นตัวอย่างหนึ่ง

```php
class Animal {
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // เมธอด
    public function eat() {
        echo $this->name . " กำลังกินอาหาร\n";
    }
}
```

### การสืบทอดคลาส
คุณสามารถสร้างคลาสใหม่ๆ ตามแบบของคลาส `Animal` เพื่อแทนสัตว์ที่เฉพาะเจาะจงยิ่งขึ้น สามารถทำได้โดยใช้คำหลัก `extends` แต่ละคลาสใหม่นี้จะได้รับคุณสมบัติและเมธอดจากคลาส Animal

```php
class Cat extends Animal {
    public function purr() {
        echo $this->name . " กำลังผิวปาก\n";
    }
}

class Dog extends Animal {
    public function bark() {
        echo $this->name . " กำลังเห่า\n";
    }
}

class Human extends Animal {
    public function speak() {
        echo $this->name . " กำลังพูด\n";
    }
}
```

### ตัวแปรส่วนตัว
ตัวแปรส่วนตัวเป็นคุณสมบัติที่สามารถเข้าถึงได้ภายในคลาสที่กำหนดขึ้นเท่านั้น นี่คือวิธีการห่อหุ้มและป้องกันข้อมูล ลองเพิ่มตัวแปรส่วนตัว `$energyLevel` ให้กับคลาส `Animal`

```php
class Animal {
    public $name;
    public $age;
    private $energyLevel = 100; // ตัวแปรส่วนตัว

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    protected function changeEnergy($amount) {
        $this->energyLevel += $amount;
    }

    public function eat() {
        echo $this->name . " กำลังกินอาหาร\n";
        $this->changeEnergy(10); // เพิ่มพลังงานเมื่อกิน
    }
}
```

เมธอดส่วนตัว: เช่นเดียวกัน การเข้าถึงเมธอดก็สามารถถูกจำกัดแค่ในคลาสเท่านั้น เมธอด `changeEnergy` ถูกจำกัดการเข้าถึงเพื่อปรับระดับ `$energyLevel` ข้างในคลาส