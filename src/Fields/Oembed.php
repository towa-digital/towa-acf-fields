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

class Oembed extends BaseField
{
    protected $prefix;
    protected $name = 'oembed';
    protected $type = 'oembed';
    protected $label = 'Video (z.B: Youtube Link)';
}
