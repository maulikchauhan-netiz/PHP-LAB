
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 29 | PHP.LAB</title>

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
    <span class="current-page">Practical 29</span>
</div>

<main class="practical-detail">

    <!-- HEADER -->
    <section class="detail-header">
        <span class="detail-label">MODULE 05 · PRACTICAL 29</span>
        <h1>MVC Contact Management</h1>
        <p>Develop a contact management application using Model-View-Controller architecture with add, update, delete and search operations.</p>
    </section>

    <!-- OVERVIEW -->
    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            MVC stands for Model-View-Controller. It is a software
            architecture pattern that separates an application
            into three main components.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Understand MVC architecture.</li>
            <li>Connect PHP with a MySQL database.</li>
            <li>Create a Model to manage database operations.</li>
            <li>Create a View to display application data.</li>
            <li>Create a Controller to handle user requests.</li>
            <li>Perform add, update, delete and search operations.</li>
        </ul>
    </section>

    <!-- MVC CONCEPT -->
    <section class="detail-overview">
        <h2>MVC Architecture</h2>

        <h3>1. Model</h3>
        <p>
            The Model manages application data and database
            operations such as inserting, updating, deleting
            and retrieving contacts.
        </p>

        <h3>2. View</h3>
        <p>
            The View displays the application interface,
            forms and contact records to the user.
        </p>

        <h3>3. Controller</h3>
        <p>
            The Controller receives user requests, communicates
            with the Model and selects the appropriate data
            for the View.
        </p>
    </section>

    <!-- REQUIREMENTS -->
    <section class="detail-overview">
        <h2>Requirements</h2>

        <ul>
            <li>XAMPP installed on your computer.</li>
            <li>Apache and MySQL services running.</li>
            <li>MySQL database named contact_db.</li>
            <li>PHP and MySQLi support.</li>
            <li>Basic knowledge of PHP and OOP.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Model – Database Operations</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

class ContactModel {

    private $conn;

    // Database Connection
    public function __construct() {

        $this-&gt;conn = new mysqli(
            "localhost",
            "root",
            "",
            "contact_db"
        );

        if ($this-&gt;conn-&gt;connect_error) {
            die("Database Connection Failed");
        }

        // Create Table If It Does Not Exist
        $sql = "CREATE TABLE IF NOT EXISTS contacts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            phone VARCHAR(15) NOT NULL,
            email VARCHAR(100) NOT NULL
        )";

        $this-&gt;conn-&gt;query($sql);
    }

    // Add Contact
    public function addContact($name, $phone, $email) {

        $stmt = $this-&gt;conn-&gt;prepare(
            "INSERT INTO contacts (name, phone, email)
             VALUES (?, ?, ?)"
        );

        $stmt-&gt;bind_param("sss", $name, $phone, $email);

        $result = $stmt-&gt;execute();

        $stmt-&gt;close();

        return $result;
    }

    // Display All Contacts or Search Contacts
    public function getContacts($search = "") {

        if ($search !== "") {

            $searchTerm = "%" . $search . "%";

            $stmt = $this-&gt;conn-&gt;prepare(
                "SELECT * FROM contacts
                 WHERE name LIKE ?
                 OR phone LIKE ?
                 OR email LIKE ?
                 ORDER BY id DESC"
            );

            $stmt-&gt;bind_param(
                "sss",
                $searchTerm,
                $searchTerm,
                $searchTerm
            );

            $stmt-&gt;execute();

            $result = $stmt-&gt;get_result();

            $contacts = $result-&gt;fetch_all(MYSQLI_ASSOC);

            $stmt-&gt;close();

            return $contacts;
        }

        $result = $this-&gt;conn-&gt;query(
            "SELECT * FROM contacts ORDER BY id DESC"
        );

        return $result-&gt;fetch_all(MYSQLI_ASSOC);
    }

    // Get One Contact
    public function getContactById($id) {

        $stmt = $this-&gt;conn-&gt;prepare(
            "SELECT * FROM contacts WHERE id = ?"
        );

        $stmt-&gt;bind_param("i", $id);

        $stmt-&gt;execute();

        $result = $stmt-&gt;get_result();

        $contact = $result-&gt;fetch_assoc();

        $stmt-&gt;close();

        return $contact;
    }

    // Update Contact
    public function updateContact($id, $name, $phone, $email) {

        $stmt = $this-&gt;conn-&gt;prepare(
            "UPDATE contacts
             SET name = ?, phone = ?, email = ?
             WHERE id = ?"
        );

        $stmt-&gt;bind_param(
            "sssi",
            $name,
            $phone,
            $email,
            $id
        );

        $result = $stmt-&gt;execute();

        $stmt-&gt;close();

        return $result;
    }

    // Delete Contact
    public function deleteContact($id) {

        $stmt = $this-&gt;conn-&gt;prepare(
            "DELETE FROM contacts WHERE id = ?"
        );

        $stmt-&gt;bind_param("i", $id);

        $result = $stmt-&gt;execute();

        $stmt-&gt;close();

        return $result;
    }

    // Close Database Connection
    public function closeConnection() {
        $this-&gt;conn-&gt;close();
    }
}

