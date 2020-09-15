<?php

namespace startpl\t2cms\themes\first;

/**
 * T2CMS Asset bundle
 * @since 0.1
 */
class DefaultAsset extends \yii\web\AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = __DIR__. '/assets';
    
    /**
     * @inherit
     */
    public $css = [
        'css/style.css',
    ];
    
    /**
     * @inherit
     */
    public $js = [
        //'js/script.js',
    ];
    
    public $depends = [
        't2cms\T2Asset',
    ];

}
