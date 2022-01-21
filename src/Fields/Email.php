<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Email extends BaseField
{
    protected $prefix;
    protected $name = 'email';
    protected $type = 'email';
    protected $label = 'E-Mail';
}
