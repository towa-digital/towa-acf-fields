<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Textarea extends BaseField
{
    protected $prefix;
    protected $name = 'textarea';
    protected $label = 'Textfeld';
    protected $type = 'textarea';

    /**
     * @param array  $parameter
     *
     * @return array
     */
    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'new_lines' => 'br',
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
