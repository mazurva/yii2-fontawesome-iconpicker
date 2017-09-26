<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 26.09.17
 * Time: 13:01
 */

namespace mazurva\widgets\iconpicker;

use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;

class IconPicker extends InputWidget
{
    /**
     * Options plugin
     * @var array
     */
    public $clientOptions = [];

    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
        $this->registerClientScript();
    }

    /**
     * Publish resource
     */
    protected function registerClientScript()
    {
        $js = [];
        $view = $this->getView();
        IconPickerAsset::register($view);
        $id = $this->options['id'];
        $options = Json::encode($this->clientOptions);
        $js[] = "$('#{$id}').iconpicker($options);";
        $view->registerJs(implode("\n", $js));
    }
}