?&gt;</code></pre>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Controller – Handle User Requests</h2>
            </div>
            <button class="copy-code-btn" id="copyControllerBtn">Copy Code</button>
        </div>

<pre><code id="controllerSourceCode">&lt;?php

class ContactController {

    private $model;

    public function __construct($model) {
        $this-&gt;model = $model;
    }

    // Handle Add, Update and Delete Requests
    public function handleRequest() {

        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            return;
        }

        $action = $_POST["action"] ?? "";

        if ($action === "add" || $action === "update") {

            $name = trim($_POST["name"] ?? "");
            $phone = trim($_POST["phone"] ?? "");
            $email = trim($_POST["email"] ?? "");

            if (
                $name === "" ||
                $phone === "" ||
                !filter_var($email, FILTER_VALIDATE_EMAIL)
            ) {

                $_SESSION["message"] = "Please enter valid contact details.";

            } else {

                if ($action === "add") {

                    $success = $this-&gt;model-&gt;addContact(
                        $name,
                        $phone,
                        $email
                    );

                    $_SESSION["message"] = $success
                        ? "Contact Added Successfully."
                        : "Unable to Add Contact.";

                } else {

                    $id = (int) ($_POST["id"] ?? 0);

                    $success = $this-&gt;model-&gt;updateContact(
                        $id,
                        $name,
                        $phone,
                        $email
                    );

                    $_SESSION["message"] = $success
                        ? "Contact Updated Successfully."
                        : "Unable to Update Contact.";
                }
            }

        } elseif ($action === "delete") {

            $id = (int) ($_POST["id"] ?? 0);

            $success = $this-&gt;model-&gt;deleteContact($id);

            $_SESSION["message"] = $success
                ? "Contact Deleted Successfully."
                : "Unable to Delete Contact.";

        }

        // Redirect After Form Submission
        header("Location: index.php");
        exit();
    }

    // Get Contacts
    public function getContacts($search = "") {
        return $this-&gt;model-&gt;getContacts($search);
    }

    // Get Contact For Editing
    public function getContactById($id) {
        return $this-&gt;model-&gt;getContactById($id);
    }
}

?&gt;</code></pre>
    </section>

    <!-- PROGRAM 03 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 03</span>
                <h2>View – Display Contact Application</h2>
            </div>
            <button class="copy-code-btn" id="copyViewBtn">Copy Code</button>
        </div>

<pre><code id="viewSourceCode">&lt;?php

