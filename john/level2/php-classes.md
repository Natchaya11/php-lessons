# PHP Classes

PHP classes are a way to encapsulate and organize your code into logical groupings using the concept of objects. This approach is part of what's known as Object-Oriented Programming (OOP). Let's break down these concepts using the example of an Animal class and then extend it to specific animals like Cat, Human, and Dog.

### Base Class: Animal

Think of a class as a blueprint for creating objects. The Animal class can represent general characteristics and behaviors that all animals share.

```php
class Animal {
    public $name;
    public $age;  
}
```

- **Constructor**: A special method that is automatically called when a new object of the class is created. It's commonly used to initialize class properties. Here, it initializes the `$name` and `$age` properties of the `Animal`.

- **Method**: Functions defined inside a class that describe the behaviors of the objects. The `eat` method is an example.


```php
class Animal {
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method
    public function eat() {
        echo $this->name . " is eating.\n";
    }
}
```


### Extending the Class

You can create new classes based on the `Animal` class to represent more specific animals. This is done using the `extends` keyword. Each of these new classes inherits properties and methods from the `Animal` class.

```php
class Cat extends Animal {
    public function purr() {
        echo $this->name . " is purring.\n";
    }
}

class Dog extends Animal {
    public function bark() {
        echo $this->name . " is barking.\n";
    }
}

class Human extends Animal {
    public function speak() {
        echo $this->name . " is speaking.\n";
    }
}
```


### Private Variables

Private variables are properties that can only be accessed within the class that defines them. This is a way to encapsulate and protect the data. Let's introduce a private variable `$energyLevel` to the `Animal` class.

```php
class Animal {
    public $name;
    public $age;
    private $energyLevel = 100; // Private variable

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    protected function changeEnergy($amount) {
        $this->energyLevel += $amount;
    }

    public function eat() {
        echo $this->name . " is eating.\n";
        $this->changeEnergy(10); // Increase energy when eating
    }
}
```

- **Private Method**: Similarly, methods can also be private. The `changeEnergy` method is made protected (a level of access similar to private but allows access from inherited classes) to adjust the `$energyLevel` internally.

