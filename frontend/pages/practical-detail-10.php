
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 10 | PHP.LAB</title>

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
    <a href="practicals.php?module=2">Previous</a>
    <span>/</span>
    <span class="current-page">Practical 10</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 02 · PRACTICAL 10</span>
        <h1>User-Defined Functions</h1>
        <p>Create PHP functions to perform addition using normal, default and variable-length arguments.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>
        <p>
            A user-defined function is a block of code created
            by the programmer to perform a specific task.
            Functions help reuse code and organize a program.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create a function to add two integer numbers.</li>
            <li>Demonstrate default arguments in a function.</li>
            <li>Demonstrate variable-length arguments.</li>
            <li>Create an addition() function that adds multiple numeric arguments.</li>
        </ul>
    </section>

    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Source Code</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

// 1. Function to Add Two Numbers

function addition($a, $b) {

    $sum = $a + $b;

    return $sum;

}

echo "&lt;h3>Addition of Two Numbers&lt;/h3>";

echo "Addition: " . addition(10, 20);


// 2. Function Using Default Arguments

function defaultAddition($a, $b = 5) {

    return $a + $b;

}

echo "&lt;h3>Default Arguments&lt;/h3>";

echo "Using Default Value: " . defaultAddition(2);

echo "&lt;br>";

echo "Using Passed Value: " . defaultAddition(8, 6);


// 3. Variable-Length Arguments

function displayArguments() {

    echo "&lt;h3>Variable-Length Arguments&lt;/h3>";

    echo "Total Arguments: " . func_num_args();

    $arguments = func_get_args();

    foreach ($arguments as $value) {

        echo "&lt;br>" . $value;

    }

}

displayArguments(2, 30.5, "Welcome");


// 4. Addition of Multiple Numeric Arguments

function addMultipleNumbers() {

    $sum = 0;

    $arguments = func_get_args();

    foreach ($arguments as $value) {

        $sum = $sum + $value;

    }

    return $sum;

}

echo "&lt;h3>Addition of Multiple Numbers&lt;/h3>";

echo "Sum of 2, 3, 4: " . addMultipleNumbers(2, 3, 4);

echo "&lt;br>";

echo "Sum of 2.5, 3.6, 5: " . addMultipleNumbers(2.5, 3.6, 5);

?&gt;</code></pre>
    </section>

    <section class="detail-output">
        <h2>Expected Output</h2>
        <div class="output-window">
            <div class="output-header">
                <span>Browser Output</span>
            </div>
            <div class="output-content">

                <h3>Addition of Two Numbers</h3>
                Addition: 30

                <h3>Default Arguments</h3>
                Using Default Value: 7<br>
                Using Passed Value: 14

                <h3>Variable-Length Arguments</h3>
                Total Arguments: 3<br>
                2<br>
                30.5<br>
                Welcome

                <h3>Addition of Multiple Numbers</h3>
                Sum of 2, 3, 4: 9<br>
                Sum of 2.5, 3.6, 5: 11.1

            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>
        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Function to Add Two Numbers</h3>
                <p>
                    The addition() function accepts two arguments,
                    adds them and returns the result using the
                    return statement.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Default Arguments</h3>
                <p>
                    The defaultAddition() function assigns 5 as
                    the default value of the second argument.
                    If a second value is passed while calling
                    the function, that value is used instead.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Variable-Length Arguments</h3>
                <p>
                    func_num_args() returns the total number
                    of arguments passed to the function.
                    func_get_args() returns those arguments
                    as an array.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Addition of Multiple Numbers</h3>
                <p>
                    The addMultipleNumbers() function collects
                    all arguments using func_get_args().
                    A foreach loop adds each numeric value
                    and returns the final sum.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Note</h2>
        <p>
            The multiple-argument addition example uses integer
            and decimal numbers. It is intended for numeric
            arguments; arbitrary text values cannot be added
            mathematically.
        </p>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
