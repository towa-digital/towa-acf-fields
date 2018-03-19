<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Group extends BaseField
{
    protected $prefix;
    protected $name = 'group';
    protected $label = 'Group';
    protected $type = 'group';

    public function build(array $parameter = [])
    {
        $default = [ 'sub_fields' => [] ];

        return parent::build(array_merge($default, $parameter));
    }
}
