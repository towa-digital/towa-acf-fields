<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

/**
 * Flexible Content Field for ACF
 * Check the details and options here: https://www.advancedcustomfields.com/resources/flexible-content/
 */
class FlexibleContent extends BaseField
{
    protected $prefix;
    protected $name = 'flexible_content';
    protected $type = 'flexible_content';
    protected $label = 'Flexible Content';

    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'layouts' => [],
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
