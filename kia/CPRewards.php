<?php

/*
This file is part of the KIA Banking Theme, licensed under the MIT License (MIT).
Feel free to modify it as you wish.
*/

require_once THEME_API . "General.php";
require_once THEME_API . "Accounts.php";

updateStatistic("Rewards claimed", 0, STATISTICS_TYPE_COUNTER, "Banking rewards");
updateStatistic("Last reward claimed", 0, STATISTICS_TYPE_TIMESTAMP, "Banking rewards");

$randomMinute = rand(1, 59);
$randomHour = rand(0, 23);
$randomDay = rand(0, 364);

define("timeString", "$randomDay days, $randomHour hours and $randomMinute minutes");

// Theme entry point
function getTheme()
{
?>

    <body>
        <?php include ABSPATH . getRawThemeContent("Nav.php", "components/"); ?> </nav>

        <div class="container">
            <h1>Oh dear!</h1>

            <?php addModuleDescriptor("alert-area");
            addModuleDescriptor("pre-content"); ?>

            <div class="alert alert-info">
                <p><strong>Offer expired</strong> This offer ended <?php echo (timeString); ?> ago.
                    We're sorry about that, but you might find the next offer just around the corner!</p>
            </div>

            <?php addModuleDescriptor("post-content"); ?>

            <a href="/">Return home, feeling very sad</a>
        </div>

        <? addModuleDescriptor("footer"); ?>
    </body>

<?php }
