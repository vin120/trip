<?php
	$this->title = '地区管理';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<script type="text/javascript">
	var verify_zone_name = "<?php echo Url::toRoute(['zone/verifyzonename']);?>";
</script>

<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;
		<a href="<?php echo Url::toRoute(['zone/index']);?>">地区管理</a>&nbsp;&gt;&gt;&nbsp;
		<a href="#">添加地区管理</a>
	</div>
		<?php
			$form = ActiveForm::begin([
				'action' => ['zoneadd'],
				'method'=>'post',
				'id'=>'zone_form',
				'options' => ['class' => 'zone_form'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
		<div class="searchResult">
		<input type="hidden" name="zone_id" value="" />
			<p>
				<span>地区名：</span>
				<input type="text" name="name" maxlength="12" />
				<em class="required_tips">*</em>
				
			</p>
			<p>
				<span>父级地区名：</span>
				<input type="hidden" name="parent_zone_id" value="" />
				<select name="zone_name">
					<option value="0">顶级</option>
					<?php foreach($parent_zone as $v){?>
					<option value="<?php echo $v['zone_id']?>"><?php echo $v['zone_name']?></option>
					<?php }?>

				</select>
				<select name="zone_name1" class="hidden">
					<option value="0">全部</option>
				</select>
				
			</p>

			<p>
				<span>状态：</span>
				<select name="state">
					<option value="1">启用</option>
					<option value="0">禁用</option>
				</select>
			</p>
			<p>
				<span>是否高亮：</span>
				<select name="is_highlight">
					<option value="1">是</option>
					<option value="0">否</option>
				</select>
			</p>

			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['zone/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){

	//地区改变()第一层
	$(document).on('change',"select[name='zone_name']",function(){
		$("form#zone_form select[name='zone_name1']").parents('p').find("em.error_tips").remove();
		// alert();return false;
		var zone_1 = $(this).val();
		if(zone_1 == 0){
			$("select[name='zone_name1']").addClass("hidden");
		}else{
			$.ajax({
			url:"<?php echo Url::toRoute(['zone/zonegetzonedata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_1,
			async:false,
			success:function(data){
				var str = '';
				$.each(data,function(k){
					str += '<option value="'+data[k]['zone_id']+'">'+data[k]['zone_name']+'</option>';
				});
				if(str!=''){
					str = '<option value="0">全部</option>'+str;
					$("select[name='zone_name1']").html('');
					$("select[name='zone_name1']").html(str);
					$("select[name='zone_name1']").removeClass('hidden');
				}else{
					$("select[name='zone_name1']").addClass("hidden");
				}
				
			}
			});

		}

	});
}
</script>