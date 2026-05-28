<?php

/*
This file is part of the KIA Banking Theme, licensed under the MIT License (MIT).
Feel free to modify it as you wish.
*/

// BOOTSTRAPPING FILE: Used to load custom CSS, among other things

require_once THEME_API . "Appearance.php";
require_once THEME_API . "General.php";

function getBootstrap()
{
    setTitle(getBankName());
    ?>
    <link rel="stylesheet" href=<?php echo (getThemeContent("styles.css", "styles/")) ?>>
<?php }