function escape($value) {
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        "UTF-8"
    );
}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Contact Management&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;h2&gt;MVC Contact Management System&lt;/h2&gt;

    &lt;?php if ($message !== ""): ?&gt;
        &lt;p&gt;&lt;?php echo escape($message); ?&gt;&lt;/p&gt;
    &lt;?php endif; ?&gt;

    &lt;h3&gt;
        &lt;?php echo $editing ? "Update Contact" : "Add New Contact"; ?&gt;
    &lt;/h3&gt;

    &lt;form method="POST"&gt;

        &lt;input type="hidden"
               name="action"
               value="&lt;?php echo $editing ? "update" : "add"; ?&gt;"&gt;

        &lt;?php if ($editing): ?&gt;
            &lt;input type="hidden"
                   name="id"
                   value="&lt;?php echo escape($editing["id"]); ?&gt;"&gt;
        &lt;?php endif; ?&gt;

        Name:
        &lt;input type="text"
               name="name"
               value="&lt;?php echo escape($editing["name"] ?? ""); ?&gt;"
               required&gt;

        &lt;br&gt;&lt;br&gt;

        Phone:
        &lt;input type="tel"
               name="phone"
               value="&lt;?php echo escape($editing["phone"] ?? ""); ?&gt;"
               required&gt;

        &lt;br&gt;&lt;br&gt;

        Email:
        &lt;input type="email"
               name="email"
               value="&lt;?php echo escape($editing["email"] ?? ""); ?&gt;"
               required&gt;

        &lt;br&gt;&lt;br&gt;

        &lt;input type="submit"
               value="&lt;?php echo $editing ? "Update Contact" : "Add Contact"; ?&gt;"&gt;

        &lt;?php if ($editing): ?&gt;
            &lt;a href="index.php"&gt;Cancel&lt;/a&gt;
        &lt;?php endif; ?&gt;

    &lt;/form&gt;

    &lt;hr&gt;

    &lt;h3&gt;Search Contacts&lt;/h3&gt;

    &lt;form method="GET"&gt;

        &lt;input type="text"
               name="search"
               placeholder="Search by name, phone or email"
               value="&lt;?php echo escape($search); ?&gt;"&gt;

        &lt;input type="submit" value="Search"&gt;

        &lt;a href="index.php"&gt;Show All&lt;/a&gt;

    &lt;/form&gt;

    &lt;h3&gt;Contact Records&lt;/h3&gt;

    &lt;table border="1" cellpadding="10"&gt;

        &lt;tr&gt;
            &lt;th&gt;ID&lt;/th&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Phone&lt;/th&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;th&gt;Actions&lt;/th&gt;
        &lt;/tr&gt;

        &lt;?php if (!empty($contacts)): ?&gt;

            &lt;?php foreach ($contacts as $contact): ?&gt;

                &lt;tr&gt;

                    &lt;td&gt;&lt;?php echo escape($contact["id"]); ?&gt;&lt;/td&gt;

                    &lt;td&gt;&lt;?php echo escape($contact["name"]); ?&gt;&lt;/td&gt;

                    &lt;td&gt;&lt;?php echo escape($contact["phone"]); ?&gt;&lt;/td&gt;

                    &lt;td&gt;&lt;?php echo escape($contact["email"]); ?&gt;&lt;/td&gt;

                    &lt;td&gt;

                        &lt;a href="index.php?edit=&lt;?php echo escape($contact["id"]); ?&gt;"&gt;
                            Edit
                        &lt;/a&gt;

                        &lt;form method="POST" style="display:inline;"&gt;

                            &lt;input type="hidden"
                                   name="action"
                                   value="delete"&gt;

                            &lt;input type="hidden"
                                   name="id"
                                   value="&lt;?php echo escape($contact["id"]); ?&gt;"&gt;

                            &lt;button type="submit"
                                    onclick="return confirm('Delete this contact?');"&gt;
                                Delete
                            &lt;/button&gt;

                        &lt;/form&gt;

                    &lt;/td&gt;

                &lt;/tr&gt;

            &lt;?php endforeach; ?&gt;

        &lt;?php else: ?&gt;

            &lt;tr&gt;
                &lt;td colspan="5"&gt;No Contacts Found.&lt;/td&gt;
            &lt;/tr&gt;

        &lt;?php endif; ?&gt;

    &lt;/table&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
    </section>

    <!-- PROGRAM 04 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 04</span>
                <h2>Main File – Connect MVC Components</h2>
            </div>
            <button class="copy-code-btn" id="copyMainBtn">Copy Code</button>
        </div>

