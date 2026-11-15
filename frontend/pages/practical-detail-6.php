
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 06 | PHP.LAB</title>

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
    <span class="current-page">Practical 06</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 02 · PRACTICAL 06</span>
        <h1>Numeric Arrays</h1>
        <p>Create numeric arrays and display their elements using different PHP methods.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>
        <p>
            A numeric array is an array in which each element is
            identified by a numeric index. By default, indexing
            starts from zero.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create a numeric array using the array() function.</li>
            <li>Display array elements using a for loop.</li>
            <li>Display array elements using a foreach loop.</li>
            <li>Display the complete array using print_r().</li>
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

// Create a Numeric Array

$subjects = array("PHP", "HTML", "CSS", "JavaScript", "MySQL");


// 1. Display Elements Using for Loop

echo "&lt;h3>Using For Loop&lt;/h3>";

for ($i = 0; $i &lt; count($subjects); $i++) {
    echo $subjects[$i] . "&lt;br>";
}


// 2. Display Elements Using foreach Loop

echo "&lt;h3>Using Foreach Loop&lt;/h3>";

foreach ($subjects as $subject) {
    echo $subject . "&lt;br>";
}


// 3. Display Complete Array Using print_r()

echo "&lt;h3>Using print_r() Function&lt;/h3>";

echo "&lt;pre>";
print_r($subjects);
echo "&lt;/pre>";

?&gt;</code></pre>
    </section>

    <section class="detail-output">
        <h2>Expected Output</h2>
        <div class="output-window">
            <div class="output-header">
                <span>Browser Output</span>
            </div>
            <div class="output-content">
                <h3>Using For Loop</h3>
                PHP<br>HTML<br>CSS<br>JavaScript<br>MySQL<br>

                <h3>Using Foreach Loop</h3>
                PHP<br>HTML<br>CSS<br>JavaScript<br>MySQL<br>

                <h3>Using print_r() Function</h3>
                <pre>Array
(
    [0] => PHP
    [1] => HTML
    [2] => CSS
    [3] => JavaScript
    [4] => MySQL
)</pre>
            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>
        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Creating a Numeric Array</h3>
                <p>
                    The array() function creates an array named
                    $subjects containing five subject names.
                    Each element receives a numeric index starting from zero.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Using for Loop</h3>
                <p>
                    The for loop starts from index 0 and continues
                    until the array's element count is reached.
                    Each element is displayed using its index.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Using foreach Loop</h3>
                <p>
                    The foreach loop automatically visits each
                    element of the array and stores its value in
                    the $subject variable.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Using print_r()</h3>
                <p>
                    The print_r() function displays the complete
                    array in a readable format, including its
                    numeric indexes and values.
                </p>
            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
