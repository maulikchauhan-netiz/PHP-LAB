
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 02 | PHP.LAB</title>

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
            <span class="current-page">Practical 02</span>
        </div>

        <!-- PRACTICAL HEADER -->
        <section class="detail-header">

            <div class="detail-label">
                <span class="detail-module">MODULE 01</span>
                <span class="detail-number">PRACTICAL 02</span>
            </div>

            <h1>HTML Integration and Echo & Print Functions</h1>

            <p>
                Learn how to integrate HTML within PHP code using internal
                and inline CSS, and demonstrate the use and difference
                between echo and print functions.
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
                    In this practical, you will learn how to integrate HTML
                    code within PHP code by applying internal and inline CSS.
                    You will also demonstrate the use and difference of
                    echo and print functions.
                </p>

                <h3>Learning Objectives</h3>

                <ul>
                    <li>Integrate HTML code within PHP code.</li>
                    <li>Apply internal CSS within PHP output.</li>
                    <li>Apply inline CSS within PHP output.</li>
                    <li>Demonstrate the use of echo and print functions.</li>
                    <li>Understand the differences between echo and print.</li>
                </ul>

            </div>

        </section>

        <!-- PROGRAM 01: HTML INTEGRATION -->
        <section class="detail-code">

            <div class="code-heading">
                <div>
                    <span class="overview-label">PROGRAM 01</span>
                    <h2>HTML Integration with PHP</h2>
                    <p>Integrate HTML with PHP and apply internal and inline CSS.</p>
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
                    <span>program01.php</span>
                </div>

                <pre><code id="phpSourceCode">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;HTML Integration in PHP&lt;/title&gt;

    &lt;style&gt;
        h1 {
            color: green;
            text-align: center;
        }

        p {
            font-size: 18px;
            color: blue;
        }
    &lt;/style&gt;

&lt;/head&gt;

&lt;body&gt;

    &lt;h1&gt;Welcome to PHP.LAB&lt;/h1&gt;

    &lt;?php
        echo "&lt;p&gt;This HTML paragraph is displayed using PHP echo.&lt;/p&gt;";

        echo "&lt;h2 style='color:red;'&gt;Inline CSS Example&lt;/h2&gt;";
    ?&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

            </div>

        </section>

        <!-- PROGRAM 01 OUTPUT -->
        <section class="detail-output">

            <div class="output-heading">
                <span class="overview-label">PROGRAM 01 RESULT</span>
                <h2>Expected Output</h2>
                <p>This is what you should see after executing the first program.</p>
            </div>

            <div class="output-window">

                <div class="output-window-top">
                    <span>Browser Output</span>
                    <span class="output-status">Expected Result</span>
                </div>

                <div class="output-content">

                    <h1 style="color:green; text-align:center;">
                        Welcome to PHP.LAB
                    </h1>

                    <p style="font-size:18px; color:blue;">
                        This HTML paragraph is displayed using PHP echo.
                    </p>

                    <h2 style="color:red;">
                        Inline CSS Example
                    </h2>

                </div>

            </div>

        </section>

        <!-- PROGRAM 01 EXPLANATION -->
        <section class="program-explanation">

            <div class="explanation-heading">
                <span class="overview-label">PROGRAM 01</span>
                <h2>Program Explanation</h2>
                <p>Understand how HTML and PHP work together.</p>
            </div>

            <div class="explanation-list">

                <div class="explanation-item">
                    <span class="explanation-number">01</span>
                    <div>
                        <h3>HTML Structure</h3>
                        <p>
                            The HTML document provides the basic webpage
                            structure using HTML elements.
                        </p>
                    </div>
                </div>

                <div class="explanation-item">
                    <span class="explanation-number">02</span>
                    <div>
                        <h3>Internal CSS</h3>
                        <p>
                            The <code>&lt;style&gt;</code> tag inside the
                            HTML head section defines styles for the
                            heading and paragraph.
                        </p>
                    </div>
                </div>

                <div class="explanation-item">
                    <span class="explanation-number">03</span>
                    <div>
                        <h3>PHP Echo</h3>
                        <p>
                            The <code>echo</code> statement outputs HTML
                            elements from within PHP code.
                        </p>
                    </div>
                </div>

                <div class="explanation-item">
                    <span class="explanation-number">04</span>
                    <div>
                        <h3>Inline CSS</h3>
                        <p>
                            The style attribute inside the heading applies
                            CSS directly to that HTML element.
                        </p>
                    </div>
                </div>

            </div>

        </section>

        <!-- PROGRAM 02: ECHO AND PRINT -->
        <section class="detail-code">

            <div class="code-heading">
                <div>
                    <span class="overview-label">PROGRAM 02</span>
                    <h2>Echo and Print Functions</h2>
                    <p>Demonstrate the use of echo and print in PHP.</p>
                </div>

                <button class="copy-code-btn" id="copyCodeBtn2">
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
                    <span>program02.php</span>
                </div>

                <pre><code id="phpSourceCode2">&lt;?php

    // Using echo function
    echo "Hello, Welcome to PHP.LAB!&lt;br&gt;";

    echo "Learning PHP is interesting.&lt;br&gt;";

    // Using print function
    print "This message is displayed using print.&lt;br&gt;";

    // Using print with concatenation
    print "PHP " . "Programming";

