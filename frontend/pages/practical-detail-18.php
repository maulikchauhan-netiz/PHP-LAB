
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 18 | PHP.LAB</title>

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
    <span class="current-page">Practical 18</span>
</div>

<main class="practical-detail">

    <section class="detail-header">
        <span class="detail-label">MODULE 03 · PRACTICAL 18</span>
        <h1>File Handling and Email</h1>
        <p>Read and write text files and send different types of emails using PHP.</p>
    </section>

    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            PHP provides built-in functions for working with files
            and sending emails. File handling allows applications
            to create, read and write files, while email functions
            can send plain-text messages, HTML messages and
            attachments.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create and write data into a text file.</li>
            <li>Read and display data from a text file.</li>
            <li>Send a plain-text email using PHP.</li>
            <li>Send an HTML email using PHP.</li>
            <li>Send an email with a file attachment.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>Read and Write Text File</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

$filename = "student.txt";

// Writing data into the file
$file = fopen($filename, "w");

fwrite($file, "Welcome to PHP.LAB!\n");
fwrite($file, "Learning PHP File Handling.");

fclose($file);

echo "&lt;h3&gt;Data Written Successfully&lt;/h3&gt;";

// Reading data from the file
$file = fopen($filename, "r");

$content = fread($file, filesize($filename));

fclose($file);

echo "&lt;h3&gt;File Content:&lt;/h3&gt;";

echo nl2br(htmlspecialchars($content));

?&gt;</code></pre>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>Send Plain-Text Email</h2>
            </div>
            <button class="copy-code-btn" id="copyEmailCodeBtn">Copy Code</button>
        </div>

<pre><code id="emailSourceCode">&lt;?php

$to = "receiver@example.com";

$subject = "PHP.LAB Email Test";

$message = "Hello!\n\n";
$message .= "This is a plain-text email sent using PHP.";
$message .= "\n\nThank you!";

$headers = "From: sender@example.com";

if (mail($to, $subject, $message, $headers)) {

    echo "Email accepted for sending.";

} else {

    echo "Email could not be sent.";

}

?&gt;</code></pre>
    </section>

    <!-- PROGRAM 03 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 03</span>
                <h2>Send HTML Email</h2>
            </div>
            <button class="copy-code-btn" id="copyHtmlEmailCodeBtn">Copy Code</button>
        </div>

<pre><code id="htmlEmailSourceCode">&lt;?php

$to = "receiver@example.com";

$subject = "PHP.LAB HTML Email";

$message = "
&lt;html&gt;
&lt;body&gt;
    &lt;h2 style='color: green;'&gt;Welcome to PHP.LAB!&lt;/h2&gt;
    &lt;p&gt;This is an HTML email sent using PHP.&lt;/p&gt;
    &lt;p&gt;Thank you for learning with us.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: sender@example.com";

if (mail($to, $subject, $message, $headers)) {

    echo "HTML email accepted for sending.";

} else {

    echo "HTML email could not be sent.";

}

?&gt;</code></pre>
    </section>

    <!-- PROGRAM 04 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 04</span>
                <h2>Send Email with Attachment</h2>
            </div>
            <button class="copy-code-btn" id="copyAttachmentCodeBtn">Copy Code</button>
        </div>

<pre><code id="attachmentSourceCode">&lt;?php

$to = "receiver@example.com";
$subject = "PHP.LAB Email with Attachment";

$message = "Hello! Please find the attached file.";

$filename = "student.txt";
$filePath = __DIR__ . "/" . $filename;

if (!file_exists($filePath)) {

    die("Attachment file not found.");

}

$fileContent = file_get_contents($filePath);

$boundary = md5(uniqid(time()));

$headers = "From: sender@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";

$body = "--$boundary\r\n";
$body .= "Content-Type: text/plain; charset=UTF-8\r\n";
$body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$body .= $message . "\r\n\r\n";

$body .= "--$boundary\r\n";
$body .= "Content-Type: text/plain; name=\"$filename\"\r\n";
$body .= "Content-Disposition: attachment; filename=\"$filename\"\r\n";
$body .= "Content-Transfer-Encoding: base64\r\n\r\n";

$body .= chunk_split(base64_encode($fileContent));
$body .= "\r\n--$boundary--";

if (mail($to, $subject, $body, $headers)) {

    echo "Email with attachment accepted for sending.";

} else {

    echo "Email with attachment could not be sent.";

}

?&gt;</code></pre>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – File Handling</span>
            </div>
            <div class="output-content">
                <p><strong>Data Written Successfully</strong></p>
                <h3>File Content:</h3>
                <p>Welcome to PHP.LAB!</p>
                <p>Learning PHP File Handling.</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – Plain-Text Email</span>
            </div>
            <div class="output-content">
                <p>Email accepted for sending.</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 03 – HTML Email</span>
            </div>
            <div class="output-content">
                <h3 style="color: green;">Welcome to PHP.LAB!</h3>
                <p>This is an HTML email sent using PHP.</p>
                <p>Email accepted for sending.</p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 04 – Email Attachment</span>
            </div>
            <div class="output-content">
                <p><strong>Attachment:</strong> student.txt</p>
                <p>Email with attachment accepted for sending.</p>
            </div>
        </div>
    </section>

    <!-- EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. fopen()</h3>
                <p>
                    Opens a file in a specified mode. The "w" mode
                    opens a file for writing and creates it if it
                    does not exist. The "r" mode opens it for reading.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. fwrite()</h3>
                <p>
                    Writes data into an opened file. In this program,
                    it writes two lines into student.txt.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. fread()</h3>
                <p>
                    Reads data from an opened file. filesize() is
                    used to determine how many bytes to read.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. fclose()</h3>
                <p>
                    Closes an opened file after reading or writing
                    is completed.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. mail()</h3>
                <p>
                    The mail() function sends an email using the
                    configured mail system. It accepts the recipient,
                    subject, message and headers.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. MIME Headers</h3>
                <p>
                    MIME headers specify the email content type.
                    They allow PHP to send HTML messages and
                    multipart messages containing attachments.
                </p>
            </div>

            <div class="explanation-item">
                <h3>7. base64_encode()</h3>
                <p>
                    Converts file data into Base64 format so it can
                    be included in an email attachment.
                </p>
            </div>

        </div>
    </section>

    <section class="detail-overview">
        <h2>Important Notes</h2>
        <ul>
            <li>
                The first program creates student.txt in the same
                directory as the PHP file. The folder must be writable.
            </li>
            <li>
                The attachment program requires student.txt to exist
                before it runs.
            </li>
            <li>
                Replace receiver@example.com and sender@example.com
                with appropriate email addresses.
            </li>
            <li>
                PHP mail() requires a configured mail server.
                It generally does not work automatically with a
                fresh XAMPP installation.
            </li>
            <li>
                A successful mail() result means the message was
                accepted for sending, not necessarily delivered
                to the recipient.
            </li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const copyButtons = [
    ["copyEmailCodeBtn", "emailSourceCode"],
    ["copyHtmlEmailCodeBtn", "htmlEmailSourceCode"],
    ["copyAttachmentCodeBtn", "attachmentSourceCode"]
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
