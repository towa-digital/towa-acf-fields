<?php
/**
 * Created by TOWA.
 * User: dseidl
 * Date: 08/08/16
 *
 * UPDATE: 25/08/16
 * User: patrick
 * COMMENT: added parent class
 */

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class GravityForm extends BaseField
{
    protected $prefix;
    protected $name_key = 'gravity';
    protected $type = 'gravity_forms_field';
    protected $label = 'Formular';
}
