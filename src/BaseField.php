<?php
/**
 * Created by TOWA.
 * User: dseidl
 * Date: 01/08/16
 */

namespace Towa\Acf;

/**
 * Class AcfField
 *
 * @package towa\acf
 */
class BaseField
{
    private $key;
    protected $prefix;
    protected $name;
    protected $label;
    private static $search_keys;

    /**
     * Image constructor.
     *
     * @param $prefix
     * @param $name
     * @param $label
     */
    public function __construct($prefix, $name = null, $label = null, $is_search_key = false)
    {
        $this->prefix = $prefix;
        $this->set_name($name);
        $this->set_label($label);
        $this->set_key($this->prefix . '_' . $this->get_name());

        if ($is_search_key) {
            $this->add_as_search_key();
        }
    }

    /**
     * $parameter to override

     * @param array  $parameter
     *
     * @return array
     */
    public function build(array $parameter = [])
    {
        $defaults = [
            'key'   => $this->get_key(),
            'label' => $this->get_label(),
            'name'  => $this->get_name(),
            'type'  => $this->type,
        ];

        return array_merge((array) $defaults, (array) $parameter);
    }


    /**
     * @param $name
     *
     * @return string
     */
    protected function set_name($name)
    {
        $this->name = $name ?? $this->name;
    }

    /**
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @param $label
     *
     * @return string
     */
    protected function set_label($label)
    {
        $this->label = $label ?? $this->label;
    }

    /**
     * @return string
     */
    public function get_label()
    {
        return $this->label;
    }

    /**
     * @param $key
     *
     * @return string
     */
    private function set_key($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function get_key()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    private function add_as_search_key()
    {

        //init
        if (empty(self::$search_keys)) {
            self::$search_keys = [];
        }

        //prevent duplications
        if (in_array($this->get_name(), self::$search_keys)) {
            return;
        }

        self::$search_keys[] = $this->get_name();
    }

    /**
     * @return mixed
     */
    public static function get_search_keys()
    {
        return self::$search_keys;
    }
}
