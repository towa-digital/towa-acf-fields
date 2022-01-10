<?php
/**
 * Created by TOWA.
 * User: dseidl
 * Date: 02/08/16
 *
 * UPDATE: 25/08/16
 * User: patrick
 * COMMENT: added parent class
 */

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Wysiwyg extends BaseField
{
    protected $prefix;
    protected $name = 'content';
    protected $label = 'Inhalt';
    protected $type = 'wysiwyg';

    /**
     * @param array  $parameter
     *
     * @return array
     */
    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload'  => 0,
            'wpml_cf_preferences' => 2,
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
