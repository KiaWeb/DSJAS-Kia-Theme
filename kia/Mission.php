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

    <div class="container-fluid mission-page-teaser" style="background-image: url('<?php echo getRawThemeContent("togetherness.jpg", "assets/"); ?>');">
        <div class="mission-page-teaser-overlay rounded">
            <h1>Our Mission</h1>
            <br>
            <h2>It's simple really: Get your money in our bank, no matter what the cost</h2>
        </div>
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Hey there, and welcome to <?php echo (getBankName()); ?>!</h1>
        <p class="lead">This is our mission statement. You should familiarize yourself with it, because it's very important</p>
    </div>

    <div class="container">
        <h2>You and your rights are very important to us. The below is the full text of our mission statement and licence texts</h2>

        <p class="border">
            <?php echo (file_get_contents(ABSPATH . "/admin/site/UI/" . getCurrentThemeName() . "/components/MissionStatement.html")); ?>

            <hr>

            <?php echo (file_get_contents(ABSPATH . "/admin/site/UI/" . getCurrentThemeName() . "/components/LicenceTexts.txt")); ?>

            <hr>

            <small class="text-small text-muted">Thanks to the XKCD licensing organization and the FSF for the above texts</small>
        </p>
    </div>


    <?php require ABSPATH . getRawThemeContent("Footer.php", "components/"); ?>
<?php }
