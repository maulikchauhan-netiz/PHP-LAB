
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 27 | PHP.LAB</title>

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
    <a href="practicals.php?module=5">Previous</a>
    <span>/</span>
    <span class="current-page">Practical 27</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 05 · PRACTICAL 27</span>
        <h1>Table Data and Search Operation</h1>
        <p>Display MySQL table records as hyperlinks and search for specific employee records using PHP.</p>
    </section>

    <!-- OVERVIEW -->
    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            PHP can retrieve records from a MySQL database and
            display them in an HTML table. Hyperlinks can be used
            to select individual records, while search operations
            help find specific information.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Connect PHP with a MySQL database.</li>
            <li>Retrieve employee records from a database table.</li>
            <li>Display employee records as hyperlinks.</li>
            <li>Select a particular employee record.</li>
            <li>Perform search operations using employee name.</li>
        </ul>
    </section>

    <!-- REQUIREMENTS -->
    <section class="detail-overview">
        <h2>Requirements</h2>

        <ul>
            <li>XAMPP installed on your computer.</li>
            <li>Apache and MySQL services running.</li>
            <li>Database name: employee.</li>
            <li>Table name: edata.</li>
            <li>Existing employee records in the database.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Display Table Data as Hyperlinks</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

// 1. Connect to MySQL Database
$conn = new mysqli("localhost", "root", "", "employee");

// Check Connection
if ($conn-&gt;connect_error) {
    die("Connection Failed: " . $conn-&gt;connect_error);
}

// 2. Retrieve Employee Records
$result = $conn-&gt;query("SELECT * FROM edata");

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;Employee Records&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;h2&gt;Employee Records&lt;/h2&gt;

    &lt;table border="1" cellpadding="10"&gt;

        &lt;tr&gt;
            &lt;th&gt;ID&lt;/th&gt;
            &lt;th&gt;Employee Name&lt;/th&gt;
            &lt;th&gt;Mobile Number&lt;/th&gt;
        &lt;/tr&gt;

        &lt;?php

        if ($result-&gt;num_rows &gt; 0) {

            while ($row = $result-&gt;fetch_assoc()) {

                echo "&lt;tr&gt;";

                echo "&lt;td&gt;" . $row["id"] . "&lt;/td&gt;";

                echo "&lt;td&gt;&lt;a href='employee_detail.php?id="
                    . $row["id"] . "'&gt;"
                    . htmlspecialchars($row["employee_name"])
                    . "&lt;/a&gt;&lt;/td&gt;";

                echo "&lt;td&gt;"
                    . htmlspecialchars($row["mobile_number"])
                    . "&lt;/td&gt;";

                echo "&lt;/tr&gt;";

            }

        } else {

            echo "&lt;tr&gt;&lt;td colspan='3'&gt;No Records Found&lt;/td&gt;&lt;/tr&gt;";

        }

        $conn-&gt;close();

        ?&gt;

    &lt;/table&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Display Selected Employee Details</h2>
            </div>
            <button class="copy-code-btn" id="copyDetailCodeBtn">Copy Code</button>
        </div>

<pre><code id="detailSourceCode">&lt;?php

// Connect to Database
$conn = new mysqli("localhost", "root", "", "employee");

if ($conn-&gt;connect_error) {
    die("Connection Failed: " . $conn-&gt;connect_error);
}

// Get Employee ID from URL
$id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;

// Retrieve Selected Employee
$stmt = $conn-&gt;prepare(
    "SELECT * FROM edata WHERE id = ?"
);

$stmt-&gt;bind_param("i", $id);
$stmt-&gt;execute();

$result = $stmt-&gt;get_result();

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;Employee Details&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;h2&gt;Selected Employee Details&lt;/h2&gt;

    &lt;?php

    if ($row = $result-&gt;fetch_assoc()) {

        echo "Employee ID: " . $row["id"] . "&lt;br&gt;";
        echo "Employee Name: "
            . htmlspecialchars($row["employee_name"]) . "&lt;br&gt;";
        echo "Mobile Number: "
            . htmlspecialchars($row["mobile_number"]);

    } else {

        echo "Employee Record Not Found.";

    }

    $stmt-&gt;close();
    $conn-&gt;close();

    ?&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;a href="employee_list.php"&gt;Back to Employee List&lt;/a&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
    </section>

    <!-- PROGRAM 03 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 03</span>
                <h2>Search Employee Records</h2>
            </div>
            <button class="copy-code-btn" id="copySearchCodeBtn">Copy Code</button>
        </div>

<pre><code id="searchSourceCode">&lt;?php

