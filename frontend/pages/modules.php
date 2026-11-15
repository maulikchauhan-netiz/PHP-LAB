
<?php

$modules = [

    1 => [
        "title" => "Introduction to PHP",
        "description" => "Learn the fundamentals of PHP programming and understand how server-side web development works.",
        "practicals" => 5,
        "topics" => [
            "Introduction to PHP",
            "Installing and configuring XAMPP",
            "HTML and CSS integration with PHP",
            "Echo and print statements",
            "Variables and constants",
            "Conditional statements",
            "Loop structures"
        ]
    ],

    2 => [
        "title" => "Arrays & Functions",
        "description" => "Understand how to store, organize and process data using PHP arrays and functions.",
        "practicals" => 6,
        "topics" => [
            "Numeric arrays",
            "Associative arrays",
            "Multidimensional arrays",
            "Array comparison and union",
            "User-defined functions",
            "Default arguments",
            "Variable-length arguments",
            "String, mathematical and array functions"
        ]
    ],

    3 => [
        "title" => "Form Handling",
        "description" => "Learn how to collect user information, process form submissions and validate input using PHP.",
        "practicals" => 7,
        "topics" => [
            "HTML forms with PHP",
            "GET and POST methods",
            '$_REQUEST variable',
            "Radio buttons and checkboxes",
            "Listbox and combobox",
            "Page redirection",
            "Form validation",
            "Registration and login forms",
            "File handling and email"
        ]
    ],

    4 => [
        "title" => "Sessions, Cookies & OOP",
        "description" => "Explore session management, cookies, exception handling and object-oriented programming in PHP.",
        "practicals" => 6,
        "topics" => [
            "Session variables",
            "Cookies",
            "Page hit counter",
            "Login using sessions",
            "Exception handling",
            "Classes and objects",
            "Constructors and destructors",
            "Inheritance",
            "Method overriding",
            "Interfaces and abstract classes"
        ]
    ],

    5 => [
        "title" => "Database & MVC",
        "description" => "Learn database connectivity, CRUD operations, file management and MVC application development.",
        "practicals" => 5,
        "topics" => [
            "MySQL database creation",
            "Database connectivity using PHP",
            "Insert, update and delete operations",
            "Displaying database records",
            "Database search operations",
            "File upload and download",
            "MVC architecture",
            "Contact management application"
        ]
    ]

];

$selectedModule = isset($_GET["module"]) ? (int) $_GET["module"] : 0;

$module = $modules[$selectedModule] ?? null;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Modules | PHP.LAB</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/modules.css">
    <link rel="stylesheet" href="../css/footer.css">

<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">


</head>

<body>

    <?php require_once __DIR__ . '/../components/navbar.php'; ?>

    <main class="modules-page">

        <?php if ($module === null): ?>

            <!-- MODULES LANDING PAGE -->

            <section class="modules-hero">

                <span class="modules-label">LEARNING PATH</span>

                <h1>Explore Course Modules</h1>

                <p>
                    Build your PHP knowledge step by step, from programming
                    fundamentals to database-driven applications.
                </p>

            </section>

            <section class="modules-section">

                <div class="modules-section-heading">

                    <div>
                        <span class="section-label">COURSE CONTENT</span>
                        <h2>Explore All Modules</h2>
                    </div>

                    <span class="modules-count">05 Modules</span>

                </div>

                <div class="modules-grid">

                    <?php foreach ($modules as $number => $item): ?>

                        <a
                            href="modules.php?module=<?php echo $number; ?>"
                            class="module-card"
                        >

                            <div class="module-card-top">

                                <span class="module-number">
                                    MODULE <?php echo str_pad($number, 2, "0", STR_PAD_LEFT); ?>
                                </span>

                                <span class="module-arrow">↗</span>

                            </div>

                            <div class="module-card-content">

                                <h3>
                                    <?php echo htmlspecialchars($item["title"]); ?>
                                </h3>

                                <p>
                                    <?php echo htmlspecialchars($item["description"]); ?>
                                </p>

                            </div>

                            <div class="module-card-bottom">

                                <span>
                                    <?php echo $item["practicals"]; ?> Practicals
                                </span>

                                <span class="module-explore">
                                    Explore Module →
                                </span>

                            </div>

                        </a>

                    <?php endforeach; ?>

                </div>

            </section>

        <?php else: ?>

            <!-- INDIVIDUAL MODULE DETAIL -->

            <section class="module-detail">

                <div class="module-breadcrumb">

                    <a href="modules.php">Modules</a>

                    <span>/</span>

                    <span class="current-page">
                        Module <?php echo str_pad($selectedModule, 2, "0", STR_PAD_LEFT); ?>
                    </span>

                </div>

                <header class="module-detail-header">

                    <span class="modules-label">
                        MODULE <?php echo str_pad($selectedModule, 2, "0", STR_PAD_LEFT); ?>
                    </span>

                    <h1>
                        <?php echo htmlspecialchars($module["title"]); ?>
                    </h1>

                    <p>
                        <?php echo htmlspecialchars($module["description"]); ?>
                    </p>

                    <span class="module-practical-count">
                        <?php echo $module["practicals"]; ?> Practicals
                    </span>

                </header>

                <section class="module-topics">

                    <span class="section-label">WHAT YOU WILL LEARN</span>

                    <h2>Topics Covered</h2>

                    <div class="module-topic-list">

                        <?php foreach ($module["topics"] as $index => $topic): ?>

                            <div class="module-topic">

                                <span class="topic-number">
                                    <?php echo str_pad($index + 1, 2, "0", STR_PAD_LEFT); ?>
                                </span>

                                <span class="topic-name">
                                    <?php echo htmlspecialchars($topic); ?>
                                </span>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </section>

                <div class="module-detail-actions">

                    <a
                        href="practicals.php?module=<?php echo $selectedModule; ?>"
                        class="module-practicals-btn"
                    >
                        Explore Module Practicals →
                    </a>

                    <a href="modules.php" class="back-modules-link">
                        ← Back to All Modules
                    </a>

                </div>

            </section>

        <?php endif; ?>

    </main>

    <?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>

</html>
