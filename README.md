yii2-pickadate
==============
pickadate for yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist zzbajie/yii2-pickadate "*"
```

or add

```
"zzbajie/yii2-pickadate": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \zzbajie\pickadate\Pickadate::widget([
      'clientOptions' => [
        //'monthsFull' => ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        //'weekdaysShort' => ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
        'today' => '今天',
        'clear' => '清除',
        'close' => '关闭',
        'format' => 'yyyy-mm-dd',
        'labelMonthNext' => '下一月',
        'labelMonthPrev' => '上一月',
        'labelMonthSelect' => '选择月份',
        'labelYearSelect' => '选择年份',
        'selectMonths' => true,
        'selectYears' => true,
    ],
  ]); ?>```


To use with active form :

```php
<?= $form->field($model, 'time-field')->widget(\zzbajie\pickadate\Pickadate::classname(), [
    'clientOptions' => [
        //'monthsFull' => ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        //'weekdaysShort' => ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
        'today' => '今天',
        'clear' => '清除',
        'close' => '关闭',
        'format' => 'yyyy-mm-dd',
        'labelMonthNext' => '下一月',
        'labelMonthPrev' => '上一月',
        'labelMonthSelect' => '选择月份',
        'labelYearSelect' => '选择年份',
        'selectMonths' => true,
        'selectYears' => true,
    ],
]); ?>```