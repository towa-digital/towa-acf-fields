<?php
/**
 * Created by TOWA.
 * User: dseidl
 * Date: 02/08/16
 *
 * UPDATE: 25/08/16
 * User: patrick
 * COMMENT: added parent class
 *
 */

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Tab extends BaseField
{
    protected $prefix;
    protected $name = 'tab';
    protected $label = 'Tab';
    protected $type = 'tab';
}
