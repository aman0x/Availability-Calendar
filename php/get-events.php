<?php
// Read and parse our events JSON file into an array of event data arrays.
$json = file_get_contents(dirname(__FILE__) . '/../json/events.json');
$input_arrays = json_decode($json, true);

// Accumulate an output array of event data arrays.
$output_arrays = array();
foreach ($input_arrays as $array) {
		switch($array['status']){
		case 'Completed' :
			$bg = 'green';
		break;
		case 'Cancelled' :
			$bg = 'red';
		break;
		default:
			$bg = 'orange';
		}
		$output_arrays[] = array('title'=>$array['name'].'_'.$array['place'],'start'=>$array['start'],'backgroundColor'=>$bg);
}
// Send JSON
echo json_encode($output_arrays);