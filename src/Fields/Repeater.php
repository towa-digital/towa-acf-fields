<?php

namespace Towa\Acf\Fields;

use Towa\Acf\BaseField;

class Repeater extends BaseField
{
    protected $prefix;
    protected $name = 'repeater';
    protected $type = 'repeater';
    protected $label = 'Wiederholung';

    /**
     * @param string $name_key
     * @param string $label
     * @param array  $parameter
     *
     * @return array
     */
    public function build(array $parameter = [])
    {

//		$this->set_name( $name_key );

        $add_to_defaults = [
            'button_label' => 'hinzufügen',
            'sub_fields'   => [],
        ];

        //		$add_to_defaults = array_merge( (array) $add_to_defaults, (array) $parameter );

        //		foreach ( $add_to_defaults['sub_fields'] as &$value ) {

        //TODO change key ?
        //			$value['key'] = $value['key'] . '_' . $this->get_name();
        //		}

        //		return parent::build( $add_to_defaults );
        return parent::build(array_merge((array) $add_to_defaults, (array) $parameter));
    }
}
