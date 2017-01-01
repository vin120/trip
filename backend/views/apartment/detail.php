<?php
	$this->title = '公寓信息详情';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>


<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;<a href="#">公寓信息详情</a></div>
	
	<div class="searchResult">
	<style>
		div.div-box-float{
			overflow: hidden;
		}
		div.div-box-float .div-box-left-float{
			display: inline-block;
			width: 45%;
			float: left;
		}
		div.div-box-float .div-box-right-float{
			display: inline-block;
			width: 45%;
			float: left;
		}
		div.div-box-float .div-box-content{
			width: 100%;
			display: block;
			
		}
		div.div-box-float .div-box-content span.box-desc-title{
			float: left;
		}
		div.div-box-float .div-box-content .box-desc{
			 /*border: 1px solid #ccc;*/
		    float: left;
		    /*max-height: 120px;*/
		    overflow-y: auto;
		    width: 80%;
		}
		div.div-box-float .div-box-content label{
			display: inline-block;
			width: 90%;
		}
		div.div-box-float .div-box-content .box-attr-right{
			float: left;
		    max-height: 120px;
		    overflow-y: auto;
		    /*width: 80%;*/
		    margin-left: 20px;
		}
		div.div-box-float > div label{
			display: block;
			line-height: 35px;
		}
		div.div-box-float > div label span{
			width: 100px;
			display: inline-block;
			text-align: right;
		}
	</style>
		
	<h3>基本信息</h3>
	<div class="div-box-float">
		<div class="div-box-left-float">
			<label><span>公寓编号：</span><?php echo $basic['apartment_code'] ?></label>
			<label><span>公寓名称：</span><?php echo $basic['apartment_name'] ?></label>
			<label><span>地区名称：</span><?php echo $basic['zone_name'] ?></label>
			<label><span>星级：</span><?php echo $basic['star'] ?></label>
		</div>
		<div class="div-box-right-float">
			<label><span>价格：</span><?php echo $basic['total_price'] ?></label>
			<label><span>人均价格：</span><?php echo $basic['avg_price'] ?></label>
			<label><span>状态：</span><?php echo $basic['status']==1?"启用":"禁用" ?></label>
			<label><span>是否高亮：</span><?php echo $basic['highlight']==1?"是":"否" ?></label>
		</div>
	</div>
	<div class="div-box-float">
		<div class="div-box-content">
			<label>
				<span class="box-desc-title">简介：</span>
				<?php $desc_rep =  str_replace('src="','src="'.Yii::$app->params['img_url'],$basic['desc']); ?> 
				<div class="box-desc" style=" max-height: 500px;"><?php echo $desc_rep ?></div>
			</label>
		</div>
	</div>

	<p></p>
	<h3>设施&服务</h3>
	<div class="div-box-float">
		<div class="div-box-content">
			<?php foreach($service_attr as $k=>$row){ ?>
			<label>
				<span class="box-desc-title"><?php echo $row['service_name'] ?>：</span>
				<div class="box-attr-right">
					<?php $attr_str= '';
					foreach ($row['child'] as $key => $value) {
					  	$attr_str .= $value['name'].',';
					 } 
					 $attr_str = trim($attr_str,',');
					 echo $attr_str;
				 	?>
				</div>
			</label>
			<?php } ?>
		</div>
	</div>



	<h3>价格&条款</h3>
	<table>
		<thead>
			<tr>
				<th>序号</th>
				<th>类型名</th>
				<th>卧室数量</th>
				<th>价格</th>
				<th>最少入住天数</th>
				<th>税</th>
				<th>押金</th>
				<th>服务费</th>
				<th>备注</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($price as $k=>$row){?>
			<tr>
				<td><?php echo ($k+1) ?></td>
				<td><?php echo $row['type_name'] ?></td>
				<td><?php echo $row['room_count'] ?></td>
				<td><?php echo $row['price'] ?></td>
				<td><?php echo $row['day'] ?></td>
				<td><?php echo $row['tax'] ?></td>
				<td><?php echo $row['deposit'] ?></td>
				<td><?php echo $row['service_charge'] ?></td>
				<td><?php echo $row['remark'] ?></td>
			</tr>
			<?php }?>
		</tbody>

	</table>


	<div class="btn" style="margin-top:20px;">
		<a href="<?php echo Url::toRoute(['apartment/index']);?>"><input type="button" value="返回"></input></a>
	</div>


	</div>
</div>
<!-- content end -->


<script type="text/javascript">
window.onload = function(){


}
</script>