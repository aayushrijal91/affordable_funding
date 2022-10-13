<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="px-xxl-5 pt-3 py-md-4">
        <div class="container-fluid px-0 px-md-3">
            <nav class="navbar navbar-expand-xl navbar-light">
                <div class="pb-4 pb-lg-0 px-3 px-md-0 navbar-logo">
                    <a class="navbar-brand" href="./"><?= renderImg("logo.png", "logo") ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <svg width="37" height="31" viewBox="0 0 37 31" fill="#040987" xmlns="http://www.w3.org/2000/svg">
                            <rect width="36.9417" height="3.875" rx="1.9375" fill="#040987" />
                            <rect y="14.2083" width="36.9417" height="3.875" rx="1.9375" fill="#040987" />
                            <rect y="27.125" width="36.9417" height="3.875" rx="1.9375" fill="#040987" />
                        </svg>
                    </button>
                </div>
                <div class="collapse navbar-collapse bg-white" id="navbarScroll">
                    <div class="row gx-2 justify-content-center d-xl-none">
                        <div class="col-6">
                            <a href="tel:<?= $phone_number ?>" class="btn bordered border-primary btn-primary rounded-pill text-white fs-13 fw-700 py-2 py-md-3 d-block">
                                <?= $phone_number ?>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#form" class="btn d-block bordered border-primary rounded-pill text-primary-dark fw-800 py-2 py-md-3 px-md-5 text-uppercase fs-13">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#how-it-works">How it Works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#loans">Loans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">Contact Us</a>
                        </li>
                    </ul>
                    <div class="row d-none d-xl-flex gx-2 gx-xxl-4">
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn bordered border-primary btn-primary rounded-pill text-white fs-11 fw-700 py-3 px-xl-4 px-xxl-5">
                                <?= $phone_number ?>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#form" class="btn bordered border-primary rounded-pill text-primary-dark fw-800 py-3 px-xl-4 px-xxl-5 text-uppercase fs-11">
                                Enquire Now
                            </a>
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
            <div class="col-xxl-11">
                <div class="row">
                    <div class="col-xl-7" data-aos="fade-right">
                        <div class="row gx-0">
                            <div class="col-11 col-lg-9 col-xl-12 px-4 px-xxl-6">
                                <h1 class="fs-1 fw-800 text-white line-height-1 banner-heading">Car Loans<br> from 3.99%*</h1>
                                <div class="fs-7 text-white fw-400 banner-subheading">Save $$$ in repayments with Affordable Funding. Compare & choose<br class="d-none d-xl-block"> the right loan with our flexible finance options</div>
                                <div class="d-md-none pt-5">
                                    <a href="./loan-application" target="_blank" class="btn btn-primary rounded-pill fs-11 py-2 px-5">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-guy-mobile-wrapper">
                            <?= renderImg("banner-guy-mobile.png", "lib", "banner-guy-mobile") ?>
                        </div>
                        <div class="interest-plan">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <div class="fs-7 fw-300 subtext">Interest Rates from</div>
                                    <div class="fs-3 fw-700 line-height-1 herotext">3.99%</div>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <div class="divider"></div>
                                </div>
                                <div class="col-auto">
                                    <div class="fs-7 fw-300 subtext">Approvals within</div>
                                    <div class="fs-3 fw-700 line-height-1 herotext">60mins</div>
                                </div>
                                <div class="col col-md-5">
                                    <a href="tel: <?= $phone_number ?>" class="btn rounded-pill fs-7 d-md-none">
                                        <?= $phone_number ?>
                                    </a>
                                    <a href="./loan-application" target="_blank" class="btn rounded-pill fs-7 d-none d-md-flex">
                                        Apply Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-white">Comparison Rate from 4.66%*</div>
                        <div class="py-4 py-md-5 px-xl-6">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <?= renderImg("google.png", "icons") ?>
                                </div>
                                <div class="col text-white">
                                    <div class="fw-800 fs-6 line-height-1 google-review-heading">200+ 5 Star Google Reviews</div>
                                    <div class="fs-11 line-height-1 google-review-subheading">Check out what other happy Car Loan customers have to say, and<br class="d-none d-md-block"> why so many continue to choose Affordable Funding.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-none d-xl-block">
        <div class="row gx-md-4 gx-xxl-5 py-4" data-aos="fade-up">
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
    <div id="lenders"></div>
    <div class="container lenders-header d-none d-xl-block">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-12 text-center">
                <h2 class="fs-2 fw-900 text-primary-dark">Access 40 + lenders</h2>
            </div>
            <div class="col-lg-8">
                <div class="fs-9 text-primary-dark text-center">
                    Compare and Choose: Tailoring the right loan to suit you, not the bank. We’ll give you the best loan options to compare and choose from 40+ lenders
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loan-types-mobile">
    <div class="container">
        <div class="row gy-4">
            <div class="col-6 col-md-4 d-flex h-inherit flex-column justify-content-center">
                <div class="heroHeading">Access to a range of loans</div>
                <div class="subHeading">Let’s find you the perfect loan, from only the best lenders</div>
            </div>
            <div class="col-6 col-md-4">
                <div class="loan-type-card">
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
            <div class="col-6 col-md-4">
                <div class="loan-type-card">
                    <div class="row justify-content-between py-4 px-3 g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="fw-800 fs-8 px-3 text-primary-dark line-height-1 font-ubuntu">Truck Loans</div>
                    <?= renderImg("truck-loans.png", "lib", "w-100") ?>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="loan-type-card">
                    <div class="row justify-content-between py-4 px-3 g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="fw-800 fs-8 px-3 text-primary-dark line-height-1 font-ubuntu">Personal Loans</div>
                    <?= renderImg("personal-loans.png", "lib", "w-100") ?>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="loan-type-card">
                    <div class="row justify-content-between py-4 px-3 g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="fw-800 fs-8 px-3 text-primary-dark line-height-1 font-ubuntu">Leisure Loans</div>
                    <?= renderImg("leisure-loans.png", "lib", "w-100") ?>
                </div>
            </div>
            <div class="col-6 col-md-4">
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

