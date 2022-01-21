<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class TrueFalse extends BaseField
{
    protected $prefix;
    protected $name = 'true_false';
    protected $label = 'Frage';
    protected $type = 'true_false';
}
