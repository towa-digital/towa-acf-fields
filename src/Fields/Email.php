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

class Email extends BaseField
{
    protected $prefix;
    protected $name = 'email';
    protected $type = 'email';
    protected $label = 'E-Mail';
}
