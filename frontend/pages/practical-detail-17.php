
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 17 | PHP.LAB</title>

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
    <span class="current-page">Practical 17</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 03 · PRACTICAL 17</span>
        <h1>Registration, Login and Student Result</h1>
        <p>Create registration and login forms and calculate student results using PHP.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            Forms are used to collect information from users.
            PHP processes the submitted information and performs
            operations such as registration validation, login
            verification and student result calculation.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create a student registration form.</li>
            <li>Create a login form and validate user credentials.</li>
            <li>Accept student marks and calculate total marks.</li>
            <li>Calculate percentage and display the result.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Student Registration Form</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

$name = "";
$email = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($name == "" || $email == "" || $password == "") {

        $message = "All fields are required.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = "Enter a valid email address.";

    } elseif (strlen($password) &lt; 8) {

        $message = "Password must contain at least 8 characters.";

    } else {

        $message = "Registration successful!";

    }

}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Student Registration&lt;/h2&gt;

&lt;form method="POST"&gt;

    Name:
    &lt;input type="text" name="name" required&gt;

    &lt;br&gt;&lt;br&gt;

    Email:
    &lt;input type="email" name="email" required&gt;

    &lt;br&gt;&lt;br&gt;

    Password:
    &lt;input type="password" name="password" required&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;input type="submit" value="Register"&gt;

&lt;/form&gt;

&lt;h3&gt;&lt;?php echo htmlspecialchars($message); ?&gt;&lt;/h3&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Login Form</h2>
            </div>
            <button class="copy-code-btn" id="copyLoginCodeBtn">Copy Code</button>
        </div>

<pre><code id="loginSourceCode">&lt;?php

$message = "";

$correctUsername = "student";
$correctPassword = "12345678";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username == $correctUsername &amp;&amp;
        $password == $correctPassword) {

        $message = "Login successful!";

    } else {

        $message = "Invalid username or password.";

    }

}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Student Login&lt;/h2&gt;

&lt;form method="POST"&gt;

    Username:
    &lt;input type="text" name="username" required&gt;

    &lt;br&gt;&lt;br&gt;

    Password:
    &lt;input type="password" name="password" required&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;input type="submit" value="Login"&gt;

&lt;/form&gt;

&lt;h3&gt;&lt;?php echo htmlspecialchars($message); ?&gt;&lt;/h3&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

        <p>
            Test using username <strong>student</strong> and password
            <strong>12345678</strong>.
        </p>
    </section>

    <!-- PROGRAM 03 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 03</span>
                <h2>Student Result Application</h2>
            </div>
            <button class="copy-code-btn" id="copyResultCodeBtn">Copy Code</button>
        </div>

<pre><code id="resultSourceCode">&lt;?php

$name = "";
$total = 0;
$percentage = 0;
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"] ?? "");

    $maths = (int)($_POST["maths"] ?? 0);
    $science = (int)($_POST["science"] ?? 0);
    $computer = (int)($_POST["computer"] ?? 0);

    $total = $maths + $science + $computer;

    $percentage = ($total / 300) * 100;

    if ($maths &lt; 35 || $science &lt; 35 || $computer &lt; 35) {

        $result = "Fail";

    } else {

        $result = "Pass";

    }

}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Student Result Application&lt;/h2&gt;

&lt;form method="POST"&gt;

    Student Name:
    &lt;input type="text" name="name" required&gt;

    &lt;br&gt;&lt;br&gt;

    Maths Marks:
    &lt;input type="number" name="maths" min="0" max="100" required&gt;

    &lt;br&gt;&lt;br&gt;

    Science Marks:
    &lt;input type="number" name="science" min="0" max="100" required&gt;

    &lt;br&gt;&lt;br&gt;

    Computer Marks:
    &lt;input type="number" name="computer" min="0" max="100" required&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;input type="submit" value="Calculate Result"&gt;

&lt;/form&gt;

&lt;?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?&gt;

    &lt;h3&gt;Student Result&lt;/h3&gt;

    Student Name: &lt;?php echo $name; ?&gt;&lt;br&gt;

    Total Marks: &lt;?php echo $total; ?&gt; / 300&lt;br&gt;

    Percentage: &lt;?php echo number_format($percentage, 2); ?&gt;%&lt;br&gt;

    Result: &lt;?php echo $result; ?&gt;

&lt;?php } ?&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – Registration</span>
            </div>
            <div class="output-content">
                <h3>Student Registration</h3>
                <p>Name: Rahul</p>
                <p>Email: rahul@example.com</p>
                <p>Password: ••••••••</p>
                <hr>
                <p><strong>Registration successful!</strong></p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – Login</span>
            </div>
            <div class="output-content">
                <h3>Student Login</h3>
                <p>Username: student</p>
                <p>Password: ••••••••</p>
                <hr>
                <p><strong>Login successful!</strong></p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 03 – Student Result</span>
            </div>
            <div class="output-content">
                <h3>Student Result</h3>
                <p>Student Name: Rahul</p>
                <p>Total Marks: 240 / 300</p>
                <p>Percentage: 80.00%</p>
                <p>Result: Pass</p>
            </div>
        </div>
    </section>

    <!-- EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Registration Form</h3>
                <p>
                    The registration form collects the student's name,
                    email and password. PHP checks the submitted values
                    before displaying a success or error message.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. filter_var()</h3>
                <p>
                    FILTER_VALIDATE_EMAIL checks whether the submitted
                    email has a valid email format.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Login Form</h3>
                <p>
                    The login program compares the submitted username
                    and password with predefined demonstration
                    credentials.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Student Result</h3>
                <p>
                    PHP adds the marks of three subjects, calculates
                    the percentage and checks whether the student
                    has passed or failed.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Conditional Statements</h3>
                <p>
                    if and else statements determine the validation
                    messages and the student's result.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Note</h2>
        <p>
            These are educational demonstrations. The registration
            program does not save users in a database, and the login
            program uses hardcoded credentials. A real application
            must use secure password hashing and database-based
            authentication.
        </p>
        <p>
            The student result program uses 35 marks as the minimum
            passing mark in each subject for this example.
        </p>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const copyButtons = [
    ["copyLoginCodeBtn", "loginSourceCode"],
    ["copyResultCodeBtn", "resultSourceCode"]
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
