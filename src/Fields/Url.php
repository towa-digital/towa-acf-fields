<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Url extends BaseField
{
    protected $prefix;
    protected $name = 'url';
    protected $label = 'Url';
    protected $type = 'url';
}
