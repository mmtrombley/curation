<?php
/**
 * _s functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package _s
 */

/* ==========================================================================
   General
   ========================================================================== */

/**
 * Hooks
 */
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/plugins.php';

/**
 * Custom template tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions
 */
require get_template_directory() . '/inc/functions.php';
