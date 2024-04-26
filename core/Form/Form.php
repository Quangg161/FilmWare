<?php

namespace app\core\Form;

use app\core\Model;

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form accept-charset="utf-8" action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    // Render the input form of a model attribute (mainly a way to generate clean html)
    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }
}