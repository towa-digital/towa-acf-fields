<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Oembed extends BaseField
{
    protected $prefix;
    protected $name = 'oembed';
    protected $type = 'oembed';
    protected $label = 'Video (z.B: Youtube Link)';
}
