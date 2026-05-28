<?php

/*
This file is part of the KIA Banking Theme, licensed under the MIT License (MIT).
Feel free to modify it as you wish.
*/

require_once THEME_API . "General.php";
require_once THEME_API . "Accounts.php";
require_once THEME_API . "Appearance.php";

setTitle("Welcome to " . getBankName());

updateStatistic("Homepage hits", 0, STATISTICS_TYPE_COUNTER, "Page hits");

// Theme entry point
function getTheme()
{
?>
    <body>

        <?php include "components/Nav.php";

        if (shouldAppearLoggedIn()) { ?>
            <div class="justify-right form-inline">
                <a class="btn btn-outline-primary" href="/user/Dashboard.php" style="margin-right: 25px">Go to my dashboard</a>
                <a class="btn btn-outline-secondary" href="/user/Logout.php">Logout</a>
            </div>
        <?php } else { ?>
            <div class="justify-right form-inline">
                <a class="btn btn-outline-primary" href="/user/Login.php" style="margin-right: 25px">Login</a>
                <a class="btn btn-outline-success" href="/user/Apply.php">Apply now</a>
            </div>
        <?php } ?>
        </nav>


        <div class="container-fluid main-page-teaser" style="background-image: url('<?php echo getRawThemeContent("happy-family.jpg", "assets/"); ?>');">

            <?php addModuleDescriptor("alert-area");  ?>

            <div class="main-page-teaser-overlay rounded">
                <br>
                <br>
                <h3><strong>Bank funds can be accessed faster with our new EZAccess</strong></h3>
                <?php addModuleDescriptor("header"); ?>

                <h5>Here at <?php echo getBankName(); ?>, we have developed a revolutionary way to access your funds quicker than ever before.</h5>
                <br>
                <p>We've teamed up with Helimomoz IR to bring you this innovative solution to the problems of slow fund access.</p>
                <p>For a limited time only, we're offering exclusive benefits to our EZAccess users, including $50 cashback. Apply today!</p>

                <br>
                <a href="/user/Apply.php" class="btn btn-primary">Apply today</a>
                <pre class="lead small" style="margin-top: 10; color: white">Terms and conditions apply while event lasts.</pre>
            </div>
        </div>

        <?php addModuleDescriptor("pre-content"); ?>

        <div class="container-fluid mt-2">
            <div class="card-deck services-panels">
                <div class="card text-light bg-dark">
                    <img class="card-img-top mx-auto d-block" src="<?php echo getRawThemeContent("account-icon.jpg", "assets/"); ?>">
                    <h5 class="card-header text-center">Checking accounts</h5>
                    <div class="card-body">
                        <p class="card-title"><strong>Award winning checking accounts with you at the center of our interests</strong></p>
                        <div class="card-text">
                            <p>Many banks put their own gain at the center of your account. Not here. Our philosophy is that your gain is ours, and stick to that. Put your money where you want it and not where you think you need it.</p>
                        </div>
                        <a class="btn btn-primary" href="/user/Apply">Get started</a>
                    </div>
                </div>
                <div class="card text-light bg-dark">
                    <img class="card-img-top mx-auto d-block" src="<?php echo getRawThemeContent("savings-icon.jpg", "assets/"); ?>">
                    <h5 class="card-header text-center">Savings Accounts</h5>
                    <div class="card-body">
                        <p class="card-title"><strong>Savings accounts that won't let you down, with our savings guarantee</strong></p>
                        <div class="card-text">
                            <p>Think of us as a piggy bank, just a lot larger. And safer. And less pink. We're committed to keeping your money just as safe as if it was back there, in your little piggy bank.</p>
                        </div>
                        <a class="btn btn-primary" href="/user/Apply">Get started</a>
                    </div>
                </div>
                <div class="card text-light bg-dark">
                    <img class="card-img-top mx-auto d-block" src="<?php echo getRawThemeContent("loan-icon.jpg", "assets/"); ?>">
                    <h5 class="card-header text-center">Loans and Leases</h5>
                    <div class="card-body">
                        <p class="card-title"><strong>Sometimes, everyone needs a bail-out, pick-me-up or something to support them. We're here to provide for you</strong></p>
                        <div class="card-text">
                            <p>With decades of lending experience, we're here to get you through that difficult repair bill or emergency breakdown until payday.</p>
                        </div>
                        <a class="btn btn-primary" href="/user/Apply">Get started</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="jumbotron-fluid text-center m-3">
            <div class="row">
                <div class="col border-left p-3">
                    <h1><span class="badge badge-primary">98.44%</span></h1>
                    <h3><span class="badge badge-secondary">of customers recommend our services</span></h3>
                </div>
                <div class="col border-left p-3">
                    <h1><span class="badge badge-primary">$368 million</strong></h1>
                    <h3><span class="badge badge-secondary">of funds in our care</span></h3>
                </div>
                <div class="col border-left p-3">
                    <h1><span class="badge badge-primary">80+</span></h1>
                    <h3><span class="badge badge-secondary">branches worldwide</span></h3>
                </div>
            </div>
        </div>

        <hr>

        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col text-light int-investment" style="background-image: url('<?php echo getRawThemeContent("singapore.jpg", "assets/"); ?>');">
                    <h3>International investment opportunities <span class="badge badge-primary">New</span></h3>
                    <p class="lead">Invest now and get in on markets never seen before to the regular investor with our new quick international plan.</p>
                    <a class="btn btn-primary" href="/services/transfer">Get started</a>
                    <pre class="lead small" style="margin-top: 20px; color: white">Terms and conditions apply. External markets not guaranteed to be profitable.</pre>
                </div>
                <div class="col text-light online-banking" style="background-image: url('<?php echo getRawThemeContent("online-banking.jpg", "assets/"); ?>');">
                    <h3>Industry leading online banking services <span class="badge badge-primary">New</span></h3>
                    <p class="lead">Productivity at its max with industry leading online banking services. Try them out and see why other banks are getting left behind.</p>
                    <a class="btn btn-primary" href="/services/current">Get started</a>
                    <pre class="lead small" style="margin-top: 20px; color: white">Only select accounts can apply for this offer. Terms and conditions apply.</pre>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-dark corporation" style="background-image: url('<?php echo getRawThemeContent("skyscraper.jpg", "assets/"); ?>');">
            <div class="row">
                <div class="col text-light">
                    <h3>Banking for corporations <span class="badge badge-success">Exclusive</span></h3>
                    <p class="lead">Special perks, such as dedicated account managers and special offers on products, can be obtained with our exclusive business account for corporations. Switch to us today for a free stock-market trading advisory</p>
                    <a class="btn btn-success" href="/services/shared">Tell me more</a>
                </div>
            </div>
            <hr class="bg-dark">
            <div class="row">
                <div class="col text-light">
                    <h3>Banking for small businesses</h3>
                    <p class="lead">It's a hard world for small businesses: getting picked on by the big guy, getting ripped off by big banks. No more, join us and get 50% off most financial products and a dedicated account manager</p>
                    <a class="btn btn-success" href="/services/shared">Tell me more</a>
                </div>
            </div>
            <hr class="bg-dark">
            <div class="row">
                <div class="col text-light">
                    <h3>Banking for start-ups</h3>
                    <p class="lead">When we work together, everyone succeeds. Get exclusive benefits for start-ups and self-employed businesses. We're helping the next generation of businesses one step at a time.</p>
                    <a class="btn btn-success" href="/CPRewards">Tell me more</a>
                </div>
            </div>

            <div class="row text-light">
                <pre class="lead small" style="margin-top: 40px; color: white">Terms and conditions apply</pre>
            </div>
        </div>

        <?php addModuleDescriptor("post-content"); ?>

        <?php require ABSPATH . getRawThemeContent("Footer.php", "components/"); ?>

    </body>

<?php }
