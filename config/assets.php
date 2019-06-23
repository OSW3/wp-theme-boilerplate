<?php

// ****************************** //
// THEME ASSETS
// ****************************** //

// Add Styles
array_push($assets["styles"], ["bootstrap", THEME_STYLES_URI."bootstrap.min.css", "4.3.1"]);
array_push($assets["styles"], ["main", THEME_STYLES_URI."main.css"]);

// Add Scripts
array_push($assets["scripts"], ["jquery", THEME_SCRIPTS_URI."jquery-3.3.1.min.js", "1", [], true]);
array_push($assets["scripts"], ["popper", THEME_SCRIPTS_URI."popper.min.js", "1", [], true]);
array_push($assets["scripts"], ["bootstrap", THEME_SCRIPTS_URI."bootstrap.min.js", "1", ["jquery", "popper"], true]);
array_push($assets["scripts"], ["main", THEME_SCRIPTS_URI."main.js", "1", [], true]);
