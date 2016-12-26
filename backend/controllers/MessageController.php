<?php
namespace backend\controllers;

use Yii;
use yii\db\Query;
use yii\helpers\Url;
use yii\web\Controller;
use backend\components\Helper;
class MessageController extends BaseController
{
	public $layout = "myloyout";

    public function actionIndex() {

        $query = new Query();
        $result = $query->select(['a.id','a.title','a.time','a.author','a.status','a.img_url','b.name'])
                ->from('zh_message a')
                ->join('LEFT JOIN','zh_message_type b','a.type_id=b.id')
                ->limit(10)
                ->orderby('id desc')
                ->all();


        $query = new Query();
        $count = $query->select(['id'])
                ->from('zh_message')
                ->count();


    	return $this->render('index',['result'=>$result,'count'=>$count,'message_page'=>1]);
    }


	public function actionAdd() {

        if($_POST) {

            $type = isset($_POST['type']) ? $_POST['type'] : '';
            $title = isset($_POST['title']) ? $_POST['title'] : '';
            $author = isset($_POST['author']) ? $_POST['author'] : '';
            $status = isset($_POST['status']) ? $_POST['status'] : '';
            $content = isset($_POST['content']) ? $_POST['content'] : '';
            $time = date('Y-m-d H:i:s',time());


            $allow_size = 3;
            if($_FILES['image']['error']!=4){
				$result=Helper::upload_file('image',"./".Yii::$app->params['img_url_prefix'].date('Ymd',time()), 'image', $allow_size);
				$photo=date('Ymd',time()).'/'.$result['filename'];
			}
			if(!isset($photo)){
				$photo="";
			}

            $result = Yii::$app->db->createCommand()
                    ->insert('zh_message',['type_id'=>$type,'title'=>$title,'author'=>$author,'status'=>$status,'content'=>$content,'img_url'=>$photo,'time'=>$time])->execute();

            if($result) {
                Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}

        }

        $query = new Query();
        $message_type = $query->select(['id','name'])
                    ->from('zh_message_type')
                    ->where(['status'=>1])
                    ->all();

		return $this->render('add',['message_type'=>$message_type]);

	}
	public function actionEdit() {

        $id = isset($_GET['id']) ? $_GET['id'] : '';

        if($_POST){
            $type = isset($_POST['type']) ? $_POST['type'] : '';
            $title = isset($_POST['title']) ? $_POST['title'] : '';
            $author = isset($_POST['author']) ? $_POST['author'] : '';
            $status = isset($_POST['status']) ? $_POST['status'] : '';
            $content = isset($_POST['content']) ? $_POST['content'] : '';
            $time = date('Y-m-d H:i:s',time());


            $allow_size = 3;
            if($_FILES['image']['error']!=4){
				$result=Helper::upload_file('image',"./".Yii::$app->params['img_url_prefix'].date('Ymd',time()), 'image', $allow_size);
				$photo=date('Ymd',time()).'/'.$result['filename'];
			}


			if(!isset($photo)){
                $query=new Query();
				$photo= $query->select(['img_url'])
                        ->from('zh_message')
                        ->where("id=$id")
                        ->one()['img_url'];
			}

            $result = Yii::$app->db->createCommand()
                    ->update('zh_message',['type_id'=>$type,'title'=>$title,'author'=>$author,'status'=>$status,'content'=>$content,'img_url'=>$photo,'time'=>$time],"id=$id")
            		->execute();

            if($result) {
                Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}

        }

        $query = new Query();
        $message = $query->select(['type_id','title','img_url','content','time','author','status'])
                    ->from('zh_message')
                    ->where(['id'=>$id])
                    ->one();

        $query = new Query();
        $message_type = $query->select(['id','name'])
                    ->from('zh_message_type')
                    ->where(['status'=>1])
                    ->all();

		return $this->render('edit',['message'=>$message,'message_type'=>$message_type]);
	}


    public function actionDelete()
    {
        //单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			$sql = " DELETE FROM `zh_message` WHERE `id`= $id ";
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

			$sql = "DELETE FROM `zh_message` WHERE id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
		}
    }

    //ajax获取分页
    public function actionGetmessagepage()
    {
        $pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;


        $query = new Query();
        $result = $query->select(['a.id','a.title','a.time','a.author','a.status','a.img_url','b.name'])
                ->from('zh_message a')
                ->join('LEFT JOIN','zh_message_type b','a.type_id=b.id')
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
