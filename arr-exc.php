<?php 
	header("Content-Type:text/html;charset=utf-8");

	//第一题
	$arr = [
		"詹鹿"=>"60",
		"海东"=>"80",
		"周折"=>"50",
		"亲情"=>"90",
		"云秀"=>"70",
		"胡兵"=>"65",
		"军博"=>"80",
		"福堂"=>"75"
	];
	//sort();
	sort($arr);
	//截取内容
	$Arr = array_slice($arr,1,count($arr)-2);
	//平均分
	$avg = array_sum($arr)/count($Arr);
	end($arr);
	$max = current($arr);
	reset($arr);
	$min = current($arr);
	foreach($arr as $key=>$val){
		if($val == $max){
			echo "最高分的评委：".$key;
		}else if($val == $min){
			echo "最低分的评委：".$key;
		}
	}

	echo "<hr/>";

	//第二题
	$a = ["dog","cat","bird"];

	$b = ["people","dog","mouse"];

	$c = [];
	foreach($a as $k=>$v){
		if(in_array($v,$b)){
			unset($v);
		}else{
			$c[] = $v;
		}
	}
	foreach($b as $k=>$v){
		$c[] = $v;
	}
	print_r($c);
	echo "<hr/>";

	//第三题
	$arrNum = range(0,9);
	$num = [];
	for($i=0;$i<count($arrNum);$i++){
		shuffle($arrNum);
		$num[] = $arrNum[0];
	}

	if(in_array(0,$num)){
		echo 1;
	}

	echo "<hr/>";
	//第四题
	$twoArr = [
		"詹鹿"=>[
			"语文"=>"20",
			"数学"=>"30",
			"英语"=>"40",
			"政治"=>"50",
			"历史"=>"60"
		],
		"海东"=>[
			"语文"=>"21",
			"数学"=>"32",
			"英语"=>"44",
			"政治"=>"52",
			"历史"=>"61"
		],
		"周折"=>[
			"语文"=>"25",
			"数学"=>"22",
			"英语"=>"32",
			"政治"=>"42",
			"历史"=>"72"
		],
		"文秀"=>[
			"语文"=>"21",
			"数学"=>"19",
			"英语"=>"24",
			"政治"=>"32",
			"历史"=>"57"
		],
		"亲情"=>[
			"语文"=>"30",
			"数学"=>"20",
			"英语"=>"12",
			"政治"=>"21",
			"历史"=>"37"
		],
		"胡斌"=>[
			"语文"=>"41",
			"数学"=>"23",
			"英语"=>"15",
			"政治"=>"22",
			"历史"=>"73"
		]
	];

?>


<table border="1" cellspacing="0" style="margin:0 auto;width:400px;height:300px;text-align: center;">
		<tr>
			<td>姓名</td>
			<td>语文</td>
			<td>数学</td>
			<td>英语</td>
			<td>政治</td>
			<td>历史</td>
			<td>总分</td>
			<td>平均分</td>
		</tr>
		<?php foreach($twoArr as $key=>$val){ ?>
		<tr>
			<td><?php echo $key; ?></td>
			<td><?php echo $val["语文"]; ?></td>
			<td><?php echo $val["数学"]; ?></td>
			<td><?php echo $val["英语"]; ?></td>
			<td><?php echo $val["政治"]; ?></td>
			<td><?php echo $val["历史"]; ?></td>
			<td><?php echo array_sum($val); ?></td>
			<td><?php echo array_sum($val)/count($val); ?></td>
		</tr>
		<?php } ?>
</table>
绍文煜   赖诗武   杨钊满  

方子豪   卢顺（接收能力比较差）

符芊芹（思想出现一定的情绪波动）

黎俊杰（思想不太端正）黄根华（接收能力太弱）

曹毅（缺乏自己动手的能力） 





