
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 07 | PHP.LAB</title>

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
    <span class="current-page">Practical 07</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 02 · PRACTICAL 07</span>
        <h1>Associative Arrays</h1>
        <p>Create associative arrays and display their elements using keys and values.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>
        <p>
            An associative array stores values using named keys
            instead of only numeric indexes. Each element is
            represented as a key-value pair.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create an associative array using key-value pairs.</li>
            <li>Display elements using a foreach loop.</li>
            <li>Display the array using print_r().</li>
            <li>Display both keys and their corresponding values.</li>
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

// Create an Associative Array

$student = array(
    "name" => "Rahul",
    "age" => 20,
    "course" => "Computer Engineering",
    "city" => "Rajkot"
);


// 1. Display Elements Using foreach Loop

echo "&lt;h3>Using Foreach Loop&lt;/h3>";

foreach ($student as $value) {
    echo $value . "&lt;br>";
}


// 2. Display Array Using print_r()

echo "&lt;h3>Using print_r() Function&lt;/h3>";

echo "&lt;pre>";
print_r($student);
echo "&lt;/pre>";


// 3. Display Elements With Keys

echo "&lt;h3>Displaying Keys and Values&lt;/h3>";

foreach ($student as $key => $value) {
    echo $key . " : " . $value . "&lt;br>";
}

?&gt;</code></pre>
    </section>

    <section class="detail-output">
        <h2>Expected Output</h2>
        <div class="output-window">
            <div class="output-header">
                <span>Browser Output</span>
            </div>
            <div class="output-content">

                <h3>Using Foreach Loop</h3>
                Rahul<br>
                20<br>
                Computer Engineering<br>
                Rajkot<br>

                <h3>Using print_r() Function</h3>
                <pre>Array
(
    [name] => Rahul
    [age] => 20
    [course] => Computer Engineering
    [city] => Rajkot
)</pre>

                <h3>Displaying Keys and Values</h3>
                name : Rahul<br>
                age : 20<br>
                course : Computer Engineering<br>
                city : Rajkot<br>

            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>
        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Creating an Associative Array</h3>
                <p>
                    The $student array stores student information
                    using keys such as name, age, course and city.
                    The arrow operator (=>) connects each key to its value.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Using foreach Loop</h3>
                <p>
                    The foreach loop visits each array element
                    and displays its value one by one.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Using print_r()</h3>
                <p>
                    The print_r() function displays the complete
                    associative array with its keys and values.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Displaying Keys and Values</h3>
                <p>
                    The foreach loop uses $key => $value to
                    access both the key and its corresponding
                    value during each iteration.
                </p>
            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
