
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical Details | PHP.LAB</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/details.css">
    <script src="../js/main.js" defer   ></script>
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
        <span class="current-page">Practical 01</span>
    </div>


    <!-- PRACTICAL HEADER -->
    <section class="detail-header">

        <div class="detail-label">
            <span class="detail-module">MODULE 01</span>
            <span class="detail-number">PRACTICAL 01</span>
        </div>

        <h1>Install and Configure a Local Web Server</h1>

        <p>
            Learn how to set up a local development environment
            and execute your first PHP program using XAMPP.
        </p>

    </section>

<section class="detail-overview">
    <div class="overview-heading">
        <span class="overview-label">OVERVIEW</span>
        <h2>About This Practical</h2>
    </div>

    <div class="overview-content">
        <p>
            In this practical, you will learn how to install and configure
            a local web server using XAMPP. You will understand how Apache
            works and how to execute PHP programs on your local machine.
        </p>

        <h3>Learning Objectives</h3>

        <ul>
            <li>Understand the purpose of a local web server.</li>
            <li>Install and configure XAMPP.</li>
            <li>Start and manage the Apache server.</li>
            <li>Execute a PHP file using localhost.</li>
        </ul>
    </div>
</section>

<!-- XAMPP INSTALLATION & CONFIGURATION -->
<section class="installation-section">

    <div class="installation-heading">
        <span class="overview-label">SETUP GUIDE</span>
        <h2>Install and Configure XAMPP</h2>
        <p>Follow these steps to install and configure your local web server.</p>
    </div>

    <div class="installation-steps">

        <div class="installation-step">
            <span class="step-number">01</span>
            <div class="step-content">
                <h3>Download XAMPP</h3>
                <ul>
                    <li>Open a web browser.</li>
                    <li>Go to the official XAMPP website.</li>
                    <li>Download the latest Windows version of XAMPP.</li>
                </ul>
            </div>
        </div>

        <div class="installation-step">
            <span class="step-number">02</span>
            <div class="step-content">
                <h3>Install XAMPP</h3>
                <ul>
                    <li>Locate the downloaded XAMPP installer file.</li>
                    <li>Right-click the installer and select Run as Administrator.</li>
                    <li>If a User Account Control (UAC) prompt appears, click Yes.</li>
                    <li>Click Next on the setup wizard.</li>
                    <li>Select the components: Apache, MySQL, PHP and phpMyAdmin.</li>
                    <li>Choose the installation directory (default: C:\xampp).</li>
                    <li>Continue clicking Next and then Install.</li>
                    <li>Wait for installation to complete and click Finish.</li>
                </ul>
            </div>
        </div>

        <div class="installation-step">
            <span class="step-number">03</span>
            <div class="step-content">
                <h3>Start Apache and MySQL Services</h3>
                <ul>
                    <li>Open the XAMPP Control Panel.</li>
                    <li>Click Start next to Apache.</li>
                    <li>Click Start next to MySQL.</li>
                    <li>Verify that both services show a green status indicator.</li>
                </ul>
            </div>
        </div>

        <div class="installation-step">
            <span class="step-number">04</span>
            <div class="step-content">
                <h3>Verify Web Server Installation</h3>
                <ul>
                    <li>Open a web browser.</li>
                    <li>Enter the following URL:</li>
                </ul>
                <div class="localhost-url">http://localhost</div>
                <p>The XAMPP welcome page should appear, confirming that Apache is running correctly.</p>
            </div>
        </div>

    </div>

</section>


<section class="detail-code">
    <div class="code-heading">
        <div>
            <span class="overview-label">PRACTICAL IMPLEMENTATION</span>
            <h2>Source Code</h2>
            <p>Write and execute your first PHP program.</p>
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
            <span>index.php</span>
        </div>

        <pre><code id="phpSourceCode">&lt;?php

echo "Hello, World!";

?&gt;</code></pre>
    </div>
</section>

<!-- EXPECTED OUTPUT -->
<section class="detail-output">

    <div class="output-heading">
        <span class="overview-label">PROGRAM RESULT</span>
        <h2>Expected Output</h2>
        <p>This is what you should see after executing the PHP program.</p>
    </div>

    <div class="output-window">
        <div class="output-window-top">
            <span>Browser Output</span>
            <span class="output-status">Successful Execution</span>
        </div>

        <div class="output-content">
            Hello, World!
        </div>
    </div>

</section>

<!-- PROGRAM EXPLANATION -->
<section class="program-explanation">

    <div class="explanation-heading">
        <span class="overview-label">UNDERSTAND THE CODE</span>
        <h2>Program Explanation</h2>
        <p>Let's understand how this PHP program works.</p>
    </div>

    <div class="explanation-list">

        <div class="explanation-item">
            <span class="explanation-number">01</span>
            <div>
                <h3>PHP Opening Tag</h3>
                <p><code>&lt;?php</code> tells the server that PHP code starts here.</p>
            </div>
        </div>

        <div class="explanation-item">
            <span class="explanation-number">02</span>
            <div>
                <h3>Echo Statement</h3>
                <p><code>echo</code> displays the text "Hello, World!" on the webpage.</p>
            </div>
        </div>

        <div class="explanation-item">
            <span class="explanation-number">03</span>
            <div>
                <h3>PHP Closing Tag</h3>
                <p><code>?&gt;</code> indicates the end of the PHP code block.</p>
            </div>
        </div>

    </div>

</section>





</main>


    <?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
