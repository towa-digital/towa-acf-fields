<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

/**
 * Checkbox Field for ACF
 * Check the details and options here: https://www.advancedcustomfields.com/resources/checkbox/
 */
class Checkbox extends BaseField
{
    protected $prefix;
    protected $name = 'checkbox';
    protected $type = 'checkbox';
    protected $label = 'Checkbox';

    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'choices' => [],
            'allow_custom' => 0,
            'save_custom' => 0,
            'layout' => 'vertical',
            'return_format' => 'value',
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
