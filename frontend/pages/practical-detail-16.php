
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 16 | PHP.LAB</title>

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
    <span class="current-page">Practical 16</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 03 · PRACTICAL 16</span>
        <h1>Page Redirection and Form Validation</h1>
        <p>Redirect browsers and validate username and password using PHP.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            PHP can redirect users to another webpage using the
            header() function. It can also validate submitted form
            data before processing it.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Redirect a browser to another webpage using PHP.</li>
            <li>Validate that the username is not empty.</li>
            <li>Check that the username does not contain only numeric values.</li>
            <li>Ensure that the password contains at least 10 characters.</li>
            <li>Display appropriate validation messages.</li>
        </ul>
    </section>

    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Page Redirection</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

header("Location: welcome.php");
exit();

?&gt;</code></pre>

        <p>
            Create another file named <strong>welcome.php</strong>
            in the same folder:
        </p>

<pre><code>&lt;?php
echo "Welcome to PHP.LAB!";
?&gt;</code></pre>
    </section>

    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Username and Password Validation</h2>
            </div>
            <button class="copy-code-btn" id="copyValidationCodeBtn">Copy Code</button>
        </div>

<pre><code id="validationSourceCode">&lt;?php

$username = "";
$password = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($username == "") {

        $message = "Username cannot be empty.";

    } elseif (is_numeric($username)) {

        $message = "Username cannot be numeric only.";

    } elseif (strlen($password) &lt; 10) {

        $message = "Password must contain at least 10 characters.";

    } else {

        $message = "Form submitted successfully!";

    }

}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Login Form&lt;/h2&gt;

&lt;form method="POST"&gt;

    Username:
    &lt;input type="text" name="username" required&gt;

    &lt;br&gt;&lt;br&gt;

    Password:
    &lt;input type="password" name="password" required&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;input type="submit" value="Submit"&gt;

&lt;/form&gt;

&lt;h3&gt;&lt;?php echo htmlspecialchars($message); ?&gt;&lt;/h3&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
    </section>

    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – Redirection</span>
            </div>
            <div class="output-content">
                <p>Welcome to PHP.LAB!</p>
                <p><small>The browser is redirected to welcome.php.</small></p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – Form Validation</span>
            </div>
            <div class="output-content">
                <h3>Login Form</h3>
                <p>Username: Maulik</p>
                <p>Password: •••••••••••</p>
                <hr>
                <p><strong>Form submitted successfully!</strong></p>
                <p><small>Example output for a valid username and password.</small></p>
            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. header() Function</h3>
                <p>
                    The header() function sends an HTTP Location header
                    to redirect the browser to another webpage.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. exit() Function</h3>
                <p>
                    exit() stops PHP execution after the redirection
                    instruction.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. trim() Function</h3>
                <p>
                    trim() removes whitespace from the beginning and
                    end of the username.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. is_numeric() Function</h3>
                <p>
                    is_numeric() checks whether the username contains
                    a numeric value only.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. strlen() Function</h3>
                <p>
                    strlen() calculates the length of the password.
                    The program requires at least 10 characters.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Note</h2>
        <p>
            The header() redirection must execute before the browser
            receives any HTML output. Save Program 01 and Program 02
            as separate PHP files when testing them.
        </p>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const validationCopyBtn = document.getElementById("copyValidationCodeBtn");

if (validationCopyBtn) {
    validationCopyBtn.addEventListener("click", async () => {
        const code = document.getElementById("validationSourceCode").textContent;

        try {
            await navigator.clipboard.writeText(code);
            validationCopyBtn.textContent = "Copied!";
            setTimeout(() => {
                validationCopyBtn.textContent = "Copy Code";
            }, 2000);
        } catch (error) {
            validationCopyBtn.textContent = "Copy failed";
        }
    });
}
</script>

</body>
</html>
