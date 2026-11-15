
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 25 | PHP.LAB</title>

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
    <span class="current-page">Practical 25</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 05 · PRACTICAL 25</span>
        <h1>MySQL Database Operations</h1>
        <p>Create an employee database and perform insert, update, delete and display operations using PHP and MySQL.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            MySQL is a relational database management system used
            to store and manage data. PHP can connect to MySQL
            using MySQLi and perform database operations.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create a database named employee.</li>
            <li>Create a table named edata.</li>
            <li>Store employee name and mobile number.</li>
            <li>Insert new employee records.</li>
            <li>Update and delete existing records.</li>
            <li>Display all employee records in table format.</li>
        </ul>
    </section>

    <section class="detail-overview">
        <h2>Requirements</h2>

        <ul>
            <li>XAMPP installed on your computer.</li>
            <li>Apache and MySQL services running.</li>
            <li>PHP with MySQLi extension enabled.</li>
            <li>Web browser to access the application.</li>
        </ul>

        <h3>Database Details</h3>
        <ul>
            <li>Database Name: employee</li>
            <li>Table Name: edata</li>
            <li>Fields: id, employee_name, mobile_number</li>
        </ul>
    </section>

    <!-- SOURCE CODE -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">SOURCE CODE</span>
                <h2>Employee Database Application</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

// 1. Connect to MySQL Server
$conn = new mysqli("localhost", "root", "");

// Check Connection
if ($conn-&gt;connect_error) {
    die("Connection Failed: " . $conn-&gt;connect_error);
}

// 2. Create Database
$sql = "CREATE DATABASE IF NOT EXISTS employee";

if ($conn-&gt;query($sql) === TRUE) {
    echo "Database Created Successfully.&lt;br&gt;";
}

// 3. Select Database
$conn-&gt;select_db("employee");

// 4. Create Table
$sql = "CREATE TABLE IF NOT EXISTS edata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(100) NOT NULL,
    mobile_number VARCHAR(15) NOT NULL
)";

if ($conn-&gt;query($sql) === TRUE) {
    echo "Table Created Successfully.&lt;br&gt;";
}

// 5. Insert Employee Record
if (isset($_POST["insert"])) {

    $name = trim($_POST["employee_name"]);
    $mobile = trim($_POST["mobile_number"]);

    $stmt = $conn-&gt;prepare(
        "INSERT INTO edata (employee_name, mobile_number) VALUES (?, ?)"
    );

    $stmt-&gt;bind_param("ss", $name, $mobile);

    if ($stmt-&gt;execute()) {
        echo "Employee Inserted Successfully.&lt;br&gt;";
    }

    $stmt-&gt;close();
}

// 6. Update Employee Record
if (isset($_POST["update"])) {

    $id = (int) $_POST["id"];
    $name = trim($_POST["employee_name"]);
    $mobile = trim($_POST["mobile_number"]);

    $stmt = $conn-&gt;prepare(
        "UPDATE edata SET employee_name = ?, mobile_number = ? WHERE id = ?"
    );

    $stmt-&gt;bind_param("ssi", $name, $mobile, $id);

    if ($stmt-&gt;execute()) {
        echo "Employee Updated Successfully.&lt;br&gt;";
    }

    $stmt-&gt;close();
}

// 7. Delete Employee Record
if (isset($_POST["delete"])) {

    $id = (int) $_POST["id"];

    $stmt = $conn-&gt;prepare(
        "DELETE FROM edata WHERE id = ?"
    );

    $stmt-&gt;bind_param("i", $id);

    if ($stmt-&gt;execute()) {
        echo "Employee Deleted Successfully.&lt;br&gt;";
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

    &lt;table border="1" cellpadding="10" cellspacing="0"&gt;

        &lt;tr&gt;
            &lt;th&gt;ID&lt;/th&gt;
            &lt;th&gt;Employee Name&lt;/th&gt;
            &lt;th&gt;Mobile Number&lt;/th&gt;
        &lt;/tr&gt;

        &lt;?php

        // 8. Display All Employee Records
        $result = $conn-&gt;query("SELECT * FROM edata");

        if ($result-&gt;num_rows &gt; 0) {

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

        } else {

            echo "&lt;tr&gt;&lt;td colspan='3'&gt;No Records Found&lt;/td&gt;&lt;/tr&gt;";

        }

        $conn-&gt;close();

        ?&gt;

    &lt;/table&gt;

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
                <p><strong>Database Created Successfully.</strong></p>
                <p><strong>Table Created Successfully.</strong></p>

                <h3>Insert Employee</h3>
                <p>Employee Name: [Rahul]</p>
                <p>Mobile Number: [9876543210]</p>
                <p>[Insert Employee]</p>

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
        <p><small>Illustrative output. Actual records depend on the data you insert.</small></p>
    </section>

    <!-- EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. MySQL Connection</h3>
                <p>
                    The mysqli() constructor establishes a connection
                    between PHP and the MySQL server.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Database Creation</h3>
                <p>
                    CREATE DATABASE IF NOT EXISTS creates the
                    employee database if it does not already exist.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. Table Creation</h3>
                <p>
                    The edata table stores employee information.
                    The id field uniquely identifies each employee.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. INSERT Operation</h3>
                <p>
                    INSERT adds a new employee name and mobile
                    number to the edata table.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. UPDATE Operation</h3>
                <p>
                    UPDATE modifies an existing employee record
                    using its unique employee ID.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. DELETE Operation</h3>
                <p>
                    DELETE removes an employee record using
                    the employee ID.
                </p>
            </div>

            <div class="explanation-item">
                <h3>7. SELECT Operation</h3>
                <p>
                    SELECT retrieves employee records from the
                    database and displays them in an HTML table.
                </p>
            </div>

            <div class="explanation-item">
                <h3>8. Prepared Statements</h3>
                <p>
                    Prepared statements separate SQL instructions
                    from user input and help prevent SQL injection.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Notes</h2>
        <ul>
            <li>Start Apache and MySQL from XAMPP before running the program.</li>
            <li>Save the program as employee.php.</li>
            <li>Place it inside your XAMPP htdocs project folder.</li>
            <li>Open it using http://localhost/your-folder/employee.php.</li>
            <li>The default XAMPP MySQL username is commonly root with an empty password.</li>
            <li>Use the employee ID to update or delete a particular record.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
