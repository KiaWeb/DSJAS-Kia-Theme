<?php

/*
This file is part of the KIA Banking Theme, licensed under the MIT License (MIT).
Feel free to modify it as you wish.
*/

require_once THEME_API . "General.php";
require_once THEME_API . "Accounts.php";
require_once THEME_API . "Appearance.php";

// Theme entry point
function getTheme()
{
?>
    <?php include "components/Nav.php"; ?> </nav>

    <div class="container-fluid about-page-teaser" style="background-image: url('<?php echo getRawThemeContent("loan-icon.jpg", "assets/"); ?>');">
        <div class="about-page-teaser-overlay rounded">
            <h1>About us</h1>
            <br>
            <h2>Although we're just a bank, we're so much more than a bank</h2>
            <?php addModuleDescriptor("header"); ?>
        </div>
    </div>

    <div class="container">
        <?php addModuleDescriptor("pre-content"); ?>

        <h2>Our origins</h2>
        <p>Back in the ancient era of 2007 AD, money was simpler: more elegant. We know, because we were there.
            Sadly, those days are gone. <?php echo (getBankName()); ?> was created by our three founders to make banking simple again. I guess you could say, make banking great again.
        </p>

        <h2>Why we care</h2>
        <p>We care because we've been there. Two of our three founders started out working in mailrooms of their own mansions. Let's just say that they didn't do too well.
            Before long, they were thrown into financial turmoil as they had to fire themselves for being substandard. Yes, our billionaire founders know what it means to be in financial trouble.
        </p>
        <br>
        <p>That is why we care. We care, because we've been there</p>

        <h2>Our fight on fraud</h2>
        <p>You may have noticed that many of our online banking pages contain warnings and notices about fraud and scams. That is not an accident.
            You see, when one of our founders was young, their grandmother was scammed out of 70 cents when they bought a bogus financial product.

            Sadly, she never got back her 70 cents. We vowed to never let anybody go through the trouble that she did. So, we have decided to wage
            a war on fraud, scams and any kind of sketchy operation that's going on around here. After all, when a red spy makes it into the base,
            it's up to the blues to protect the briefcase.
        </p>

        <h2>Get good (at banking)</h2>
        <p>Our support page and handy articles tell you everything you need to know about banking. Our dedicated team of support agents is available
            over 2 hours a day! Let's see somebody else give you that.

            To get to our numerous resources, please use the links below.
        </p>

        <? addModuleDescriptor("post-content"); ?>

        <hr>

        <div class="mb-2">
            <a href="/support/Support" class="btn btn-primary">Visit the support center</a>
            <a href="/support/Contact" class="btn btn-secondary">Contact us</a>
            <a href="/support/Fraud" class="btn btn-secondary">Help us fight fraud</a>
        </div>

    </div>


    <?php require ABSPATH . getRawThemeContent("Footer.php", "components/"); ?>
<?php }
