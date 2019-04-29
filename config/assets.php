<?php

// ****************************** //
// THEME ASSETS
// ****************************** //

// Add Styles
array_push($assets["styles"], ["bootstrap", THEME_STYLES_URI."bootstrap.min.css", "4.3.1"]);
array_push($assets["styles"], ["main", THEME_STYLES_URI."main.css"]);

// Add Scripts
array_push($assets["scripts"], ["main", THEME_SCRIPTS_URI."main.js", "1", [], true]);

