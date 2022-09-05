<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="container-fluid">
        <div class="px-5 py-4">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./"><?= renderImg("logo.png", "logo") ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">How it Works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Loans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn bordered border-primary btn-primary rounded-pill text-white fs-11 fw-700 py-3 px-md-5">
                                    <?= $phone_number ?>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn bordered border-primary rounded-pill text-primary-dark fw-800 py-3 px-md-5 text-uppercase fs-11">
                                    Get A free quote online now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<section class="banner">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="px-xl-6">
                            <h1 class="fs-1 fw-800 text-white line-height-1">Car Loans<br> from 3.99%*</h1>
                            <div class="fs-7 text-white fw-400">Save $$$ in repayments with Affordable Funding. Compare & choose<br> the right loan with our flexible finance options</div>
                        </div>
                        <div class="interest-plan">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <div class="fs-7 fw-300">Interest Rates from</div>
                                    <div class="fs-3 fw-700 line-height-1">3.99%</div>
                                </div>
                                <div class="col-auto">
                                    <div class="divider"></div>
                                </div>
                                <div class="col-auto">
                                    <div class="fs-7 fw-300">Approvalls within</div>
                                    <div class="fs-3 fw-700 line-height-1">60mins</div>
                                </div>
                                <div class="col-md-5">
                                    <a href="#form" class="btn rounded-pill fs-7 py-3 p-lg-3">
                                        Apply Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="py-5 px-xl-6">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <?= renderImg("google.png", "icons") ?>
                                </div>
                                <div class="col text-white">
                                    <div class="fw-800 fs-6 line-height-1">200+ 5 Star Google Reviews</div>
                                    <div class="fs-11 line-height-1">Check out what other happy Car Loan customers have to say, and<br> why so many continue to choose Affordable Funding.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gx-md-5 py-4">
            <div class="col-6 col-md-4 col-xl">
                <div class="loan-type-card mt-4">
                    <div class="row justify-content-between py-4 px-3 g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="text-primary-dark font-ubuntu px-3">
                        <div class="fw-800 fs-8 line-height-1">Car Loans</div>
                        <div class="fs-11">(New &amp; Used)</div>
                    </div>
                    <?= renderImg("car-loans.png", "lib", "w-100") ?>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl">
                <div class="loan-type-card mt-5">
                    <div class="row justify-content-between py-4 px-3 g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="fw-800 fs-8 px-3 text-primary-dark line-height-1 font-ubuntu">Truck Loans</div>
                    <?= renderImg("truck-loans.png", "lib", "w-100") ?>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl">
                <div class="loan-type-card">
                    <div class="row justify-content-between py-4 px-3 g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="fw-800 fs-8 px-3 text-primary-dark line-height-1 font-ubuntu">Personal Loans</div>
                    <?= renderImg("personal-loans.png", "lib", "w-100") ?>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl mt-4">
                <div class="loan-type-card">
                    <div class="row justify-content-between py-4 px-3 g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="fw-800 fs-8 px-3 text-primary-dark line-height-1 font-ubuntu">Leisure Loans</div>
                    <?= renderImg("leisure-loans.png", "lib", "w-100") ?>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl mt-5">
                <div class="loan-type-card">
                    <div class="row justify-content-between py-4 px-3 g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="fw-800 fs-8 px-3 text-primary-dark line-height-1 font-ubuntu">Small Business<br> Loans</div>
                    <?= renderImg("sm-business-loans.png", "lib", "w-100") ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>