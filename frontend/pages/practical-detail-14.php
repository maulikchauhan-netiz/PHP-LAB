
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 14 | PHP.LAB</title>

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
    <span class="current-page">Practical 14</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 03 · PRACTICAL 14</span>
        <h1>Radio Buttons and Checkboxes</h1>
        <p>Handle radio button and checkbox controls using PHP forms.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            Radio buttons allow users to select one option from a group,
            whereas checkboxes allow users to select multiple options.
            PHP processes the submitted values using form data.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create radio buttons in an HTML form.</li>
            <li>Retrieve the selected radio button value using PHP.</li>
            <li>Create multiple checkboxes.</li>
            <li>Retrieve multiple selected checkbox values using PHP.</li>
            <li>Display the submitted selections.</li>
        </ul>
    </section>

    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Radio Buttons and Checkboxes</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

$gender = "";
$subjects = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $gender = $_POST["gender"] ?? "";

    $subjects = $_POST["subjects"] ?? array();

}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Student Information Form&lt;/h2&gt;

&lt;form method="POST"&gt;

    &lt;h3&gt;Select Gender:&lt;/h3&gt;

    &lt;input type="radio" name="gender" value="Male" required&gt;
    Male

    &lt;input type="radio" name="gender" value="Female"&gt;
    Female

    &lt;br&gt;&lt;br&gt;

    &lt;h3&gt;Select Subjects:&lt;/h3&gt;

    &lt;input type="checkbox" name="subjects[]" value="PHP"&gt;
    PHP

    &lt;input type="checkbox" name="subjects[]" value="HTML"&gt;
    HTML

    &lt;input type="checkbox" name="subjects[]" value="CSS"&gt;
    CSS

    &lt;input type="checkbox" name="subjects[]" value="JavaScript"&gt;
    JavaScript

    &lt;br&gt;&lt;br&gt;

    &lt;input type="submit" name="submit" value="Submit"&gt;

&lt;/form&gt;

&lt;?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "&lt;h3&gt;Submitted Information&lt;/h3&gt;";

    echo "Gender: " . htmlspecialchars($gender) . "&lt;br&gt;";

    echo "Selected Subjects:&lt;br&gt;";

    if (!empty($subjects)) {

        foreach ($subjects as $subject) {
            echo htmlspecialchars($subject) . "&lt;br&gt;";
        }

    } else {

        echo "No subjects selected.";

    }

}

?&gt;

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
                <h3>Student Information Form</h3>

                <p><strong>Select Gender:</strong></p>
                <p>◉ Male &nbsp; ○ Female</p>

                <p><strong>Select Subjects:</strong></p>
                <p>☑ PHP &nbsp; ☑ HTML &nbsp; ☐ CSS &nbsp; ☑ JavaScript</p>

                <hr>

                <h3>Submitted Information</h3>
                <p>Gender: Male</p>
                <p>Selected Subjects:</p>
                <p>PHP</p>
                <p>HTML</p>
                <p>JavaScript</p>
            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Radio Buttons</h3>
                <p>
                    Radio buttons allow users to select only one option
                    from a group. Both gender options use the same name,
                    gender.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Checkboxes</h3>
                <p>
                    Checkboxes allow users to select multiple options.
                    The subjects[] name sends the selected values to PHP
                    as an array.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. POST Method</h3>
                <p>
                    The form submits the selected values using the POST
                    method. PHP receives them through the $_POST array.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Null Coalescing Operator</h3>
                <p>
                    The ?? operator provides a default value when a form
                    field is not submitted. This prevents undefined
                    array key warnings.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Foreach Loop</h3>
                <p>
                    The foreach loop displays each selected subject
                    from the checkbox array.
                </p>
            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
