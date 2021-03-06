<?php

class acf_field_fonticonpicker extends acf_field
{
    // Vars
    public $settings;
    public $defaults;
    public $json_content; 	// Hold the content of icons JSON config file

    /**
     *  __construct
     *
     *  @since	1.0.0
     */
    public function __construct()
    {
        // Vars
        $this->name = 'fonticonpicker';
        $this->label = __('Icon Picker');
        $this->category = __("jQuery", 'acf');

        parent::__construct();

        // Settings
        $this->settings = [
            'dir' 		=>  PATH_THEME.'/src/Acf/Extensions/AcfFonticonpicker/',
            'path'		=>	PATH_THEME.'/src/Acf/Extensions/AcfFonticonpicker/',
            'config' 	=> 	PATH_THEME.'/src/Acf/Extensions/AcfFonticonpicker/icons/selection.json',
            'icons'		=>	PATH_THEME.'/src/Acf/Extensions/AcfFonticonpicker/icons/style.css',
            'version' 	=> 	'1.0.0'
        ];

        // Apply a filter so that you can load icon set from theme
        $this->settings = apply_filters('acf/acf_field_fonticonpicker/settings', $this->settings);

        // Enqueue icons style in the frontend
        //add_action( 'wp_enqueue_scripts', array( $this, 'frontend_enqueue' ) );

        // Load icons list from the icons JSON file
        if (is_admin()) {
            //$json_file = wp_remote_get($this->settings['config']);
            $json_file = @file_get_contents($this->settings['config']);
            $this->json_content = @json_decode($json_file, true);
            //var_dump($json_file);
        }
    }

    /**
     *  frontend_enqueue()
     *
     *  @since	1.0.0
     */
    public function frontend_enqueue()
    {
        // Register icons style
        wp_register_style('acf-fonticonpicker-icons', $this->settings['icons']);
        wp_enqueue_style('acf-fonticonpicker-icons');
    }

    /**
     *  create_field()
     *
     *  @param	$field - An array holding all the field's data
     *
     *  @since	1.0.0
     */
    public function render_field($field)
    {
        if (! isset($this->json_content['icons'])) {
            _e('No icons found');
            return;
        }

        // icons SELECT input
        echo '<select name="'. $field['name'] .'" id="'. $field['name'] .'" class="acf-iconpicker">';
        echo '<option value="">'. __('None').'</option>';
        foreach ($this->json_content['icons'] as $glyph) {
            $glyph_full = 'icon-'.$glyph['properties']['name'];
            echo '<option value="'. $glyph_full .'" '. selected($field['value'], $glyph_full, false) .'>'.$glyph['properties']['name'] .'</option>';
        }
        echo '</select>';
    }


    /**
     *  input_admin_enqueue_scripts()
     *
     *  @since	1.0.0
     */
    public function input_admin_enqueue_scripts()
    {

        // Scripts
        wp_register_script('acf-fonticonpicker', $this->settings['dir'] . 'js/jquery.fonticonpicker.min.js', ['jquery'], $this->settings['version']);
        wp_register_script('acf-fonticonpicker-input', $this->settings['dir'] . 'js/input.js', ['acf-fonticonpicker'], $this->settings['version']);
        wp_enqueue_script('acf-fonticonpicker-input');

        // Styles
        wp_register_style('acf-fonticonpicker-style', $this->settings['dir'] . 'css/jquery.fonticonpicker.min.css', false, $this->settings['version']);
        wp_register_style('acf-fonticonpicker-icons', $this->settings['icons']);
        wp_enqueue_style([ 'acf-fonticonpicker-style', 'acf-fonticonpicker-icons' ]);
    }
} // Class acf_field_fonticonpicker

// create field
new acf_field_fonticonpicker();
