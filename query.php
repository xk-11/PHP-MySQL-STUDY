<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="logstyle.css"/>
</head>
<body>

<?php
	
	$acol=array("编号","题名","主题","参与人员","拍摄地点","覆盖时间","服装","版本","画面内容","出版单位","格式","语种","声道","字幕","色彩","标","时长","日期","责任方式","储存位置");
	//print $acol;
	$result="result.php";
	$output_form = true;	
	if($output_form){
	?>
<div id="query">
<h3 >输入查询内容</h3>
<form method="post" action="<?php echo htmlspecialchars($result);?>">
<label for="题名">题名：</label>
<input type="text" name="col1"/></br>
<label for="主题">主题：</label>
<textarea rows="3"   maxlength="60" name="col2" overflow="hidden"></textarea></br>
<label for="参与人员">参与人员：</label>
<textarea rows="2" cols="19"  maxlength="30" name="col3" overflow="hidden"></textarea></br>
<label for="拍摄地点">拍摄地点：</label>
<textarea rows="2" cols="19"  maxlength="30" name="col4" overflow="hidden"></textarea></br>
<label for="覆盖时间">覆盖时间：</label>
<input type="text" name="col5"/></br>
<label for="题名">服装：</label>
<textarea rows="2" cols="19"  maxlength="60" name="col6" overflow="hidden"></textarea></br>
<label for="题名">版本：</label>
<input type="text" name="col7"/></br>
<label for="题名">画面内容：</label>
<textarea rows="2" cols="19"  maxlength="30" name="col8" overflow="hidden"></textarea></br>
<label for="题名">出版单位：</label>
<textarea rows="2" cols="19"  maxlength="30" name="col9" overflow="hidden"></textarea></br>
<label for="题名">格式：</label>
<select name="col10"/>
<option value="">...</option>
<option value="mov">mov</option>
<option value="mp4">mp4</option>
<option value="DVCpro">DVCpro</option>
<option value="H.264">H.264</option>
<option value="ProRes422HQ">ProRes422HQ</option>
<option value="MTS">MTS</option>
<option value="AVI">AVI</option>
<option value="mpeg">mpeg</option>
<option value="mpeg2">mpeg2</option>
<option value="M_jpeg">M_jpeg</option>
<option value="DV">DV</option>
</select></br>
<label for="题名">语种：</label>
<input type="text" name="col11"/></br>
<label for="题名">声道：</label>
<input type="text" name="col12"/></br>
<label for="题名">字幕：</label>
<input type="text" name="col13"/></br>
<label for="题名">色彩：</label>
<textarea rows="2" cols="19"  maxlength="30" name="col13" overflow="hidden"></textarea></br>
<label for="题名">台标：</label>
<input type="text" name="col15"/></br>
<label for="题名">时长：</label>
<input type="text" name="col16"/></br>
<label for="题名">日期：</label>
<input type="text" name="col17"/></br>
<label for="题名">责任方式：</label>
<textarea rows="2" cols="19"  maxlength="30" name="co18" overflow="hidden"></textarea></br>
<label for="题名">储存位置：</label>
<textarea rows="5" cols="19"  name="col19" overflow="hidden"></textarea></br>
<input class="noresize" type="submit" value="查询" name="submit"/>
<input class="noresize" type="submit" value="插入新数据" name="insert"/>
</form>

</div>

<?php
	}
	?>

</body>
</html>
