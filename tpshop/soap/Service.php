<?php
class Service {
    public function HelloWorld () {
		return "Hello";
    }
    public function Add ( $a, $b ) {
		return $a + $b;
    }
}
/* 生成wsdl文件注释此句 */
$server = new SoapServer ( 'Service.wsdl', array ( 'soap_version' => SOAP_1_2 ) );
$server->setClass ( "Service" ); //注册Service类的所有方法 
$server->handle (); //处理请求
?>