<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

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
