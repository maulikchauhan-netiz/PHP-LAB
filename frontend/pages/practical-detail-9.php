
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 09 | PHP.LAB</title>

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
    <span class="current-page">Practical 09</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 02 · PRACTICAL 09</span>
        <h1>Array Equality and Union</h1>
        <p>Compare two arrays and combine their elements using the array union operator.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>
        <p>
            PHP provides array comparison operators to check
            whether two arrays contain the same key-value pairs.
            The union operator (+) combines arrays while
            preserving keys.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create two arrays and compare them for equality.</li>
            <li>Use the equality operator (==).</li>
            <li>Use the identity operator (===) to compare arrays.</li>
            <li>Take the union of two arrays using the + operator.</li>
            <li>Display the resultant array using print_r().</li>
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

// 1. Check Whether Two Arrays Are Equal

$array1 = array(
    "a" => 1,
    "b" => 2,
    "c" => 3
);

$array2 = array(
    "a" => 1,
    "b" => 2,
    "c" => 3
);

echo "&lt;h3>Checking Array Equality&lt;/h3>";

if ($array1 == $array2) {

    echo "Both Arrays Are Equal";

} else {

    echo "Both Arrays Are Not Equal";

}


// 2. Check Whether Two Arrays Are Identical

$array3 = array(
    "a" => 1,
    "b" => 2,
    "c" => 3
);

$array4 = array(
    "b" => 2,
    "c" => 3,
    "a" => 1
);

echo "&lt;h3>Checking Array Identity&lt;/h3>";

if ($array3 === $array4) {

    echo "Both Arrays Are Identical";

} else {

    echo "Both Arrays Are Not Identical";

}


// 3. Take Union of Two Arrays

$first = array(
    1,
    2,
    3,
    "a" => 4
);

$second = array(
    4,
    5,
    "b" => 6
);

$result = $first + $second;

echo "&lt;h3>Union of Two Arrays&lt;/h3>";

echo "&lt;pre>";
print_r($result);
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

                <h3>Checking Array Equality</h3>
                Both Arrays Are Equal

                <h3>Checking Array Identity</h3>
                Both Arrays Are Not Identical

                <h3>Union of Two Arrays</h3>
                <pre>Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [a] => 4
    [b] => 6
)</pre>

            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>
        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Creating Two Arrays</h3>
                <p>
                    Two associative arrays are created with
                    the same keys and values for comparison.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Equality Operator (==)</h3>
                <p>
                    The == operator checks whether both arrays
                    contain the same key-value pairs. Their
                    order does not have to be identical.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Identity Operator (===)</h3>
                <p>
                    The === operator checks whether both arrays
                    have the same key-value pairs in the same
                    order and with the same data types.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Array Union Operator (+)</h3>
                <p>
                    The + operator combines the arrays.
                    If a key exists in both arrays, the value
                    from the first array is retained.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Displaying the Result</h3>
                <p>
                    The print_r() function displays the
                    resultant array with its keys and values.
                </p>
            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
