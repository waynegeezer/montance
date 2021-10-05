<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Montance | SOC Class</title>
    <link rel="canonical" href="" />
    <link rel="icon" href="content/images/favicon.png">
    <link rel="stylesheet" href="content/css/aos.css">
    <link rel="stylesheet" href="content/css/bootstrap.min.css">
    <link rel="stylesheet" href="content/css/owl.carousel.min.css">
    <link rel="stylesheet" href="content/css/lity.min.css">
    <link rel="stylesheet" href="content/css/styles.css">
</head>
<body class="soc-class-page">
    <?php
        include ("content/views/header.php");
    ?>
    <main>
        <section class="section-soc-class">
            <div class="container">
                <div class="row soc-class-block justify-content-center">
                    <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="dark-theme-color-white text-center-mobile"><span class="d-block">SOC Class</span> Build and operate SOCs</h2>
                        <p class="dark-theme-color-grey text-center-mobile">SOC-class is the Montance® LLC live instructional offering for those seeking to build or mature a Cyber Security Operations Center. Take this class to shorten the learning curve to excellence in your SOC.</p>
                        <a class="btn btn-primary" target="_blank" href="content/pdf/soc-class-justification.pdf"> Executive Summary</a>
                    </div>
                    <div class="col-12">
                        <?php
                            include ("content/views/soc-carousel.php");
                        ?>
                    </div>
                </div>
                <div class="arrow-block d-sm-none">
                    <img src="content/images/icons/arrow-right.svg" alt="">
                </div>
                <div class="row course-video">
                    <div class="col-lg-12">
                        <div class="soc-video-block" data-aos="fade-up" data-aos-delay="250">
                            <a class="soc-video-link" <a href="https://www.youtube.com/watch?v=ec6c9XcdUrM" data-lity>
                                <img class="icon" src="content/images/icons/play.svg" alt="">
                                <p>Watch course overview</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-two-column">
            <div class="container">
                <div class="row row-two-column">
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="dark-theme-color-white text-center-mobile"><span class="d-block">SOC</span> Reference Model</h2>
                        <p class="dark-theme-color-grey text-center-mobile">The class is not technical in nature, however, it is deeply grounded in technical details. Those details will be elaborated to explain the rationale between choices. This class is more about equiping you on how to make decisions for your SOC, and less about telling you the specific way to do something. </p>
                        <!-- <a class="btn btn-primary" target="_blank" href="content/pdf/soc-class-justification.pdf"> Download Presentation</a> -->
                    </div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                        <div class="soc-reference-model-block">
                            <img class="soc-reference-model-light" src="content/images/soc-reference-model-light.png" alt="">
                            <img class="soc-reference-model-dark" src="content/images/soc-reference-model-dark.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include ("content/views/upcoming-classes.php");
        ?>
        <section class="section-add-resources section-two-column">
            <div class="container">
                <div class="row row-two-column">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="dark-theme-color-white text-center-mobile">Additional Resources</h2>
                        <p class="dark-theme-color-grey text-center-mobile">An online version of the class is not yet available, but is under development with Applied Network Defense. The delay in delivery of the course is resulting from Christopher Crowley's inclination toward classroom delivery, and AND's experience with online delivery modalities. More work is being done to produce the best quality course. If you want to discuss an interim remote delivery of the live class, please contact Christopher Crowley.</p>
                        <a class="btn btn-primary" href="additional-information.php">View All Resources</a>
                    </div>
                    <div class="col-lg-6">
                        <ul class="resource-list" data-aos="fade-up" data-aos-delay="300">
                            <li>
                                <img class="icon" src="content/images/icons/presentation.svg" alt="">
                                <p class="dark-theme-color-white">Latest <br>Presentations</p>
                            </li>
                            <li>
                                <img class="icon" src="content/images/icons/video.svg" alt="">
                                <p class="dark-theme-color-white">Latest <br>Videos</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include ("content/views/contact.php");
        ?>
    </main>
    <?php
        include ("content/views/footer.php");
    ?>

    <script defer src="content/scripts/jquery.min.js"></script>
    <script defer src="content/scripts/popper.min.js"></script>
    <script defer src="content/scripts/bootstrap.min.js"></script>
    <script defer src="content/scripts/owl.carousel.min.js"></script>
    <script defer src="content/scripts/aos.js"></script>
    <script defer src="content/scripts/lity.min.js"></script>
    <script defer src="content/scripts/script.js"></script>
</body>
</html>