// Connect to Database
$conn = new mysqli("localhost", "root", "", "employee");

if ($conn-&gt;connect_error) {
    die("Connection Failed: " . $conn-&gt;connect_error);
}

$search = "";
$result = null;

// Check Search Request
if (isset($_GET["search"])) {

    $search = trim($_GET["search"]);

    // Search Employee by Name
    $stmt = $conn-&gt;prepare(
        "SELECT * FROM edata
         WHERE employee_name LIKE ?"
    );

    $searchTerm = "%" . $search . "%";

    $stmt-&gt;bind_param("s", $searchTerm);
    $stmt-&gt;execute();

    $result = $stmt-&gt;get_result();

}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;Search Employee&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;h2&gt;Search Employee Records&lt;/h2&gt;

    &lt;form method="GET"&gt;

        Enter Employee Name:

        &lt;input type="text" name="search"
               value="&lt;?php echo htmlspecialchars($search); ?&gt;"
               required&gt;

        &lt;input type="submit" value="Search"&gt;

    &lt;/form&gt;

    &lt;h3&gt;Search Results&lt;/h3&gt;

    &lt;?php

    if ($result !== null) {

        if ($result-&gt;num_rows &gt; 0) {

            echo "&lt;table border='1' cellpadding='10'&gt;";

            echo "&lt;tr&gt;
                    &lt;th&gt;ID&lt;/th&gt;
                    &lt;th&gt;Employee Name&lt;/th&gt;
                    &lt;th&gt;Mobile Number&lt;/th&gt;
                  &lt;/tr&gt;";

            while ($row = $result-&gt;fetch_assoc()) {

                echo "&lt;tr&gt;";

                echo "&lt;td&gt;" . $row["id"] . "&lt;/td&gt;";

                echo "&lt;td&gt;"
                    . htmlspecialchars($row["employee_name"])
                    . "&lt;/td&gt;";

                echo "&lt;td&gt;"
                    . htmlspecialchars($row["mobile_number"])
                    . "&lt;/td&gt;";

                echo "&lt;/tr&gt;";

            }

            echo "&lt;/table&gt;";

        } else {

            echo "No Matching Employee Found.";

        }

        $stmt-&gt;close();

    }

    $conn-&gt;close();

    ?&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – Employee Records</span>
            </div>

            <div class="output-content">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Mobile Number</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><u>Rahul</u></td>
                        <td>9876543210</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><u>Priya</u></td>
                        <td>9876543211</td>
                    </tr>
                </table>
                <p>Employee names are clickable hyperlinks.</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – Selected Employee</span>
            </div>

            <div class="output-content">
                <p>Employee ID: 1</p>
                <p>Employee Name: Rahul</p>
                <p>Mobile Number: 9876543210</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 03 – Search Results</span>
            </div>

            <div class="output-content">
                <p>Enter Employee Name: [Rahul]</p>
                <p>[Search]</p>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Mobile Number</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rahul</td>
                        <td>9876543210</td>
                    </tr>
                </table>
            </div>
        </div>

        <p><small>Illustrative output. Actual records depend on your database.</small></p>
    </section>

    <!-- PROGRAM EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Database Connection</h3>
                <p>
                    MySQLi establishes a connection between
                    PHP and the employee database.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. SELECT Query</h3>
                <p>
                    SELECT retrieves employee records from
                    the edata table.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. HTML Hyperlinks</h3>
                <p>
                    Each employee name is displayed as a
                    clickable hyperlink containing the
                    employee ID.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. GET Method</h3>
                <p>
                    The GET method sends the employee ID
                    through the URL to the detail page.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. Employee Search</h3>
                <p>
                    The LIKE operator searches employee
                    names that match the entered text.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. Prepared Statements</h3>
                <p>
                    Prepared statements safely pass the
                    employee ID and search term into SQL queries.
                </p>
            </div>

        </div>
    </section>

    <!-- IMPORTANT NOTES -->
    <section class="detail-overview">
        <h2>Important Notes</h2>

        <ul>
            <li>Make sure the employee database and edata table exist.</li>
            <li>Save Program 01 as employee_list.php.</li>
            <li>Save Program 02 as employee_detail.php.</li>
            <li>Save Program 03 as search_employee.php.</li>
            <li>All three files should be in the same folder.</li>
            <li>Employee names are linked using their unique ID.</li>
            <li>The LIKE operator supports partial name searching.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const copyButtons = [
    ["copyDetailCodeBtn", "detailSourceCode"],
    ["copySearchCodeBtn", "searchSourceCode"]
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
