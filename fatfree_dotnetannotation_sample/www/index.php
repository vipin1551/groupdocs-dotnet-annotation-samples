<?php
require_once __DIR__.'/FatFree_Framework/lib/base.php';
F3::set('CACHE',FALSE);
F3::set('DEBUG',1);
F3::set('UI','templates/');
F3::set('IMPORTS','inc_samples/');
F3::route('GET /','home');
F3::route('GET|POST /view','controller.php'); 

	function home() {
        //sample code
        //$apiKey = 'cebff9b66782df9e519c1fc11c0a7ac3';
        //$clientId = '60bef2f950c9cd0e';
        //$fileId = '47d86daacf8bbcd66c1dab08791a459272dcfa48cbc5ed8f07ec297f43d21186';
        //$signer = new GroupDocsRequestSigner($apiKey);
        //$apiClient = new APIClient($signer); // PHP SDK V1.1
        //$antApi = new AntApi($apiClient);
        //$annotations = $antApi->ListAnnotations($clientId, $fileId);
        //echo var_dump($annotations);
		echo Template::serve('index.htm');
	}
    
F3::run();
