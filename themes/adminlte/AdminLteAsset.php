<?php
namespace app\themes\adminlte;
use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle{
	public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

	public $css = [
		'css/AdminLTE.css',
		'css/skins/skin-blue.css',
	];

	public $js = [
		'js/app.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootsrtap\BootstarpAsset',
	];
}
