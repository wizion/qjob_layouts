<?php
ini_set('max_execution_time', 1800);
$homepage = file_get_contents('http://blog.qjob.hu/auth/full_lang_list.txt');
$json = json_decode($homepage);

//$urlencode = urlencode($value->name);
	
	$text1 = file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20191024T102254Z.8f39126293a3f0f9.32a267b8e4d54201dcb6bb7bd8b3f556b0c018f4&text=$urlencode&lang=en-ru&format=plain");
	//$text2 = file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20191024T102254Z.8f39126293a3f0f9.32a267b8e4d54201dcb6bb7bd8b3f556b0c018f4&text=$urlencode&lang=en-hu&format=plain");


	//$json1 = json_decode($text1)->text[0];
	//$json2 = json_decode($text2)->text[0];

echo "<pre>";
$data = "languages = [";
foreach($json as $key=>$value){
	
	
	$urlencode = urlencode($value->name);
		$text1 = file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20191024T102254Z.8f39126293a3f0f9.32a267b8e4d54201dcb6bb7bd8b3f556b0c018f4&text=$urlencode&lang=en-ru&format=plain");
	$json1 = json_decode($text1)->text[0];
	
	
	$text2 = file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20191024T102254Z.8f39126293a3f0f9.32a267b8e4d54201dcb6bb7bd8b3f556b0c018f4&text=$urlencode&lang=en-hu&format=plain");
	$json2 = json_decode($text2)->text[0];
	
	$data .= "
	{
		native_name: '$value->nativeName',
		name_ru: '$json1',
		name_en: '$value->name',
		name_hu: '$json2',
		code: '$key'
	},"; 
	
	
}
$data .="]";
//file_put_contents("format_lang.txt", $data);


?>