?&gt;</code></pre>

            </div>

        </section>

        <!-- PROGRAM 02 OUTPUT -->
        <section class="detail-output">

            <div class="output-heading">
                <span class="overview-label">PROGRAM 02 RESULT</span>
                <h2>Expected Output</h2>
                <p>This is what you should see after executing the second program.</p>
            </div>

            <div class="output-window">

                <div class="output-window-top">
                    <span>Browser Output</span>
                    <span class="output-status">Expected Result</span>
                </div>

                <div class="output-content">
                    Hello, Welcome to PHP.LAB!<br>
                    Learning PHP is interesting.<br>
                    This message is displayed using print.<br>
                    PHP Programming
                </div>

            </div>

        </section>

        <!-- PROGRAM 02 EXPLANATION -->
        <section class="program-explanation">

            <div class="explanation-heading">
                <span class="overview-label">PROGRAM 02</span>
                <h2>Program Explanation</h2>
                <p>Understand the use of echo and print statements.</p>
            </div>

            <div class="explanation-list">

                <div class="explanation-item">
                    <span class="explanation-number">01</span>
                    <div>
                        <h3>Echo Statement</h3>
                        <p>
                            The <code>echo</code> statement displays text
                            or HTML content on the webpage. It can accept
                            multiple comma-separated arguments.
                        </p>
                    </div>
                </div>

                <div class="explanation-item">
                    <span class="explanation-number">02</span>
                    <div>
                        <h3>Print Statement</h3>
                        <p>
                            The <code>print</code> statement displays
                            a single string or value on the webpage.
                        </p>
                    </div>
                </div>

                <div class="explanation-item">
                    <span class="explanation-number">03</span>
                    <div>
                        <h3>String Concatenation</h3>
                        <p>
                            The dot operator (<code>.</code>) joins two
                            strings together. It is used in the final
                            print statement.
                        </p>
                    </div>
                </div>

                <div class="explanation-item">
                    <span class="explanation-number">04</span>
                    <div>
                        <h3>Return Value</h3>
                        <p>
                            <code>echo</code> does not return a value,
                            whereas <code>print</code> returns the
                            integer value 1.
                        </p>
                    </div>
                </div>

            </div>

        </section>

        <!-- ECHO VS PRINT COMPARISON -->
        <section class="detail-overview">

            <div class="overview-heading">
                <span class="overview-label">QUICK COMPARISON</span>
                <h2>Difference Between Echo and Print</h2>
            </div>

            <div class="overview-content">

                <ul>
                    <li><strong>Echo:</strong> Can display one or more strings.</li>
                    <li><strong>Print:</strong> Displays only one string or value.</li>
                    <li><strong>Echo:</strong> Does not return a value.</li>
                    <li><strong>Print:</strong> Returns the integer value 1.</li>
                    <li><strong>Echo:</strong> Can use comma-separated arguments.</li>
                    <li><strong>Print:</strong> Uses concatenation with the dot operator to join strings.</li>
                </ul>

            </div>

        </section>

    </main>

    <?php require_once __DIR__ . '/../components/footer.php'; ?>

    <script>
        // Copy Program 02 code
        const copyButton2 = document.getElementById("copyCodeBtn2");

        if (copyButton2) {
            copyButton2.addEventListener("click", async () => {
                const code = document.getElementById("phpSourceCode2").textContent;

                try {
                    await navigator.clipboard.writeText(code);
                    copyButton2.textContent = "Copied!";

                    setTimeout(() => {
                        copyButton2.textContent = "Copy Code";
                    }, 2000);
                } catch (error) {
                    copyButton2.textContent = "Copy failed";
                }
            });
        }
    </script>

</body>
</html>
