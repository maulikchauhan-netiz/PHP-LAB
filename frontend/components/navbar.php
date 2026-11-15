
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- ANNOUNCEMENT BAR -->
<div class="announcementbar">
    Learn PHP. Practice More. Understand Every Line.
</div>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="navbar-container">

        <!-- WEBSITE LOGO -->
        <!-- WEBSITE LOGO -->
<a href="index.php" class="navbar-logo">

    <div class="navbar-logo-icon">
        🚀
    </div>

    <span class="navbar-logo-name">PHP.LAB</span>

</a>

        <!-- NAVIGATION LINKS -->
        <div class="navbar-links">

            <a href="index.php"
               class="<?= ($currentPage === 'index.php') ? 'active' : '' ?>">
                Home
            </a>

           <a href="practicals.php"
                class="<?= in_array($currentPage, ['practicals.php', 'practical-detail.php']) ? 'active' : '' ?>">
                Practicals
            </a>

            <a href="modules.php"
               class="<?= ($currentPage === 'modules.php') ? 'active' : '' ?>">
                Modules
            </a>

            <a href="about.php"
               class="<?= ($currentPage === 'about.php') ? 'active' : '' ?>">
                About
            </a>

        </div>

    </div>
</nav>
