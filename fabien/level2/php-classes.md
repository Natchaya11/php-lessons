# Classes PHP

Les classes PHP sont une manière d'encapsuler et d'organiser votre code en groupements logiques en utilisant le concept d'objets. Cette approche fait partie de ce qu'on appelle la Programmation Orientée Objet (POO). Examinons ces concepts en utilisant l'exemple d'une classe Animal, puis étendons-la à des animaux spécifiques tels que le Chat, l'Humain et le Chien.

### Classe de Base : Animal

Pensez à une classe comme un plan pour créer des objets. La classe Animal peut représenter les caractéristiques et comportements généraux que tous les animaux partagent.

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

