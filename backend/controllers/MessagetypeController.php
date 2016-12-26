<?php
namespace backend\controllers;

use Yii;
use yii\db\Query;
use yii\helpers\Url;
use yii\web\Controller;
use backend\components\Helper;

class MessagetypeController extends BaseController
{
	public $layout = "myloyout";

	public function actionIndex()
	{
        $query = new Query();
        $result = $query->select(['*'])
                ->from('zh_message_type')
                ->limit(10)
                ->all();


        $query  = new Query();
        $count = $query->select(['id'])
                ->from('zh_message_type')
                ->count();

		return $this->render('index',['result'=>$result,'count'=>$count,'message_type_page'=>1]);
	}

	public function actionAdd()
	{
		if($_POST){
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$status = isset($_POST['status']) ? $_POST['status'] : 1;

            $result = Yii::$app->db->createCommand()
                    ->insert('zh_message_type',['name'=>$name,'status'=>$status,])
                    ->execute();

			if($result){
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}
		}

		return $this->render('add');
	}


	public function actionEdit()
	{
		$id = $_GET['id'];

		if($_POST){
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$status = isset($_POST['status']) ? $_POST['status'] : 1;

            $result = Yii::$app->db->createCommand()
                    ->update('zh_message_type',['name'=>$name,'status'=>$status],"id=$id")
                    ->execute();

			if($result){
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}
		}

        $query = new Query();
        $story_type = $query->select(['*'])
                    ->from('zh_message_type')
                    ->where(['id'=>$id])
                    ->one();

		return $this->render('edit',['story_type' => $story_type]);
	}

	public function actionDelete()
	{
		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			$sql = " DELETE FROM `zh_message_type` WHERE `id`= $id ";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count > 0) {
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败');
			}
		}
		//多项删除
		if(isset($_POST['ids'])) {

			$ids = implode('\',\'', $_POST['ids']);

			$sql = "DELETE FROM `zh_message_type` WHERE id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
		}
	}

    //ajax获取分页
    public function actionGetmessagetypepage()
    {
        $pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

        $query = new Query();
        $result = $query->select(['*'])
                    ->from('zh_message_type')
                    ->offset($pag)
                    ->limit(10)
                    ->all();
        if($result) {
            echo json_encode($result);
        } else {
            echo 0;
        }
    }


}
