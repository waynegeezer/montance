<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Montance</title>
    <link rel="canonical" href="" />
    <link rel="icon" href="content/images/favicon.png">
    <link rel="stylesheet" href="content/css/bootstrap.min.css">
    <link rel="stylesheet" href="content/css/owl.carousel.min.css">
    <link rel="stylesheet" href="content/css/styles.css">
</head>
<body class="soc-class-page">
    <?php
        include ("content/views/header.php");
    ?>
    <main>
        <section class="section-soc-class">
            <div class="container">
                <div class="row soc-class-block">
                    <div class="col-lg-6">
                        <h2><span class="d-block">SOC Class</span> Build and operate SOCs</h2>
                        <p>SOC-class is the Montance® LLC live instructional offering for those seeking to build or mature a Cyber Security Operations Center. Take this class to shorten the learning curve to excellence in your SOC.</p>
                        <a class="btn btn-primary" href=""><img class="icon" src="content/images/icons/drive.svg" alt=""> Executive Summary</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div id="carousel-soc-class" class="carousel carousel-soc-class slide carousel-fade">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p>I've been fortunate enough to attend more than a dozen big name cyber security, hacking and forensics courses over the past 9 years. The quality and breadth of subject matter in this SOC course more than equalled any I have done before. Well done Chris</p>
                                    <p>Technologist (infosec, forensics, embedded systems) <span>Canberra</span></p>
                                </div>
                                <div class="carousel-item">
                                    <p>I've been fortunate enough to attend more than a dozen big name cyber security, hacking and forensics courses over the past 9 years.</p>
                                    <p>Technologist (infosec, forensics, embedded systems) <span>Canberra</span></p>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-soc-class" role="button" data-slide="prev">
                                <img src="content/images/icons/arrow-circular-right.svg" alt="">
                            </a>
                            <a class="carousel-control-next" href="#carousel-soc-class" role="button" data-slide="next">
                            <img src="content/images/icons/arrow-circular-right.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row course-video">
                    <div class="col-lg-12">
                        <div class="soc-video-block">
                            <a class="soc-video-link" href="">
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
                    <div class="col-lg-7 order-lg-1">
                        <div class="soc-reference-model-block">
                            <img class="soc-reference-model-light" src="content/images/illustrations/soc-reference-model-light.png" alt="">
                            <img class="soc-reference-model-dark" src="content/images/illustrations/soc-reference-model-dark.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <h2 class="dark-theme-color-white"><span class="d-block">SOC</span> Reference Model</h2>
                        <p class="dark-theme-color-grey">The class is not technical in nature, however, it is deeply grounded in technical details. Those details will be elaborated to explain the rationale between choices. This class is more about equiping you on how to make decisions for your SOC, and less about telling you the specific way to do something. </p>
                        <a class="btn btn-primary" href=""><img class="icon" src="content/images/icons/drive.svg" alt=""> Download Presentation</a>
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
                    <div class="col-lg-6 order-lg-1">
                        <ul class="resource-list">
                            <li>
                                <img class="icon" src="content/images/icons/presentation.svg" alt="">
                                <p>Latest <br>Presentations</p>
                            </li>
                            <li>
                                <img class="icon" src="content/images/icons/video.svg" alt="">
                                <p>Latest <br>Videos</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="dark-theme-color-white">Additional Resources</h2>
                        <p class="dark-theme-color-grey">An online version of the class is not yet available, but is under development with Applied Network Defense. The delay in delivery of the course is resulting from Christopher Crowley's inclination toward classroom delivery, and AND's experience with online delivery modalities. More work is being done to produce the best quality course. If you want to discuss an interim remote delivery of the live class, please contact Christopher Crowley.</p>
                        <a class="btn btn-primary" href="">View All Resources</a>
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
    <script defer src="content/scripts/navigation-dots.js"></script>
    <script defer src="content/scripts/script.js"></script>
</body>
</html>
