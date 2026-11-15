
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 22 | PHP.LAB</title>

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
    <span class="current-page">Practical 22</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 04 · PRACTICAL 22</span>
        <h1>Classes, Constructors and Destructors</h1>
        <p>Define classes, create objects and access public and private members using PHP.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            Object-Oriented Programming (OOP) allows us to organize
            code using classes and objects. A constructor initializes
            an object, while a destructor is called when an object
            is destroyed. Access modifiers control the visibility
            of class members.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Define a class with a constructor and destructor.</li>
            <li>Create an object of a class.</li>
            <li>Access public members of a class.</li>
            <li>Define private members of a class.</li>
            <li>Access private members using public methods.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Constructor and Destructor</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

class Student {

    public $name;
    public $course;

    // Constructor
    function __construct($name, $course) {

        $this-&gt;name = $name;
        $this-&gt;course = $course;

        echo "Constructor Called&lt;br&gt;";

    }

    // Public method
    function displayDetails() {

        echo "Student Name: " . $this-&gt;name . "&lt;br&gt;";
        echo "Course: " . $this-&gt;course . "&lt;br&gt;";

    }

    // Destructor
    function __destruct() {

        echo "Destructor Called";

    }

}

// Creating an object
$student1 = new Student("Rahul", "Computer Engineering");

// Accessing public members
echo "Student Details&lt;br&gt;";

$student1-&gt;displayDetails();

?&gt;</code></pre>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Accessing Private Members</h2>
            </div>
            <button class="copy-code-btn" id="copyPrivateCodeBtn">Copy Code</button>
        </div>

<pre><code id="privateSourceCode">&lt;?php

class BankAccount {

    // Private members
    private $accountHolder;
    private $balance;

    // Public method to set private members
    public function setDetails($name, $amount) {

        $this-&gt;accountHolder = $name;
        $this-&gt;balance = $amount;

    }

    // Public method to access private members
    public function displayDetails() {

        echo "Account Holder: " . $this-&gt;accountHolder . "&lt;br&gt;";
        echo "Account Balance: " . $this-&gt;balance;

    }

}

// Creating an object
$account1 = new BankAccount();

// Setting private member values
$account1-&gt;setDetails("Rahul", 25000);

// Accessing private members through public method
$account1-&gt;displayDetails();

?&gt;</code></pre>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – Constructor and Destructor</span>
            </div>
            <div class="output-content">
                <p>Constructor Called</p>
                <h3>Student Details</h3>
                <p>Student Name: Rahul</p>
                <p>Course: Computer Engineering</p>
                <p>Destructor Called</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – Private Members</span>
            </div>
            <div class="output-content">
                <h3>Bank Account Details</h3>
                <p>Account Holder: Rahul</p>
                <p>Account Balance: 25000</p>
            </div>
        </div>
    </section>

    <!-- PROGRAM EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Class</h3>
                <p>
                    A class is a blueprint used to create objects.
                    It contains properties and methods.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Object</h3>
                <p>
                    An object is an instance of a class.
                    We create an object using the new keyword.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Constructor</h3>
                <p>
                    The __construct() method is automatically called
                    when an object is created. It initializes
                    the object's properties.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Destructor</h3>
                <p>
                    The __destruct() method is automatically called
                    when an object is destroyed or when script
                    execution ends.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Public Members</h3>
                <p>
                    Public properties and methods can be accessed
                    from outside the class using an object.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. Private Members</h3>
                <p>
                    Private properties and methods can only be
                    accessed from inside the class in which
                    they are declared.
                </p>
            </div>

            <div class="explanation-item">
                <h3>7. this Keyword</h3>
                <p>
                    The $this keyword refers to the current object.
                    It is used to access properties and methods
                    inside the class.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Notes</h2>
        <ul>
            <li>Use the class keyword to define a class.</li>
            <li>Use the new keyword to create an object.</li>
            <li>__construct() is the constructor method.</li>
            <li>__destruct() is the destructor method.</li>
            <li>Private members cannot be accessed directly from outside the class.</li>
            <li>Public methods can provide controlled access to private members.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const privateCopyBtn = document.getElementById("copyPrivateCodeBtn");

if (privateCopyBtn) {
    privateCopyBtn.addEventListener("click", async () => {
        const code = document.getElementById("privateSourceCode").textContent;

        try {
            await navigator.clipboard.writeText(code);
            privateCopyBtn.textContent = "Copied!";

            setTimeout(() => {
                privateCopyBtn.textContent = "Copy Code";
            }, 2000);
        } catch (error) {
            privateCopyBtn.textContent = "Copy failed";
        }
    });
}
</script>

</body>
</html>
