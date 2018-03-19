<?php
/*
Plugin Name: Advanced Custom Fields: FontIconPicker
Plugin URI: http://codeb.it/fonticonpicker
Description: A simple Font Icons Picker for ACF
Version: 1.0.0
Author: Alessandro Benoit
Author URI: http://codeb.it/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

namespace Towa\Acf\Extensions\AcfFonticonpicker;

/**
 * Class AcfIconfield
 */
class AcfIconfield
{

    /**
     *  Construct
     *
     *  @since: 1.0.0
     */
    public function __construct()
    {

        // Version 4
        add_action('acf/register_fields', [$this, 'register_fields']);
        
        // Version 5
        add_action('acf/include_field_types', [$this, 'include_field_types']);
    }

    /**
     *  register_fields()
     *
     *  @since: 1.0.0
     */
    public function register_fields()
    {
        include_once('fonticonpicker-v4.php');
    }
    
    public function include_field_types($version)
    {
        include_once('fonticonpicker-v5.php');
    }
} // Class acf_field_fonticonpicker_plugin
