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
        $result = $query->select(['a.*','b.name'])
                ->from('zh_message a')
                ->join('LEFT JOIN','zh_message_type b','a.type_id=b.id')
                ->limit(10)
                ->all();


        $query = new Query();
        $count = $query->select(['*'])
                ->from('zh_message')
                ->count();




    	return $this->render('index',['result'=>$result,'count'=>$count,'message'=>1]);
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
				$result=Helper::upload_file('image','./upload/images/'.date('Ymd',time()), 'image', $allow_size);
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
	public function actionEdit(){

		return $this->render('edit');

	}

}
