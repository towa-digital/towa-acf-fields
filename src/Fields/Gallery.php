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

class Gallery extends BaseField
{
    protected $prefix;
    protected $name = 'gallery';
    protected $type = 'gallery';
    protected $label = 'Bildergalerie';
}
