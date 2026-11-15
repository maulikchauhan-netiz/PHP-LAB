
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 26 | PHP.LAB</title>

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
    <span class="current-page">Practical 26</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 05 · PRACTICAL 26</span>
        <h1>MySQL Operations Using HTML Forms</h1>
        <p>Perform insert, update and delete operations on a MySQL database using HTML forms and PHP.</p>
    </section>

    <!-- OVERVIEW -->
    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            HTML forms allow users to enter and submit information.
            PHP receives the submitted data and communicates with
            MySQL to perform database operations.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Connect PHP with a MySQL database.</li>
            <li>Create HTML forms to accept employee details.</li>
            <li>Insert employee records into a database.</li>
            <li>Update existing employee records.</li>
            <li>Delete employee records using employee ID.</li>
            <li>Display employee records from the database.</li>
        </ul>
    </section>

    <!-- REQUIREMENTS -->
    <section class="detail-overview">
        <h2>Requirements</h2>

        <ul>
            <li>XAMPP installed on your computer.</li>
            <li>Apache and MySQL services running.</li>
            <li>PHP with MySQLi extension enabled.</li>
            <li>Database: employee.</li>
            <li>Table: edata.</li>
        </ul>
    </section>

    <!-- SOURCE CODE -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">SOURCE CODE</span>
                <h2>MySQL Operations Using HTML Forms</h2>
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

// Create Table if it does not exist
$sql = "CREATE TABLE IF NOT EXISTS edata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(100) NOT NULL,
    mobile_number VARCHAR(15) NOT NULL
)";

$conn-&gt;query($sql);

$message = "";

// 2. Insert Employee Record
if (isset($_POST["insert"])) {

    $name = trim($_POST["employee_name"]);
    $mobile = trim($_POST["mobile_number"]);

    $stmt = $conn-&gt;prepare(
        "INSERT INTO edata (employee_name, mobile_number)
         VALUES (?, ?)"
    );

    $stmt-&gt;bind_param("ss", $name, $mobile);

    if ($stmt-&gt;execute()) {
        $message = "Employee Inserted Successfully.";
    } else {
        $message = "Unable to Insert Employee.";
    }

    $stmt-&gt;close();
}

// 3. Update Employee Record
if (isset($_POST["update"])) {

    $id = (int) $_POST["id"];
    $name = trim($_POST["employee_name"]);
    $mobile = trim($_POST["mobile_number"]);

    $stmt = $conn-&gt;prepare(
        "UPDATE edata
         SET employee_name = ?, mobile_number = ?
         WHERE id = ?"
    );

    $stmt-&gt;bind_param("ssi", $name, $mobile, $id);

    if ($stmt-&gt;execute()) {
        $message = $stmt-&gt;affected_rows &gt; 0
            ? "Employee Updated Successfully."
            : "No Employee Record Found or No Changes Made.";
    } else {
        $message = "Unable to Update Employee.";
    }

    $stmt-&gt;close();
}

