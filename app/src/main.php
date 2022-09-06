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
    <div class="container lenders-header">
        <div class="row justify-content-center">
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

<section class="lenders">
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
    <div class="row gx-0 align-items-center">
        <div class="col-lg-6">
            <?= renderImg("protect-credit-scores.png", "lib", "w-100") ?>
        </div>
        <div class="col-lg-6 px-5 px-xxl-8">
            <div class="fs-7 fw-800 text-tertiary">Simple & Secure Application Process</div>
            <h3 class="fw-900 fs-3 text-primary-dark">Protect Your Credit Score</h3>
            <div class="fs-10 text-black fw-700 py-4">Protect your credit score by matching with the best<br> lender the first time</div>
            <div class="d-flex">
                <a href="#form" class="text-primary fw-900 pe-2">Apply Now</a>
                <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="#742CFF" />
                </svg>
            </div>
        </div>
    </div>
    <div class="row gx-0 align-items-center">
        <div class="col-lg-6 px-1 text-end">
            <div class="fs-7 fw-800 text-tertiary">Interest Rates from 3.99%*</div>
            <h3 class="fw-900 fs-3 text-primary-dark">Lower Rates</h3>
            <div class="fs-10 text-black fw-700 py-4">With access to 40+ Lenders, combined with our 20+<br> years’ experience allows us access to the lowest rates<br> and repayments on the market</div>
            <div class="d-flex justify-content-end">
                <a href="#form" class="text-primary fw-900 pe-2">Check Your Eligibility for Pre-Approval</a>
                <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="#742CFF" />
                </svg>
            </div>
        </div>
        <div class="col-lg-6">
            <?= renderImg("lower-rates.png", "lib", "w-100") ?>
        </div>
    </div>
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <?= renderImg("we-work-for-you.png", "lib", "w-100") ?>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="fs-7 fw-800 text-tertiary">Speak directly with a Loan Specialist</div>
                <h3 class="fw-900 fs-3 text-primary-dark">We Work For YOU</h3>
                <div class="fs-10 text-black fw-700 py-4">We work for you, not the banks! We guarantee to find you the perfect loan, with the lowest rates, tailored to you, no matter your financial circumstance</div>
                <div class="d-flex">
                    <a href="#form" class="text-primary fw-900 pe-2">Access Your Personal Rate & Choose Your Loan</a>
                    <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="#742CFF" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="introduction">
    <div class="row gx-0">
        <div class="col-lg-7 bg-tertiary">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-lg-7">
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
                    <div class="row g-0 pt-4">
                        <div class="col-auto">
                            <div class="row g-0 bg-white rounded-pill">
                                <div class="col-auto">
                                    <a href="#form" class="btn btn-secondary-dark text-white fs-11 fw-700 rounded-pill line-height-1 py-4 px-6">Get a FREE Quote within minutes</a>
                                </div>
                                <div class="col-auto">
                                    <a href="#form" class="btn text-primary-dark fs-11 fw-800 line-height-1 py-4 px-5">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row g-0">
                <div class="col-6"><?= renderImg("intro-1.png", "lib") ?></div>
                <div class="col-6 p-5">
                    <?= renderImg("notes.png", "icons") ?>
                    <div class="text-tertiary fs-5 line-height-1 fw-800 py-4">Deal Directly with a broker</div>
                    <div class="font-ubuntu text-primary-dark fw-300 fs-11 pb-4">Apply Online or over the Phone in less than 5 minutes, and work our magic, and handle the rest!</div>
                    <a href="#form" class="text-primary-dark fs-11 fw-900">Call Now, Talk directly with your Broker</a>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-6 bg-primary-dark p-5">
                    <svg width="61" height="57" viewBox="0 0 61 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.5362 0C38.2299 0 45.3632 7.1591 45.3632 16.1364L45.3632 32.2728V40.4546L37.3383 32.2728L15.827 32.2728C7.02182 32.1591 0 25 0 16.1364C0 7.1591 7.02182 0 15.827 0L29.5362 0Z" fill="#742CFF" />
                        <path d="M33.5489 20.4546C26.0812 20.4546 20.0625 26.591 20.0625 34.2046V47.9546L20.0625 55.0001L26.9729 47.9546H45.2519C52.7195 47.9546 58.7383 41.8182 58.7383 34.2046C58.7383 26.591 52.7195 20.4546 45.2519 20.4546H33.5489Z" fill="#EF7337" />
                    </svg>
                    <div class="text-primary fs-5 line-height-1 fw-800 py-4">Real People,<br> Real Support</div>
                    <div class="font-ubuntu text-white fw-300 fs-11 pb-4">From finding you the perfect loan, to picking up the keys, and beyond… we’re with you every step of the way.</div>
                    <a href="#form" class="text-white fs-11 fw-800">Chat Now</a>
                </div>
                <div class="col-6"><?= renderImg("intro-2.png", "lib") ?></div>
            </div>
        </div>
    </div>
</section>

<section class="how-it-works">
    <div class="container">
        <div class="fs-1 fw-800 line-height-1">How it works</div>
        <div class="fs-7 fw-500">We make things <span class="fw-700 text-italic">simple, seamless and FAST…</span></div>
    </div>
    <?= renderImg("how-it-works.png", "lib", "w-100") ?>
</section>

<section class="about">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-4">
                <h2 class="fs-2 text-primary fw-800 line-height-1">Access To All Car Finance Products</h2>
                <div class="fs-11 text-primary-dark pt-3 pb-4 line-height-3">
                    Affordable Funding has access to all Car Finance Products, so no matter your situation, we will have a solution for you. Full range of insurance and warranty products easily incorporated into your loan to supplement your car purchase. We will be there for you throughout the entire duration of your loan, helping with pay-outs, trade-ins and any other queries you may have.
                </div>
                <a href="#form" class="text-uppercase btn btn-primary rounded-pill text-white line-height-1 py-4 px-5 px-xl-7 fs-7 fw-700">Apply Now</a>
            </div>
            <div class="col-6"><?= renderImg("about.png", "lib", "w-100") ?></div>
        </div>
    </div>
    <div class="loans-slider-wrapper">
        <div class="container">
            <ul>
                <li class="active"><a href="javascript:void(0)" class="btn fs-12 fw-700 text-primary-dark loan-slider-btn">Car Loans</a></li>
                <li><a href="javascript:void(0)" class="btn fs-12 fw-700 text-primary-dark loan-slider-btn">Commercial Asset Finance</a></li>
                <li><a href="javascript:void(0)" class="btn fs-12 fw-700 text-primary-dark loan-slider-btn">Personal Loans</a></li>
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
                                    <a href="#form" class="text-white text-uppercase fw-700 pe-2 fs-9">Apply Now</a>
                                    <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5 13V13.5H19.7071L19.8536 13.3536L19.5 13ZM32.5 0L26.9232 1.49429L31.0057 5.57678L32.5 0ZM0 13.5H19.5V12.5H0V13.5ZM19.8536 13.3536L29.6716 3.53553L28.9645 2.82843L19.1464 12.6464L19.8536 13.3536Z" fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-auto"><?= renderImg("slider-car-loans.png", "lib", "slider-img") ?></div>
                        </div>
                    </div>
                    <div class="cards-wrapper">
                        <div class="row">
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
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
                            <div class="col">
                                <div class="slider-card">
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
                            <div class="col">
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
</section>

<?php include __DIR__ . '/footer.php'; ?>