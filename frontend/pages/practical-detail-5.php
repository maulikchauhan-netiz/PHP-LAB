
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 05 | PHP.LAB</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/details.css">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <script src="../js/main.js" defer></script>
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
      <span class="current-page">Practical 05</span>
    </div>


    <!-- PRACTICAL HEADER -->

    <main class="practical-detail">

        <section class="detail-header">

            <span class="detail-label">MODULE 01 · PRACTICAL 05</span>

            <h1>Different Loop Structures</h1>

            <p>
                Understand and implement PHP looping structures
                to perform repetitive operations and solve
                mathematical problems.
            </p>

        </section>


        <!-- OVERVIEW -->

        <section class="detail-overview">

            <h2>Practical Overview</h2>

            <p>
                Loops are used to execute a block of code
                repeatedly as long as a specified condition
                is true. PHP provides looping structures
                to perform repetitive operations efficiently.
            </p>

            <h3>Objectives</h3>

            <ul>
                <li>Calculate the sum of the first 10 integers using a for loop.</li>
                <li>Display the first 10 Fibonacci numbers.</li>
                <li>Calculate the factorial of a number.</li>
                <li>Check odd or even using the ternary operator.</li>
                <li>Use a switch statement to display different colors and backgrounds.</li>
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


// 1. Sum of First 10 Integers

$sum = 0;

for ($i = 1; $i &lt;= 10; $i++) {

    $sum = $sum + $i;

}

echo "Sum of First 10 Integers: " . $sum;

echo "&lt;br>&lt;br>";


// 2. First 10 Fibonacci Numbers

$first = 0;
$second = 1;

echo "First 10 Fibonacci Numbers: ";

for ($i = 1; $i &lt;= 10; $i++) {

    echo $first . " ";

    $next = $first + $second;

    $first = $second;

    $second = $next;

}

echo "&lt;br>&lt;br>";


// 3. Factorial of a Number

$number = 5;

$factorial = 1;

for ($i = 1; $i &lt;= $number; $i++) {

    $factorial = $factorial * $i;

}

echo "Factorial of $number: " . $factorial;

echo "&lt;br>&lt;br>";


// 4. Odd or Even Using Ternary Operator

$checkNumber = 8;

$result = ($checkNumber % 2 == 0) ? "Even" : "Odd";

echo "$checkNumber is $result";

echo "&lt;br>&lt;br>";


// 5. Switch Statement for Different Colors

$color = "green";

switch ($color) {

    case "red":

        $backgroundColor = "red";

        break;


    case "green":

        $backgroundColor = "green";

        break;


    case "blue":

        $backgroundColor = "blue";

        break;


    default:

        $backgroundColor = "gray";

}

echo "&lt;div style='background-color: $backgroundColor;
color: white;
padding: 15px;
width: 200px;'>";

echo "Selected Color: $color";

echo "&lt;/div>";


?&gt;</code></pre>

        </section>


        <!-- EXPECTED OUTPUT -->

        <section class="detail-output">

            <h2>Expected Output</h2>

            <div class="output-window">

                <div class="output-header">
                    <span>Browser Output</span>
                </div>

                <div class="output-content">

                    <p>
                        Sum of First 10 Integers: 55
                    </p>

                    <br>

                    <p>
                        First 10 Fibonacci Numbers:
                        0 1 1 2 3 5 8 13 21 34
                    </p>

                    <br>

                    <p>
                        Factorial of 5: 120
                    </p>

                    <br>

                    <p>
                        8 is Even
                    </p>

                    <br>

                    <div style="
                        background-color: green;
                        color: white;
                        padding: 15px;
                        width: 200px;
                    ">
                        Selected Color: green
                    </div>

                </div>

            </div>

        </section>


        <!-- PROGRAM EXPLANATION -->

        <section class="program-explanation">

            <h2>Program Explanation</h2>

            <div class="explanation-list">


                <!-- EXPLANATION 1 -->

                <div class="explanation-item">

                    <h3>1. Sum of First 10 Integers</h3>

                    <p>
                        The variable $sum is initialized with
                        zero. A for loop runs from 1 to 10.
                        Each number is added to the sum variable.
                    </p>

                    <p>
                        After the loop completes, the final
                        sum is displayed as 55.
                    </p>

                </div>


                <!-- EXPLANATION 2 -->

                <div class="explanation-item">

                    <h3>2. Fibonacci Series</h3>

                    <p>
                        The Fibonacci series is a sequence
                        in which each number is the sum of
                        the previous two numbers.
                    </p>

                    <p>
                        The program uses two variables,
                        $first and $second, to calculate
                        and display the first 10 Fibonacci numbers.
                    </p>

                </div>


                <!-- EXPLANATION 3 -->

                <div class="explanation-item">

                    <h3>3. Factorial of a Number</h3>

                    <p>
                        Factorial is the product of all
                        positive integers from 1 to a given
                        number.
                    </p>

                    <p>
                        For example, 5! = 5 × 4 × 3 × 2 × 1 = 120.
                        The for loop performs the multiplication.
                    </p>

                </div>


                <!-- EXPLANATION 4 -->

                <div class="explanation-item">

                    <h3>4. Ternary Operator</h3>

                    <p>
                        The ternary operator is a shorter
                        alternative to an if-else statement.
                    </p>

                    <p>
                        It checks whether the number is
                        divisible by 2 and returns either
                        Even or Odd.
                    </p>

                </div>


                <!-- EXPLANATION 5 -->

                <div class="explanation-item">

                    <h3>5. Switch Statement</h3>

                    <p>
                        The switch statement checks the
                        value of the $color variable against
                        different cases.
                    </p>

                    <p>
                        According to the matching case,
                        the program assigns a background color.
                        The break statement stops execution
                        after a matching case.
                    </p>

                </div>


            </div>

        </section>


        <!-- IMPORTANT NOTE -->

        <section class="detail-overview">

            <h2>Important Note</h2>

            <p>
                This demonstration uses 5 as the factorial input,
                8 as the odd/even input, and green as the selected
                color. These values can be changed to test
                different results.
            </p>

        </section>


    </main>


    <!-- FOOTER -->

    <?php require_once __DIR__ . '/../components/footer.php'; ?>


</body>
</html>
