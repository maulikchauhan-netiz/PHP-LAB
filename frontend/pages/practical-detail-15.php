
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 15 | PHP.LAB</title>

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
    <span class="current-page">Practical 15</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 03 · PRACTICAL 15</span>
        <h1>Listbox and Combobox</h1>
        <p>Create and handle listbox and combobox controls using PHP forms.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            HTML select elements allow users to choose options from
            a list. A dropdown list is commonly called a combobox,
            while a listbox displays multiple options in a visible list.
            PHP can receive the selected values after form submission.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create a dropdown list (combobox).</li>
            <li>Create a listbox with multiple selection.</li>
            <li>Submit selected values using the POST method.</li>
            <li>Retrieve and display selected values using PHP.</li>
        </ul>
    </section>

    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Listbox and Combobox</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

$city = "";
$subjects = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $city = $_POST["city"] ?? "";

    $subjects = $_POST["subjects"] ?? array();

}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Student Selection Form&lt;/h2&gt;

&lt;form method="POST"&gt;

    &lt;h3&gt;Select Your City (Combobox):&lt;/h3&gt;

    &lt;select name="city" required&gt;

        &lt;option value=""&gt;-- Select City --&lt;/option&gt;
        &lt;option value="Rajkot"&gt;Rajkot&lt;/option&gt;
        &lt;option value="Ahmedabad"&gt;Ahmedabad&lt;/option&gt;
        &lt;option value="Surat"&gt;Surat&lt;/option&gt;
        &lt;option value="Vadodara"&gt;Vadodara&lt;/option&gt;

    &lt;/select&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;h3&gt;Select Your Subjects (Listbox):&lt;/h3&gt;

    &lt;select name="subjects[]" multiple size="4"&gt;

        &lt;option value="PHP"&gt;PHP&lt;/option&gt;
        &lt;option value="HTML"&gt;HTML&lt;/option&gt;
        &lt;option value="CSS"&gt;CSS&lt;/option&gt;
        &lt;option value="JavaScript"&gt;JavaScript&lt;/option&gt;

    &lt;/select&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;input type="submit" name="submit" value="Submit"&gt;

&lt;/form&gt;

&lt;?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "&lt;h3&gt;Submitted Information&lt;/h3&gt;";

    echo "Selected City: " . htmlspecialchars($city) . "&lt;br&gt;";

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
                <h3>Student Selection Form</h3>

                <p><strong>Select Your City (Combobox):</strong></p>
                <p>Ahmedabad ▼</p>

                <p><strong>Select Your Subjects (Listbox):</strong></p>
                <p>PHP</p>
                <p>HTML</p>
                <p>CSS</p>
                <p>JavaScript</p>

                <hr>

                <h3>Submitted Information</h3>
                <p>Selected City: Ahmedabad</p>
                <p>Selected Subjects:</p>
                <p>PHP</p>
                <p>HTML</p>
            </div>
        </div>
    </section>

    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Combobox</h3>
                <p>
                    The select element without the multiple attribute
                    creates a dropdown list. The user can select one city.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Listbox</h3>
                <p>
                    The multiple attribute allows users to select
                    multiple subjects. The size attribute controls how
                    many options are visible at once.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. POST Method</h3>
                <p>
                    The form sends the selected city and subjects to
                    the same PHP page using the POST method.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Receiving Form Data</h3>
                <p>
                    PHP retrieves the city through $_POST["city"].
                    Selected subjects are received as an array through
                    $_POST["subjects"].
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Displaying Selected Values</h3>
                <p>
                    The foreach loop displays every selected subject.
                    htmlspecialchars() safely displays the submitted
                    text in the browser.
                </p>
            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
