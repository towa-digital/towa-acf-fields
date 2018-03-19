<?php
namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Number extends BaseField
{
    protected $prefix;
    protected $name = 'number';
    protected $label = 'Number';
    protected $type = 'number';
}
