<?php
    $dbConfig = include('Common/Conf/db_local_config.php');
    $appConfig= array(


	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST'    =>    array('Home','Backstage'),
    'DEFAULT_MODULE'       =>    'Home',


    );
return array_merge($appConfig,$dbConfig);