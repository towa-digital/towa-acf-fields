<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class DateTimePicker extends BaseField
{
    protected $prefix;
    protected $name = 'datetime';
    protected $type = 'date_time_picker';
    protected $label = 'Date and Time';

    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'display_format' => 'd.m.Y H:i',
            'return_format'  => 'd.m.Y H:i',
            'first_day'      => 1,
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
