<?php

/*
This file is part of the KIA Banking Theme, licensed under the MIT License (MIT).
Feel free to modify it as you wish.
*/

require_once THEME_API . "General.php";
require_once THEME_API . "Error.php";


function getTheme()
{
    ?>

    <body>

        <?php include "components/Nav.php"; ?>

        </nav>

        <div class="container-fluid text-center">
            <?php addModuleDescriptor("alert-area");
            addModuleDescriptor("pre-content"); ?>


            <img src="/assets/warning.png" style="height: 170; width: 200">
            <h1>Code <?php echo (getErrorCode()); ?></h1>
            <h3 class="text-dark">That's an error</h3>
            <br>
            <p>There was a problem while attempting to navigate to that page. Please try again and make sure you got the URL correct</p>

            <?php addModuleDescriptor("post-content");  ?>

            <span>
                <a class="btn btn-primary" href="/">Go to the Homepage</a>
            </span>

            <?php addModuleDescriptor("footer");  ?>
        </div>
    </body>
<?php }
