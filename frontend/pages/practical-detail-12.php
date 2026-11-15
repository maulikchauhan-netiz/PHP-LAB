
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 12 | PHP.LAB</title>

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
    <a href="practicals.php?module=3">Previous</a>
    <span>/</span>
    <span class="current-page">Practical 12</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 03 · PRACTICAL 12</span>
        <h1>Form Data Handling</h1>
        <p>Accept user input through HTML forms and process submitted data using PHP.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            PHP forms allow users to enter information and send it
            to the server for processing. PHP can receive form data
            using the $_POST or $_GET superglobal arrays.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Accept username and password using an HTML form.</li>
            <li>Display submitted information on another PHP page.</li>
            <li>Accept two integer numbers through a form.</li>
            <li>Calculate and display their addition on the same page.</li>
            <li>Use numeric input fields for entering numbers.</li>
        </ul>
    </section>

    <section class="detail-code">

        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Username and Password Form</h2>
            </div>
        </div>

        <pre><code id="phpSourceCode">&lt;!-- File 1: form.php --&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Login Form&lt;/h2&gt;

&lt;form action="display.php" method="POST"&gt;

    Username:
    &lt;input type="text" name="username" required&gt;

    &lt;br&gt;&lt;br&gt;

    Password:
    &lt;input type="password" name="password" required&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;input type="submit" value="Submit"&gt;

&lt;/form&gt;

&lt;/body&gt;
&lt;/html&gt;


&lt;!-- File 2: display.php --&gt;

&lt;?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    echo "&lt;h2&gt;Submitted Information&lt;/h2&gt;";

    echo "Username: " . $username . "&lt;br&gt;";
    echo "Password: " . $password;

} else {

    echo "Please submit the form first.";

}

?&gt;</code></pre>

        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Addition of Two Numbers</h2>
            </div>
            <button class="copy-code-btn" id="copyAdditionCodeBtn">Copy Code</button>
        </div>

        <pre><code id="additionSourceCode">&lt;?php

$result = "";

if (isset($_POST["calculate"])) {

    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    $sum = (int)$number1 + (int)$number2;

    $result = "Addition: " . $sum;
}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Addition of Two Numbers&lt;/h2&gt;

&lt;form method="POST"&gt;

    Enter First Number:
    &lt;input type="number" name="number1" step="1" required&gt;

    &lt;br&gt;&lt;br&gt;

    Enter Second Number:
    &lt;input type="number" name="number2" step="1" required&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;input type="submit" name="calculate" value="Add Numbers"&gt;

&lt;/form&gt;

&lt;h3&gt;&lt;?php echo $result; ?&gt;&lt;/h3&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

    </section>

    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Browser Output — Program 01</span>
            </div>

            <div class="output-content">
                <h3>Login Form</h3>
                <p>Username: Maulik</p>
                <p>Password: ********</p>
                <p><strong>After submission, display.php shows:</strong></p>
                <p>Username: Maulik</p>
                <p>Password: ********</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Browser Output — Program 02</span>
            </div>

            <div class="output-content">
                <h3>Addition of Two Numbers</h3>
                <p>Enter First Number: 20</p>
                <p>Enter Second Number: 30</p>
                <p><strong>Addition: 50</strong></p>
            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. HTML Form</h3>
                <p>
                    The form collects username and password from the user.
                    The action attribute specifies the page that receives
                    the submitted information.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. POST Method</h3>
                <p>
                    The POST method sends form information in the HTTP
                    request body. PHP receives this information using
                    the $_POST superglobal array.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Displaying Submitted Data</h3>
                <p>
                    The display.php page receives the submitted username
                    and password and displays them using echo.
                    htmlspecialchars() helps prevent HTML injection
                    when displaying user input.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Number Input</h3>
                <p>
                    The number input field allows users to enter numeric
                    values. The step="1" attribute indicates whole-number
                    increments.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Addition</h3>
                <p>
                    PHP receives both numbers, converts them to integers,
                    calculates their sum and displays the result on
                    the same page.
                </p>
            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