// 4. Delete Employee Record
if (isset($_POST["delete"])) {

    $id = (int) $_POST["id"];

    $stmt = $conn-&gt;prepare(
        "DELETE FROM edata WHERE id = ?"
    );

    $stmt-&gt;bind_param("i", $id);

    if ($stmt-&gt;execute()) {
        $message = $stmt-&gt;affected_rows &gt; 0
            ? "Employee Deleted Successfully."
            : "Employee ID Not Found.";
    } else {
        $message = "Unable to Delete Employee.";
    }

    $stmt-&gt;close();
}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;Employee Management&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;h2&gt;Employee Management System&lt;/h2&gt;

    &lt;h3&gt;Insert Employee&lt;/h3&gt;

    &lt;form method="POST"&gt;

        Employee Name:
        &lt;input type="text" name="employee_name" required&gt;

        &lt;br&gt;&lt;br&gt;

        Mobile Number:
        &lt;input type="text" name="mobile_number"
               pattern="[0-9]{10}" maxlength="10" required&gt;

        &lt;br&gt;&lt;br&gt;

        &lt;input type="submit" name="insert" value="Insert Employee"&gt;

    &lt;/form&gt;

    &lt;hr&gt;

    &lt;h3&gt;Update Employee&lt;/h3&gt;

    &lt;form method="POST"&gt;

        Employee ID:
        &lt;input type="number" name="id" min="1" required&gt;

        &lt;br&gt;&lt;br&gt;

        Employee Name:
        &lt;input type="text" name="employee_name" required&gt;

        &lt;br&gt;&lt;br&gt;

        Mobile Number:
        &lt;input type="text" name="mobile_number"
               pattern="[0-9]{10}" maxlength="10" required&gt;

        &lt;br&gt;&lt;br&gt;

        &lt;input type="submit" name="update" value="Update Employee"&gt;

    &lt;/form&gt;

    &lt;hr&gt;

    &lt;h3&gt;Delete Employee&lt;/h3&gt;

    &lt;form method="POST"&gt;

        Employee ID:
        &lt;input type="number" name="id" min="1" required&gt;

        &lt;br&gt;&lt;br&gt;

        &lt;input type="submit" name="delete" value="Delete Employee"&gt;

    &lt;/form&gt;

    &lt;hr&gt;

    &lt;h3&gt;Employee Records&lt;/h3&gt;

    &lt;?php

    // 5. Display Employee Records
    $result = $conn-&gt;query("SELECT * FROM edata");

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

            echo "&lt;td&gt;" .
                htmlspecialchars($row["employee_name"]) .
                "&lt;/td&gt;";

            echo "&lt;td&gt;" .
                htmlspecialchars($row["mobile_number"]) .
                "&lt;/td&gt;";

            echo "&lt;/tr&gt;";

        }

        echo "&lt;/table&gt;";

    } else {

        echo "No Employee Records Found.";

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
                <span>Employee Management System</span>
            </div>

            <div class="output-content">

                <h3>Insert Employee</h3>
                <p>Employee Name: [Rahul]</p>
                <p>Mobile Number: [9876543210]</p>
                <p>[Insert Employee]</p>

                <h3>Update Employee</h3>
                <p>Employee ID: [1]</p>
                <p>Employee Name: [Rahul Patel]</p>
                <p>Mobile Number: [9876543211]</p>
                <p>[Update Employee]</p>

                <h3>Delete Employee</h3>
                <p>Employee ID: [1]</p>
                <p>[Delete Employee]</p>

                <h3>Employee Records</h3>

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
                    <tr>
                        <td>2</td>
                        <td>Priya</td>
                        <td>9876543211</td>
                    </tr>
                </table>

            </div>
        </div>

        <p><small>Illustrative output. Actual records depend on database operations.</small></p>
    </section>

    <!-- PROGRAM EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Database Connection</h3>
                <p>
                    The mysqli() constructor connects PHP
                    to the employee MySQL database.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. HTML Forms</h3>
                <p>
                    HTML forms collect employee details and
                    send them to PHP using the POST method.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. INSERT Operation</h3>
                <p>
                    INSERT adds a new employee record to
                    the edata table.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. UPDATE Operation</h3>
                <p>
                    UPDATE modifies employee details using
                    the employee ID.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. DELETE Operation</h3>
                <p>
                    DELETE removes an employee record
                    identified by its ID.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. SELECT Operation</h3>
                <p>
                    SELECT retrieves employee records
                    and displays them in an HTML table.
                </p>
            </div>

            <div class="explanation-item">
                <h3>7. Prepared Statements</h3>
                <p>
                    Prepared statements separate SQL queries
                    from user input and help prevent SQL injection.
                </p>
            </div>

        </div>
    </section>

    <!-- IMPORTANT NOTES -->
    <section class="detail-overview">
        <h2>Important Notes</h2>

        <ul>
            <li>Start Apache and MySQL from XAMPP.</li>
            <li>Practical 25 creates the employee database.</li>
            <li>Save the program as employee_form.php.</li>
            <li>Use the employee ID when updating or deleting records.</li>
            <li>Prepared statements help protect database operations.</li>
            <li>Mobile numbers are stored as VARCHAR, not INT.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
