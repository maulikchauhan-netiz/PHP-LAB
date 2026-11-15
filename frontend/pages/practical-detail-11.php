
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 11 | PHP.LAB</title>

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
    <span class="current-page">Practical 11</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 02 · PRACTICAL 11</span>
        <h1>String, Math and Array Functions</h1>
        <p>Explore different built-in PHP functions for handling strings, mathematical calculations and arrays.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>
        <p>
            PHP provides many built-in functions that make it
            easier to perform common operations. String
            functions manipulate text, math functions perform
            calculations, and array functions manage collections
            of values.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Demonstrate different string functions.</li>
            <li>Perform calculations using math functions.</li>
            <li>Use built-in functions to manage and manipulate arrays.</li>
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


// ======================================
// 1. STRING FUNCTIONS
// ======================================

echo "&lt;h2>STRING FUNCTIONS&lt;/h2>";


// chr()

echo "&lt;b>chr(): &lt;/b>" . chr(65) . "&lt;br>";


// ord()

echo "&lt;b>ord(): &lt;/b>" . ord("A") . "&lt;br>";


// strlen()

echo "&lt;b>strlen(): &lt;/b>" . strlen("PHP") . "&lt;br>";


// trim()

$text = " PHP Programming ";

echo "&lt;b>trim(): &lt;/b>" . trim($text) . "&lt;br>";


// ltrim()

echo "&lt;b>ltrim(): &lt;/b>" . ltrim($text) . "&lt;br>";


// rtrim()

echo "&lt;b>rtrim(): &lt;/b>" . rtrim($text) . "&lt;br>";


// join()

$words = array("PHP", "HTML", "CSS");

echo "&lt;b>join(): &lt;/b>" . join(" - ", $words) . "&lt;br>";


// substr()

echo "&lt;b>substr(): &lt;/b>" . substr("PHP Programming", 4) . "&lt;br>";


// str_replace()

echo "&lt;b>str_replace(): &lt;/b>";
echo str_replace("PHP", "Web", "PHP Programming") . "&lt;br>";


// str_split()

echo "&lt;b>str_split(): &lt;/b>";

echo "&lt;pre>";
print_r(str_split("PHP"));
echo "&lt;/pre>";


// str_word_count()

echo "&lt;b>str_word_count(): &lt;/b>";
echo str_word_count("Learn PHP Programming") . "&lt;br>";


// strcmp()

echo "&lt;b>strcmp(): &lt;/b>";
echo strcmp("PHP", "PHP") . "&lt;br>";


// strpos()

echo "&lt;b>strpos(): &lt;/b>";
echo strpos("PHP Programming", "Programming") . "&lt;br>";


// strrev()

echo "&lt;b>strrev(): &lt;/b>";
echo strrev("PHP") . "&lt;br>";


// strtolower()

echo "&lt;b>strtolower(): &lt;/b>";
echo strtolower("WELCOME TO PHP") . "&lt;br>";


// strtoupper()

echo "&lt;b>strtoupper(): &lt;/b>";
echo strtoupper("welcome to php") . "&lt;br>";


// str_shuffle()

echo "&lt;b>str_shuffle(): &lt;/b>";
echo str_shuffle("HELLO") . "&lt;br>";



// ======================================
// 2. MATH FUNCTIONS
// ======================================

echo "&lt;h2>MATH FUNCTIONS&lt;/h2>";


// abs()

echo "&lt;b>abs(): &lt;/b>" . abs(-15) . "&lt;br>";


// ceil()

echo "&lt;b>ceil(): &lt;/b>" . ceil(4.3) . "&lt;br>";


// floor()

echo "&lt;b>floor(): &lt;/b>" . floor(4.8) . "&lt;br>";


// round()

echo "&lt;b>round(): &lt;/b>" . round(4.6) . "&lt;br>";


// rand()

echo "&lt;b>rand(): &lt;/b>" . rand(1, 10) . "&lt;br>";


// min()

echo "&lt;b>min(): &lt;/b>" . min(10, 20, 5, 30) . "&lt;br>";


// max()

echo "&lt;b>max(): &lt;/b>" . max(10, 20, 5, 30) . "&lt;br>";


// pi()

echo "&lt;b>pi(): &lt;/b>" . round(pi(), 2) . "&lt;br>";


// pow()

echo "&lt;b>pow(): &lt;/b>" . pow(2, 3) . "&lt;br>";


// sqrt()

echo "&lt;b>sqrt(): &lt;/b>" . sqrt(25) . "&lt;br>";


// exp()

echo "&lt;b>exp(): &lt;/b>" . round(exp(2), 3) . "&lt;br>";


// log()

echo "&lt;b>log(): &lt;/b>" . round(log(2), 3) . "&lt;br>";


// decbin()

echo "&lt;b>decbin(): &lt;/b>" . decbin(10) . "&lt;br>";


// decoct()

echo "&lt;b>decoct(): &lt;/b>" . decoct(10) . "&lt;br>";


// dechex()

echo "&lt;b>dechex(): &lt;/b>" . dechex(10) . "&lt;br>";


// sin()

echo "&lt;b>sin(): &lt;/b>" . sin(0) . "&lt;br>";


// cos()

echo "&lt;b>cos(): &lt;/b>" . cos(0) . "&lt;br>";


// tan()

echo "&lt;b>tan(): &lt;/b>" . tan(0) . "&lt;br>";