<section class="lenders">
    <div class="container d-xl-none">
        <div class="row justify-content-center pb-4" data-aos="fade-up">
            <div class="col-12 text-center">
                <h2 class="fs-2 fw-900 text-primary-dark heroHeading">Access 40 + lenders</h2>
            </div>
            <div class="col-lg-8">
                <div class="fs-9 text-primary-dark text-center subheading">
                    Compare and Choose: Tailoring the right loan to suit you, not the bank. We’ll give you the best loan options to compare and choose from 40+ lenders
                </div>
            </div>
        </div>
    </div>
    <div class="lender-slider-1">
        <div><?= renderImg("pepper-money.png", "logo") ?></div>
        <div><?= renderImg("anz.png", "logo") ?></div>
        <div><?= renderImg("westpac.png", "logo") ?></div>
        <div><?= renderImg("afs.png", "logo") ?></div>
        <div><?= renderImg("angle-finance.png", "logo") ?></div>
        <div><?= renderImg("macquarie.png", "logo") ?></div>
        <div><?= renderImg("latitude.png", "logo") ?></div>
    </div>
    <div class="lender-slider-2">
        <div><?= renderImg("autopay.png", "logo") ?></div>
        <div><?= renderImg("ume-loans.png", "logo") ?></div>
        <div><?= renderImg("plenti.png", "logo") ?></div>
        <div><?= renderImg("now-finance.png", "logo") ?></div>
        <div><?= renderImg("liberty.png", "logo") ?></div>
        <div><?= renderImg("moula.png", "logo") ?></div>
        <div><?= renderImg("wisr.png", "logo") ?></div>
    </div>
    <div class="lender-slider-3">
        <div><?= renderImg("branded-financial-services.png", "logo") ?></div>
        <div><?= renderImg("loanu.png", "logo") ?></div>
        <div><?= renderImg("grow.png", "logo") ?></div>
        <div><?= renderImg("metro.png", "logo") ?></div>
        <div><?= renderImg("financone.png", "logo") ?></div>
        <div><?= renderImg("societyone.png", "logo") ?></div>
        <div><?= renderImg("firstmac.png", "logo") ?></div>
    </div>
</section>

