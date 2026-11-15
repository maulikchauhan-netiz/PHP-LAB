
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 04 | PHP.LAB</title>

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


    <!-- BREADCRUMB -->

    <div class="breadcrumb">
        <a href="index.php">Home</a>
        <span>/</span>
        <a href="practicals.php">Practicals</a>
        <span>/</span>
        <a href="practicals.php?module=1">Previous</a>
        <span>/</span>
        <span class="current-page">Practical 04</span>
    </div>


    <!-- PRACTICAL HEADER -->

    <main class="practical-detail">

        <section class="detail-header">

            <span class="detail-label">MODULE 01 · PRACTICAL 04</span>

            <h1>Different Control Structures</h1>

            <p>
                Understand and implement PHP control structures
                using conditional statements such as if, else
                and elseif.
            </p>

        </section>


        <!-- OVERVIEW -->

        <section class="detail-overview">

            <h2>Practical Overview</h2>

            <p>
                Control structures are used to control the flow
                of execution in a PHP program. They allow a
                program to make decisions based on conditions.
            </p>

            <h3>Objectives</h3>

            <ul>
                <li>Understand PHP conditional statements.</li>
                <li>Check whether a number is odd or even.</li>
                <li>Implement an if-else ladder.</li>
                <li>Change font size based on a given value.</li>
            </ul>

        </section>


        <!-- SOURCE CODE -->

        <section class="detail-code">

            <div class="section-heading">

                <div>
                    <span class="section-label">PROGRAM 01</span>
                    <h2>Source Code</h2>
                </div>

                <button class="copy-code-btn" id="copyCodeBtn">
                    Copy Code
                </button>

            </div>

            <pre><code id="phpSourceCode">&lt;?php

// 1. Check whether a number is Odd or Even

$number = 17;

if ($number % 2 == 0) {
    echo "The number is Even";
} else {
    echo "The number is Odd";
}

echo "&lt;br>&lt;br>";


// 2. If-Else Ladder to Change Font Size

$value = 15;

if ($value &lt;= 10) {
    $fontSize = "16px";
} elseif ($value &lt;= 20) {
    $fontSize = "24px";
} elseif ($value &lt;= 30) {
    $fontSize = "32px";
} else {
    $fontSize = "40px";
}

echo "&lt;p style='font-size: $fontSize;'>";
echo "Font size changes according to value: $value";
echo "&lt;/p>";

?></code></pre>

        </section>


        <!-- EXPECTED OUTPUT -->

        <section class="detail-output">

            <h2>Expected Output</h2>

            <div class="output-window">

                <div class="output-header">
                    <span>Browser Output</span>
                </div>

                <div class="output-content">

                    <p>The number is Odd</p>

                    <br>

                    <p style="font-size: 24px;">
                        Font size changes according to value: 15
                    </p>

                </div>

            </div>

        </section>


        <!-- PROGRAM EXPLANATION -->

        <section class="program-explanation">

            <h2>Program Explanation</h2>

            <div class="explanation-list">

                <div class="explanation-item">

                    <h3>1. Variable Declaration</h3>

                    <p>
                        The variable $number stores the value 17.
                        This value is used to check whether the
                        number is odd or even.
                    </p>

                </div>


                <div class="explanation-item">

                    <h3>2. If-Else Statement</h3>

                    <p>
                        The modulus operator (%) calculates the
                        remainder after division by 2.
                    </p>

                    <p>
                        If the remainder is zero, the number is
                        even. Otherwise, the number is odd.
                    </p>

                </div>


                <div class="explanation-item">

                    <h3>3. If-Else Ladder</h3>

                    <p>
                        The if-elseif-else structure checks
                        multiple conditions one by one.
                    </p>

                    <p>
                        Depending on the value, the program
                        assigns a different font size.
                    </p>

                </div>


                <div class="explanation-item">

                    <h3>4. Inline CSS</h3>

                    <p>
                        The selected font size is stored in
                        the $fontSize variable and applied
                        using the HTML style attribute.
                    </p>

                </div>

            </div>

        </section>


        <!-- IMPORTANT NOTE -->

        <section class="detail-overview">

            <h2>Important Note</h2>

            <p>
                The example uses 17 for odd/even checking and
                15 for font-size selection. The font-size ranges
                are demonstration conditions used to explain
                the if-else ladder.
            </p>

        </section>

    </main>


    <?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
