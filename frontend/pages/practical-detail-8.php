
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 08 | PHP.LAB</title>

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
    <span class="current-page">Practical 08</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 02 · PRACTICAL 08</span>
        <h1>Multidimensional Arrays</h1>
        <p>Create numeric and associative multidimensional arrays and display their elements.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>
        <p>
            A multidimensional array is an array that contains
            one or more arrays. It is useful for storing
            table-like information in rows and columns.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create a numeric two-dimensional array.</li>
            <li>Display its elements using nested for loops.</li>
            <li>Create an associative two-dimensional array.</li>
            <li>Display its keys and values using nested foreach loops.</li>
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

// 1. Numeric Multidimensional Array

$data = array(
    array("Ram", "Rajkot", 111),
    array("Raj", "Surat", 222),
    array("Rima", "Puna", 333)
);

echo "&lt;h3>Numeric Multidimensional Array&lt;/h3>";

for ($i = 0; $i &lt; 3; $i++) {

    for ($j = 0; $j &lt; 3; $j++) {

        echo $data[$i][$j] . " ";

    }

    echo "&lt;br>";
}


// 2. Associative Multidimensional Array

$students = array(
    "First" => array(
        "Name" => "Ram",
        "City" => "Rajkot",
        "Contact" => 111
    ),

    "Second" => array(
        "Name" => "Raj",
        "City" => "Surat",
        "Contact" => 222
    ),

    "Third" => array(
        "Name" => "Rima",
        "City" => "Puna",
        "Contact" => 333
    )
);

echo "&lt;h3>Associative Multidimensional Array&lt;/h3>";

foreach ($students as $key1 => $student) {

    echo $key1 . " : ";

    foreach ($student as $key => $value) {

        echo "[" . $key . "] " . $value . " ";

    }

    echo "&lt;br>";

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

                <h3>Numeric Multidimensional Array</h3>
                Ram Rajkot 111<br>
                Raj Surat 222<br>
                Rima Puna 333<br>

                <h3>Associative Multidimensional Array</h3>
                First : [Name] Ram [City] Rajkot [Contact] 111<br>
                Second : [Name] Raj [City] Surat [Contact] 222<br>
                Third : [Name] Rima [City] Puna [Contact] 333<br>

            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>
        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Numeric Multidimensional Array</h3>
                <p>
                    The $data variable contains three inner arrays.
                    Each inner array stores a student's name,
                    city and contact number.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Nested for Loop</h3>
                <p>
                    The outer for loop accesses each row, while
                    the inner for loop accesses each element
                    within that row using two indexes.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Associative Multidimensional Array</h3>
                <p>
                    The $students variable contains named outer
                    keys and inner key-value pairs for each
                    student's information.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Nested foreach Loop</h3>
                <p>
                    The outer foreach loop accesses each student.
                    The inner foreach loop displays the keys and
                    values stored inside that student's array.
                </p>
            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
