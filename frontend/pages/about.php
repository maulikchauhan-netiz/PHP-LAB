
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About | PHP.LAB</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/footer.css">

<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">


</head>

<body>

    <?php require_once __DIR__ . '/../components/navbar.php'; ?>

    <main class="about-page">

        <!-- ABOUT HERO -->

        <section class="about-hero">

            <span class="about-label">ABOUT PHP.LAB</span>

            <h1>
                Making PHP Learning
                <span>Simple & Practical.</span>
            </h1>

            <p>
                PHP.LAB is a learning platform designed to help students
                understand PHP programming through structured modules,
                practical examples and hands-on learning.
            </p>

            <a href="practicals.php" class="about-hero-btn">
                Explore Practicals →
            </a>

        </section>


        <!-- ABOUT INTRODUCTION -->

        <section class="about-intro">

            <div class="about-intro-content">

                <span class="section-label">OUR PURPOSE</span>

                <h2>Learn by Understanding. Grow by Practicing.</h2>

                <p>
                    Learning programming is not just about reading code.
                    It is about understanding how it works, writing it
                    yourself and applying concepts to real problems.
                </p>

                <p>
                    PHP.LAB brings course modules and practical programs
                    together in one organized place, making it easier for
                    students to learn and revise PHP concepts.
                </p>

            </div>

            <div class="about-highlight">

                <span class="about-highlight-number">29</span>

                <h3>Practical Programs</h3>

                <p>
                    Organized across five course modules to support
                    step-by-step learning.
                </p>

            </div>

        </section>


        <!-- WHAT WE OFFER -->

        <section class="about-features">

            <div class="about-section-heading">

                <span class="section-label">WHAT YOU WILL FIND</span>

                <h2>Everything Organized for Learning</h2>

                <p>
                    Explore the different learning resources available
                    on PHP.LAB.
                </p>

            </div>


            <div class="about-feature-grid">

                <div class="about-feature-card">

                    <span class="feature-number">01</span>

                    <h3>Structured Modules</h3>

                    <p>
                        Learn PHP concepts through five organized
                        course modules.
                    </p>

                </div>


                <div class="about-feature-card">

                    <span class="feature-number">02</span>

                    <h3>Practical Programs</h3>

                    <p>
                        Explore practical programs with their
                        source code and examples.
                    </p>

                </div>


                <div class="about-feature-card">

                    <span class="feature-number">03</span>

                    <h3>Easy Navigation</h3>

                    <p>
                        Find practicals quickly using module filters
                        and the search functionality.
                    </p>

                </div>


                <div class="about-feature-card">

                    <span class="feature-number">04</span>

                    <h3>Hands-on Learning</h3>

                    <p>
                        Practice programming concepts by running
                        and experimenting with PHP code.
                    </p>

                </div>

            </div>

        </section>


        <!-- LEARNING APPROACH -->

        <section class="about-approach">

            <span class="section-label">OUR APPROACH</span>

            <h2>A Simple Way to Learn PHP</h2>

            <div class="about-steps">

                <div class="about-step">
                    <span>01</span>
                    <h3>Explore</h3>
                    <p>Choose a module and understand its concepts.</p>
                </div>

                <div class="about-step">
                    <span>02</span>
                    <h3>Understand</h3>
                    <p>Study the practical examples and source code.</p>
                </div>

                <div class="about-step">
                    <span>03</span>
                    <h3>Practice</h3>
                    <p>Run the programs and experiment with the code.</p>
                </div>

            </div>

        </section>


        <!-- FINAL CTA -->

        <section class="about-cta">

            <h2>Ready to Start Learning?</h2>

            <p>
                Explore the course modules and begin your PHP
                programming journey.
            </p>

            <a href="modules.php" class="about-cta-btn">
                Explore Modules →
            </a>

        </section>

    </main>

    <?php require_once __DIR__ . '/../components/footer.php'; ?>

</body>

</html>
