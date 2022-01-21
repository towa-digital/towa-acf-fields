<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Wysiwyg extends BaseField
{
    protected $prefix;
    protected $name = 'content';
    protected $label = 'Inhalt';
    protected $type = 'wysiwyg';

    /**
     * @param array  $parameter
     *
     * @return array
     */
    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload'  => 0,
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
