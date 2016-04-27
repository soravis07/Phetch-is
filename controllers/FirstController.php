<?php

namespace app\controllers;

class FirstController extends \yii\web\Controller
{
    /*public function actionIndex()
    {
        return $this->render('index');
    }*/

    public function actionPage1()
    {
    	return $this->render('page1');
    }

    public function actionPage2()
    {
    	$hello = "Hello";
    	$a = 5;
    	$b = 2;

    	$c = $a+$b;
    	return $this->render('page2',['hello'=>$hello,'a'=>$a,'b'=>$b,'c'=>$c,]);
    }

    public function actionPage3()
    {
    	return $this->render('page3');
    }
}
