<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = __DIR__;
    
    public $css = [
        'css/backend.style.css',
    ];
    
    public $js = [
        'js/backend.script.js'
    ];
    
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
