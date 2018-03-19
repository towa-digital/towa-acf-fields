<?php

namespace Towa\Acf;

class FieldGroup
{
    private $data = [
        'key'      => '',
        'title'    => '',
        'fields'   => [],
        'location' => [],
    ];

    public function __construct($key, $title)
    {
        $this->data['title'] = $title;
        $this->data['key']   = "group_{$key}";
    }

    public function for_cpt($cpt = 'post')
    {
        $this->data['location'][] = [
            [
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => $cpt,
            ],
        ];

        return $this;
    }

    public function for_all_cpts($cpts)
    {
        $this->data['location'] = collect($cpts)->map(function ($cpt) {
            return [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => $cpt,
                ],
            ];
        })->toArray();

        return $this;
    }

    public function for_taxonomy($tax = '')
    {
        $this->data['location'][] = [
            [
                'param'    => 'taxonomy',
                'operator' => '==',
                'value'    => $tax,
            ],
        ];

        return $this;
    }

    public function for_menu($menu = '')
    {
        $this->data['location'][] = [
            [
                'param'    => 'nav_menu_item',
                'operator' => '==',
                'value'    => $menu,
            ],
        ];

        return $this;
    }

    public function for_location( $rule )
    {
        $this->data[ 'location' ][] = $rule;
    }

    public function set_fields($fields)
    {
        $this->data['fields'] = $fields;

        return $this;
    }

    public function set_setting($setting, $data)
    {
        $this->data[ $setting ] = $data;

        return $this;
    }

    public function register()
    {
        acf_add_local_field_group($this->data);
    }
}
