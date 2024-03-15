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

- **Constructeur** : Une méthode spéciale qui est automatiquement appelée lorsqu'un nouvel objet de la classe est créé. Elle est couramment utilisée pour initialiser les propriétés de la classe. Ici, elle initialise les propriétés `$name` et `$age` de `Animal`.

- **Méthode** : Fonctions définies à l'intérieur d'une classe qui décrivent les comportements des objets. La méthode `eat` est un exemple.


```php
class Animal {
    public $name;
    public $age;

    // Constructeur
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Méthode
    public function eat() {
        echo $this->name . " est en train de manger.\n";
    }
}
```


### Extension de la Classe

Vous pouvez créer de nouvelles classes basées sur la classe `Animal` pour représenter des animaux plus spécifiques. Cela se fait en utilisant le mot-clé extends. Chacune de ces nouvelles classes hérite des propriétés et méthodes de la classe `Animal`.

```php
class Cat extends Animal {
    public function purr() {
        echo $this->name . " est en train de ronronner.\n";
    }
}

class Dog extends Animal {
    public function bark() {
        echo $this->name . " est en train d'aboyer.\n";
    }
}

class Human extends Animal {
    public function speak() {
        echo $this->name . " est en train de parler.\n";
    }
}
```


### Variables Privées

Les variables privées sont des propriétés qui ne peuvent être accédées que dans la classe qui les définit. C'est une façon d'encapsuler et de protéger les données. Introduisons une variable privée `$energyLevel` dans la classe `Animal`.

```php
class Animal {
    public $name;
    public $age;
    private $energyLevel = 100; // Variable privée

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    protected function changeEnergy($amount) {
        $this->energyLevel += $amount;
    }

    public function eat() {
        echo $this->name . " est en train de manger.\n";
        $this->changeEnergy(10); // Augmenter l'énergie en mangeant
    }
}
```

- **Méthode Privée** : De la même manière, les méthodes peuvent également être privées. La méthode `changeEnergy` est protégée (un niveau d'accès similaire au privé mais permettant l'accès par les classes héritées) afin d'ajuster le `$energyLevel` de manière interne.

