<?php
	$json = file_get_contents('php://input'); $obj = json_decode($json);
	file_put_contents('webhook.log',"$json\n",FILE_APPEND);

	$url = 'https://forms.na1.netsuite.com/app/site/hosting/scriptlet.nl?script=551&deploy=1&compid=TSTDRV1709430&h=a99d7d736840d89cee5f';
	$data = array('type'=>'order', 'data'=>$json);

	$context = stream_context_create(array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'method'  => 'POST',
	        'content' => http_build_query($data)
		)
	));

	$result = file_get_contents($url, false, $context);
?>
