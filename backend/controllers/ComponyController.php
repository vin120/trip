<?php
namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use backend\components\Helper;

class ComponyController extends BaseController
{
	public $layout = "myloyout";

	public function actionIndex()
	{
		$sql = "SELECT telephone_number,phone_number,400_number,fax_number,address,email,QQ,introduct FROM zh_compony WHERE id= 1";
		$compony = Yii::$app->db->createCommand($sql)->queryOne();

		return $this->render('index',['compony'=>$compony,]);
	}


	public function actionEdit()
	{
        $sql = "SELECT telephone_number,phone_number,400_number,fax_number,address,email,QQ,introduct FROM zh_compony WHERE id= 1";
		$compony = Yii::$app->db->createCommand($sql)->queryOne();

        if($_POST) {

            $telephone_number = isset($_POST['telephone_number']) ? $_POST['telephone_number'] : '';
            $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
            $_400_number = isset($_POST['400_number']) ? $_POST['400_number'] : '';
            $fax_number = isset($_POST['fax_number']) ? $_POST['fax_number'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $QQ = isset($_POST['QQ']) ? $_POST['QQ'] : '';
            $introduct = isset($_POST['introduct']) ? $_POST['introduct'] : '';

            if($compony){
                $result = Yii::$app->db->createCommand()
                        ->update('zh_compony',['telephone_number'=>$telephone_number,'phone_number'=>$phone_number,'400_number'=>$_400_number,'fax_number'=>$fax_number,'address'=>$address,'email'=>$email,'QQ'=>$QQ,'introduct'=>$introduct],"id=1")
                        ->execute();
            } else {
                $result = Yii::$app->db->createCommand()
                        ->insert('zh_compony',['telephone_number'=>$telephone_number,'phone_number'=>$phone_number,'400_number'=>$_400_number,'fax_number'=>$fax_number,'address'=>$address,'email'=>$email,'QQ'=>$QQ,'introduct'=>$introduct])
                        ->execute();
            }

			if($result){
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}
        }

		return $this->render('edit',['compony'=>$compony]);
	}

}
