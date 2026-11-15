
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 13 | PHP.LAB</title>

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
    <span class="current-page">Practical 13</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 03 · PRACTICAL 13</span>
        <h1>Multiple Submit Buttons</h1>
        <p>Use multiple submit buttons to change the webpage background colour using PHP.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            HTML forms can contain multiple submit buttons.
            PHP can identify which button was clicked and
            perform an action based on the submitted value.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create three submit buttons: Red, Green and Blue.</li>
            <li>Identify the clicked button using PHP.</li>
            <li>Use the $_REQUEST superglobal array.</li>
            <li>Change the webpage background colour based on the selected button.</li>
        </ul>
    </section>

    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Source Code</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

$backgroundColor = "white";

if (isset($_REQUEST["color"])) {

    $selectedColor = $_REQUEST["color"];

    if ($selectedColor == "Red") {
        $backgroundColor = "red";
    }
    elseif ($selectedColor == "Green") {
        $backgroundColor = "green";
    }
    elseif ($selectedColor == "Blue") {
        $backgroundColor = "blue";
    }
}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Change Background Color&lt;/title&gt;
&lt;/head&gt;

&lt;body style="background-color: &lt;?php echo $backgroundColor; ?&gt;;"&gt;

    &lt;h2&gt;Select Background Color&lt;/h2&gt;

    &lt;form method="POST"&gt;

        &lt;input type="submit" name="color" value="Red"&gt;

        &lt;input type="submit" name="color" value="Green"&gt;

        &lt;input type="submit" name="color" value="Blue"&gt;

    &lt;/form&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
    </section>

    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Browser Output</span>
            </div>

            <div class="output-content">
                <h3>Select Background Color</h3>

                <p>
                    <button type="button" disabled>Red</button>
                    <button type="button" disabled>Green</button>
                    <button type="button" disabled>Blue</button>
                </p>

                <p>Selecting a button changes the page background to its respective colour.</p>
            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Initial Background Colour</h3>
                <p>
                    The $backgroundColor variable initially stores
                    "white", which is used as the default background.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Multiple Submit Buttons</h3>
                <p>
                    Three submit buttons are created with the same
                    name, color, but different values: Red, Green
                    and Blue.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Using $_REQUEST</h3>
                <p>
                    The $_REQUEST superglobal array collects request
                    data. Here, it reads the value submitted by the
                    clicked button.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. If-Else Conditions</h3>
                <p>
                    PHP checks the selected button value and assigns
                    the corresponding background colour.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Applying the Background Colour</h3>
                <p>
                    PHP inserts the selected colour into the
                    body's inline background-color style.
                </p>
            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
