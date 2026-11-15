
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 03 | PHP.LAB</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/details.css">

    <script src="../js/main.js" defer></script>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
</head>

<body>

    <?php require_once __DIR__ . '/../components/navbar.php'; ?>

    <main class="practical-detail-page">

        <!-- BREADCRUMB -->
        <div class="detail-breadcrumb">
            <a href="index.php">Home</a>
            <span>/</span>
            <a href="practicals.php">Practicals</a>
            <span>/</span>
            <a href="practicals.php?module=1">Previous</a>
            <span>/</span>
            <span class="current-page">Practical 03</span>
        </div>

        <!-- PRACTICAL HEADER -->
        <section class="detail-header">

            <div class="detail-label">
                <span class="detail-module">MODULE 01</span>
                <span class="detail-number">PRACTICAL 03</span>
            </div>

            <h1>Global, Static and Constant Variables</h1>

            <p>
                Learn how to use global variables, the $GLOBALS array,
                static variables and constants in PHP. Calculate the
                area of a circle using a constant value of PI.
            </p>

        </section>

        <!-- OVERVIEW -->
        <section class="detail-overview">

            <div class="overview-heading">
                <span class="overview-label">OVERVIEW</span>
                <h2>About This Practical</h2>
            </div>

            <div class="overview-content">

                <p>
                    In this practical, you will demonstrate different
                    types of PHP variables and understand how their
                    scope and values work. You will also use a constant
                    to calculate the area of a circle.
                </p>

                <h3>Learning Objectives</h3>

                <ul>
                    <li>Understand global variables in PHP.</li>
                    <li>Access global variables using the $GLOBALS array.</li>
                    <li>Understand the behaviour of static variables.</li>
                    <li>Declare and use constant variables.</li>
                    <li>Calculate the area of a circle using PI = 3.14.</li>
                </ul>

            </div>

        </section>

        <!-- SOURCE CODE -->
        <section class="detail-code">

            <div class="code-heading">

                <div>
                    <span class="overview-label">PRACTICAL IMPLEMENTATION</span>
                    <h2>Source Code</h2>
                    <p>
                        Program to demonstrate global, static and
                        constant variables in PHP.
                    </p>
                </div>

                <button class="copy-code-btn" id="copyCodeBtn">
                    Copy Code
                </button>

            </div>

            <div class="code-window">

                <div class="code-window-top">
                    <div class="code-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <span>practical03.php</span>
                </div>

                <pre><code id="phpSourceCode">&lt;?php

// 1. Global Variable
$siteName = "PHP.LAB";

function displayGlobalVariable() {
    global $siteName;
    echo "Global Variable: " . $siteName . "&lt;br&gt;";
}

displayGlobalVariable();


// 2. Using $GLOBALS Array
function displayUsingGLOBALS() {
    echo "$GLOBALS Array: " . $GLOBALS['siteName'] . "&lt;br&gt;";
}

displayUsingGLOBALS();


// 3. Static Variable
function countCalls() {
    static $count = 0;

    $count++;

    echo "Static Variable: " . $count . "&lt;br&gt;";
}

countCalls();
countCalls();


// 4. Constant Variable and Circle Area
define("PI", 3.14);

$radius = 5;
$area = PI * $radius * $radius;

echo "Constant PI: " . PI . "&lt;br&gt;";
echo "Radius: " . $radius . "&lt;br&gt;";
echo "Area of Circle: " . number_format($area, 2);

?&gt;</code></pre>

            </div>

        </section>

        <!-- EXPECTED OUTPUT -->
        <section class="detail-output">

            <div class="output-heading">
                <span class="overview-label">PROGRAM RESULT</span>
                <h2>Expected Output</h2>
                <p>
                    This is what you should see after executing
                    the PHP program.
                </p>
            </div>

            <div class="output-window">

                <div class="output-window-top">
                    <span>Browser Output</span>
                    <span class="output-status">Expected Result</span>
                </div>

                <div class="output-content">
                    Global Variable: PHP.LAB<br>
                    $GLOBALS Array: PHP.LAB<br>
                    Static Variable: 1<br>
                    Static Variable: 2<br>
                    Constant PI: 3.14<br>
                    Radius: 5<br>
                    Area of Circle: 78.50
                </div>

            </div>

        </section>

        <!-- PROGRAM EXPLANATION -->
        <section class="program-explanation">

            <div class="explanation-heading">
                <span class="overview-label">UNDERSTAND THE CODE</span>
                <h2>Program Explanation</h2>
                <p>
                    Understand the four important concepts
                    demonstrated in this program.
                </p>
            </div>

            <div class="explanation-list">

                <div class="explanation-item">
                    <span class="explanation-number">01</span>

                    <div>
                        <h3>Global Variable</h3>
                        <p>
                            A global variable is declared outside a function.
                            To access it inside a function, we use the
                            <code>global</code> keyword.
                        </p>
                    </div>
                </div>

                <div class="explanation-item">
                    <span class="explanation-number">02</span>

                    <div>
                        <h3>$GLOBALS Array</h3>
                        <p>
                            The <code>$GLOBALS</code> array provides access
                            to global variables from anywhere in the PHP
                            script. We access the variable using its name
                            as an array key.
                        </p>
                    </div>
                </div>

                <div class="explanation-item">
                    <span class="explanation-number">03</span>

                    <div>
                        <h3>Static Variable</h3>
                        <p>
                            A static variable retains its value between
                            function calls. It is initialized only once,
                            so the counter increases from 1 to 2.
                        </p>
                    </div>
                </div>

                <div class="explanation-item">
                    <span class="explanation-number">04</span>

                    <div>
                        <h3>Constant Variable</h3>
                        <p>
                            A constant stores a value that cannot be
                            changed during script execution. Here,
                            <code>define("PI", 3.14)</code> creates
                            the PI constant.
                        </p>
                    </div>
                </div>

                <div class="explanation-item">
                    <span class="explanation-number">05</span>

                    <div>
                        <h3>Area of Circle</h3>
                        <p>
                            The area of a circle is calculated using
                            the formula PI × radius × radius.
                            With PI = 3.14 and radius = 5,
                            the result is 78.50.
                        </p>
                    </div>
                </div>

            </div>

        </section>

        <!-- FORMULA -->
        <section class="detail-overview">

            <div class="overview-heading">
                <span class="overview-label">IMPORTANT FORMULA</span>
                <h2>Area of a Circle</h2>
            </div>

            <div class="overview-content">

                <p><strong>Formula:</strong> Area = PI × Radius × Radius</p>

                <p><strong>Given:</strong> PI = 3.14 and Radius = 5</p>

                <p><strong>Calculation:</strong> 3.14 × 5 × 5 = 78.50</p>

                <p><strong>Final Answer:</strong> 78.50 square units</p>

            </div>

        </section>

    </main>

    <?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
