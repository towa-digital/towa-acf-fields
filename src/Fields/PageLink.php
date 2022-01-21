<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class PageLink extends BaseField
{
    protected $prefix;
    protected $name = 'page_link';
    protected $label = 'Seiten-Link';
    protected $type = 'page_link';

    /**
     * @param array  $parameter
     *
     * @return array
     */
    public function build(array $parameter = [])
    {
        $add_to_defaults = [
            'allow_null' => true,
        ];

        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
