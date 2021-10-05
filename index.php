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
    <link rel="stylesheet" href="content/css/aos.css">
    <link rel="stylesheet" href="content/css/bootstrap.min.css">
    <link rel="stylesheet" href="content/css/owl.carousel.min.css">
    <link rel="stylesheet" href="content/css/styles.css">
</head>
<body>
    <?php
        include ("content/views/header.php");
    ?>
    <main>
        <div class="vertical-navigtion d-none d-xl-block">
            <ul class="navigation-dots no-list">
                <li><a class="active" href="#section-banner"></a></li>
                <li><a href="#section-traning"></a></li>
                <li><a href="#section-soc-class"></a></li>
                <li><a href="#section-upcoming-classes"></a></li>
                <li><a href="#section-testimonials"></a></li>
                <li><a href="#section-contact"></a></li>
            </ul>
        </div>
        <section class="section-banner section-banner-center cd-section" id="section-banner">
            <div class="container">
                <div class="section-banner-block" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="dark-theme-color-white">Optimum Security Protection for digital Assets</h1>
                    <p class="dark-theme-color-grey">Montance® LLC is a trusted independent Information Security partner providing cybersecurity assessment, and framework development services enabling clients to create a new SOC, or improve existing security operations. We are committed to enhancing your SOC capabilities to execute its mission: to provide optimum security protection for digital assets.</p>
                    <p class="dark-theme-color-grey">Montance® LLC has provided services to organizations large and small in the financial, industrial, energy, medical, and defense industries. It is a one-person consulting firm providing a vehicle for direct and efficient engagement.</p>
                    <p class="dark-theme-color-grey">Contracting can be direct or via an existing contracting vehicle.</p>
                    <!-- <div class="input-group input-group-button">
                        <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Get Started</button>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <div class="arrow-block d-sm-none">
            <img src="content/images/icons/arrow-right.svg" alt="">
        </div>
        <section class="section-training cd-section" id="section-traning">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <h2 class="dark-theme-color-white">Training for tomorrow</h2>
                        <p class="dark-theme-color-grey">Christopher Crowley has trained thousands of students globally with focus on Overall security operations, monitoring capability, mobile pen testing, and overall operational program development.</p>
                        <p class="dark-theme-color-grey">Montance® LLC has provided services to organizations large and small in the financial, industrial, energy, medical, and defense industries. It is a one-person consulting firm providing a vehicle for direct and efficient engagement.</p>
                    </div>
                    <div class="w-100"></div>
                    <img class="illustration-img" src="content/images/illustrations/training-for-tomorrow.png" alt="" data-aos="fade-up" data-aos-delay="350">
                    <div class="w-100"></div>
                    <div class="col-lg-6 offset-lg-6 trained-block" data-aos="fade-up" data-aos-delay="300">
                        <p class="mb-0 font-avenir-medium color-grey-100">Previously trained at</p>
                        <ul class="logo-list no-list">
                            <li>
                                <img src="content/images/logos/us-deptartment-of-defense.png" alt="">
                            </li>
                            <li>
                                <img src="content/images/logos/tulane-university.png" alt="">
                            </li>
                            <li>
                                <img src="content/images/logos/sans-institute.png" alt="">
                            </li>
                        </ul>
                        <ul class="number-list no-list">
                            <li class="dark-theme-color-grey">
                                <div><span class="orange-number count">2000</span><span class="orange-number">+</span></div> Students trained <br>globally
                            </li>
                            <li class="dark-theme-color-grey">
                                <div><span class="orange-number count">30</span><span class="orange-number">+</span></div> Topics covered <br>so far
                            </li>
                            <li class="dark-theme-color-grey">
                                <div><span class="orange-number count">280</span><span class="orange-number">+</span></div> Customized <br>solutions delivered
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-soc-class cd-section" id="section-soc-class">
            <div class="container">
                <div class="row soc-class-block">
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="dark-theme-color-white"><span class="d-block">SOC Class</span> Build and operate SOCs</h2>
                        <p class="dark-theme-color-grey">SOC-class is the Montance® LLC live instructional offering for those seeking to build or mature a Cyber Security Operations Center. Take this class to shorten the learning curve to excellence in your SOC.</p>
                        <a class="btn btn-primary" href="soc-class.php">Learn more</a>
                    </div>
                    <div class="col-lg-12">
                        <?php
                            include ("content/views/soc-carousel.php");
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include ("content/views/upcoming-classes.php");
        ?>
        <section class="section-testimonials cd-section" id="section-testimonials">
            <div class="container">
                <h2 class="text-center dark-theme-color-white" data-aos="fade-up" data-aos-delay="200">Testimonials</h2>
                <div class="owl-carousel owl-theme carousel-testimonials" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-item">
                        <div class="testimonial-block">
                            <div class="testimonial-block-1">
                                <img src="content/images/icons/avatar.png" alt="">
                                <div class="testimonial-info-block">
                                    <p class="name">Anonymous</p>
                                    <p class="author">US Department of Defense</p>
                                </div>
                            </div>
                            <p>Thanks for the excellent course in San Francisco...Btw, I appreciated how you quickly comprehended and translated specific feedback to general principles, when fielding questions in the class. That is a good skill. </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-block">
                            <div class="testimonial-block-1">
                                <img src="content/images/icons/avatar.png" alt="">
                                <div class="testimonial-info-block">
                                    <p class="name">Joe Vest</p>
                                    <p class="author">Author- Red Team Development and Operations</p>
                                </div>
                            </div>
                            <p>It's is rare that you come across someone with such exceptional talent and professionalism as Chris. I've had the pleasure of working with Chris for many years as a peer. His ability to breakdown complex challenges in an approachable format makes him an expert in delivering solutions. I highly recommend Chris as an asset to help solve the problems we face in protecting our critical systems against cyber attacks. </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-block">
                            <div class="testimonial-block-1">
                                <img src="content/images/icons/avatar.png" alt="">
                                <div class="testimonial-info-block">
                                    <p class="name">Nathan Clarke</p>
                                    <p class="author">Verizon Australia</p>
                                </div>
                            </div>
                            <p>Myself and my staff have had the pleasure of attending training and conferences hosted by Chris. He has a font of knowledge and experience pertaining to multiple domains of information security/security operations. I will continue to recommend my staff and my peers in industry to seek out Chris' training and advice wherever they can get it, via SANS, AND, or directly from Chris. </p>
                        </div>
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
    <script defer src="content/scripts/navigation-dots.js"></script>
    <script defer src="content/scripts/script.js"></script>
</body>
</html>
