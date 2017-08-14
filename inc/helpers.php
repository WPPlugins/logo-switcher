<?php

/**
 * Logo Switcher
 *
 * @author Iversen - Carpe Noctem
 *
 */

// Block direct access
if(!defined('ABSPATH'))exit;

/**
 * Get the logo url
 *
 * 
 * @return string
 */
function logo_switcher_url() {
    return class_Logo_Switcher::getLogoUrl();
}

/**
 * Print logo url
 * 
 * @param string $path the url target
 * @param string $description the logo image description
 *
 */
function logo_switcher_print($path = null, $description = null) {
    class_Logo_Switcher::printLogo($path, $description);
}