<pre><code id="mainSourceCode">&lt;?php

session_start();

// Include Model and Controller
require_once "ContactModel.php";
require_once "ContactController.php";

// Create Model Object
$model = new ContactModel();

// Create Controller Object
$controller = new ContactController($model);

// Handle Form Requests
$controller-&gt;handleRequest();

// Get Search Value
$search = trim($_GET["search"] ?? "");

// Get Contact Records
$contacts = $controller-&gt;getContacts($search);

// Check Whether Editing a Contact
$editing = null;

if (isset($_GET["edit"])) {

    $id = (int) $_GET["edit"];

    $editing = $controller-&gt;getContactById($id);

}

// Get Message
$message = $_SESSION["message"] ?? "";

unset($_SESSION["message"]);

// Load View
require "contact_view.php";

// Close Database Connection
$model-&gt;closeConnection();

?&gt;</code></pre>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>MVC Contact Management System</span>
            </div>

            <div class="output-content">
                <h3>Add New Contact</h3>
                <p>Name: [Rahul]</p>
                <p>Phone: [9876543210]</p>
                <p>Email: [rahul@example.com]</p>
                <p>[Add Contact]</p>

                <h3>Contact Records</h3>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rahul</td>
                        <td>9876543210</td>
                        <td>rahul@example.com</td>
                        <td>Edit | Delete</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Priya</td>
                        <td>9876543211</td>
                        <td>priya@example.com</td>
                        <td>Edit | Delete</td>
                    </tr>
                </table>
            </div>
        </div>

        <p><small>Illustrative output. Actual records depend on your database.</small></p>
    </section>

    <!-- EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. Model</h3>
                <p>
                    ContactModel.php handles database connection
                    and all contact-related database operations.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Controller</h3>
                <p>
                    ContactController.php receives form requests
                    and calls the appropriate Model methods.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. View</h3>
                <p>
                    contact_view.php displays forms, search
                    options and contact records.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. Main File</h3>
                <p>
                    index.php connects the Model, Controller
                    and View to run the application.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. CRUD Operations</h3>
                <p>
                    CRUD represents Create, Read, Update
                    and Delete operations on database records.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. Search Operation</h3>
                <p>
                    The LIKE operator searches contacts
                    by name, phone number or email address.
                </p>
            </div>

        </div>
    </section>

    <!-- FOLDER STRUCTURE -->
    <section class="detail-overview">
        <h2>Project Folder Structure</h2>

        <pre><code>Contact-Management/
│
├── ContactModel.php
├── ContactController.php
├── contact_view.php
└── index.php</code></pre>
    </section>

    <!-- IMPORTANT NOTES -->
    <section class="detail-overview">
        <h2>Important Notes</h2>

        <ul>
            <li>Create a MySQL database named contact_db using phpMyAdmin.</li>
            <li>The contacts table is created automatically by the Model.</li>
            <li>Save all four PHP files inside the same project folder.</li>
            <li>Place the project folder inside XAMPP's htdocs directory.</li>
            <li>Open the application through localhost.</li>
            <li>Test adding, editing, deleting and searching contacts.</li>
            <li>Prepared statements are used for database queries.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const copyButtons = [
    ["copyControllerBtn", "controllerSourceCode"],
    ["copyViewBtn", "viewSourceCode"],
    ["copyMainBtn", "mainSourceCode"]
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
