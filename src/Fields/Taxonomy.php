<?php
/**
 * Created by TOWA.
 * User: dseidl
 * Date: 02/08/16
 *
 * UPDATE: 25/08/16
 * User: patrick
 * COMMENT: added parent class
 *
 */

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Taxonomy extends BaseField
{
    protected $prefix;
    protected $name = 'taxonomy';
    protected $label = 'Taxonomie';
    protected $type = 'taxonomy';

    /**
    * @param string $name_key
    * @param string $label
    * @param array  $parameter
    *
    * @return array
    */
    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'taxonomy'    => 'category',
            'field_type'  => 'checkbox',
            'add_term'    => 0,
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
