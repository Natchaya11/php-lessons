# PHP Crash Course

PHP is a widely-used, open-source scripting language that is especially suited for web development and can be embedded into HTML. This crash course will introduce you to the basics of PHP, including variables, functions, and loops.

## Variables

In PHP, variables are used to store data, such as strings, integers, arrays, and more. All variables in PHP start with a dollar sign (`$`) followed by the name of the variable.

### Example:

```php
<?php
    $name = "John Doe"; // String
    $age = 30; // Integer
    $is_admin = true; // Boolean
    $variable1 = "coco"; 

?>
```

## Functions

Functions in PHP are blocks of code that perform a specific task and can be reused throughout your code. PHP has a vast library of built-in functions, and you can also create your own.

### Defining a Function
To define a function in PHP, use the `function` keyword followed by a name, parentheses, and curly braces.

### Example:

```php
<?php
    function sayHello() {
        echo "Hello, World!";
    }
?>
```


### Calling a Function
To call a function, simply use its name followed by parentheses.

### Example:

```php
<?php
    function sayHello() {
        echo "Hello, World!";
    }
    sayHello(); // Outputs: Hello, World!
?>
```

### Function with Parameters
Functions can take parameters to operate on.

### Example:

```php
<?php
    function greet($name) {
        echo "Hello, $name!";
    }
    greet("John"); // Outputs: Hello, John!
?>
```

### Returning Values from a Function
Functions can return values using the `return` statement.

### Example:

```php
<?php
    function add($num1, $num2) {
        return $num1 + $num2;
    }
    echo add(5, 3); // Outputs: 8
?>
```


## Loops

Loops are used in PHP to execute the same block of code a specified number of times or until a certain condition is met.

### The `for` Loop
The `for` loop is used when you know in advance how many times you want to execute a statement.

### Example:

```php
<?php
    for ($i = 1; $i <= 5; $i++) {
        echo "The number is: $i <br>";
    }
?>
```


### The `foreach` Loop
The `foreach` loop is used for iterating over arrays.

### Example:

```php
<?php
    $colors = array("red", "green", "blue");
    foreach ($colors as $color) {
        echo "$color <br>";
    }
?>
```

### The `while` Loop
The `while` loop executes a block of code as long as the specified condition is true.

### Example:

```php
<?php
    $i = 1;
    while ($i <= 5) {
    echo "The number is: $i <br>";
    $i++;
}
?>
```

### The `do...while` Loop
The `do...while` loop will execute the block of code once, before checking if the condition is true, then it will repeat the loop as long as the condition is true.

### Example:

```php

<?php
    $i = 1;
    do {
        echo "The number is: $i <br>";
        $i++;
    } while ($i <= 5);
?>

```