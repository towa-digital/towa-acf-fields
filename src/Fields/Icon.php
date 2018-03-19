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

class Icon extends BaseField
{
    protected $prefix;
    protected $name_key = 'icon';
    protected $label = 'Icon';
    protected $type = 'fonticonpicker';
}
