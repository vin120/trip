<?php
namespace backend\controllers;

use Yii;
use yii\db\Query;
use yii\helpers\Url;
use yii\web\Controller;
use backend\components\Helper;

class RecruitmentController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex() 
	{

        $query = new Query();
        $result = $query->select(['a.id','a.name as recruitment_name','a.number','a.time','a.author','a.status','b.name'])
                ->from('zh_recruitment a')
                ->join('LEFT JOIN','zh_recruitment_type b','a.type_id=b.id')
                ->limit(10)
                ->orderby('id desc')
                ->all();

        $query = new Query();
        $count = $query->select(['id'])
                ->from('zh_recruitment')
                ->count();

    	return $this->render('index',['result'=>$result,'count'=>$count,'recruitment_page'=>1]);
    }

    
	public function actionAdd()
	{
		if($_POST) {
			$type_id = isset($_POST['type_id']) ? $_POST['type_id'] : '';
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$number = isset($_POST['number']) ? $_POST['number'] : '';
			$introduct = isset($_POST['introduct']) ? $_POST['introduct'] : '';
			$author = isset($_POST['author']) ? $_POST['author'] : '';
			$status = isset($_POST['status']) ? $_POST['status'] : 1;
			 $time = date('Y-m-d H:i:s',time());
			
            $result = Yii::$app->db->createCommand()
                    ->insert('zh_recruitment',['type_id'=>$type_id,'name'=>$name,'number'=>$number,'introduct'=>$introduct,'author'=>$author,'status'=>$status,'time'=>$time])
                    ->execute();

			if($result){
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}
		}

		
		$query = new Query();
		$recruitment_type = $query->select(['id','name'])
		->from('zh_recruitment_type')
		->where(['status'=>1])
		->all();
		
		return $this->render('add',['recruitment_type'=>$recruitment_type]);
	}
	
	public function actionEdit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		
		if($_POST) {
			$type_id = isset($_POST['type_id']) ? $_POST['type_id'] : '';
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$number = isset($_POST['number']) ? $_POST['number'] : '';
			$introduct = isset($_POST['introduct']) ? $_POST['introduct'] : '';
			$author = isset($_POST['author']) ? $_POST['author'] : '';
			$status = isset($_POST['status']) ? $_POST['status'] : 1;
			 $time = date('Y-m-d H:i:s',time());
			
			 
            $result = Yii::$app->db->createCommand()
                    ->update('zh_recruitment',['type_id'=>$type_id,'name'=>$name,'number'=>$number,'introduct'=>$introduct,'author'=>$author,'status'=>$status,'time'=>$time],"id=$id")
                    ->execute();

			if($result){
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}
		}

		$query = new Query();
		$recruitment = $query->select(['id','type_id','name','number','introduct','author','status'])
			->from('zh_recruitment')
			->where(["id"=>$id])
			->one();
		
		
		$query = new Query();
		$recruitment_type = $query->select(['id','name'])
			->from('zh_recruitment_type')
			->where(['status'=>1])
			->all();
		
		return $this->render('edit',['recruitment'=>$recruitment,'recruitment_type'=>$recruitment_type]);
	}
	
	public function actionDelete()
	{
		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;
		
			$sql = " DELETE FROM `zh_recruitment` WHERE `id`= $id ";
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
		
			$sql = "DELETE FROM `zh_recruitment` WHERE id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();
		
			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
		}
	}
		
	//ajax获取分页
	public function actionGetrecruitmentpage()
	{
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

        $query = new Query();
        $result = $query->select(['a.id','a.name as recruitment_name','a.number','a.time','a.author','a.status','b.name'])
                ->from('zh_recruitment a')
                ->join('LEFT JOIN','zh_recruitment_type b','a.type_id=b.id')
                ->offset($pag)
                ->limit(10)
                ->orderby('id desc')
                ->all();

        if($result) {
            echo json_encode($result);
        } else {
            echo 0;
        }
	}
	
}