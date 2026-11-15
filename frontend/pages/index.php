
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP.LAB | Learn PHP Through Practice</title>

    <!-- CSS FILES -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/footer.css">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
</head>

<body>

    <?php require_once __DIR__ . '/../components/navbar.php'; ?>

    <main>

        <!-- HERO SECTION -->
        <section class="hero-section">

            <div class="hero-container">

                <div class="hero-content">

                    <span class="hero-label">
                        PHP PRACTICAL CODE LIBRARY
                    </span>

                    <h1>
                        Learn PHP. Practice More.
                        <span>Understand Every Line.</span>
                    </h1>

                    <p class="hero-description">
                        Explore PHP practicals, understand programming
                        concepts and learn through real code examples.
                    </p>

                    <a href="practicals.php" class="hero-btn">
                        Get Started <span>→</span>
                    </a>

                </div>

                <!-- HERO IMAGE -->
                <div class="panel-image">
                    <img class="hero-img"
                         src="../assets/panel image.jpg"
                         alt="PHP.LAB coding preview">
                </div>

            </div>

        </section>


        <!-- EXPLORE PHP.LAB SECTION -->
        <section class="explore-section">

            <div class="explore-container">

                <div class="explore-content">

                    <span class="explore-label">
                        YOUR LEARNING SPACE
                    </span>

                    <h1>
                        Everything You Need to Learn PHP
                        <span>All in One Place.</span>
                    </h1>

                    <p class="explore-description">
                        Explore PHP practicals, understand programming
                        concepts and learn through real code examples.
                    </p>

                    <div class="card-container">

                        <div class="info-card">
                            <div class="card-icon">01</div>
                            <h3>Practicals</h3>
                            <p>Explore PHP programs with source code and output.</p>
                        </div>

                        <div class="info-card">
                            <div class="card-icon">02</div>
                            <h3>Topics</h3>
                            <p>Understand PHP concepts and important syntax.</p>
                        </div>

                        <div class="info-card">
                            <div class="card-icon">03</div>
                            <h3>Code Examples</h3>
                            <p>Study examples with clear code explanations.</p>
                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- LEARNING PHILOSOPHY SECTION -->
        <section class="learning-section">

            <div class="learning-containeer">

                <div class="learning-content">

                    <span class="learning-label">
                        OUR LEARNING PHILOSOPHY
                    </span>

                    <h1>Don't Just Learn the Code.</h1>

                    <h2>Understand the Logic Behind It.</h2>

                    <p>
                        We believe programming is best learned by
                        understanding how things work. Explore concepts,
                        break down the logic and learn through practical examples.
                    </p>

                    <div class="learning-steps">

                        <div class="learning-step">
                            <span class="step-number">01</span>
                            <div class="step-line"></div>
                            <h3>Explore</h3>
                        </div>

                        <div class="learning-step">
                            <span class="step-number">02</span>
                            <div class="step-line"></div>
                            <h3>Understand</h3>
                        </div>

                        <div class="learning-step">
                            <span class="step-number">03</span>
                            <div class="step-line"></div>
                            <h3>Practice</h3>
                        </div>

                        <div class="learning-step">
                            <span class="step-number">04</span>
                            <div class="step-line"></div>
                            <h3>Apply</h3>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
