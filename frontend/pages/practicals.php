
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP.LAB | Practicals</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/practical.css">
    <link rel="stylesheet" href="../css/footer.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
          <script src="../js/main.js" defer></script>
</head>

<body>

    <?php require_once __DIR__ . '/../components/navbar.php'; ?>

        
<main>

    <section class="practical-listing">

        <!-- SECTION HEADING -->
        <div class="listing-heading">

            <div>
                <span class="listing-label">START LEARNING</span>

                <h2>Browse All Practicals</h2>

                <p>
                    Explore PHP programs and understand
                    each concept through practical examples.
                </p>
            </div>

            <span class="listing-count">29 Practicals</span>

        </div>

       <div class="search-box">

    <span class="search-icon">⌕</span>

    <input
        type="text"
        id="practicalSearch"
        placeholder="Search by practical name, number, or keyword..."
        autocomplete="off"
    >

</div>

<p id="noSearchResults" hidden>
    No matching practicals found.
</p>
    </section>

<!-- PRACTICAL WORKSPACE -->

<div class="practicals-workspace">

    <!-- MODULE SIDEBAR -->
    <aside class="module-sidebar">

        <div class="sidebar-heading">
            <h3>Browse by Module</h3>
            <p>SELECT A CATEGORY</p>
        </div>

      <div class="module-list">

    <a href="#" class="module-item active" data-module-filter="all">
        <span class="module-name">
            <span class="module-icon">▦</span>
            All Practicals
        </span>
        <span class="module-count">29</span>
    </a>

    <a href="#" class="module-item" data-module-filter="1">
        <span class="module-name">
            <span class="module-icon">01</span>
            Introduction to PHP
        </span>
    </a>

    <a href="#" class="module-item" data-module-filter="2">
        <span class="module-name">
            <span class="module-icon">02</span>
            Arrays & Functions
        </span>
    </a>

    <a href="#" class="module-item" data-module-filter="3">
        <span class="module-name">
            <span class="module-icon">03</span>
            Form Handling
        </span>
    </a>

    <a href="#" class="module-item" data-module-filter="4">
        <span class="module-name">
            <span class="module-icon">04</span>
            Session, Cookie & OOP
        </span>
    </a>

    <a href="#" class="module-item" data-module-filter="5">
        <span class="module-name">
            <span class="module-icon">05</span>
            Database Practicals
        </span>
    </a>

</div>

    </aside>

    <!-- PRACTICAL LIST WILL GO HERE -->

<div class="practical-content" data-module-content="1">

    <!-- LISTING HEADER -->
    <div class="content-heading">

        <div>
            <span class="content-label">MODULE 01</span>
            <h2>Introduction to PHP</h2>
            <p>Start learning PHP with these practical exercises.</p>
        </div>

        <span class="content-total">05 Practicals</span>

    </div>


    <!-- PRACTICAL ITEMS -->
    <div class="practical-items">

        <!-- PRACTICAL 01 -->
        <a href="practical-detail.php" class="practical-row">

            <span class="practical-number">01</span>

            <div class="practical-info">
                <h3>Install and Configure a Local Web Server</h3>
                <p>Set up XAMPP and write a simple PHP program to display text.</p>
            </div>

            <span class="practical-arrow">→</span>

        </a>


        <!-- PRACTICAL 02 -->
        <a href="practical-detail-2.php" class="practical-row">

            <span class="practical-number">02</span>

            <div class="practical-info">
                <h3>Integrate HTML Code Within PHP</h3>
                <p>Apply CSS within PHP and demonstrate echo and print functions.</p>
            </div>

            <span class="practical-arrow">→</span>

        </a>


        <!-- PRACTICAL 03 -->
        <a href="practical-detail-3.php" class="practical-row">

            <span class="practical-number">03</span>

            <div class="practical-info">
                <h3>Demonstrate PHP Variables</h3>
                <p>Explore global variables, $GLOBALS, static variables and constants.</p>
            </div>

            <span class="practical-arrow">→</span>

        </a>


        <!-- PRACTICAL 04 -->
        <a href="practical-detail-4.php" class="practical-row">

            <span class="practical-number">04</span>

            <div class="practical-info">
                <h3>Use Different Control Structures</h3>
                <p>Understand decision-making statements in PHP.</p>
            </div>

            <span class="practical-arrow">→</span>

        </a>


        <!-- PRACTICAL 05 -->
        <a href="practical-detail-5.php" class="practical-row">

            <span class="practical-number">05</span>

            <div class="practical-info">
                <h3>Use Different Loop Structures</h3>
                <p>Practice different looping statements in PHP.</p>
            </div>

            <span class="practical-arrow">→</span>

        </a>

    </div>

