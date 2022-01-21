<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class GravityForm extends BaseField
{
    protected $prefix;
    protected $name_key = 'gravity';
    protected $type = 'gravity_forms_field';
    protected $label = 'Formular';
}
