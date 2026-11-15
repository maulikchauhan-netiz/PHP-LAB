
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practical 28 | PHP.LAB</title>

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
    <span class="current-page">Practical 28</span>
</div>

<main class="practical-detail">

    <!-- HEADER -->
    <section class="detail-header">
        <span class="detail-label">MODULE 05 · PRACTICAL 28</span>
        <h1>File Upload and Download</h1>
        <p>Upload different types of files to a server and download uploaded files using PHP.</p>
    </section>

    <!-- OVERVIEW -->
    <section class="detail-overview">
        <h2>Practical Overview</h2>

        <p>
            PHP provides file handling features that allow users
            to upload files from their computers to a web server.
            Uploaded files can also be downloaded using PHP.
        </p>

        <h3>Objectives</h3>
        <ul>
            <li>Create an HTML form for file uploading.</li>
            <li>Use the POST method and multipart form encoding.</li>
            <li>Access uploaded file information using $_FILES.</li>
            <li>Upload different file types to a server.</li>
            <li>Display uploaded files.</li>
            <li>Download files using PHP.</li>
        </ul>
    </section>

    <!-- REQUIREMENTS -->
    <section class="detail-overview">
        <h2>Requirements</h2>

        <ul>
            <li>XAMPP installed on your computer.</li>
            <li>Apache service running.</li>
            <li>PHP file upload support enabled.</li>
            <li>A writable uploads folder.</li>
            <li>Files for testing uploads.</li>
        </ul>
    </section>

    <!-- PROGRAM 01 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 01</span>
                <h2>File Upload Using PHP</h2>
            </div>
            <button class="copy-code-btn" id="copyCodeBtn">Copy Code</button>
        </div>

<pre><code id="phpSourceCode">&lt;?php

$uploadDir = __DIR__ . "/uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$message = "";

// Allowed file extensions and MIME types
$allowedTypes = array(
    "pdf"  =&gt; "application/pdf",
    "jpg"  =&gt; "image/jpeg",
    "jpeg" =&gt; "image/jpeg",
    "png"  =&gt; "image/png",
    "txt"  =&gt; "text/plain",
    "docx" =&gt; "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
);

if (isset($_POST["upload"])) {

    if (
        isset($_FILES["myfile"]) &&
        $_FILES["myfile"]["error"] === UPLOAD_ERR_OK
    ) {

        $file = $_FILES["myfile"];
        $extension = strtolower(
            pathinfo($file["name"], PATHINFO_EXTENSION)
        );

        // Check file size (5 MB maximum)
        if ($file["size"] &gt; 5 * 1024 * 1024) {

            $message = "File size must be below 5 MB.";

        } elseif (!isset($allowedTypes[$extension])) {

            $message = "File type is not allowed.";

        } else {

            // Check actual file MIME type
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo-&gt;file($file["tmp_name"]);

            if ($mimeType !== $allowedTypes[$extension]) {

                $message = "Invalid file type.";

            } else {

                // Generate a safe unique filename
                $newName = bin2hex(random_bytes(16))
                    . "." . $extension;

                $destination = $uploadDir . $newName;

                if (move_uploaded_file(
                    $file["tmp_name"],
                    $destination
                )) {

                    $message = "File Uploaded Successfully.";

                } else {

                    $message = "File Upload Failed.";

                }
            }
        }

    } elseif (
        isset($_FILES["myfile"]) &&
        $_FILES["myfile"]["error"] !== UPLOAD_ERR_NO_FILE
    ) {

        $message = "An error occurred while uploading.";

    } else {

        $message = "Please select a file.";

    }
}

?&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;File Upload&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;h2&gt;Upload Your File&lt;/h2&gt;

    &lt;form method="POST" enctype="multipart/form-data"&gt;

        Select File:
        &lt;input type="file" name="myfile" required&gt;

        &lt;br&gt;&lt;br&gt;

        &lt;input type="submit" name="upload" value="Upload File"&gt;

    &lt;/form&gt;

    &lt;h3&gt;
        &lt;?php echo htmlspecialchars($message); ?&gt;
    &lt;/h3&gt;

    &lt;h2&gt;Uploaded Files&lt;/h2&gt;

    &lt;?php

    $files = glob($uploadDir . "*");

    if (!empty($files)) {

        foreach ($files as $file) {

            if (is_file($file)) {

                $fileName = basename($file);

                echo htmlspecialchars($fileName);

                echo " &lt;a href='download.php?file="
                    . rawurlencode($fileName)
                    . "'&gt;Download&lt;/a&gt;&lt;br&gt;";

            }

        }

    } else {

        echo "No Files Uploaded.";

    }

    ?&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
    </section>

    <!-- PROGRAM 02 -->
    <section class="detail-code">
        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM 02</span>
                <h2>File Download Using PHP</h2>
            </div>
            <button class="copy-code-btn" id="copyDownloadCodeBtn">Copy Code</button>
        </div>

<pre><code id="downloadSourceCode">&lt;?php

