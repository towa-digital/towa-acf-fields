<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Datepicker extends BaseField
{
    protected $prefix;
    protected $name = 'date';
    protected $type = 'date_picker';
    protected $label = 'Date';

    /**
     * @param array  $parameter
     *
     * @return array
     */
    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'display_format' => 'd.m.Y',
            'return_format'  => 'd.m.Y',
            'first_day'      => 1,
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
