<?php
	header("Access-Control-Allow-Origin: *");
	header('Content-type: text/plain; charset=utf-8');
	
	
	if($_POST['smiles']){
		
		
		$array['index'] = $_POST['object'] ;
		if($_POST['object'] == 1){
			$array['greate'] = 21;
			$array['normal'] = 20;
			$array['bad'] = 19;
				
				
		}elseif($_POST['object'] == 2){
			$array['greate'] = 10;
			$array['normal'] = 9;
			$array['bad'] = 8;			
		}else{
			$array['greate'] = 3;
			$array['normal'] = 2;
			$array['bad'] = 1;
		}
		
		
		echo json_encode($array);
		
		
		
	}
	if($_POST['votes']){
		//we got from database some info by id 
		$all = [
				'1' => ['procent' => 15, 'votes'=> 15], 
				'2' => ['procent' => 35, 'votes'=> 35], 
				'3' => ['procent' => 50, 'votes'=> 50]
			];
		
		$other = 0;
		foreach($all as $key=>$item){
			if($key == $_POST['object']){
				$item['votes'] += 1;
				$all[$key]['votes'] += 1;
			}
			
			$other += $item['votes'];
			
		}
		
		foreach($all as $key=>$item){
			$all[$key]['procent'] = round($item['votes'] / ($other / 100), 2);

			
			
		}
		

		echo json_encode($all);
		
		
		
		
		
		
		
		
		
	}


?>