// ==================================================================
// Source file      : manager.js
// Output Script    : manager.js
// Output Style     : manager.css
// ==================================================================

// ------------------------------------
// Stylesheets
// ------------------------------------

import "./../../sass/manager.scss";


// ------------------------------------
// Stimulus Scripts
// ------------------------------------

import { Application } from "stimulus";
import { definitionsFromContext } from "stimulus/webpack-helpers";

const application = Application.start();
const context = require.context("./../controllers", true, /\.js$/);
application.load(definitionsFromContext(context));


// ------------------------------------
// UMD Scripts
// ------------------------------------

// require.context("./../umd", false, /\.js$/);





// const Flickity = require('flickity');

// var flkty = new Flickity('.flickity-slider', {
//     wrapAround: true
// });