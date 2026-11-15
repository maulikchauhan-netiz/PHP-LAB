
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 23 | PHP.LAB</title>

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
    <span class="current-page">Practical 23</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 04 · PRACTICAL 23</span>
        <h1>Single and Multilevel Inheritance</h1>
        <p>Implement single and multilevel inheritance using PHP classes.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            Inheritance is an important feature of Object-Oriented
            Programming. It allows one class to inherit properties
            and methods from another class. PHP uses the extends
            keyword to implement inheritance.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Understand inheritance in PHP.</li>
            <li>Create a parent class and a child class.</li>
            <li>Demonstrate single inheritance.</li>
            <li>Demonstrate multilevel inheritance.</li>
            <li>Access inherited methods using child class objects.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Single Inheritance</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

// Parent Class
class Animal {

    public function eat() {

        echo "Animal is eating.&lt;br&gt;";

    }

}

// Child Class
class Dog extends Animal {

    public function bark() {

        echo "Dog is barking.";

    }

}

// Creating Child Class Object
$dog = new Dog();

// Accessing Parent Class Method
$dog-&gt;eat();

// Accessing Child Class Method
$dog-&gt;bark();

?&gt;</code></pre>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Multilevel Inheritance</h2>
            </div>
            <button class="copy-code-btn" id="copyMultilevelCodeBtn">Copy Code</button>
        </div>

<pre><code id="multilevelSourceCode">&lt;?php

// Grandparent Class
class Vehicle {

    public function start() {

        echo "Vehicle is starting.&lt;br&gt;";

    }

}

// Parent Class
class Car extends Vehicle {

    public function drive() {

        echo "Car is moving.&lt;br&gt;";

    }

}

// Child Class
class SportsCar extends Car {

    public function turbo() {

        echo "Sports car has turbo power.";

    }

}

// Creating Child Class Object
$car = new SportsCar();

// Accessing Grandparent Class Method
$car-&gt;start();

// Accessing Parent Class Method
$car-&gt;drive();

// Accessing Child Class Method
$car-&gt;turbo();

?&gt;</code></pre>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – Single Inheritance</span>
            </div>
            <div class="output-content">
                <p>Animal is eating.</p>
                <p>Dog is barking.</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – Multilevel Inheritance</span>
            </div>
            <div class="output-content">
                <p>Vehicle is starting.</p>
                <p>Car is moving.</p>
                <p>Sports car has turbo power.</p>
            </div>
        </div>
    </section>

    <!-- EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Parent Class</h3>
                <p>
                    A parent class is the class whose properties
                    and methods are inherited by another class.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Child Class</h3>
                <p>
                    A child class inherits properties and methods
                    from its parent class.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. extends Keyword</h3>
                <p>
                    PHP uses the extends keyword to create
                    an inheritance relationship between classes.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Single Inheritance</h3>
                <p>
                    In single inheritance, one child class inherits
                    from one parent class. Here, Dog inherits from Animal.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Multilevel Inheritance</h3>
                <p>
                    In multilevel inheritance, a class inherits from
                    another child class. Here, SportsCar inherits
                    from Car, and Car inherits from Vehicle.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. Inherited Methods</h3>
                <p>
                    A child class object can access accessible
                    methods inherited from its parent classes.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Notes</h2>
        <ul>
            <li>Use extends to implement inheritance in PHP.</li>
            <li>Single inheritance involves one parent and one child class.</li>
            <li>Multilevel inheritance involves multiple levels of classes.</li>
            <li>A child class can use inherited public and protected methods.</li>
            <li>PHP does not support multiple inheritance through classes directly.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const copyMultilevelBtn = document.getElementById("copyMultilevelCodeBtn");

if (copyMultilevelBtn) {
    copyMultilevelBtn.addEventListener("click", async () => {
        const code = document.getElementById("multilevelSourceCode").textContent;

        try {
            await navigator.clipboard.writeText(code);
            copyMultilevelBtn.textContent = "Copied!";

            setTimeout(() => {
                copyMultilevelBtn.textContent = "Copy Code";
            }, 2000);
        } catch (error) {
            copyMultilevelBtn.textContent = "Copy failed";
        }
    });
}
</script>

</body>
</html>
