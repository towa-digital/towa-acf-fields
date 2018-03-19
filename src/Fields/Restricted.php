<?php
/**
 * Created by TOWA.
 * User: dseidl
 * Date: 09/08/16
 *
 *
 * UPDATE: 25/08/16
 * User: patrick
 * COMMENT: added parent class
 *
 */

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Restricted extends BaseField
{
    protected $prefix;
    protected $name = 'restricted';
    protected $label = 'Information';
    protected $type = 'message';

    /**
     * @param string $name_key
     * @param string $label
     * @param array  $parameter
     *
     * @return array
     */
    public function build($name_key = '', $label = '', array $parameter = [])
    {
        $add_to_defaults = [
            'message'   => __('Sie sind nicht dazu berechtigt, diesen Inhalt zu editieren.', 'towa_translation'),
        ];

        return parent::build($name_key, $label, array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
