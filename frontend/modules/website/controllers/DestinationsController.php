<?php

namespace frontend\modules\website\controllers;

use Yii;
use yii\helpers\Url;
use frontend\modules\website\controllers\BaseController;
use yii\db\Query;

class DestinationsController extends BaseController
{
	
	public function actionIndex()
	{
		return $this->render('index');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function actionTest()
	{
		$sql = " SELECT t0.zone_id AS lvl_0_id,t0.zone_name AS lvl_0_name,
				t1.zone_id AS lvl_1_id,t1.zone_name AS lvl_1_name,
				t2.zone_id AS lvl_2_id,t2.zone_name AS lvl_2_name,
				t3.zone_id AS lvl_3_id,t3.zone_name AS lvl_3_name,
				t4.zone_id AS lvl_4_id,t4.zone_name AS lvl_4_name
				FROM zh_zone AS t0
				LEFT JOIN zh_zone AS t1 ON t1.parent_id = t0.zone_id
				LEFT JOIN zh_zone AS t2 ON t2.parent_id = t1.zone_id
				LEFT JOIN zh_zone AS t3 ON t3.parent_id = t2.zone_id
				LEFT JOIN zh_zone AS t4 ON t4.parent_id = t3.zone_id
				ORDER BY t0.zone_id,t1.zone_id,t2.zone_id,t3.zone_id,t4.zone_id";
		
		$stmt = Yii::$app->db->createCommand($sql)->query();
	
		
		
		$categories = array();
		$pool = array();
		while (($row = $stmt->read()) !== false) {
			if (in_array($row['lvl_0_id'], $pool) === false && isset($row['lvl_0_name'])) {
				$c = array('id' => $row['lvl_0_id'],
						'name' => $row['lvl_0_name'],
						'level' => 0);
				$categories[] = $c;
			}
			if (in_array($row['lvl_1_id'], $pool) === false && isset($row['lvl_1_name'])) {
				$c = array('id' => $row['lvl_1_id'],
						'name' => $row['lvl_1_name'],
						'level' => 1);
				$categories[] = $c;
			}
			if (in_array($row['lvl_2_id'], $pool) === false && isset($row['lvl_2_name'])) {
				$c = array('id' => $row['lvl_2_id'],
						'name' => $row['lvl_2_name'],
						'level' => 2);
				$categories[] = $c;
			}
			if (in_array($row['lvl_3_id'], $pool) === false && isset($row['lvl_3_name'])) {
				$c = array('id' => $row['lvl_3_id'],
						'name' => $row['lvl_3_name'],
						'level' => 3);
				$categories[] = $c;
			}
			if (in_array($row['lvl_4_id'], $pool) === false && isset($row['lvl_4_name'])) {
				$c = array('id' => $row['lvl_4_id'],
						'name' => $row['lvl_4_name'],
						'level' => 4);
				$categories[] = $c;
			}
			$pool[] = $row['lvl_0_id'];
			$pool[] = $row['lvl_1_id'];
			$pool[] = $row['lvl_2_id'];
			$pool[] = $row['lvl_3_id'];
			$pool[] = $row['lvl_4_id'];
		}
		
		
		

		echo '<ul>', "\n";
		$count = count($categories);
		if ($count == 1) {
			echo '<li>', $categories[0]['name'], '</li>', "\n";
		} else {
			$i = 0;
			while (isset($categories[$i])) {
				echo '<li>', $categories[$i]['name'];
				if ($i < $count - 1) {
					if ($categories[$i + 1]['level'] > $categories[$i]['level'])
					{
						echo '<ul>', "\n";
					}
					else {
						echo '</li>', "\n";
					}
					if ($categories[$i + 1]['level'] < $categories[$i]['level']) {
						echo str_repeat('</ul></li>' . "\n",$categories[$i]['level'] - $categories[$i + 1]['level']);
					}
				} else {
					echo '<li>', "\n";
					echo str_repeat('</ul></li>' . "\n", $categories[$i]['level']);
				}
				$i++;
			}
		}
		echo '</ul>', "\n";
	
	}
}
	