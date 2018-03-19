<?php
/**
 * Created by TOWA.
 * User: dseidl
 * Date: 08/08/16
 *
 * UPDATE: 25/08/16
 * User: patrick
 * COMMENT: added parent class
 */

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

/**
 * Class PostObject
 *
 * @package towa\acf\fields
 */
class Select extends BaseField
{
    protected $prefix;
    protected $name = 'select';
    protected $type = 'select';
    protected $label = 'Auswahl';

    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'choices'   => [],
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
