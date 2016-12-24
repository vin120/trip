<?php
	$this->title = yii::t('app','咨询中心');
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
    use yii\widgets\ActiveForm;

	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>


<!-- content start -->
<div class="r content" id="refundReason_content">
	<div class="topNav"><?php echo yii::t('app','咨询中心')?>&nbsp;&gt;&gt;&nbsp;<a href="<?php echo Url::toRoute(['index']);?>"><?php echo yii::t('app','信息发布')?></a></div>

	<div class="searchResult">
        <?php
    		$form = ActiveForm::begin([
    			'id'=>'message_form',
    			'action'=>'delete',
    			'method'=>'post',
    			'enableClientValidation'=>false,
    			'enableClientScript'=>false
    		]);
    	?>
		<table id="message_table">
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th><?php echo yii::t('app','序号')?></th>
                    <th><?php echo yii::t('app','封面')?></th>
					<th><?php echo yii::t('app','分类名')?></th>
					<th><?php echo yii::t('app','标题')?></th>
                    <th><?php echo yii::t('app','作者')?></th>
					<th><?php echo yii::t('app','发布时间')?></th>
					<th><?php echo yii::t('app','状态')?></th>
					<th><?php echo yii::t('app','操作')?></th>
				</tr>
			</thead>
			<tbody>
                <?php foreach($result as $key => $value):?>
				<tr>
					<td><input type="checkbox"></input></td>
					<td><?php echo $key+1 ?></td>
					<td><img src="<?php echo '/upload/images/'. $value['img_url']?>" align="absmiddle" width="90" height="50"/></td>
					<td><?php echo $value['name']?></td>
                    <td><?php echo $value['title']?></td>
					<td><?php echo $value['author']?></td>
					<td><?php echo $value['content']?></td>
                    <td><?php echo $value['status'] == 1 ?  yii::t('app','启用') :  yii::t('app','禁用')?></td>
					<td>
                        <a href="<?php echo Url::toRoute(['edit','id'=>$value['id']]);?>"><img src="<?=$baseUrl ?>images/write.png"></a>
						<a class="delete" style="cursor:pointer" id="<?php echo $value['id'];?>"><img src="<?=$baseUrl ?>images/delete.png"></a>
					</td>
				</tr>
            <?php endforeach;?>
			</tbody>
		</table>
        <?php
			ActiveForm::end();
		?>
		<p class="records">记录数:<em><?= $count ?></em></p>
		<div class="btn">
			<a href="<?php echo Url::toRoute(['message/add']);?>"><input type="button" value="添加"></input></a>
			<input type="button" value="批量删除"></input>
		</div>
	</div>
</div>
<!-- content end -->
