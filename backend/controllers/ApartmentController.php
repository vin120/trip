<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class ApartmentController extends BaseController
{
	public $layout = "myloyout";

	public function actionIndex()
	{

		return $this->render('index');
	}

	public function actionApartmentadd(){
		return $this->render('apartmentadd');
	}

	public function actionApartmentedit(){
		return $this->render('apartmentedit');
	}

}