</div>


<!-- MODULE 02 PRACTICAL LIST -->

<div class="practical-content" data-module-content="2">

    <div class="content-heading">
        <div>
            <span class="content-label">MODULE 02</span>
            <h2>Arrays & Functions</h2>
        </div>

        <span class="content-total">06 Practicals</span>
    </div>

    <div class="practical-items">

        <!-- PRACTICAL 06 -->

        <a href="practical-detail-6.php?practical=6" class="practical-row">

            <span class="practical-number">06</span>

            <div class="practical-info">
                <h3>Numeric Arrays</h3>
                <p>
                    Create numeric arrays and display their elements.
                </p>
            </div>

            <span class="practical-arrow">→</span>

        </a>


        <!-- PRACTICAL 07 -->

        <a href="practical-detail-7.php?practical-7" class="practical-row">

            <span class="practical-number">07</span>

            <div class="practical-info">
                <h3>Associative Arrays</h3>
                <p>
                    Create associative arrays and display elements using print_r().
                </p>
            </div>

            <span class="practical-arrow">→</span>

        </a>


        <!-- PRACTICAL 08 -->

        <a href="practical-detail-8.php?practical=8" class="practical-row">

            <span class="practical-number">08</span>

            <div class="practical-info">
                <h3>Multidimensional Arrays</h3>
                <p>
                    Create numeric and associative multidimensional arrays and display elements with keys.
                </p>
            </div>

            <span class="practical-arrow">→</span>

        </a>


        <!-- PRACTICAL 09 -->

        <a href="practical-detail-9.php?practical=9" class="practical-row">

            <span class="practical-number">09</span>

            <div class="practical-info">
                <h3>Array Equality and Union</h3>
                <p>
                    Check whether two arrays are equal, find their union and display the resultant array.
                </p>
            </div>

            <span class="practical-arrow">→</span>

        </a>


        <!-- PRACTICAL 10 -->

        <a href="practical-detail-10.php" class="practical-row">

            <span class="practical-number">10</span>

            <div class="practical-info">
                <h3>User-Defined Functions</h3>
                <p>
                    Create functions for addition using default and variable-length arguments.
                </p>
            </div>

            <span class="practical-arrow">→</span>

        </a>


        <!-- PRACTICAL 11 -->

        <a href="practical-detail-11.php" class="practical-row">

            <span class="practical-number">11</span>

            <div class="practical-info">
                <h3>String, Math and Array Functions</h3>
                <p>
                    Demonstrate different built-in string, mathematical and array functions.
                </p>
            </div>

            <span class="practical-arrow">→</span>

        </a>

    </div>

</div>

<!-- MODULE 03 PRACTICAL LIST -->

<div class="practical-content" data-module-content="3">

    <div class="content-heading">
        <div>
            <span class="content-label">MODULE 03</span>
            <h2>Form Handling</h2>
            <p>Learn how to handle HTML forms using PHP.</p>
        </div>

        <span class="content-total">07 Practicals</span>
    </div>

    <div class="practical-items">

        <!-- PRACTICAL 12 -->
        <a href="practical-detail-12.php" class="practical-row">
            <span class="practical-number">12</span>
            <div class="practical-info">
                <h3>Form Data Handling</h3>
                <p>Accept username and password through a form, display data on another page, and perform addition using numeric inputs.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- PRACTICAL 13 -->
        <a href="practical-detail-13.php" class="practical-row">
            <span class="practical-number">13</span>
            <div class="practical-info">
                <h3>Multiple Submit Buttons</h3>
                <p>Use Red, Green and Blue submit buttons to change the background color and demonstrate $_REQUEST.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- PRACTICAL 14 -->
        <a href="practical-detail-14.php" class="practical-row">
            <span class="practical-number">14</span>
            <div class="practical-info">
                <h3>Radio Buttons and Checkboxes</h3>
                <p>Handle radio button and checkbox controls using PHP forms.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- PRACTICAL 15 -->
        <a href="practical-detail-15.php" class="practical-row">
            <span class="practical-number">15</span>
            <div class="practical-info">
                <h3>Listbox and Combobox</h3>
                <p>Create and handle listbox and combobox controls in PHP forms.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- PRACTICAL 16 -->
        <a href="practical-detail-16.php" class="practical-row">
            <span class="practical-number">16</span>
            <div class="practical-info">
                <h3>Page Redirection and Form Validation</h3>
                <p>Redirect webpages and validate username and password inputs.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- PRACTICAL 17 -->
        <a href="practical-detail-17.php" class="practical-row">
            <span class="practical-number">17</span>
            <div class="practical-info">
                <h3>Registration, Login and Student Result</h3>
                <p>Create registration and login forms and a Student Result application.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- PRACTICAL 18 -->
        <a href="practical-detail-18.php" class="practical-row">
            <span class="practical-number">18</span>
            <div class="practical-info">
                <h3>File Handling and Email</h3>
                <p>Read and write text files and demonstrate plain-text email, HTML email and attachments.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

    </div>

