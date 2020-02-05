<?php
/**
 * @link https://github.com/chandrantwins/yii2-ezoom
 * @copyright Copyright (c) 2020 Chandran Nepolean
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace chandrantwins\ezoom;

use Yii;
use yii\web\AssetBundle;

class EZoomAsset extends AssetBundle
{
    public $sourcePath = '@chandrantwins/ezoom/assets';
	
	public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];
	
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();

        $this->js[] = YII_DEBUG ? 'js/jquery.elevatezoom.js' : 'js/jquery.elevateZoom-3.0.8.min.js';               
    }    
}
