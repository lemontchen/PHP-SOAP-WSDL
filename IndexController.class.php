<?php

namespace App\Controller;
use Think\Controller;

/**
 * @author 
 */
class IndexController extends BaseController
{
    
    public function indexsoap(){
        $host = $_SERVER['HTTP_HOST'];
        $module = MODULE_NAME;
        $action = ACTION_NAME;
        $server="";
        $wsdl="";
        $soaparray=array("location"=>"http://".$host."/".$module."/".$action,"uri"=>$action.".html");
        $server= new \SoapServer(null,$soaparray);
        $server->setClass(get_class($this));
        $server->handle();
    }
    
    public  function Add($a,$b)
    {
        return $a * $b;
    }
    
    public function testsoap(){
        $soap = new \SoapClient(null,array( "location" => "http://www.cwi.com/Index/indexsoap","uri"=> "index.html", "style"    => SOAP_RPC, "use" => SOAP_ENCODED));
        echo $soap->Add(1,112);
        unset($soap);
    }
}
