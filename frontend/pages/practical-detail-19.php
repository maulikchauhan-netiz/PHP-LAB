
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 19 | PHP.LAB</title>

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
    <span class="current-page">Practical 19</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 04 · PRACTICAL 19</span>
        <h1>Sessions, Cookies and Hit Counter</h1>
        <p>Manage session variables, cookies and page visit counts using PHP.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            PHP sessions and cookies are used to store information
            between webpage requests. A hit counter keeps track of
            how many times a webpage has been visited.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create session variables and display them on another webpage.</li>
            <li>Create a hit counter for a webpage.</li>
            <li>Create cookies using PHP.</li>
            <li>Retrieve and display cookie values on another webpage.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Create and Display Session Variables</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php
// File 1: session_set.php

session_start();

$_SESSION["username"] = "Rahul";
$_SESSION["course"] = "Computer Engineering";

echo "Session variables created successfully!";

?&gt;

&lt;!-- File 2: session_display.php --&gt;

&lt;?php

session_start();

if (isset($_SESSION["username"])) {

    echo "Username: " . htmlspecialchars($_SESSION["username"]) . "&lt;br&gt;";
    echo "Course: " . htmlspecialchars($_SESSION["course"]);

} else {

    echo "Session variables are not available.";

}

?&gt;</code></pre>

        <p>
            Save the two sections as separate files named
            <strong>session_set.php</strong> and
            <strong>session_display.php</strong>.
        </p>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Page Hit Counter</h2>
            </div>
            <button class="copy-code-btn" id="copyHitCounterCodeBtn">Copy Code</button>
        </div>

<pre><code id="hitCounterSourceCode">&lt;?php

$filename = "counter.txt";

// Create the counter file if it does not exist
if (!file_exists($filename)) {
    file_put_contents($filename, "0");
}

// Read the current visit count
$count = (int) file_get_contents($filename);

// Increase the count
$count++;

// Save the updated count
file_put_contents($filename, $count, LOCK_EX);

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Page Hit Counter&lt;/h2&gt;

&lt;p&gt;
    Total Page Visits:
    &lt;strong&gt;&lt;?php echo $count; ?&gt;&lt;/strong&gt;
&lt;/p&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

        <p>
            Save this program as <strong>hit_counter.php</strong>.
            The counter.txt file will be created automatically.
        </p>
    </section>

    <!-- PROGRAM 03 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 03</span>
                <h2>Create and Display Cookies</h2>
            </div>
            <button class="copy-code-btn" id="copyCookieCodeBtn">Copy Code</button>
        </div>

<pre><code id="cookieSourceCode">&lt;?php
// File 1: cookie_set.php

setcookie("username", "Rahul", time() + 3600, "/");

echo "Cookie created successfully!";

?&gt;

&lt;!-- File 2: cookie_display.php --&gt;

&lt;?php

if (isset($_COOKIE["username"])) {

    echo "Cookie Username: " .
         htmlspecialchars($_COOKIE["username"]);

} else {

    echo "Cookie is not available.";

}

?&gt;</code></pre>

        <p>
            Save the two sections as separate files named
            <strong>cookie_set.php</strong> and
            <strong>cookie_display.php</strong>.
        </p>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – Session Variables</span>
            </div>
            <div class="output-content">
                <p><strong>Username:</strong> Rahul</p>
                <p><strong>Course:</strong> Computer Engineering</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – Hit Counter</span>
            </div>
            <div class="output-content">
                <h3>Page Hit Counter</h3>
                <p>Total Page Visits: <strong>5</strong></p>
                <small>Example count. The number increases on each page load.</small>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 03 – Cookies</span>
            </div>
            <div class="output-content">
                <p><strong>Cookie Username:</strong> Rahul</p>
            </div>
        </div>
    </section>

    <!-- EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. session_start()</h3>
                <p>
                    Starts or resumes a PHP session. It must be called
                    before sending HTML output to the browser.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. $_SESSION</h3>
                <p>
                    Stores session data that can be accessed across
                    different webpages belonging to the same session.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. file_get_contents()</h3>
                <p>
                    Reads the existing visit count from counter.txt.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. file_put_contents()</h3>
                <p>
                    Writes the updated visit count into counter.txt.
                    LOCK_EX requests an exclusive lock while writing.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. setcookie()</h3>
                <p>
                    Creates a cookie in the browser. The time() + 3600
                    expression sets its expiry one hour in the future.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. $_COOKIE</h3>
                <p>
                    Retrieves cookie values sent by the browser
                    with a request to the server.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Notes</h2>
        <ul>
            <li>Session and cookie examples use separate PHP files.</li>
            <li>Call session_start() before HTML output.</li>
            <li>Call setcookie() before HTML output.</li>
            <li>Open cookie_display.php after visiting cookie_set.php.</li>
            <li>Open session_display.php after visiting session_set.php.</li>
            <li>The counter.txt file must be writable by PHP.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const copyButtons = [
    ["copyHitCounterCodeBtn", "hitCounterSourceCode"],
    ["copyCookieCodeBtn", "cookieSourceCode"]
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
