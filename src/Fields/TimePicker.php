<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class TimePicker extends BaseField
{
    protected $prefix;
    protected $name = 'time';
    protected $type = 'time_picker';
    protected $label = 'Time';

    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'display_format' => 'H:i',
            'return_format'  => 'H:i',
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