<section class="cta">
    <div class="container-fluid px-md-0">
        <div class="row gx-md-0 align-items-center">
            <div class="col-md-6 px-4 px-md-0" data-aos="fade-right">
                <?= renderImg("protect-credit-scores.png", "lib", "w-100 d-none d-md-block") ?>
                <?= renderImg("protect-credit-scores-mobile.png", "lib", "d-md-none") ?>
            </div>
            <div class="col-lg-6 px-4 px-md-5 px-xxl-8" data-aos="fade-left">
                <div class="fs-7 fw-800 text-tertiary cta-subheading">Simple & Secure Application Process</div>
                <h3 class="fw-900 fs-3 text-primary-dark cta-heading">Protect Your Credit Score</h3>
                <div class="fs-10 text-black fw-700 py-4">Protect your credit score by matching with the best<br class="d-none d-lg-block"> lender the first time</div>
                <div class="d-flex">
                    <a href="./loan-application" target="_blank" class="text-primary fw-900 pe-2">Apply Now</a>
                    <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="#742CFF" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="row gx-0 align-items-center py-5 py-lg-0">
            <div class="col-8 d-lg-none" data-aos="fade-right">
                <?= renderImg("lower-rates.png", "lib", "w-100 d-none d-md-block") ?>
                <?= renderImg("lower-rates.png", "lib", "w-100 d-md-none") ?>
            </div>
            <div class="col-lg-6 px-1 px-md-5 px-lg-1 text-lg-end" data-aos="fade-right">
                <div class="fs-7 fw-800 text-tertiary cta-subheading">Interest Rates from 3.99%*</div>
                <h3 class="fw-900 fs-3 text-primary-dark cta-heading">Lower Rates</h3>
                <div class="fs-10 text-black fw-700 py-4">With access to 40+ Lenders, combined with our 20+<br class="d-none d-lg-block"> years’ experience allows us access to the lowest rates<br class="d-none d-lg-block"> and repayments on the market</div>
                <div class="d-flex justify-content-lg-end">
                    <a href="#form" class="text-primary fw-900 pe-2">Check Your Eligibility for Pre-Approval</a>
                    <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="#742CFF" />
                    </svg>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block" data-aos="fade-left">
                <?= renderImg("lower-rates.png", "lib", "w-100") ?>
            </div>
        </div>
    </div>
    <div class="container py-4 py-md-0">
        <div class="row gx-xl-5 align-items-center">
            <div class="col-7 col-lg-6" data-aos="fade-right">
                <?= renderImg("we-work-for-you.png", "lib", "w-100") ?>
            </div>
            <div class="col-lg-6 col-xl-4" data-aos="fade-left">
                <div class="fs-7 fw-800 text-tertiary cta-subheading">Speak directly with a Loan Specialist</div>
                <h3 class="fw-900 fs-3 text-primary-dark cta-heading">We Work For YOU</h3>
                <div class="fs-10 text-black fw-700 py-4">We work for you, not the banks! We guarantee to find you the perfect loan, with the lowest rates, tailored to you, no matter your financial circumstance</div>
                <div class="d-flex">
                    <a href="./loan-application" target="_blank" class="text-primary fw-900 pe-2 d-md-none">Apply Now</a>
                    <a href="./loan-application" target="_blank" class="text-primary fw-900 pe-2 d-none d-md-block">Access Your Personal Rate & Choose Your Loan</a>
                    <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="#742CFF" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="introduction" id="about-us">
    <div class="container-fluid px-0">
        <div class="row gx-0">
            <div class="col-xl-6 col-xxl-7 bg-tertiary py-5 px-3 p-xl-0">
                <div class="row gx-0 justify-content-center h-100 align-items-center">
                    <div class="col-lg-10 col-xxl-7" data-aos="fade-right">
                        <h2 class="fs-2 fw-800 line-height-1 text-white"><span class="text-primary-dark">Fast, Simple, and Affordable</span> Funding, when you need it!</h2>
                        <div class="text-white fs-11 fw-500 pe-xxl-4 py-4">
                            We’re one of Australia’s most experienced and trusted finance providers. Based in Sydney, and servicing customers nation-wide, Affordable Funding delivers fast, simple, and flexible finance options, specialising in both Personal Asset Loans and Commercial Asset Finance.
                        </div>
                        <ul class="intro-loan-type-list">
                            <li>Car Loans</li>
                            <li>Personal Loans</li>
                            <li>Leisure Loans</li>
                            <li>Truck &amp; Equipment Loans</li>
                            <li>Small Business Loans</li>
                        </ul>
                        <div class="pt-4 d-md-none">
                            <div class="pb-1">
                                <a href="#form" class="btn btn-secondary-dark text-white fs-11 fw-700 rounded-pill line-height-1 py-3 d-block">Enquire Now</a>
                            </div>
                            <div class="pt-1">
                                <a href="./loan-application" target="_blank" class="btn text-primary-dark fs-11 fw-800 line-height-1 py-3 rounded-pill btn-white d-block">Apply Now</a>
                            </div>
                        </div>
                        <div class="row g-0 pt-4 d-none d-md-flex">
                            <div class="col-auto">
                                <div class="row g-0 bg-white rounded-pill">
                                    <div class="col-auto">
                                        <a href="#form" class="btn btn-secondary-dark text-white fs-11 fw-700 rounded-pill line-height-1 py-4 px-6">Enquire Now</a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="./loan-application" target="_blank" class="btn text-primary-dark fs-11 fw-800 line-height-1 py-4 px-5">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-left">
                <div class="row g-0 align-items-center">
                    <div class="col-md-6 col-lg-auto col-xl-6"><?= renderImg("intro-1.png", "lib") ?></div>
                    <div class="col-md p-5 p-md-4 px-lg-5 p-xxl-5">
                        <?= renderImg("notes.png", "icons") ?>
                        <div class="text-tertiary fs-5 line-height-1 fw-800 py-4">Deal Directly with<br class="d-md-none"> a broker</div>
                        <div class="font-ubuntu text-primary-dark fw-300 fs-11 pb-4">Apply Online or over the Phone in less than 5 minutes, and work our magic, and handle the rest!</div>
                        <a href="tel:<?= $phone_number ?>" class="text-primary-dark fs-11 fw-900 call-btn">Call Now, Talk directly with your Broker</a>
                    </div>
                </div>
                <div class="row g-0 bg-primary-dark align-items-center">
                    <div class="d-md-none"><?= renderImg("intro-2.png", "lib") ?></div>
                    <div class="col p-5 p-md-4 px-lg-5 p-xxl-5">
                        <svg width="61" height="57" viewBox="0 0 61 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.5362 0C38.2299 0 45.3632 7.1591 45.3632 16.1364L45.3632 32.2728V40.4546L37.3383 32.2728L15.827 32.2728C7.02182 32.1591 0 25 0 16.1364C0 7.1591 7.02182 0 15.827 0L29.5362 0Z" fill="#742CFF" />
                            <path d="M33.5489 20.4546C26.0812 20.4546 20.0625 26.591 20.0625 34.2046V47.9546L20.0625 55.0001L26.9729 47.9546H45.2519C52.7195 47.9546 58.7383 41.8182 58.7383 34.2046C58.7383 26.591 52.7195 20.4546 45.2519 20.4546H33.5489Z" fill="#EF7337" />
                        </svg>
                        <div class="text-primary fs-5 line-height-1 fw-800 py-4">Real People,<br> Real Support</div>
                        <div class="font-ubuntu text-white fw-300 fs-11 pb-4">From finding you the perfect loan, to picking up the keys, and beyond… we’re with you every step of the way.</div>
                        <a href="#form" class="text-white fs-11 fw-800">Chat Now</a>
                    </div>
                    <div class="col-6 col-lg-auto col-xl-6 d-none d-md-block"><?= renderImg("intro-2.png", "lib") ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-it-works" id="how-it-works">
    <div class="container">
        <div class="fs-1 fw-800 line-height-1 heroHeading">How it works</div>
        <div class="fs-7 fw-500 subHeading">We make things <span class="fw-700 text-italic">simple, seamless and FAST…</span></div>
    </div>
    <div data-aos="fade-up">
        <?= renderImg("how-it-works-mobile.png", "lib", "w-100 d-md-none pt-5") ?>
        <div class="position-relative">
            <?= renderImg("how-it-works.png", "lib", "w-100 d-none d-md-block pt-lg-5 pt-xl-0") ?>
            <div class="apply-btn"><a href="#form" class="btn"></a></div>
            <div class="call-btn"><a href="tel: <?= $phone_number ?>" class="btn"></a></div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="d-lg-none" data-aos="fade-up"><?= renderImg("about.png", "lib", "w-100 pb-5") ?></div>
            <div class="col-lg-6 col-xxl-4 px-4 px-md-3" data-aos="fade-right">
                <h2 class="fs-2 text-primary fw-800 line-height-1 text-center text-lg-start">Finance Products for Personal & ABN Holders</h2>
                <div class="fs-11 text-primary-dark pt-3 pb-4 line-height-3">
                    Affordable Funding has finance products for personal & ABN holders, so no matter your situation, we will have a solution for you. Full range of insurance and warranty products easily incorporated into your loan to supplement your car purchase. We will be there for you throughout the entire duration of your loan, helping with pay-outs, trade-ins and any other queries you may have.
                </div>
                <div class="text-center text-lg-start"><a href="./loan-application" target="_blank" class="text-uppercase btn btn-primary rounded-pill text-white line-height-1 py-4 px-5 px-xl-7 fs-7 fw-700 d-block d-md-inline-block">Apply Now</a></div>
            </div>
            <div class="col-6 d-none d-lg-block" data-aos="fade-left"><?= renderImg("about.png", "lib", "w-100") ?></div>
        </div>
    </div>

    <!-- Loans type slider for mobile screens -->
    <div class="loans-slider-wrapper-sm d-md-none">
        <div class="loans-slider-sm">
            <div class="loans-slider-sm-content slider-1">
                <div class="row justify-content-end h-100">
                    <div class="col-2 loan-nav-wrapper">
                        <div class="row align-items-around justify-content-center loans-slider-nav-sm h-100">
                            <div class="col-auto d-flex align-items-center">
                                <a href="javascript:void(0)" class="sm-nav-btn" slideTarget="2">Personal Loans</a>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <a href="javascript:void(0)" class="sm-nav-btn" slideTarget="1">Commercial Asset Finance</a>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <a href="javascript:void(0)" class="sm-nav-btn active" slideTarget="3">Car Loans</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-between flex-column h-inherit">
                        <div>
                            <div class="heroHeading">Car<br>Loans</div>
                            <div class="description pt-3">
                                <p>With our huge network and long-term relationships with the best car finance lenders in the country, we connect credit conscious Australians with much lower interest rates and flexible loan options.</p>
                                <p>Affordable Funding is a true market leader when it comes to Car Loans, guaranteeing to deliver the perfect loan to suit your car buying needs.</p>
                            </div>
                            <?= renderImg("slider-car-loans.png", "lib") ?>
                        </div>
                        <div class="d-flex pt-3">
                            <a href="./loan-application" target="_blank" class="text-white text-uppercase fw-700 pe-2 fs-9">Apply Now</a>
                            <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="loans-slider-sm-content slider-2">
                <div class="row justify-content-end h-100">
                    <div class="col-2 loan-nav-wrapper">
                        <div class="row align-items-around justify-content-center loans-slider-nav-sm h-100">
                            <div class="col-auto d-flex align-items-center">
                                <a href="javascript:void(0)" class="sm-nav-btn" slideTarget="2">Personal Loans</a>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <a href="javascript:void(0)" class="sm-nav-btn active" slideTarget="1">Commercial Asset Finance</a>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <a href="javascript:void(0)" class="sm-nav-btn" slideTarget="3">Car Loans</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 d-flex justify-content-between flex-column h-inherit">
                        <div>
                            <div class="heroHeading">Commercial<br>Asset Finance</div>
                            <div class="description pt-3">
                                <p>Having operated for over 15 years and as a continuously growing business, Affordable Funding understands the importance of access to simple and fast finance.</p>
                                <p>Whether you’re an ABN Holder buying the new family car, a Sole Trader wanting to purchase a small truck, or a large company expanding its fleet of equipment and machinery; we’re with you every step of the way.</p>
                            </div>
                            <?= renderImg("slider-commercial-asset-finance.png", "lib", "slider-img") ?>
                        </div>
                        <div class="d-flex pt-3">
                            <a href="./loan-application" target="_blank" class="text-white text-uppercase fw-700 pe-2 fs-9">Apply Now</a>
                            <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loans-slider-sm-content slider-3">
                <div class="row justify-content-end h-100">
                    <div class="col-2 loan-nav-wrapper">
                        <div class="row align-items-around justify-content-center loans-slider-nav-sm h-100">
                            <div class="col-auto d-flex align-items-center">
                                <a href="javascript:void(0)" class="sm-nav-btn active" slideTarget="2">Personal Loans</a>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <a href="javascript:void(0)" class="sm-nav-btn" slideTarget="1">Commercial Asset Finance</a>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <a href="javascript:void(0)" class="sm-nav-btn" slideTarget="3">Car Loans</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 d-flex justify-content-between flex-column h-inherit">
                        <div>
                            <div class="heroHeading">Personal<br>Loans</div>
                            <div class="description pt-3">
                                <p>Affordable Funding is a true market leader when it comes to providing quick, easy, and low rate Personal Loans, guaranteeing to deliver the perfect solution no matter your circumstance, financial history, or lending requirements.</p>
                                <p>Whether you need a personal loan for a Holiday, Wedding, Jewellery, Refinancing, or just in need of extra Cash, we’ll find you the right solutions and we’re with you every step of the way!</p>
                            </div>
                            <?= renderImg("slider-personal-loans.png", "lib", "slider-img") ?>
                        </div>
                        <div class="d-flex pt-3">
                            <a href="./loan-application" target="_blank" class="text-white text-uppercase fw-700 pe-2 fs-9">Apply Now</a>
                            <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Loans type slider for larger screens -->
    <div class="loans-slider-wrapper d-none d-md-block" id="loans">
        <div class="container">
            <ul class="loans-slider-nav">
                <li class="active"><a href="javascript:void(0)" class="btn fs-12 fw-700 text-primary-dark loan-slider-btn" slideTarget="0">Car Loans</a></li>
                <li><a href="javascript:void(0)" class="btn fs-12 fw-700 text-primary-dark loan-slider-btn" slideTarget="1">Commercial Asset Finance</a></li>
                <li><a href="javascript:void(0)" class="btn fs-12 fw-700 text-primary-dark loan-slider-btn" slideTarget="2">Personal Loans</a></li>
                <li class="slide"></li>
            </ul>

            <div class="loans-slider">
                <div class="loan-slider-content-wrapper">
                    <div class="loan-slider-content slider-1">
                        <div class="row justify-content-between">
                            <div class="col-7 slider-text">
                                <div class="fs-2 text-white fw-700 line-height-1">Car Loans</div>
                                <p class="fs-11 text-white line-height-2 fw-500">
                                    With our huge network and long-term relationships with the best car finance lenders in the country, we connect credit conscious Australians with much lower interest rates and flexible loan options.
                                </p>
                                <p class="fs-11 text-white line-height-2 fw-500">
                                    Affordable Funding is a true market leader when it comes to Car Loans, guaranteeing to deliver the perfect loan to suit your car buying needs.
                                </p>
                                <div class="d-flex pt-3">
                                    <a href="./loan-application" target="_blank" class="text-white text-uppercase fw-700 pe-2 fs-9">Apply Now</a>
                                    <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col col-xl-auto"><?= renderImg("slider-car-loans.png", "lib", "slider-img") ?></div>
                        </div>
                    </div>
                    <div class="cards-wrapper">
                        <div class="row gx-3 h-100">
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-xl-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Competitive interest rates as low as 3.99%</div>
                                        </div>
                                        <div class="col-xl-10">
                                            <div class="fs-11">
                                                Flexible loan terms, tailored repayments, 40+ lenders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-xl-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Easy online application</div>
                                        </div>
                                        <div class="col-xl-10">
                                            <div class="fs-11">
                                                quick turn-around time for an approval, you can be in your car within as little as 24 hours
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-xl-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">No deposit required</div>
                                        </div>
                                        <div class="col-xl-10">
                                            <div class="fs-11">
                                                no up-front costs at all and no hidden fees or charges for personal or car finance
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-xl-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">New and Used Vehicles</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="fs-11">
                                                Exclusive access to the cheapest cars on the market. Don’t just fund your car with Affordable Funding, allow us to locate the right car for you too!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-12">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Discounts for ABN Holders</div>
                                        </div>
                                        <div class="col-xl-10">
                                            <div class="fs-11">
                                                Exclusive discounts available on Business & Commercial Loans
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loan-slider-content-wrapper">
                    <div class="loan-slider-content slider-2">
                        <div class="row justify-content-between">
                            <div class="col-7 slider-text">
                                <div class="fs-2 text-white fw-700 line-height-1">Commercial Asset Finance</div>
                                <p class="fs-11 text-white line-height-2 fw-500">
                                    Having operated for over 15 years and as a continuously growing business, Affordable Funding understands the importance of access to simple and fast finance.
                                </p>

                                <p class="fs-11 text-white line-height-2 fw-500">
                                    Whether you’re an ABN Holder buying the new family car, a Sole Trader wanting to purchase a small truck, or a large company expanding its fleet of equipment and machinery; we’re with you every step of the way.
                                </p>
                                <div class="d-flex pt-3">
                                    <a href="./loan-application" target="_blank" class="text-white text-uppercase fw-700 pe-2 fs-9">Apply Now</a>
                                    <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col col-xl-auto"><?= renderImg("slider-commercial-asset-finance.png", "lib", "slider-img") ?></div>
                        </div>
                    </div>
                    <div class="cards-wrapper">
                        <div class="row gx-3 h-100">
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Competitive interest rates as low as 3.99%</div>
                                        </div>
                                        <div class="col-10">
                                            <div class="fs-11">
                                                Flexible loan terms, tailored repayments, 40+ lenders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Easy online application</div>
                                        </div>
                                        <div class="col-10">
                                            <div class="fs-11">
                                                quick turn-around time for an approval, you can be in your car within as little as 24 hours
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">No deposit required</div>
                                        </div>
                                        <div class="col-10">
                                            <div class="fs-11">
                                                no up-front costs at all and no hidden fees or charges for personal or car finance
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Exclusive Access</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="fs-11">
                                                We are the most competitive in the industry for commercial interest rates and have access to a multitude of commercial products including; New and Used Vehicles, Machinery and commercial equipment
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-12">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Discounts for ABN Holders</div>
                                        </div>
                                        <div class="col-10">
                                            <div class="fs-11">
                                                Exclusive discounts available on Business & Commercial Loans
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loan-slider-content-wrapper">
                    <div class="loan-slider-content slider-3">
                        <div class="row justify-content-between">
                            <div class="col-7 slider-text">
                                <div class="fs-2 text-white fw-700 line-height-1">Personal Loans</div>
                                <p class="fs-11 text-white line-height-2 fw-500">
                                    Affordable Funding is a true market leader when it comes to providing quick, easy, and low rate Personal Loans, guaranteeing to deliver the perfect solution no matter your circumstance, financial history, or lending requirements.
                                </p>

                                <p class="fs-11 text-white line-height-2 fw-500">
                                    Whether you need a personal loan for a Holiday, Wedding, Jewellery, Refinancing, or just in need of extra Cash, we’ll find you the right solutions and we’re with you every step of the way!
                                </p>
                                <div class="d-flex pt-3">
                                    <a href="./loan-application" target="_blank" class="text-white text-uppercase fw-700 pe-2 fs-9">Apply Now</a>
                                    <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col col-xl-auto"><?= renderImg("slider-personal-loans.png", "lib", "slider-img") ?></div>
                        </div>
                    </div>
                    <div class="cards-wrapper">
                        <div class="row gx-3 h-100">
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Competitive interest rates as low as 3.99%</div>
                                        </div>
                                        <div class="col-10">
                                            <div class="fs-11">
                                                Flexible loan terms, tailored repayments, 40+ lenders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Easy online application</div>
                                        </div>
                                        <div class="col-10">
                                            <div class="fs-11">
                                                quick turn-around time for an approval, you can be in your car within as little as 24 hours
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">No deposit required</div>
                                        </div>
                                        <div class="col-10">
                                            <div class="fs-11">
                                                no up-front costs at all and no hidden fees or charges for personal or car finance
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-9">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Exclusive Access</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="fs-11">
                                                With the most competitive interest rate and cheapest cars on the market. Dont just fund your car with Affordable Funding, allow us to locate the right car for you too!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col h-inherit">
                                <div class="slider-card">
                                    <div class="row justify-content-between g-0">
                                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                                    </div>
                                    <div class="row gx-0">
                                        <div class="col-12">
                                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Discounts for ABN Holders</div>
                                        </div>
                                        <div class="col-10">
                                            <div class="fs-11">
                                                Exclusive discounts available on Business & Commercial Loans
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cards-wrapper-sm">
        <div class="row gx-3 gy-5 justify-content-center">
            <div class="col-12 col-md-6">
                <div class="slider-card" data-aos="fade-up">
                    <div class="row justify-content-between g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-9">
                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Competitive interest rates as low as 3.99%</div>
                        </div>
                        <div class="col-10">
                            <div class="fs-11">
                                Flexible loan terms, tailored repayments, 40+ lenders
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="slider-card" data-aos="fade-up">
                    <div class="row justify-content-between g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-9">
                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Easy online application</div>
                        </div>
                        <div class="col-10">
                            <div class="fs-11">
                                quick turn-around time for an approval, you can be in your car within as little as 24 hours
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="slider-card" data-aos="fade-up">
                    <div class="row justify-content-between g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-9">
                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">No deposit required</div>
                        </div>
                        <div class="col-10">
                            <div class="fs-11">
                                no up-front costs at all and no hidden fees or charges for personal or car finance
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="slider-card" data-aos="fade-up">
                    <div class="row justify-content-between g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-9">
                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Exclusive Access</div>
                        </div>
                        <div class="col-10">
                            <div class="fs-11">
                                We are the most competitive in the industry for commercial interest rates and have access to a multitude of commercial products including; New and Used Vehicles, Machinery and commercial equipment
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="slider-card" data-aos="fade-up">
                    <div class="row justify-content-between g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-9">
                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Exclusive Access</div>
                        </div>
                        <div class="col-10">
                            <div class="fs-11">
                                With the most competitive interest rate and cheapest cars on the market. Dont just fund your car with Affordable Funding, allow us to locate the right car for you too!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="slider-card" data-aos="fade-up">
                    <div class="row justify-content-between g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-9">
                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">New and Used Vehicles</div>
                        </div>
                        <div class="col-12">
                            <div class="fs-11">
                                Exclusive access to the cheapest cars on the market. Don’t just fund your car with Affordable Funding, allow us to locate the right car for you too!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="slider-card" data-aos="fade-up">
                    <div class="row justify-content-between g-0">
                        <div class="col-auto"><?= renderImg("sm-vertical-logo.png", "icons") ?></div>
                        <div class="col-auto"><?= renderImg("burger-dots.png", "icons") ?></div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-12">
                            <div class="font-ubuntu fs-8 py-3 fw-900 line-height-1">Discounts for ABN Holders</div>
                        </div>
                        <div class="col-10">
                            <div class="fs-11">
                                Exclusive discounts available on Business & Commercial Loans
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rates-slider-wrapper">
        <div class="rates-arrow" id="rates-arrow-next">
            <svg width="31" height="24" viewBox="0 0 31 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5147 1.39344L30.0607 10.9394C30.6464 11.5252 30.6464 12.4749 30.0607 13.0607L20.5147 22.6066C19.9289 23.1924 18.9792 23.1924 18.3934 22.6066C17.8076 22.0209 17.8076 21.0711 18.3934 20.4853L25.3787 13.5L-1.0968e-06 13.5L-8.34533e-07 10.5L25.3787 10.5L18.3934 3.51476C17.8076 2.92898 17.8076 1.97923 18.3934 1.39344C18.9792 0.807657 19.9289 0.807657 20.5147 1.39344Z" fill="#742CFF" />
            </svg>
        </div>
        <div class="rates-arrow" id="rates-arrow-prev">
            <svg width="31" height="24" viewBox="0 0 31 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4853 1.39344L0.939341 10.9394C0.353555 11.5252 0.353555 12.4749 0.939342 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0209 13.1924 21.0711 12.6066 20.4853L5.62132 13.5L31 13.5L31 10.5L5.62132 10.5L12.6066 3.51476C13.1924 2.92898 13.1924 1.97923 12.6066 1.39344C12.0208 0.807657 11.0711 0.807657 10.4853 1.39344Z" fill="#742CFF" />
            </svg>
        </div>

        <div class="container">
            <div class="rates-slider">
                <div class="rates-slider-content slider-2">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto d-lg-none">
                            <?= renderImg("speedometer.png", "lib") ?>
                        </div>
                        <div class="col-lg-5 py-md-5 py-lg-0">
                            <div class="text-tertiary fw-800 heroHeading">Bad Credit? <span class="text-italic fw-700">No Problem!</span></div>
                            <div class="text-white fw-800 fs-9 subText">
                                No matter your personal circumstance, credit history, or financial needs; have confidence in allowing our team of loan experts and technology, to get you approved!
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pt-5 pt-md-0">
                            <a href="./loan-application" class="btn d-block btn-tertiary text-white rounded-pill line-height-1 py-4 fs-7 fw-700">Apply Now</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <?= renderImg("speedometer.png", "lib") ?>
                        </div>
                    </div>
                </div>
                <div class="rates-slider-content slider-1">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6 col-md-4 d-lg-none">
                            <?= renderImg("percentage.png", "lib", "percentage-img") ?>
                        </div>
                        <div class="col-auto py-md-4 py-lg-0">
                            <div class="text-primary fw-700 fs-6 heroHeading">Competitive Rates As Low As</div>
                            <div class="row align-items-end gx-3">
                                <div class="col-md-auto fw-700 text-primary line-height-1 hero-percentage">3.99%</div>
                                <div class="col pb-3 fs-9 fw-900 text-black">
                                    Start-to-finish process<br> in as little as 24 hours
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg col-xl-3 pt-3 pt-lg-0">
                            <a href="./loan-application" class="btn d-block btn-primary text-white rounded-pill line-height-1 py-4 fs-7 fw-700">Apply Now</a>
                        </div>
                        <div class="col-3 position-relative d-none d-lg-block">
                            <?= renderImg("percentage.png", "lib", "percentage-img") ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-2">
        <div class="container">
            <div class="row justify-content-around gy-5 gy-md-0">
                <div class="col-md-4 col-xl-3" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-auto"><?= renderImg('cta-verified.png', "lib") ?></div>
                        <div class="col-12 col-md fs-5 fw-900 line-height-1 text-primary-dark py-4 py-md-0">Vehicle <br class="d-none d-md-block">Warranty</div>
                        <div class="col-12 text-primary-dark fs-10 fw-600 pt-md-3">Bundle & Save with our Premium Discounts on Warranties and Roadside </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-3" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-auto"><?= renderImg('cta-percentage.png', "lib") ?></div>
                        <div class="col-12 col-md fs-5 fw-900 line-height-1 text-primary-dark py-4 py-md-0">Vehicle <br class="d-none d-md-block">Insurance</div>
                        <div class="col-12 text-primary-dark fs-10 fw-600 pt-md-3">Bundle & Save with our Premium Discounts on all Insurance Products</div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-3" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-auto"><?= renderImg('cta-certified.png', "lib") ?></div>
                        <div class="col-12 col-md fs-5 fw-900 line-height-1 text-primary-dark py-4 py-md-0">Vehicle <br class="d-none d-md-block">Search</div>
                        <div class="col-12 text-primary-dark fs-10 fw-600 pt-md-3">With access to a large network of Car Dealerships & Wholesalers, we can help find your new car or trade-in the old one.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faq">
        <div data-aos="fade-right"><?= renderImg("faq-img.png", "lib", "faq-img") ?></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6" data-aos="fade-left">
                    <div class="accordion-container">
                        <div class="accordion-card">
                            <div class="accordion-head active">
                                <div class="main-question">What are the current interest rates?</div>
                                <div class="plusminus">-</div>
                            </div>
                            <div class="accordion-body" style="display: block;">
                                Affordable Funding has access to interest rates as low as 3.99% over a wide range of finance products across many banks and lenders. The rate will vary depending on each individual client’s profile, as well as the lender in which they are approved.
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-head">
                                <div class="main-question">How quickly can I get my new car?</div>
                                <div class="plusminus">+</div>
                            </div>
                            <div class="accordion-body">
                                From the moment we take an application we can have an approval generated within the hour and the complete process finalized within 24 hours.
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-head">
                                <div class="main-question">Am I eligible for finance?</div>
                                <div class="plusminus">+</div>
                            </div>
                            <div class="accordion-body">
                                Whether you have bad credit, are on a pension, or have previous bankruptcies, if there is an option available Affordable Funding is confident that we can provide all customers with a finance product that will suit their individual needs.
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-head">
                                <div class="main-question">Why Choose Affordable Funding?</div>
                                <div class="plusminus">+</div>
                            </div>
                            <div class="accordion-body">
                                <p>We’re Fast, Simple, and Affordable... We have the technology, the team, the experience, and the network to provide you with the best loan options on the market… and we guarantee it!</p>
                                <div>Being solution focussed, your loan approval is our main goal, however your experience in applying for finance is our priority. When you choose Affordable Funding, you become part of the family, and we’re your Brokers for Life.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials" id="reviews">
        <?php
        $testimonial_1 = [
            [
                "user" => "Tara Howlett",
                "date" => "3 months ago",
                "comment" => "<p>Anthony was an amazing help! Anything I had an issue on, he was very accommodating. I started my application on Sunday afternoon and by Monday late afternoon I was approved for my car loan. Would recommend Anthony in a heart beat! The whole experience was smooth and easy and great customer service! I will 100% be using Anthony and his company again if I need anything in the future.</p>Again thank you!!",
            ],
            [
                "user" => "Graeme Jenkins",
                "date" => "3 months ago",
                "comment" => "I'm very happy that I got assigned 1 person to deal with from the start, who I could text, email and call directly, and is based in Australia. He also made the whole process so easy for me. Dealing with lenders directly can be difficult. I highly recommend Affordable Funding, and in particular Josh, he was excellent"
            ],
            [
                "user" => "James Slater",
                "date" => "5 months ago",
                "comment" => "My experience with Affordable Funding - Car Finance Sydney was beyond expectations. The service and staff are both amazing. Gustavo was a godsend, a genuinely welcoming and very easy person to talk to, making for a very comfortable and trusting experience, he went above and beyond to help me with getting the best possible finance and achieved it unbelievably fast. It was amazing to say the least. HIGHLY RECOMMENDED"
            ],
            [
                "user" => "Geraldine Ryland",
                "date" => "6 months ago",
                "comment" => "<p>The best thing about Affordable Funding? The lady who answered my call! Jess was not only professional and willing to go the extra mile to find me the best loan options and lowest interest rates, she was also very personable, patient and generous with her time. Her email correspondence arrived almost immediately, with clear instructions on how to proceed.</p>I would highly recommend AF to anyone seeking a loan and I would also highly recommend Jess. She's a diamond!"
            ],
            [
                "user" => "Craig Ford",
                "date" => "2 months ago",
                "comment" => "We had an exceptional experience with Affordable Funding. Gus bent over backwards to arrange all our needs. Was great to talk to a real, genuine polite professional. I would recommend using Affordable Funding to anyone looking for there expertise. Thanks again."
            ],
            [
                "user" => "Maufi Moraho",
                "date" => "5 months ago",
                "comment" => "Great experience had with Affordable Funding. Especially Anthony Di Martino who made the whole process quick and easy took less than 4 business days to get me what I needed everything from start to finish were clearly communicated. Definitely recommend Affordable Funding n again Anthony to anyone looking for finance. Totally HAPPY with service"
            ]
        ];

        $testimonial_2 = [
            [
                "user" => "Winvie Mendoza",
                "date" => "2 months ago",
                "comment" => "Can’t say enough about their level of customer service. Anthony is an absolute legend! He always made sure I had visibility and understanding of every step in the process. He also turned things around very quickly. Would definitely consider them for financing needs in the future."
            ],
            [
                "user" => "Esi Taukiuvea",
                "date" => "3 months ago",
                "comment" => "Gus was an absolute pleasure to deal with! Was very responsive, had the ball rolling very quick & company vehicle approved in next to no time. Will definitely refer family & friends and highly recommend Affordable Funding."
            ],
            [
                "user" => "Sarah Hurst",
                "date" => "2 months ago",
                "comment" => "Wow! What a great experience! No stress and Gus found me an excellent finance deal. Very happy with the process and the end result and can't wait to pick up my new car :D Thank you!"
            ],
            [
                "user" => "Dante Tatai-Sa",
                "date" => "a month ago",
                "comment" => "<p>Just want to thank Gus from Affordable funding was very competent,professional and also friendly. Gus went above and beyond to reach our end goal and he reached it successfully. If anyone is looking a great person to deal with these things definitely refer Gus.</p>Thanks Again"
            ],
            [
                "user" => "Elish Tiffen",
                "date" => "a week ago",
                "comment" => "<p>My experience with affordable funding was made super easy and enjoyable. I dealt with Eric Nak and he was honestly very the best. I could not recommend him more. He went above and beyond to get me the best deal possible to purchase a new car.</p>Thankyou so much Eric for allowing me to purchase my dream car"
            ],
            [
                "user" => "Peter Stoneley",
                "date" => "5 months ago",
                "comment" => "<p>Highly recommend using affordable funding. I dealt with Gus throughout the application process. His communication skills are amazing. He always kept me well informed of the progress of application and even called out of business hours to keep me updated.</p> Highly recommend and will be using his service again in the future."
            ],
        ]; ?>
        <div class="container pb-4 pb-md-5">
            <div class="text-center pb-2 d-md-none"><?= renderImg("5stars.png", "lib", 'testimonial-star') ?></div>
            <div class="text-center text-primary-dark fs-5 fw-900 heroHeading">Over 10,000 Loans Approved</div>
            <div class="text-center text-primary-dark fs-9 line-height-2 subHeading py-2 py-md-0">Read our <a href="https://www.google.com/maps/place/AFFORDABLE+FUNDING+-+Car+Loans+Sydney/@-33.811217,150.9185534,15z/data=!4m2!3m1!1s0x0:0x32dabd908706399a?sa=X&ved=2ahUKEwj6wdXqsqT6AhW49zgGHa8zBT8Q_BJ6BAhSECE" class="text-primary-dark fs-9" target="_blank">Google Reviews</a> from our many happy customers</div>
            <div class="text-center py-3 d-none d-md-block"><?= renderImg("5stars.png", "lib", 'testimonial-star') ?></div>
        </div>
        <div class="testimonial-slider testimonial-slider-1">
            <?php foreach ($testimonial_1 as $testimonial) { ?>
                <div class="testimonial-card">
                    <div>
                        <div class="row align-items-center">
                            <div class="col-auto"><?= renderImg("craig.png", "lib") ?></div>
                            <div class="col">
                                <div class="username"><?= $testimonial['user'] ?></div>
                                <div class="date"><?= $testimonial['date'] ?></div>
                            </div>
                        </div>
                        <div class="comment">
                            <?= $testimonial['comment'] ?>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-end">
                        <div class="col-5"><?= renderImg("5stars.png", "lib", "py-2") ?></div>
                        <div class="col-auto">
                            <div class="d-flex justify-content-end"><?= renderImg('google.png', "icons") ?></div>
                            <div class="verified">verified google review</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="testimonial-slider testimonial-slider-2">
            <?php foreach ($testimonial_2 as $testimonial) { ?>
                <div class="testimonial-card">
                    <div>
                        <div class="row align-items-center">
                            <div class="col-auto"><?= renderImg("craig.png", "lib") ?></div>
                            <div class="col">
                                <div class="username"><?= $testimonial['user'] ?></div>
                                <div class="date"><?= $testimonial['date'] ?></div>
                            </div>
                        </div>
                        <div class="comment">
                            <?= $testimonial['comment'] ?>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-end">
                        <div class="col-5"><?= renderImg("5stars.png", "lib", "py-2") ?></div>
                        <div class="col-auto">
                            <div class="d-flex justify-content-end"><?= renderImg('google.png', "icons") ?></div>
                            <div class="verified">verified google review</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>