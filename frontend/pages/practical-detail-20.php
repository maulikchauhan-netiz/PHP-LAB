
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 20 | PHP.LAB</title>

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
    <span class="current-page">Practical 20</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 04 · PRACTICAL 20</span>
        <h1>Login Form with Session</h1>
        <p>Create a login system using PHP sessions with protected intermediate pages and logout functionality.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            PHP sessions allow user information to remain available
            across multiple webpages. In this practical, a session
            starts after successful login and continues while the
            user visits protected pages. The session ends when
            the user logs out.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create a login page.</li>
            <li>Start a session after successful login.</li>
            <li>Access intermediate webpages using the session.</li>
            <li>Prevent access to pages without login.</li>
            <li>Destroy the session during logout.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Login Page</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php
// File: login.php

session_start();

if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    // Demonstration login credentials
    if ($username == "student" &amp;&amp; $password == "12345") {

        session_regenerate_id(true);

        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
        exit();

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

&lt;p&gt;&lt;?php echo htmlspecialchars($message); ?&gt;&lt;/p&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

        <p>
            Save this program as <strong>login.php</strong>.
        </p>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Dashboard Page</h2>
            </div>
            <button class="copy-code-btn" id="copyDashboardCodeBtn">Copy Code</button>
        </div>

<pre><code id="dashboardSourceCode">&lt;?php
// File: dashboard.php

session_start();

// Check whether the user is logged in
if (!isset($_SESSION["username"])) {

    header("Location: login.php");
    exit();

}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Welcome to Dashboard&lt;/h2&gt;

&lt;p&gt;
    Hello,
    &lt;?php echo htmlspecialchars($_SESSION["username"]); ?&gt;
!
&lt;/p&gt;

&lt;a href="profile.php"&gt;Visit Profile&lt;/a&gt;

&lt;br&gt;&lt;br&gt;

&lt;a href="logout.php"&gt;Logout&lt;/a&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

        <p>
            Save this program as <strong>dashboard.php</strong>.
        </p>
    </section>

    <!-- PROGRAM 03 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 03</span>
                <h2>Intermediate Profile Page</h2>
            </div>
            <button class="copy-code-btn" id="copyProfileCodeBtn">Copy Code</button>
        </div>

<pre><code id="profileSourceCode">&lt;?php
// File: profile.php

session_start();

// Protect the page using session
if (!isset($_SESSION["username"])) {

    header("Location: login.php");
    exit();

}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Student Profile&lt;/h2&gt;

&lt;p&gt;
    Logged-in User:
    &lt;?php echo htmlspecialchars($_SESSION["username"]); ?&gt;
&lt;/p&gt;

&lt;p&gt;Your session is still active.&lt;/p&gt;

&lt;a href="dashboard.php"&gt;Back to Dashboard&lt;/a&gt;

&lt;br&gt;&lt;br&gt;

&lt;a href="logout.php"&gt;Logout&lt;/a&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

        <p>
            Save this program as <strong>profile.php</strong>.
        </p>
    </section>

    <!-- PROGRAM 04 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 04</span>
                <h2>Logout Page</h2>
            </div>
            <button class="copy-code-btn" id="copyLogoutCodeBtn">Copy Code</button>
        </div>

<pre><code id="logoutSourceCode">&lt;?php
// File: logout.php

session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Logout Successful&lt;/h2&gt;

&lt;p&gt;Your session has been ended.&lt;/p&gt;

&lt;a href="login.php"&gt;Login Again&lt;/a&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

        <p>
            Save this program as <strong>logout.php</strong>.
        </p>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – Login Page</span>
            </div>
            <div class="output-content">
                <h3>Student Login</h3>
                <p>Username: student</p>
                <p>Password: •••••</p>
                <p><strong>Login successful. Redirecting to dashboard...</strong></p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – Dashboard</span>
            </div>
            <div class="output-content">
                <h3>Welcome to Dashboard</h3>
                <p>Hello, student!</p>
                <p>Visit Profile</p>
                <p>Logout</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 03 – Profile</span>
            </div>
            <div class="output-content">
                <h3>Student Profile</h3>
                <p>Logged-in User: student</p>
                <p>Your session is still active.</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 04 – Logout</span>
            </div>
            <div class="output-content">
                <h3>Logout Successful</h3>
                <p>Your session has been ended.</p>
                <p>Login Again</p>
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
                    before sending HTML output.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. $_SESSION</h3>
                <p>
                    Stores user information across different webpages.
                    Here, the username is stored after successful login.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. isset()</h3>
                <p>
                    Checks whether a session variable exists.
                    It helps protect dashboard and profile pages
                    from users who have not logged in.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. header()</h3>
                <p>
                    Redirects the browser to another webpage.
                    Users with no active session are redirected
                    to the login page.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. session_unset()</h3>
                <p>
                    Removes all session variables currently registered
                    in the session.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. session_destroy()</h3>
                <p>
                    Destroys the current session and ends the user's
                    session data on the server.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Notes</h2>
        <ul>
            <li>Save all four PHP files in the same folder.</li>
            <li>Use username <strong>student</strong> and password <strong>12345</strong> for testing.</li>
            <li>Open login.php first.</li>
            <li>After login, visit Dashboard and Profile.</li>
            <li>After logout, try opening dashboard.php directly. It should redirect to login.php.</li>
            <li>This is a classroom demonstration using fixed credentials, not a production login system.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const copyButtons = [
    ["copyDashboardCodeBtn", "dashboardSourceCode"],
    ["copyProfileCodeBtn", "profileSourceCode"],
    ["copyLogoutCodeBtn", "logoutSourceCode"]
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
