<?php

namespace Towa\Acf;

abstract class BaseSection
{
    private $key;
    protected $name;
    protected $label;

    private static $instances = [];


    /**
     * BaseSection constructor.
     *
     * @param $prefix
     */
    private function __construct($prefix = 'towa_component')
    {
        $this->generate_key($prefix);
    }


    abstract public function get_acf_fields();


    /**
     * get instance
     *
     * @return BaseSection
     */
    public static function get_instance($prefix = null) : BaseSection
    {
        $class = get_called_class();

        $index = isset($prefix) ? $prefix . '-' . $class : $class;

        if (! isset(self::$instances[ $index ])) {
            self::$instances[ $index ] = new $class($prefix);
        }

        return self::$instances[ $index ];
    }


    /**
     * @param $name
     */
    public function set_name($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function get_name()
    {
        return $this->name;
    }


    /**
     * @param $label
     */
    protected function set_label($label)
    {
        $this->label = $label;
    }


    /**
     * @return mixed
     */
    public function get_label()
    {
        return $this->label;
    }


    /**
     * asdfasd
     *
     * @return array
     */
    public static function get_components()
    {
        return self::$instances;
    }


    /**
     * generates and sets the
     * key of the module
     *
     * @param $prefix
     */
    private function generate_key($prefix)
    {
        $this->key = $prefix . '_' . $this->get_name();
    }


    /**
     * returns the key of the module
     *
     * @return mixed
     */
    public function get_key()
    {
        return $this->key;
    }
}
