<?php
/**
 * Created by TOWA.
 * User: martinwelte
 * Date: 31/10/17
 */

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class ColorPicker extends BaseField
{
    protected $prefix;
    protected $name = 'color_picker';
    protected $type = 'color_picker';
    protected $label = 'Farbe';
}
