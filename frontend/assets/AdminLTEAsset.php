<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminLTEAsset extends AssetBundle
{
   // public $basePath = '@themes/material';
   public $sourcePath = '@themes/adminlte';
    //public $sourcePath = '@vender/almasaeed2010/adminlte/dist';
    public $baseUrl = '@web';
    public $css = [
		'css/AdminLTE.css',
    ];
    public $js = [
		'js/app.js',
		
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
