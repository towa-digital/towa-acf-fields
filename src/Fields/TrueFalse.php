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

class TrueFalse extends BaseField
{
    protected $prefix;
    protected $name = 'true_false';
    protected $label = 'Frage';
    protected $type = 'true_false';
}
