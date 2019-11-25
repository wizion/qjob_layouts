<?php
ini_set('max_execution_time', 1800);
$homepage = file_get_contents('http://blog.qjob.hu/auth/countries.json');

$json = json_decode($homepage);

$data = "countries = [";
echo "<pre>";
foreach($json as $key => $value){
	
	
	$urlencode = urlencode($value);
	
	$text1 = file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20191024T102254Z.8f39126293a3f0f9.32a267b8e4d54201dcb6bb7bd8b3f556b0c018f4&text=$urlencode&lang=en-ru&format=plain");
	$text2 = file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20191024T102254Z.8f39126293a3f0f9.32a267b8e4d54201dcb6bb7bd8b3f556b0c018f4&text=$urlencode&lang=en-hu&format=plain");
	
	$code = mb_strtolower($key);
	
	$json1 = json_decode($text1)->text[0];
	$json2 = json_decode($text2)->text[0];
	
	$data .= "
		{
			name_ru: '$json1',
			name_en: '$value',
			name_hu: '$json2',
			code '$code',
		},";
	
	
	
}
$data .= "]";


echo $data;
//file_put_contents("fomat_countries.txt", $data);


?>