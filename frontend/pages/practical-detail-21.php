
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 21 | PHP.LAB</title>

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
    <span class="current-page">Practical 21</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 04 · PRACTICAL 21</span>
        <h1>Exception Handling</h1>
        <p>Handle runtime exceptions using try, catch and finally blocks in PHP.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            Exception handling is used to manage errors that occur
            during program execution. PHP provides try, catch and
            finally blocks to handle exceptions and prevent
            unexpected program termination.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Understand exception handling in PHP.</li>
            <li>Use the try block to execute code.</li>
            <li>Use the catch block to handle exceptions.</li>
            <li>Use the finally block to execute cleanup code.</li>
            <li>Generate exceptions using the throw keyword.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Basic Exception Handling</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

try {

    $number1 = 20;
    $number2 = 0;

    if ($number2 == 0) {
        throw new Exception("Division by zero is not allowed.");
    }

    $result = $number1 / $number2;

    echo "Result: " . $result;

} catch (Exception $e) {

    echo "Exception Caught: " . $e->getMessage();

} finally {

    echo "&lt;br&gt;Finally block executed.";

}

?&gt;</code></pre>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Exception Handling with Valid Input</h2>
            </div>
            <button class="copy-code-btn" id="copyExceptionCodeBtn">Copy Code</button>
        </div>

<pre><code id="exceptionSourceCode">&lt;?php

function checkAge($age) {

    if ($age &lt; 18) {

        throw new Exception("You are not eligible.");

    }

    return "You are eligible.";

}

try {

    $age = 20;

    echo checkAge($age);

} catch (Exception $e) {

    echo "Exception: " . $e->getMessage();

} finally {

    echo "&lt;br&gt;Age verification completed.";

}

?&gt;</code></pre>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – Basic Exception Handling</span>
            </div>
            <div class="output-content">
                <p>Exception Caught: Division by zero is not allowed.</p>
                <p>Finally block executed.</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – Valid Input</span>
            </div>
            <div class="output-content">
                <p>You are eligible.</p>
                <p>Age verification completed.</p>
            </div>
        </div>
    </section>

    <!-- EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. try Block</h3>
                <p>
                    Contains statements that may generate an exception.
                    PHP executes these statements until an exception
                    is thrown or the block finishes.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. throw Keyword</h3>
                <p>
                    The throw keyword generates an exception.
                    In this example, it generates an exception
                    when the second number is zero.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. catch Block</h3>
                <p>
                    Handles the exception generated inside the try
                    block. The getMessage() method retrieves the
                    exception message.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. finally Block</h3>
                <p>
                    Executes after the try and catch blocks,
                    whether an exception occurs or not.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Exception Class</h3>
                <p>
                    PHP provides the built-in Exception class
                    to create and handle exception objects.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. getMessage()</h3>
                <p>
                    Returns the message associated with the
                    exception object.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Notes</h2>
        <ul>
            <li>The try block contains code that may throw an exception.</li>
            <li>The throw keyword generates an exception.</li>
            <li>The catch block handles the thrown exception.</li>
            <li>The finally block executes whether an exception occurs or not.</li>
            <li>Both programs are independent examples.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const copyButtons = [
    ["copyExceptionCodeBtn", "exceptionSourceCode"]
];

copyButtons.forEach(([buttonId, codeId]) => {
    const button = document.getElementById(buttonId);

    if (button) {
        button.addEventListener("click", async () => {
            const code = document.getElementById(codeId).textContent;

            try {
                await navigator.clipboard.writeText(code);
                button.textContent = "Copied!";

                setTimeout(() => {
                    button.textContent = "Copy Code";
                }, 2000);
            } catch (error) {
                button.textContent = "Copy failed";
            }
        });
    }
});
</script>

</body>
</html>
