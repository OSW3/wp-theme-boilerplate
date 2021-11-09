// ==================================================================
// Source file      : public.js
// Output Script    : bundle.js
// Output Style     : bundle.css
// ==================================================================

// ------------------------------------
// Stylesheets
// ------------------------------------

import "./../../sass/main.scss";


// ------------------------------------
// JS Dependencies
// ------------------------------------

require("bootstrap");


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