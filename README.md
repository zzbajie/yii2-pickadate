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
      'isTime' => true,
      'pickadateOptions' => [
          'formatSubmit' => 'HH:i',
      ],
  ]); ?>```


To use with active form :

```php
<?= $form->field($model, 'time-field')->widget(\zzbajie\pickadate\Pickadate::classname(), [
    'isTime' => true,
    'pickadateOptions' => [
        'formatSubmit' => 'HH:i',
    ],
]); ?>```