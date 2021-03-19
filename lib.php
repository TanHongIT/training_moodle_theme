<?php

// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();

// We will add callbacks here as we add features to our theme.

// Function to return the SCSS to prepend to our main SCSS for this theme.
// Note the function name starts with the component name because this is a global function and we don't want namespace clashes.
function theme_trainingmoodletheme_get_pre_scss($theme)
{
    // Load the settings from the parent.                                                                                           
    $theme = theme_config::load('boost');
    // Call the parent themes get_pre_scss function.                                                                                
    return theme_boost_get_pre_scss($theme);
}
