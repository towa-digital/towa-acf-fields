<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Icon extends BaseField
{
    protected $prefix;
    protected $name_key = 'icon';
    protected $label = 'Icon';
    protected $type = 'fonticonpicker';
}
