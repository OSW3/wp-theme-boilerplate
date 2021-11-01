<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./config/posts.php
// Use this file to define the posts that will be created when installing the theme

// required: recommended

//======================================================================

// Check the ABSPATH constant for security
// if the ABSPATH constant don't exists, this theme will be not executed
if (!defined( 'ABSPATH' )) exit;

//======================================================================

// 1. Comment the line below if you need to define pages for your website
// return;

// Define the lentgh of posts excerpt
// default: 40
const WPTB_EXCERPT_LENGTH = 40;

// Define excerpt ellipsis symbole
// default: [...]
const WPTB_EXCERPT_MORE = " …";

// Define permalink structure
// Default null
const WPTB_PERMALINK_STRUCTURE = "/blog/%postname%/";
const WPTB_PERMALINK_FORCE = true;
