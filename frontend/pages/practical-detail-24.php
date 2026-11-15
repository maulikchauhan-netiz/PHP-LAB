
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 24 | PHP.LAB</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/details.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="../js/main.js" defer></script>
</head>
<body>

<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="breadcrumb">
    <a href="index.php">Home</a>
    <span>/</span>
    <a href="practicals.php">Practicals</a>
    <span>/</span>
    <a href="practicals.php?module=4">Previous</a>
    <span>/</span>
    <span class="current-page">Practical 24</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 04 · PRACTICAL 24</span>
        <h1>Method Overriding, Interface and Abstract Class</h1>
        <p>Demonstrate method overriding, interfaces and abstract classes using PHP.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            PHP supports important Object-Oriented Programming
            concepts such as method overriding, interfaces and
            abstract classes. These concepts help create reusable,
            organized and flexible programs.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Demonstrate method overriding in PHP.</li>
            <li>Create and implement an interface.</li>
            <li>Create an abstract class.</li>
            <li>Define and implement abstract methods.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Method Overriding</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

// Parent Class
class Animal {

    public function sound() {

        echo "Animal makes a sound.&lt;br&gt;";

    }

}

// Child Class
class Dog extends Animal {

    // Overriding Parent Method
    public function sound() {

        echo "Dog barks.";

    }

}

// Creating Object
$dog = new Dog();

// Calling Overridden Method
$dog-&gt;sound();

?&gt;</code></pre>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Interface in PHP</h2>
            </div>
            <button class="copy-code-btn" id="copyInterfaceCodeBtn">Copy Code</button>
        </div>

<pre><code id="interfaceSourceCode">&lt;?php

// Creating Interface
interface Shape {

    public function area();

}

// Implementing Interface
class Rectangle implements Shape {

    public $length;
    public $width;

    public function __construct($length, $width) {

        $this-&gt;length = $length;
        $this-&gt;width = $width;

    }

    public function area() {

        return $this-&gt;length * $this-&gt;width;

    }

}

// Creating Object
$rectangle = new Rectangle(10, 5);

echo "Area of Rectangle: " . $rectangle-&gt;area();

?&gt;</code></pre>
    </section>

    <!-- PROGRAM 03 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 03</span>
                <h2>Abstract Class in PHP</h2>
            </div>
            <button class="copy-code-btn" id="copyAbstractCodeBtn">Copy Code</button>
        </div>

<pre><code id="abstractSourceCode">&lt;?php

// Creating Abstract Class
abstract class Shape {

    // Abstract Method
    abstract public function area();

    // Normal Method
    public function display() {

        echo "Calculating Shape Area:&lt;br&gt;";

    }

}

// Child Class
class Circle extends Shape {

    public $radius;

    public function __construct($radius) {

        $this-&gt;radius = $radius;

    }

    // Implementing Abstract Method
    public function area() {

        return 3.14 * $this-&gt;radius * $this-&gt;radius;

    }

}

// Creating Object
$circle = new Circle(5);

$circle-&gt;display();

echo "Area of Circle: " . $circle-&gt;area();

?&gt;</code></pre>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – Method Overriding</span>
            </div>
            <div class="output-content">
                <p>Dog barks.</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – Interface</span>
            </div>
            <div class="output-content">
                <p>Area of Rectangle: 50</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 03 – Abstract Class</span>
            </div>
            <div class="output-content">
                <p>Calculating Shape Area:</p>
                <p>Area of Circle: 78.5</p>
            </div>
        </div>
    </section>

    <!-- EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Method Overriding</h3>
                <p>
                    Method overriding occurs when a child class
                    defines a method with the same name as a
                    method in its parent class.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Interface</h3>
                <p>
                    An interface defines method requirements
                    that a class must implement.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. implements Keyword</h3>
                <p>
                    PHP uses the implements keyword when a class
                    implements an interface.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Abstract Class</h3>
                <p>
                    An abstract class cannot be instantiated
                    directly. It can contain abstract methods
                    and normal methods.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Abstract Method</h3>
                <p>
                    An abstract method is declared without a
                    method body. A concrete child class must
                    provide its implementation.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. extends Keyword</h3>
                <p>
                    A child class uses extends to inherit
                    properties and methods from a parent
                    or abstract class.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Notes</h2>
        <ul>
            <li>Method overriding is used to redefine an inherited method.</li>
            <li>Use interface to define a contract for classes.</li>
            <li>Use implements to implement an interface.</li>
            <li>Use abstract to declare an abstract class or method.</li>
            <li>Use extends to inherit an abstract class.</li>
            <li>An abstract class cannot be instantiated directly.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const copyButtons = [
    ["copyInterfaceCodeBtn", "interfaceSourceCode"],
    ["copyAbstractCodeBtn", "abstractSourceCode"]
];

copyButtons.forEach(([buttonId, codeId]) => {
    const button = document.getElementById(buttonId);

    if (button) {
        button.addEventListener("click", async () => {
            const code = document.getElementById(codeId).textContent;

            try {
                await navigator.clipboard.writeText(code);
                button.textContent = "Copied!";

                setTimeout(() => {
                    button.textContent = "Copy Code";
                }, 2000);
            } catch (error) {
                button.textContent = "Copy failed";
            }
        });
    }
});
</script>

</body>
</html>
