<?php
	$view_form = new \StdClass();
	foreach($view_schema as $input => $key){
		$view_form->{$input} =$input_blocks->{$key}; 
	}
	echo $this->element('edit_data_record_one',[
		'instance'=>$instance,
		'view_form'=>$view_form
	]);
?>