// Upload Directory
$uploadDir = __DIR__ . "/uploads/";

// Get File Name from URL
$fileName = isset($_GET["file"])
    ? basename($_GET["file"])
    : "";

// Create Full File Path
$filePath = $uploadDir . $fileName;

// Check Whether File Exists
if (
    $fileName === "" ||
    !is_file($filePath) ||
    realpath($filePath) === false ||
    dirname(realpath($filePath)) !== realpath($uploadDir)
) {

    http_response_code(404);
    die("File Not Found.");

}

// Detect File MIME Type
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $finfo-&gt;file($filePath);

// Set Download Headers
header("Content-Type: " . $mimeType);

header(
    "Content-Disposition: attachment; filename=\""
    . $fileName . "\""
);

header("Content-Length: " . filesize($filePath));

// Download File
readfile($filePath);

exit();

?&gt;</code></pre>
    </section>

    <!-- EXPECTED OUTPUT -->
    <section class="detail-output">
        <h2>Expected Output</h2>

        <div class="output-window">
            <div class="output-header">
                <span>Program 01 – File Upload</span>
            </div>

            <div class="output-content">
                <h3>Upload Your File</h3>
                <p>Select File: [Choose File]</p>
                <p>[Upload File]</p>
                <p>File Uploaded Successfully.</p>

                <h3>Uploaded Files</h3>
                <p>sample.pdf &nbsp; <u>Download</u></p>
                <p>image.png &nbsp; <u>Download</u></p>
                <p>document.txt &nbsp; <u>Download</u></p>
            </div>
        </div>

        <div class="output-window">
            <div class="output-header">
                <span>Program 02 – File Download</span>
            </div>

            <div class="output-content">
                <p>When the user clicks the Download link, the selected file is downloaded to the computer.</p>
                <p><strong>Download completed successfully.</strong></p>
            </div>
        </div>

        <p><small>Illustrative output. Actual uploaded filenames depend on the files selected.</small></p>
    </section>

    <!-- EXPLANATION -->
    <section class="program-explanation">
        <h2>Program Explanation</h2>

        <div class="explanation-list">

            <div class="explanation-item">
                <h3>1. HTML File Input</h3>
                <p>
                    The input element with type="file" allows
                    users to select a file from their computer.
                </p>
            </div>

            <div class="explanation-item">
                <h3>2. Multipart Form Encoding</h3>
                <p>
                    The enctype="multipart/form-data" attribute
                    is required to send files through an HTML form.
                </p>
            </div>

            <div class="explanation-item">
                <h3>3. $_FILES Array</h3>
                <p>
                    PHP uses the $_FILES superglobal array to
                    access information about uploaded files.
                </p>
            </div>

            <div class="explanation-item">
                <h3>4. move_uploaded_file()</h3>
                <p>
                    This function moves an uploaded temporary
                    file to the selected destination folder.
                </p>
            </div>

            <div class="explanation-item">
                <h3>5. File Validation</h3>
                <p>
                    File extension, MIME type and file size
                    are checked before saving the uploaded file.
                </p>
            </div>

            <div class="explanation-item">
                <h3>6. basename()</h3>
                <p>
                    This function extracts the filename without
                    its directory path.
                </p>
            </div>

            <div class="explanation-item">
                <h3>7. Download Headers</h3>
                <p>
                    Content-Type and Content-Disposition headers
                    tell the browser how to handle the downloaded file.
                </p>
            </div>

            <div class="explanation-item">
                <h3>8. readfile()</h3>
                <p>
                    The readfile() function reads a file and
                    sends its contents to the browser.
                </p>
            </div>

        </div>
    </section>

    <!-- IMPORTANT NOTES -->
    <section class="detail-overview">
        <h2>Important Notes</h2>

        <ul>
            <li>Start Apache from XAMPP before running the program.</li>
            <li>Save Program 01 as upload.php.</li>
            <li>Save Program 02 as download.php.</li>
            <li>Keep both PHP files in the same folder.</li>
            <li>The uploads folder is created automatically by Program 01.</li>
            <li>Allowed file types are PDF, JPG, JPEG, PNG, TXT and DOCX.</li>
            <li>The maximum upload size in this example is 5 MB.</li>
            <li>The uploads folder must be writable by PHP.</li>
            <li>For a real application, uploaded files should be stored outside the public web directory where possible.</li>
        </ul>
    </section>

</main>

<?php require_once __DIR__ . '/../components/footer.php'; ?>

<script>
const copyDownloadBtn = document.getElementById("copyDownloadCodeBtn");

if (copyDownloadBtn) {

    copyDownloadBtn.addEventListener("click", async () => {

        const code = document.getElementById("downloadSourceCode").textContent;

        try {
            await navigator.clipboard.writeText(code);
            copyDownloadBtn.textContent = "Copied!";

            setTimeout(() => {
                copyDownloadBtn.textContent = "Copy Code";
            }, 2000);

        } catch (error) {
            copyDownloadBtn.textContent = "Copy failed";
        }

    });

}
</script>

</body>
</html>
