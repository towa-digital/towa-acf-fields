<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class CloneField extends BaseField
{
    protected $prefix;
    protected $type = 'clone';
    protected $name = 'clone';
    protected $label = 'Clone';

    /**
     * @param array  $parameter
     *
     * @return array
     */
    public function build(array $parameter = [])
    {
        $default = ['clone' => []];

        return parent::build(array_merge($default, $parameter));
    }
}
