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

namespace Towa\Acf\Modules;

use Towa\Acf\BaseField;

class UseH1 extends BaseField
{
    protected $prefix;
    protected $name = 'use_h1';
    protected $type = 'true_false';
    protected $label = 'Der Titel beinhaltet die H1 dieser Seite.';
}
