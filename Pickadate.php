<?php

namespace zzbajie\pickadate;

use yii\helpers\Html;
use yii\helpers\Json;
use zzbajie\pickadate\assets\PickadateAsset;

class Pickadate extends \yii\widgets\InputWidget
{
    public $options = [];
    public $clientOptions = [];
    public $isTime = false;
    public $containerOptions = [];
    public $language = 'en';

    public function init()
    {
        parent::init();
        isset($this->options['id'])
            ? $this->setId($this->options['id'])
            : $this->options['id'] = $this->getId();
        $this->registerJs();
        echo Html::tag('div', $this->renderInput(), $this->containerOptions);
    }

    public function registerJs()
    {
        $view = $this->getView();
        if ($this->language != 'en') {
            $pickadateAsset = \Yii::$app->assetManager->getBundle(PickadateAsset::className());
            $pickadateAsset->js[] =  YII_DEBUG ? "translations/{$this->language}.js" : "compressed/translations/{$this->language}.js";
        }
        PickadateAsset::register($view);
        $clientOptions = $this->clientOptions ? Json::encode($this->clientOptions) : null;
        if ($this->isTime === true) {
            $useMethod = 'pickatime';
        } else {
            $useMethod = 'pickadate';
        }
        $view->registerJs('jQuery("#' . $this->options['id'] . '"). ' . $useMethod . '(' . $clientOptions . ');');
    }

    public function renderInput()
    {
        Html::addCssClass($this->options, 'field');
        if ($this->hasModel()) {
            $input = Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            $input = Html::textInput($this->name, $this->value, $this->options);
        }
        return $input;
    }
}
