<?php

header ( "Content-Type: text/html; charset=utf-8" );
ini_set ( 'soap.wsdl_cache_enabled', "0" ); //关闭wsdl缓存

$client	 = new SoapClient ( 'http://localhost/soap/Service.php?wsdl' );

//print_r($client->__getFunctions());//查询函数
//print_r($client->__getTypes());
//echo $client->HelloWorld();
echo $client->Add ( 28, 2 );
//echo $client->__soapCall ( 'Add', array ( 28, 2 ) )//或这样调用

//echo $result;
?>