// ======================================
// 3. ARRAY FUNCTIONS
// ======================================

echo "&lt;h2>ARRAY FUNCTIONS&lt;/h2>";


// count()

$numbers = array(10, 20, 30, 40);

echo "&lt;b>count(): &lt;/b>" . count($numbers) . "&lt;br>";


// list()

$student = array("Rahul", 20, "Diploma");

list($name, $age, $course) = $student;

echo "&lt;b>list(): &lt;/b>";
echo $name . " - " . $age . " - " . $course . "&lt;br>";


// in_array()

$colors = array("Red", "Blue", "Green");

echo "&lt;b>in_array(): &lt;/b>";

if (in_array("Blue", $colors)) {

    echo "Value Found&lt;br>";

} else {

    echo "Value Not Found&lt;br>";

}


// current()

reset($colors);

echo "&lt;b>current(): &lt;/b>" . current($colors) . "&lt;br>";


// next()

echo "&lt;b>next(): &lt;/b>" . next($colors) . "&lt;br>";


// prev()

next($colors);

echo "&lt;b>prev(): &lt;/b>" . prev($colors) . "&lt;br>";


// end()

echo "&lt;b>end(): &lt;/b>" . end($colors) . "&lt;br>";


// each()

echo "&lt;b>each(): &lt;/b>";

if (function_exists("each")) {

    reset($colors);

    while (($item = each($colors)) !== false) {

        echo $item["key"] . " : " . $item["value"] . "&lt;br>";

    }

} else {

    echo "each() is unavailable in PHP 8. Using foreach instead.&lt;br>";

    foreach ($colors as $key => $value) {

        echo $key . " : " . $value . "&lt;br>";

    }

}


// sort()

$marks = array(40, 10, 30, 20);

sort($marks);

echo "&lt;b>sort(): &lt;/b>";

echo "&lt;pre>";
print_r($marks);
echo "&lt;/pre>";


// array_merge()

$array1 = array(10, 20);

$array2 = array(30, 40);

$result = array_merge($array1, $array2);

echo "&lt;b>array_merge(): &lt;/b>";

echo "&lt;pre>";
print_r($result);
echo "&lt;/pre>";


// array_reverse()

$values = array(10, 20, 30, 40);

$reversed = array_reverse($values);

echo "&lt;b>array_reverse(): &lt;/b>";

echo "&lt;pre>";
print_r($reversed);
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

                <h3>String Functions</h3>
                chr(): A<br>
                ord(): 65<br>
                strlen(): 3<br>
                trim(): PHP Programming<br>
                ltrim(): PHP Programming <br>
                rtrim():  PHP Programming<br>
                join(): PHP - HTML - CSS<br>
                substr(): Programming<br>
                str_replace(): Web Programming<br>
                str_split(): Array of characters P, H, P<br>
                str_word_count(): 3<br>
                strcmp(): 0<br>
                strpos(): 4<br>
                strrev(): PHP reversed<br>
                strtolower(): welcome to php<br>
                strtoupper(): WELCOME TO PHP<br>
                str_shuffle(): Random order of HELLO

                <h3>Math Functions</h3>
                abs(): 15<br>
                ceil(): 5<br>
                floor(): 4<br>
                round(): 5<br>
                rand(): Random number between 1 and 10<br>
                min(): 5<br>
                max(): 30<br>
                pi(): 3.14<br>
                pow(): 8<br>
                sqrt(): 5<br>
                exp(): 7.389<br>
                log(): 0.693<br>
                decbin(): 1010<br>
                decoct(): 12<br>
                dechex(): a<br>
                sin(): 0<br>
                cos(): 1<br>
                tan(): 0

                <h3>Array Functions</h3>
                count(): 4<br>
                list(): Rahul - 20 - Diploma<br>
                in_array(): Value Found<br>
                current(): Red<br>
                next(): Blue<br>
                prev(): Blue<br>
                end(): Green<br>
                each(): Uses foreach fallback on PHP 8<br>
                sort(): 10, 20, 30, 40<br>
                array_merge(): 10, 20, 30, 40<br>
                array_reverse(): 40, 30, 20, 10

            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>
        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. String Functions</h3>
                <p>
                    String functions perform operations on text.
                    They can find string length, remove spaces,
                    replace text, split strings, compare strings,
                    search for characters and change letter cases.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Math Functions</h3>
                <p>
                    Math functions perform mathematical
                    calculations. They include rounding,
                    absolute value, minimum and maximum,
                    powers, square roots, logarithms and
                    number-system conversions.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Array Functions</h3>
                <p>
                    Array functions help count elements,
                    assign values to variables, search for
                    values, move through array elements,
                    sort arrays, merge arrays and reverse
                    their order.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Array Pointer Functions</h3>
                <p>
                    current() returns the current element,
                    next() moves the pointer forward,
                    prev() moves it backward, and end()
                    moves it to the last element.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Random Functions</h3>
                <p>
                    rand() generates a random integer within
                    the specified range. str_shuffle() changes
                    the order of characters in a string.
                    Their results can vary each time the page runs.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Note</h2>
        <p>
            The each() function was removed in PHP 8. This
            program checks whether it is available before
            using it. On PHP 8 and later, it demonstrates
            the equivalent iteration using foreach.
            The function name strpos() is used instead of
            the misspelling strops() in the lab manual.
        </p>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
