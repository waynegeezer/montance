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
    <link rel="stylesheet" href="content/css/styles.css">
</head>
<body class="resouces-page">
    <?php
        include ("content/views/header.php");
    ?>
    <main>
        <section class="section-banner section-banner-center pb-0">
            <div class="container">
                <div class="section-banner-block">
                    <h1 class="dark-theme-color-white">Resources</h1>
                    <p class="dark-theme-color-grey">These references have been collected over time. Some are google drive folders that contain many documents. Some are websites that are external to this page.</p>
                </div>
            </div>
        </section>
        <section class="section-resources">
            <div class="filter-grid">
                <div class="container">
                    <div class="filter-block filter-block-1">
                        <p class="filter-name"><span>Content Types</span> <svg class="d-md-none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></p>
                        <ul class="no-list filter-list custom-dropdown-list">
                            <li>
                                <button class="filter-button filter-button-all" type="button" data-filter="all">All</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button"  data-filter=".course-material">Course Material</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button" data-filter=".videos">Videos</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button" data-filter=".guides">Guides</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button" data-filter=".case-studies">Case Studies</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button" data-filter=".support-doc">Support Doc</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button" data-filter=".reports">Reports</button>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-block filter-block-2">
                        <p class="filter-name"><span>Subject</span> <svg class="d-md-none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></p>
                        <ul class="no-list filter-list custom-dropdown-list">
                            <li>
                                <button class="filter-button filter-button-all" type="button" data-filter=".subject">All</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button" data-filter=".soc-courses">SOC Course</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button" data-filter=".use-case">Use Case</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button" data-filter=".soc-process">SOC Process</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button" data-filter=".cybertab">CyberTab</button>
                            </li>
                            <li>
                                <button class="filter-button" type="button" data-filter=".investigation">Investigation</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filter-content-grid">
                <div class="container">
                    <div class="search-block">
                        <div class="form-group form-group-search">
                            <input type="text" class="form-control" id="search-input-filter" placeholder="Search">
                        </div>
                        <p class="font-avenir-book color-grey d-none d-md-inline-block dark-theme-color-grey">Displaying <span id="resources-count">0</span> Resource(s)</p>
                    </div>
                    <div class="filter-content-block">
                        <div class="mixitup-container" id="mixitup-container">
                            <p class="mixitup-fail-message position-absolute dark-theme-color-grey" id="mixitup-fail-message">No items were found matching the selected filters. <button class="filter-button filter-button-all" type="button" data-filter="all">Clear all filters</button></p>
                            <div class="icon-content-block mix course-material">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block icon-block-pdf"></div>
                                    <p class="icon-content">Cloud SLAs 'fall short,' says user advocacy group.pdf</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix course-material">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block icon-block-xls"></div>
                                    <p class="icon-content">Incident cost.xlsx</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix videos">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block  icon-block-ppt"></div>
                                    <p class="icon-content">IR Scenarios - General.ppt</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix videos">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block  icon-block-pdf"></div>
                                    <p class="icon-content">Adversary Model - Cyber Defense Strategies.pdf</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix guides">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block icon-block-pdf"></div>
                                    <p class="icon-content">Cloud SLAs 'fall short,' says user advocacy group.pdf</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix case-studies">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block icon-block-xls"></div>
                                    <p class="icon-content">Incident cost.xlsx</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix case-studies">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block  icon-block-ppt"></div>
                                    <p class="icon-content">IR Scenarios - General.ppt</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix support-doc">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block  icon-block-pdf"></div>
                                    <p class="icon-content">Adversary Model - Cyber Defense Strategies.pdf</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix reports">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block icon-block-pdf"></div>
                                    <p class="icon-content">Cloud SLAs 'fall short,' says user advocacy group.pdf</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix reports">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block icon-block-xls"></div>
                                    <p class="icon-content">Incident cost.xlsx</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix subject soc-courses">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block  icon-block-ppt"></div>
                                    <p class="icon-content">IR Scenarios - General.ppt</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix subject soc-courses">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block  icon-block-pdf"></div>
                                    <p class="icon-content">Adversary Model - Cyber Defense Strategies.pdf</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix subject use-case hide">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block icon-block-pdf"></div>
                                    <p class="icon-content">Cloud SLAs 'fall short,' says user advocacy group.pdf</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix subject soc-process hide">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block icon-block-xls"></div>
                                    <p class="icon-content">Incident cost.xlsx</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix subject soc-process hide">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block  icon-block-ppt"></div>
                                    <p class="icon-content">IR Scenarios - General.ppt</p>
                                </a>
                            </div>
                            <div class="icon-content-block mix subject cybertab hide">
                                <a href="" class="icon-content-box">
                                    <div class="icon-block  icon-block-pdf"></div>
                                    <p class="icon-content">Adversary Model - Cyber Defense Strategies.pdf</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary load-more-resources" type="button">Load More</button>
                </div>
            </div>
        </section>
    </main>
    <?php
        include ("content/views/footer.php");
    ?>

    <script defer src="content/scripts/jquery.min.js"></script>
    <script defer src="content/scripts/popper.min.js"></script>
    <script defer src="content/scripts/bootstrap.min.js"></script>
    <script defer src="content/scripts/mixitup.min.js"></script>
    <script>
        if (screen && screen.width <= 767) { document.write('<script defer src="content/scripts/custom-dropdown.js"><\/script>'); } 
    </script>
    <script defer src="content/scripts/script.js"></script>
</body>
</html>
