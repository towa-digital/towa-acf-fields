<?php
/**
 * Created by TOWA.
 * User: dseidl
 * Date: 02/08/16
 *
 * UPDATE: 25/08/16
 * User: patrick
 * COMMENT: added parent class
 */

namespace Towa\Acf\Modules;

use Towa\Acf\BaseField;

/**
 * Class PageOrUrl
 *
 * @package towa\acf\fields
 */
class PageOrUrl extends BaseField
{
    protected $prefix;
    protected $name = 'page_or_url';
    protected $label = 'Link';

    /**
     * @param string $name_key
     * @param string $label
     * @param array  $parameter
     *
     * @return array
     */
    public function build($name_key = '', $label = '', array $parameter = [])
    {
        $selection = new Select($this->get_name());

        $fieldGroup = [
            $selection->build('link_type', 'Url oder Seite', [
                'choices' => [
                    'useLink' => __('Verwende einen Link', 'towa_translation'),
                    'useUrl'  => __('Verwende eine Url', 'towa_translation'),
                ],
            ]),
            ( new PageLink($this->get_name()) )->build('link', null, [
                'conditional_logic' => [
                    [
                        [
                            'field'    => $selection->get_key(),
                            'operator' => '==',
                            'value'    => 'useLink',
                        ],
                    ],
                ],
            ]),
            ( new Url($this->get_name()) )->build('link', null, [
                'conditional_logic' => [
                    [
                        [
                            'field'    => $selection->get_key(),
                            'operator' => '==',
                            'value'    => 'useUrl',
                        ],
                    ],
                ],
            ]),
        ];

        //TODO return is not correct!!
        return $fieldGroup;
    }
}
