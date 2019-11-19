<?php

namespace dosamigos\datetimepicker;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package common\assets
 */
class FontAwesomeAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/font-awesome';

    /**
     * @var array
     */
    public $css = [
        'css/all.css',
    ];
}