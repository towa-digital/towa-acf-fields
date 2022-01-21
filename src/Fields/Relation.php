<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Relation extends BaseField
{
    protected $prefix;
    protected $name = 'relation';
    protected $type = 'relationship';
    protected $label = 'Relation';

    /**
     * @param array  $parameter
     *
     * @return array
     */
    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'filters'   => [ 'search' ],
            'return_format' => 'id',
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