</div>

<!-- MODULE 04 -->
<div class="practical-content" data-module-content="4">

    <div class="content-heading">
        <div>
            <span class="content-label">MODULE 04</span>
            <h2>Sessions, Cookies & OOP</h2>
            <p>Learn session management, cookies and object-oriented programming in PHP.</p>
        </div>

        <span class="content-total">06 Practicals</span>
    </div>

    <div class="practical-items">

        <!-- Practical 19 -->
        <a href="practical-detail-19.php" class="practical-row">
            <span class="practical-number">19</span>
            <div class="practical-info">
                <h3>Sessions, Cookies and Hit Counter</h3>
                <p>Create session variables, display them on other pages, create a hit counter and manage cookies.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- Practical 20 -->
        <a href="practical-detail-20.php" class="practical-row">
            <span class="practical-number">20</span>
            <div class="practical-info">
                <h3>Login Form with Session</h3>
                <p>Create a login form using PHP session management.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- Practical 21 -->
        <a href="practical-detail-21.php" class="practical-row">
            <span class="practical-number">21</span>
            <div class="practical-info">
                <h3>Exception Handling</h3>
                <p>Demonstrate exception handling using try, catch and finally blocks.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- Practical 22 -->
        <a href="practical-detail-22.php" class="practical-row">
            <span class="practical-number">22</span>
            <div class="practical-info">
                <h3>Classes, Constructors and Destructors</h3>
                <p>Define classes, create objects and access public and private members.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- Practical 23 -->
        <a href="practical-detail-23.php" class="practical-row">
            <span class="practical-number">23</span>
            <div class="practical-info">
                <h3>Single and Multilevel Inheritance</h3>
                <p>Demonstrate inheritance using PHP classes.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

        <!-- Practical 24 -->
        <a href="practical-detail-24.php" class="practical-row">
            <span class="practical-number">24</span>
            <div class="practical-info">
                <h3>Method Overriding, Interface and Abstract Class</h3>
                <p>Demonstrate method overriding, interfaces and abstract classes in PHP.</p>
            </div>
            <span class="practical-arrow">→</span>
        </a>

    </div>

</div>

<!-- MODULE 05 -->
<div class="practical-content" data-module-content="5">

    <div class="content-heading">
        <div>
            <span class="content-label">MODULE 05</span>
            <h2>Database & MVC</h2>
            <p>Explore database operations, file handling and MVC architecture using PHP.</p>
        </div>

        <span class="content-total">05 Practicals</span>
    </div>

    <div class="practical-items">

        <!-- PRACTICAL 25 -->
        <a href="practical-detail-25.php" class="practical-row">
            <span class="practical-number">25</span>

            <div class="practical-info">
                <h3>MySQL Database Operations</h3>
                <p>Create an employee database and perform insert, update, delete and display operations.</p>
            </div>

            <span class="practical-arrow">↗</span>
        </a>

        <!-- PRACTICAL 26 -->
        <a href="practical-detail-26.php" class="practical-row">
            <span class="practical-number">26</span>

            <div class="practical-info">
                <h3>MySQL Operations Using HTML Forms</h3>
                <p>Perform insert, update and delete operations using HTML forms.</p>
            </div>

            <span class="practical-arrow">↗</span>
        </a>

        <!-- PRACTICAL 27 -->
        <a href="practical-detail-27.php" class="practical-row">
            <span class="practical-number">27</span>

            <div class="practical-info">
                <h3>Table Data and Search Operation</h3>
                <p>Display database records as hyperlinks and perform search operations.</p>
            </div>

            <span class="practical-arrow">↗</span>
        </a>

        <!-- PRACTICAL 28 -->
        <a href="practical-detail-28.php" class="practical-row">
            <span class="practical-number">28</span>

            <div class="practical-info">
                <h3>File Upload and Download</h3>
                <p>Upload and download different types of files using PHP.</p>
            </div>

            <span class="practical-arrow">↗</span>
        </a>

        <!-- PRACTICAL 29 -->
        <a href="practical-detail-29.php" class="practical-row">
            <span class="practical-number">29</span>

            <div class="practical-info">
                <h3>MVC Contact Management</h3>
                <p>Create an MVC application with add, update, delete and search operations.</p>
            </div>

            <span class="practical-arrow">↗</span>
        </a>

    </div>
</div>






    </main>

    <?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
