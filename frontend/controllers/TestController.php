<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');		// render Main Menu
    }
	public function actionTest1(){
		$a = 10;
		$b = 20;
		$c = $a+$b;
		return $this->render('test1',['a'=>$a,'b'=>$b,'sum'=>$c]);		//test1 can change to test2
	}
	public function actionTest2($name=null,$lname=null){
		//actionTest2($name=null){			?r=test/test2&name=Chaiyont%20Mingkwan
		//echo "My name is $name";           no command return
		$info = "My Name is : $name $lname";
		return $this->render('test2',['info'=>$info]);
	}
	
}
