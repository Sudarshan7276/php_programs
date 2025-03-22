<?php
// Base class: Shape
class Shape {
// A method to be overridden by subclasses
public function getArea() {
return 0;
}
}

// Subclass: Triangle
class Triangle extends Shape {
    private $base;
    private $height;

    // Constructor to set base and height
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    // Override getArea() method for Triangle
    public function getArea() {
        return 0.5 * $this->base * $this->height;
    }
}

// Subclass: Square
class Square extends Shape {
    private $side;

    // Constructor to set side length
    public function __construct($side) {
        $this->side = $side;
    }

    // Override getArea() method for Square
    public function getArea() {
        return $this->side * $this->side;
    }
}

// Subclass: Rectangle
class Rectangle extends Shape {
    private $length;
    private $width;

    // Constructor to set length and width
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Override getArea() method for Rectangle
    public function getArea() {
        return $this->length * $this->width;
    }
}

// Subclass: Circle
class Circle extends Shape {
    private $radius;

    // Constructor to set radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Override getArea() method for Circle
    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shapeType = $_POST['shape'];
    $area = 0;
    $message = "";

    switch ($shapeType) {
        case 'triangle':
            
            $triangle = new Triangle(3, 4);
            $area = $triangle->getArea();
            $message = "Area of Triangle: ";
            break;

        case 'square':
            
            $square = new Square(4);
            $area = $square->getArea();
            $message = "Area of Square: ";
            break;

        case 'rectangle':
            
            $rectangle = new Rectangle(5, 6);
            $area = $rectangle->getArea();
            $message = "Area of Rectangle: ";
            break;

        case 'circle':
           
            $circle = new Circle(3);
            $area = $circle->getArea();
            $message = "Area of Circle: ";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape Area Calculator</title>
</head>
<body>
    <h1>Calculate Area of Selected Shape</h1>
    <form method="POST" action="">
        <label>Select Shape:</label><br>
        <input type="radio" name="shape" value="triangle" id="triangle"> Triangle<br>
        <input type="radio" name="shape" value="square" id="square"> Square<br>
        <input type="radio" name="shape" value="rectangle" id="rectangle"> Rectangle<br>
        <input type="radio" name="shape" value="circle" id="circle"> Circle<br><br>

            <input type="submit" value="Calculate Area"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo $message . $area;
    }
    ?>

    
</body>
</html>

